//gestion ouverture menu

const burgerMenu = document.querySelector('.burger-menu');
const menuItems = document.querySelector('.menu-items');
const bar1=document.querySelector('.bar1');
const bar2=document.querySelector('.bar2');
const bar3=document.querySelector('.bar3');

const crossItems=document.querySelector('.cross');
let compteur=true;


burgerMenu.addEventListener('click', () => {
    if (compteur) {
        menuItems.classList.add('show-menu');
        bar1.classList.add('bar--hide');
        bar2.classList.add('bar--hide');
        bar3.classList.add('bar--hide');
        crossItems.classList.add('cross--show');
        compteur=false;

    }else{

        menuItems.classList.remove('show-menu');
        bar1.classList.remove('bar--hide');
        bar2.classList.remove('bar--hide');
        bar3.classList.remove('bar--hide');
        crossItems.classList.remove('cross--show');
        compteur=true;
    }
});
