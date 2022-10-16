const menuHamburger = document.querySelector('.menuHamburger');
const menuMobile = document.querySelector('.mobile-nav');

menuHamburger.addEventListener('click', function () {
    menuHamburger.classList.toggle('is-active');
    menuMobile.classList.toggle('is-active');
});


var prevScrollpos = window.pageYOffset;
const navbar = document.querySelector('.navcontainer');

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    navbar.style.height = "6vh";
  } else {
    navbar.style.height = "4vh";
  }
  prevScrollpos = currentScrollPos;
}