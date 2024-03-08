document.addEventListener('DOMContentLoaded', function () {

    new Swiper("#hero_slider", {
        effect: "fade",
       
        lazyLoading: true,
        loop: true
    });

    var swiper = new Swiper('#swiper-partners', {
        slidesPerView: 6, 
        spaceBetween: 10, 
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
        },
        // autoplay: {
        //     delay: 4000,
        // },
        breakpoints: {
            0: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1400: {
                slidesPerView: 6,
                spaceBetween: 30,
            },
        }
    });


    var mySwiper = new Swiper('#blog_slider', {
        loop: true,
        autoplay: {
            delay: 5000,
        },
        navigation: false,
        slidesPerView: 1,
        spaceBetween: 0,
       
    });



    var mySwiper = new Swiper('#products_slider', {
        slidesPerView: 6,
        spaceBetween: 20,
        breakpoints: {
            0: {
                slidesPerView: 1.3,
                spaceBetween: 2,
            },
            325: {
                slidesPerView: 1.5,
                spaceBetween: 5,
            },
            426: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            540: {
                slidesPerView: 2.6,
                spaceBetween: 5,
            },
            640: {
                slidesPerView: 3.3,

            },

        }
    });

    var swiper = new Swiper('#categories_slider', {
        slidesPerView: 6,
        spaceBetween: 20,
        breakpoints: {
            0: {
                slidesPerView: 1.3,
                spaceBetween: 2,
            },
            325: {
                slidesPerView: 1.6,
                spaceBetween: 5,
            },
            426: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            540: {
                slidesPerView: 2.6,
                spaceBetween: 5,
            },
            640: {
                slidesPerView: 3.3,

            },

        }
    });




});





