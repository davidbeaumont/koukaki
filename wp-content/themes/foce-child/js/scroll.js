const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const square = entry.target.querySelector('img');
  
      if (entry.isIntersecting) {
        square.classList.add('animation-fade-in');
        return; // if we added the class, exit the function
      }
  
      // We're not intersecting, so remove the class!
      square.classList.remove('animation-fade-in');
    });
  });
  
  observer.observe(document.querySelector('.banner'));