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

document.addEventListener("DOMContentLoaded", function () {
  const navLinks = document.querySelectorAll('.nav-link'); // All navbar links
  const currentLocation = window.location.pathname; // Get the current page URL

  navLinks.forEach(link => {
    // If the link's href matches the current page, add the 'active' class to it
    if (link.getAttribute('href') === currentLocation) {
      link.classList.add('active'); // Add the 'active' class to the link
    } else {
      link.classList.remove('active'); // Remove the 'active' class from others
    }
  });
});
