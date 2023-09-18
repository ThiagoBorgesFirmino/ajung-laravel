$(document).ready(function(){
    var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    slidesPerView: 3,
    // centeredSlides: true,
    // loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    });
})

