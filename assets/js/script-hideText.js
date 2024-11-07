const texto = document.querySelector('.textConteiner');
const elemento = document.querySelector('.navbar-toggler');

function ocultarTexto(){
    if (!elemento.classList.contains('collapsed')){
        texto.style.visibility = 'hidden';
    }
    else {
        setTimeout(mostrar, 220)
    }
};

function mostrar(){
    texto.style.visibility = 'visible';
}