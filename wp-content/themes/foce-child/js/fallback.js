 // Récupérer l'élément vidéo et l'image de remplacement
 const video = document.getElementById('background-video');
 const videoPlaceholder = document.querySelector('.fallback');

// Ajouter la classe 'fallback' à l'image si la largeur correspond à une tablette ou un mobile
function checkMobileAndTablet() {
    const isMobileOrTablet = window.matchMedia('(max-width: 1040px)').matches;
    if (isMobileOrTablet) {
      videoPlaceholder.classList.add('fallback');
    }
  }
  
  // Vérifier la taille de l'écran lors du chargement initial et lors du redimensionnement de la fenêtre
  window.addEventListener('load', checkMobileAndTablet);
  window.addEventListener('resize', checkMobileAndTablet);

 // Masquer l'image de remplacement et afficher la vidéo une fois qu'elle est chargée
 video.addEventListener('loadeddata', function() {
   videoPlaceholder.classList.remove('fallback');
 });