<script type="module">
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.mjs'

const swiper = new Swiper('.swiper', {
// Optional parameters
    effect: 'coverflow',
    loop: true,
    loopFillGroupWithBlank: true,
    slidesPerView: 3,
    slidesPerGroup: 1,
    grabCursor: true,
    centeredSlides: true,
    coverflowEffect: {
    rotate: 60,
    stretch: -200,
    depth: 500,
    modifier: 1,
    slideShadows: false,
    },


// If we need pagination
pagination: {
    el: '.swiper-pagination',
},

// Navigation arrows
navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
},
});
</script>

<!-- Slider main container -->
<div class="swiper">
<!-- Additional required wrapper -->
<div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide slide1"><p>Kawaneko</p></div>
    <div class="swiper-slide slide2"><p>Orenjiiro</p></div>
    <div class="swiper-slide slide3"><p>Pinku</p></div>
    <div class="swiper-slide slide4"><p>Tenshi</p></div>
    <div class="swiper-slide slide5"><p>Jaakuna</p></div>
</div>
<!-- If we need pagination 
<div class="swiper-pagination">    ...</div>  -->

<!-- If we need navigation buttons  
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div> -->

</div>
