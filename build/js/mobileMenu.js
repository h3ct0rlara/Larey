document.addEventListener('DOMContentLoaded', function() {

    eventListeners();
});


function eventListeners() {

    const mobileMenu = document.querySelector('.menu-hamburgesa');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive () {
    const menu = document.querySelector('.lista-hamburgesa');

    if(menu.classList.contains('mostrar')){
        menu.classList.remove('mostrar')
    } else {
        menu.classList.add('mostrar')
    }

    // menu.classList.toggle('mostrar');
}