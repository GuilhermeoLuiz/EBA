const audio = document.getElementById('meuAudio');
/*const btnPlay = document.getElementById('btnPlay');

btnPlay.addEventListener('click', () => {
  audio.play();
  console.log("Teste de Audio");
});*/

const links = document.querySelectorAll('.menu-principal a');

// Adiciona o evento de clique a cada tag <a>
links.forEach(link => {
    link.addEventListener('mouseover', () => {
        audio.play();
        console.log("Teste de Audio");
    });
});