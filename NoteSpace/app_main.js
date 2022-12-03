const menuHamburger = document.querySelector('.menuHamburger');
const menuMobile = document.querySelector('.mobile-nav');

menuHamburger.addEventListener('click', function () {
    menuHamburger.classList.toggle('is-active');
    menuMobile.classList.toggle('is-active');
});