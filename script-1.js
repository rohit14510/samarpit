// const menuIcon = document.querySelector('.menu-icon');
// const navLinks = document.querySelector('.nav-links');

// menuIcon.addEventListener('click', () => {
//   const isExpanded = menuIcon.getAttribute('aria-expanded') === 'true';
//   menuIcon.setAttribute('aria-expanded', !isExpanded);
//   navLinks.classList.toggle('active');
// });

// testimonials slide

document.addEventListener("DOMContentLoaded", function () {
  new Splide("#testimonials_splide", {
    type: "loop",
    perPage: 2, // Default for desktop
    autoplay: true,
    breakpoints: {
      768: {
        perPage: 1, // For screens 768px or smaller
      },
    },
  }).mount();
});