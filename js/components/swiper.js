$(window).load(function(){
    // Swiper Clients
    var swiper = new Swiper('.swiper-clients', {
        slidesPerView: 5,
        spaceBetween: 50,
        loop: true,
        autoplay: 2500,
        speed: 800,
        autoplayDisableOnInteraction: false,
        breakpoints: {
            1024: {
                slidesPerView: 4,
                spaceBetween: 50
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            600: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 0
            }
        }
    });

    // Swiper Clients
    var swiper = new Swiper('.swiper-testimonials', {
        speed: 2000,
        autoplay: 10000,
        slidesPerView: 1,
        loop: true,
    });


    var swiper = new Swiper('.swiper-container', {
      direction: 'vertical',
      spaceBetween: 0,
      autoHeight:true,
      calculateHeight:true,
      loop: true,
      autoplay: 2500,
      speed: 800
    });
 
     
 








});