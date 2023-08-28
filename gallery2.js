document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.querySelector('.gallery');
    let rotation = 0;

    document.addEventListener('keydown', function(event) {
        if (event.key === 'ArrowLeft') {
            rotation += 1;
        } else if (event.key === 'ArrowRight') {
            rotation -= 1;
        }

        gallery.style.transform = `rotateY(${rotation}deg)`;
    });
});
