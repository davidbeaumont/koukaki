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


// effet accéleration des fleurs (section story) au scroll
const flowers = document.querySelectorAll('.flower');

window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY;
  flowers.forEach((flower, index) => {
    const rotationSpeed = scrollPosition * 0.05; // Vous pouvez ajuster ce coefficient
    flower.style.animationDuration = `${rotationSpeed/3}s`;
  });
});

// effet accéleration des fleurs (section studio) au scroll
const rotateFlowers = document.querySelectorAll('.rotateFlower');

window.addEventListener('scroll', () => {
  const scrollPosition = window.scrollY;
  rotateFlowers.forEach((rotateFlower, index) => {
    const rotationSpeed = scrollPosition * 0.05; // Vous pouvez ajuster ce coefficient
    rotateFlower.style.animationDuration = `${rotationSpeed/22}s`;

  });
});



  
  