document.addEventListener("DOMContentLoaded", function () {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 15,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        grabCursor: true,
        keyboard: {
            enabled: true,
        },
    });
}); 
