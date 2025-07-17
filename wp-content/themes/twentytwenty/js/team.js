jQuery(document).ready(function($) {
    var slider = new Swiper('.cs-slider_container', {
        autoplay: false,
        loop: true,
        speed: 600,
        centeredSlides: false,
        slidesPerView: 1,
        spaceBetween: 24,
        navigation: {
            nextEl: '.cs-right_arrow',
            prevEl: '.cs-left_arrow',
        },
        pagination: {
            el: '.cs-pagination.cs-style1',
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            576: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            992: {
                slidesPerView: 4,
            },
        },
    });
});