document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.querySelector('.gallery');
    let rotation = 0;
    let isImageClicked = false; // Variável para verificar se a imagem foi clicada

    const rotateGallery = () => {
        if (!isImageClicked) {
            gallery.style.transition = 'transform 0.5s ease-in-out';
            gallery.style.transform = `translateX(200px) rotateY(${rotation}deg)`;
        }
    };

    const images = document.querySelectorAll('.gallery img');

    images.forEach(image => {
        image.addEventListener('click', function() {
            if (!this.classList.contains('enlarged')) {
                this.classList.add('enlarged');
                isImageClicked = true; // Define a variável como true quando a imagem é clicada
            } else {
                this.classList.remove('enlarged');
                isImageClicked = false; // Define a variável como false quando a imagem não está mais clicada
            }
        });
    });

    const rotateLeft = () => {
        rotation += 60;
        rotateGallery();
    };

    const rotateRight = () => {
        rotation -= 60;
        rotateGallery();
    };

    document.addEventListener('keydown', function(event) {
        if (event.key === 'ArrowLeft') {
            rotateLeft();
        } else if (event.key === 'ArrowRight') {
            rotateRight();
        }
    });

    document.addEventListener('click', function(event) {
        const screenWidth = window.innerWidth;
        const clickX = event.clientX;

        // Verifique se o clique ocorreu na parte esquerda ou direita da tela e se a imagem não foi clicada
        if (clickX < screenWidth / 2 && !isImageClicked) {
            rotateLeft();
        } else if (!isImageClicked) {
            rotateRight();
        }
    });
});
