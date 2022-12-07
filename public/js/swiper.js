

const swiper = new Swiper('.swiper', {
  // Optional parameters
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },

});

var swiperPrev = document.querySelector('.swiper-button-prev');
var swiperNext = document.querySelector('.swiper-button-next');

swiperPrev.style.display = 'none';
swiperNext.style.display = 'none';