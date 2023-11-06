var $ = jQuery;

var swiper = new Swiper(".mySwiper", {
    speed: 600,
    parallax: true,
    // autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false
    //   },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });



$(document).ready(function(){
    let currentUrl = window.location.href;
    $('.categoryItem').each(function() {
        let categoryUrl = $(this).attr('href');
        if (currentUrl === categoryUrl) {
            $(this).addClass('activeCategory');
            return false;
        }
    });
});