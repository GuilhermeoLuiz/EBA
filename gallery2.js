document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.querySelector('.gallery');
    let rotation = 0;

    const rotateGallery = () => {
        gallery.style.transition = 'transform 0.5s ease-in-out';
        gallery.style.transform = `translateX(200px) rotateY(${rotation}deg)`; // Mantém o translateX
    };

    document.addEventListener('keydown', function(event) {
        if (event.key === 'ArrowLeft') {
            rotation += 60;
        } else if (event.key === 'ArrowRight') {
            rotation -= 60;
        }

        rotateGallery();
    });
});
