function ventana(){
    swal({
        title: "Un momento!",
        text: "Para ver informacion de las materia debes inicar sesion!",
        icon: "warning",
        button: "Ok!",
    });
}


const button = document.querySelector('#buttonMenu');
const menu = document.querySelector('#menuSplit');

button.addEventListener('click', () => { 
    menu.classList.toggle('hidden')
})

const buttonMore = document.querySelector('#buttonMore');
const menuMore = document.querySelector('#menuMore');

buttonMore.addEventListener('click', () => { 
    menuMore.classList.toggle('hidden')
})