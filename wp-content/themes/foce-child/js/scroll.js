// effet scale sur les titres

const observerTitle = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    const scales = entry.target.querySelectorAll('h2');

    if (entry.isIntersecting) {
      scales.forEach(scale => {
        scale.classList.add('animation-scale');
      });
      return;
    }

    scales.forEach(scale => {
      scale.classList.remove('animation-scale');
    });
  });
});

const elementsToObserve = document.querySelectorAll('.container__h2');
elementsToObserve.forEach(element => {
  observerTitle.observe(element);
});



  // effet fade-up au scroll

  const threshold = .1
  const options = {
    root: null,
    rootMargin: '0px',
    threshold
  }
  
  const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry) {
      if (entry.intersectionRatio > threshold) {
        entry.target.classList.add('reveal-loaded')
        observer.unobserve(entry.target)
      }
    })
  }
  
  window.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver(handleIntersect, options)
    const targets = document.querySelectorAll('.reveal')
    targets.forEach(function (target) {
      observer.observe(target)
    })
  })


  // effet accéleration des fleurs au scroll
const flower = document.querySelector('.flower');

window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY;
  const rotationSpeed = scrollPosition * 0.1; // Vous pouvez ajuster ce coefficient

  flower.style.animationDuration = `${5 - rotationSpeed}s`;
});

  
  