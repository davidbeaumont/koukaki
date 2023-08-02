// effet sur le nuage

const observerCloud = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const translate = entry.target.querySelector('.blue-cloud');
  
      if (entry.isIntersecting) {
        translate.classList.add('animation-translate');
        return; // if we added the class, exit the function
      }
  
      // We're not intersecting, so remove the class!
      translate.classList.remove('animation-translate');
    });
  });
  
  observerCloud.observe(document.querySelector('.watch'));
