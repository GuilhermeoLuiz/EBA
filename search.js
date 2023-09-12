var lupa = document.querySelector('.lupa');
var form = document.getElementById("searchform");

lupa.addEventListener('click', function(event) {
    console.log("teste32");
    form.style.display = "flex";
    event.stopPropagation(); // Impede a propagação do clique para a tela
});

form.addEventListener('click', function(event) {
    event.stopPropagation(); // Impede a propagação do clique para a tela
});

document.addEventListener('click', function(event) {
    if (event.target !== lupa && event.target !== form) {
        form.style.display = "none";
    }
});
