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

const cookiespopup = document.querySelector(".cookiespopup");
const cookiesaccept = document.querySelector(".cookiespopup-buttons button");
const cookiespopup_mobile = document.querySelector(".cookiespopup-mobile");
const cookiesaccept_mobile = document.querySelector(".cookiespopup-buttons-mobile button");

cookiesaccept.onclick = ()=>
{
  console.log("Cookies agreement accepted");
  document.cookie = "CookiesAgreement=true; max-age="+60*60*24*365;
  if(document.cookie)
  {
    cookiespopup.classList.add("hide");
    cookiespopup_mobile.classList.add("hide");
  }
  else
  {
    alert("Nie możemy obsłużyć plików cookies na Twojej przeglądarce. Sprawdź jej ustawienia, a następnie spróbuj ponownie.");
  }
}


cookiesaccept_mobile.onclick = ()=>
{
  console.log("Cookies agreement accepted");
  document.cookie = "CookiesAgreement=true; max-age="+60*60*24*365;
  if(document.cookie)
  {
    cookiespopup.classList.add("hide");
    cookiespopup_mobile.classList.add("hide");
  }
  else
  {
    alert("Nie możemy obsłużyć plików cookies na Twojej przeglądarce. Sprawdź jej ustawienia, a następnie spróbuj ponownie.");
  }
}

let cookiescheck = document.cookie.indexOf("CookiesAgreement=true");
cookiescheck != 0 ? cookiespopup.classList.remove("hide") : cookiespopup.classList.add("hide");
cookiescheck != 0 ? cookiespopup_mobile.classList.remove("hide") : cookiespopup_mobile.classList.add("hide");