// effet sur les titres

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



// effet sur le nuage

const observerCloud = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const translate = entry.target.querySelector('.blue-cloud');
  
      if (entry.isIntersecting) {
        translate.classList.add('animation-translate');
        return;
      }
  
      translate.classList.remove('animation-translate');
    });
  });
  
  observerCloud.observe(document.querySelector('.watch'));

  
  // effet fade-up sur la section oscars

const observerOscars = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    const fadeUp = entry.target.querySelector('.oscars');

    if (entry.isIntersecting) {
      fadeUp.classList.add('animation-fade-up');
      return;
    }

    fadeUp.classList.remove('animation-fade-up');
  });
});

observerOscars.observe(document.querySelector('.site-footer'));


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
        entry.target.classList.remove('reveal')
        observer.unobserve(entry.target)
      }
    })
  }
  
  document.documentElement.classList.add('reveal-loaded')
  
  window.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver(handleIntersect, options)
    const targets = document.querySelectorAll('.reveal')
    targets.forEach(function (target) {
      observer.observe(target)
    })
  })