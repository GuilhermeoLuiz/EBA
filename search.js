var lupa = document.querySelector('.lupa');
var form = document.getElementById("searchform");
var title = document.querySelector('.texto');

lupa.addEventListener('click', function(event) {
    console.log("teste32");
    form.style.display = "flex";
    if (window.innerWidth < 768) {
        title.style.display = 'none';
    }
    event.stopPropagation(); // Impede a propagação do clique para a tela
});

form.addEventListener('click', function(event) {
    event.stopPropagation(); // Impede a propagação do clique para a tela
});

document.addEventListener('click', function(event) {
    if (event.target !== lupa && event.target !== form) {
        title.style.display = 'initial';
        form.style.display = "none";
    }
});
