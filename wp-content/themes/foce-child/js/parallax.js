// Fonction pour ajuster la position du fond vidéo et de l'image en fonction du défilement
function parallaxScroll() {
    const banner = document.querySelector('.banner');
    const video = document.getElementById('background-video');
      
    const scrollPosition = window.scrollY;
    const bannerPosition = banner.offsetTop;
    const speed = 0.5; // Réglage de la vitesse de défilement
  
    // Déplacement vertical du fond vidéo
    const videoOffset = -(scrollPosition - bannerPosition) * (speed * 0.8);
    video.style.transform = `translateY(${videoOffset}px)`;  
  }
  
  // Écouter l'événement de défilement pour activer l'effet de parallax
  window.addEventListener('scroll', parallaxScroll);



// Fonction parallax sur nuage bleu
function parallaxScrollNuage() {
  const nuage = document.querySelector('.blue-cloud');
    
  const scrollPosition = window.scrollY;
  const nuagePosition = nuage.offsetTop;
  const speed = 0.5; // Réglage de la vitesse de défilement

  // Déplacement horizontal du nuage
  const nuageOffset = -(scrollPosition - nuagePosition) * (speed * 0.8);
  nuage.style.transform = `translateX(${nuageOffset}px)`;  
}

// Écouter l'événement de défilement pour activer l'effet de parallax
window.addEventListener('scroll', parallaxScrollNuage);




/*
// Fonction parallax sur fleur avec animation de rotation
function parallaxScrollFleur() {
  const fleurs = document.querySelectorAll('.flower');

  const scrollPosition = window.scrollY;
  const rotationSpeedSlow = 0.2; // Vitesse de rotation lente

  fleurs.forEach((fleur) => {
      const fleurPosition = fleur.offsetTop;

      // Rotation de la fleur avec accélération en fonction du scroll
      const rotationSpeed = rotationSpeedSlow + (scrollPosition - fleurPosition) * 0.001;

      // Appliquer la classe de rotation en fonction de la position de défilement
      if (scrollPosition > fleurPosition) {
          fleur.style.animationDuration = '2s';
      } 

      fleur.style.transition = `transform ${rotationSpeed}s linear`;
  });
}

// Écouter l'événement de défilement pour activer l'effet de parallax
window.addEventListener('scroll', parallaxScrollFleur);
*/