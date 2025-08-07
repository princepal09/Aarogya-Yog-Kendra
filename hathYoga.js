const menuOpenBtn = document.getElementById('menu-open-button');
const menuCloseBtn = document.getElementById('menu-close-button');

menuOpenBtn.addEventListener('click', () => {
  document.body.classList.add('show-mobile-menu');
  document.documentElement.classList.add('show-mobile-menu');
});

menuCloseBtn.addEventListener('click', () => {
  document.body.classList.remove('show-mobile-menu');
  document.documentElement.classList.remove('show-mobile-menu'); 
});