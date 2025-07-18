
  document.addEventListener('DOMContentLoaded', function () {
    new Splide('#hero-slider', {
      type: 'loop',
      perPage: 1,
      autoplay: true,
      interval: 5000,
      pauseOnHover: true,
      arrows: false,
      pagination: true,
    }).mount();
  });
document.addEventListener('DOMContentLoaded', function () {
  new Splide('#Testimonial', {
    type: 'loop',
    perPage: 3, // Default for desktop
    perMove: 1,
    gap: '20px',
    arrows: false,
    pagination: true,
    breakpoints: {
      768: {
        perPage: 1, // For mobile and tablets
      },
    },
  }).mount();
});


//counter
  function animateCounter(counter) {
    const target = +counter.getAttribute("data-target");
    const isPercent = counter.textContent.includes('%');
    const isPlus = counter.textContent.includes('+');
    const duration = 2000;
    const startTime = performance.now();

    function updateCounter(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      const value = Math.floor(progress * target);

      counter.textContent = isPercent ? `${value}%` : isPlus ? `${value}+` : value;

      if (progress < 1) {
        requestAnimationFrame(updateCounter);
      }
    }

    requestAnimationFrame(updateCounter);
  }

  function startCountersWhenVisible() {
    const counters = document.querySelectorAll('.stat-number');

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !entry.target.classList.contains("counted")) {
          entry.target.classList.add("counted");
          animateCounter(entry.target);
        }
      });
    }, { threshold: 0.6 });

    counters.forEach(counter => observer.observe(counter));
  }

  document.addEventListener('DOMContentLoaded', startCountersWhenVisible);


