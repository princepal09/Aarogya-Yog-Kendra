
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

document.querySelectorAll('.gallery-grid-container img').forEach(img => {
    img.onload = function() {
      img.classList.add('loaded');  // Add the 'loaded' class once image is fully loaded
    };
  });