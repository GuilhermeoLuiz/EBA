var icon = document.querySelector('.menu-icon');
document.querySelector('.menu-icon').addEventListener('click', function() {
        if(icon.textContent == "X"){
                document.querySelector('.menu-principal').style.left = '-250px'; 
                icon.textContent = ":::";
        }else{
                if(window.innerWidth <= 768){
                        document.querySelector('.menu-principal').style.left = '0%';
                }else{
                        document.querySelector('.menu-principal').style.left = '20%';
                }
               icon.textContent = "X";
        }
});

document.querySelector('.menu-principal').addEventListener('click', function() {
        document.querySelector('.menu-principal').style.left = '-250px'; 
});

