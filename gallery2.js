document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.querySelector('.gallery');
    let rotation = 0;
    let isDragging = false;
    let isImageClicked = false;
    let startX = 0;
    let startY = 0;

    const rotateGallery = () => {
        if (!isImageClicked) {
            gallery.style.transition = 'transform 0.5s ease-in-out';
            gallery.style.transform = `translateX(150px) rotateY(${rotation}deg)`;
        }
    };

    const startDrag = event => {
        if (isImageClicked) return;
        isDragging = true;
        startX = event.clientX;
        startY = event.clientY;
    };

    const drag = event => {
        if (!isDragging) return;
        const deltaX = event.clientX - startX;
        rotation += deltaX * 0.5;
        startX = event.clientX;
        rotateGallery();
    };

    const endDrag = () => {
        isDragging = false;
    };

    const toggleEnlarged = image => {
        if (!image.classList.contains('enlarged')) {
            image.classList.add('enlarged');
            isImageClicked = true;
        } else {
            image.classList.remove('enlarged');
            isImageClicked = false;
        }
    };

    const images = document.querySelectorAll('.gallery img');

    images.forEach(image => {
        image.addEventListener('click', function() {
            toggleEnlarged(this);
        });
    });

    gallery.addEventListener('mousedown', startDrag);
    gallery.addEventListener('mousemove', drag);
    gallery.addEventListener('mouseup', endDrag);
    gallery.addEventListener('mouseleave', endDrag);

    document.addEventListener('keydown', function(event) {
        if (event.key === 'ArrowLeft') {
            rotation += 15;
        } else if (event.key === 'ArrowRight') {
            rotation -= 15;
        }

        rotateGallery();
    });

    document.addEventListener('click', function(event) {
        const screenWidth = window.innerWidth;
        const clickX = event.clientX;

        if (clickX < screenWidth / 2 && !isDragging && !isImageClicked) {
            rotation += 15;
        } else if (!isDragging && !isImageClicked) {
            rotation -= 15;
        }

        rotateGallery();
    });
});
