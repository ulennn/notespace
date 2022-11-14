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

const items = document.querySelectorAll('.faqaccordion-item button');

function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');

  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }

  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}

items.forEach((item) => item.addEventListener('click', toggleAccordion));
