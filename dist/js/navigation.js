var menuTrigger = document.querySelector('.js-header__trigger');

// Listen for click on menu
menuTrigger.addEventListener('click', toggleMenu);


function toggleMenu() {
  var menuGroup = document.querySelector('.js-header__mobile-menu');
  menuGroup.classList.toggle('is-open');

}



