$(document).ready(function() {
    //initialize swiper when document ready
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 1000,
        loop: true,
        mousewheel: { invert: true },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        fadeEffect: {
            crossFade: true
        }
    })
});