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
  const slides = document.querySelectorAll(".test-item");
  const dotsContainer = document.getElementById("testimonialDots");
  let currentSlide = 0;

  // Create dots
  slides.forEach((_, i) => {
    const dot = document.createElement("div");
    dot.classList.add("testimonial-dot");
    dot.addEventListener("click", () => {
      currentSlide = i;
      showSlide(currentSlide);
    });
    dotsContainer.appendChild(dot);
  });

  const dots = document.querySelectorAll(".testimonial-dot");

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.remove("active");
    });
    slides[index].classList.add("active");

    dots.forEach((dot, i) => {
      dot.classList.remove("active");
    });
    dots[index].classList.add("active");
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
  }

  showSlide(currentSlide); // Initial load
  setInterval(nextSlide, 5000); // Auto-slide every 3 sec
});

document.addEventListener('DOMContentLoaded', () => {
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate');
      }
    });
  });

  document.querySelectorAll('.slide-in-top').forEach(el => {
    observer.observe(el);
  });

  // Image Load Check
  const img = document.querySelector('.right-section-image');
  if (img) {
    if (img.complete) {
      img.classList.add('loaded');
    } else {
      img.onload = () => img.classList.add('loaded');
    }
  }
});

