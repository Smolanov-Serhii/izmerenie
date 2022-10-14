$(document).ready(function () {

//
//     var $menu = $(".header");
//     $(window).scroll(function () {
//         if ($(this).scrollTop() > 100 && $menu.hasClass("default")) {
//             $menu.removeClass("default").addClass("moved");
//         } else if ($(this).scrollTop() <= 100 && $menu.hasClass("moved")) {
//             $menu.removeClass("moved").addClass("default");
//         }
//     });
//
//
//     AOS.init({
//         // Global settings:
//         disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
//         startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
//         initClassName: 'aos-init', // class applied after initialization
//         animatedClassName: 'aos-animate', // class applied on animation
//         useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
//         disableMutationObserver: false, // disables automatic mutations' detections (advanced)
//         debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
//         throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
//         // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
//         offset: 120, // offset (in px) from the original trigger point
//         delay: 0, // values from 0 to 3000, with step 50ms
//         duration: 800, // values from 0 to 3000, with step 50ms
//         easing: 'ease', // default easing for AOS animations
//         once: true, // whether animation should happen only once - while scrolling down
//         mirror: false, // whether elements should animate out while scrolling past them
//         anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
//
//     });
//
//
//     if ($('.faq').length) {
//         $(".faq__item-header").click(function () {
//             $(this).closest('.faq__item').toggleClass('active');
//             $(this).closest('.faq__item').find('.faq__item-content').fadeToggle(300);
//         });
//     }
//
//     $(".header__mobile-burger").click(function () {
//         $(this).toggleClass('active');
//         $('body').toggleClass('locked');
//         $('.header__container').fadeToggle().css('display', 'flex');
//     });
    if ($('.banner').length) {
        var banner = new Swiper(".banner .swiper-container", {
            slidesPerView: 1,
            spaceBetween: 40,
            effect: 'fade',
            loop: true,
            loopFillGroupWithBlank: true,
            fadeEffect: {
                crossFade: true
            },
            navigation: {
                nextEl: ".banner .next",
                prevEl: ".banner .prev",
            },
        });
        let RotateCorner = 120;
        let ImageCorner = 120;
        let click = 1;
        $( ".banner .prev" ).on( "click", function() {
            if (click == 1){
                ImageCorner = 0;
            }else if(click == 2){
                ImageCorner = 120;
            }else if(click == 3){
                ImageCorner = 240;
            }
            let prev = $('.swiper-slide-duplicate-prev').data('img');
            $('.banner__mask').css({
                '-moz-transform':'rotate(-'+RotateCorner+'deg)',
                '-webkit-transform':'rotate(-'+RotateCorner+'deg)',
                '-o-transform':'rotate(-'+RotateCorner+'deg)',
                '-ms-transform':'rotate(-'+RotateCorner+'deg)',
                'transform':'rotate(-'+RotateCorner+'deg)'
            });
            $('.banner__mask img').removeClass('new-img').addClass('current-img').css('z-index', 0);
            console.log(ImageCorner)
            $('.banner__mask').prepend($('<img class="new-img" src="'+prev+'" style="opacity: 0; z-index: 1; transform: rotate('+ImageCorner+'deg)">'));
            $('.banner__mask .new-img').animate({opacity: '100%'}, 500);
            setTimeout(function() {
                $('.current-img').remove()
            }, 1000);
            $('.banner__mask img').css({
                '-moz-transform':'rotate('+click * 120+'deg)',
                '-webkit-transform':'rotate('+click * 120+'deg)',
                '-o-transform':'rotate('+click * 120+'deg)',
                '-ms-transform':'rotate('+click * 120+'deg)',
                'transform':'rotate('+click * 120+'deg)'
            });
            RotateCorner = RotateCorner + 120;
            console.log(click)
            if(click == 3){
                click = 0;
            }
            click ++;
        });
        $( ".banner .next" ).on( "click", function() {
            let next = $('.swiper-slide-duplicate-next').data('img');
            $('.banner__mask img').attr('src',next);
        });
    }

    if ($('#app').length) {
        // import SwiperGL from 'swiper-gl.esm.js';
        var section = new Swiper("#app > .swiper", {
            direction: "vertical",
            slidesPerView: 1,
            spaceBetween: 30,
            mousewheel: true,
            allowTouchMove: false,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
        });
    }

    if ($('section.team').length) {
        var team = new Swiper("section.team .swiper-container", {
            slidesPerView: 3,
            spaceBetween: 60,
        });
    }

    if ($('section.reviews').length) {
        var reviews = new Swiper("section.reviews .swiper-container", {
            slidesPerView: 2,
            spaceBetween: 48,
            loop: true,
            navigation: {
                nextEl: "section.reviews .next",
                prevEl: "section.reviews .prev",
            },
        });
    }

    if($('.tabs-elements').length){
        $(".tabs-elements .tabs-nav-item").click(function() {
            $(".tabs-elements .tabs-nav-item").removeClass("active").eq($(this).index()).addClass("active");
            $(".tabs-elements .tabs-content-item").hide().eq($(this).index()) .css("display", "flex")
                .hide()
                .fadeIn();
        }).eq(0).addClass("active");
        $(".tabs-elements .tabs-content-item").eq(0).addClass("active");
    }
});

