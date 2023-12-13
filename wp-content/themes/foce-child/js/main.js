document.addEventListener("DOMContentLoaded", function() {
  const burgerMenu = document.querySelector('.burger-menu');
  const fullscreenMenu = document.querySelector('.fullscreen-menu');

  burgerMenu.addEventListener('click', function() {
    burgerMenu.classList.toggle('change');
    fullscreenMenu.style.display = fullscreenMenu.style.display === 'flex' ? 'none' : 'flex';
  });
  
  fullscreenMenu.addEventListener('click', function() {
    burgerMenu.classList.toggle('change'); 
    fullscreenMenu.style.display = 'none';
  });
  
  console.log("burger menu ok !!!");
});
  

// Attend que le DOM soit complètement chargé
document.addEventListener("DOMContentLoaded", function () {
    // Initialise Skrollr
    var s = skrollr.init();
    console.log('init skrollr ok')
});

// Initialise Swiper
document.addEventListener("DOMContentLoaded", function () {
    const personnageSwiper = new Swiper('.swiper-container', {
        slidesPerView: '3', 
        grabCursor: true,
        centeredSlides: true,
        spaceBetween: 60,
        loop: true,
        effect: 'coverflow',
        coverflowEffect: {
            depth: 100,
            modifier: 1,
            rotate: 0,
            scale: 1,
            slideShadows: false,
            stretch: 0,
        },
     
});
    console.log('SWIPER INIT OK !!!');
});






