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
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 120, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 800, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

    $(".header__burger").click(function () {
        $(this).toggleClass('active');
        $('body').toggleClass('locked');
        $('.header__wrapper').fadeToggle(300);
    });

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

            console.log('clixk');

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

    if (window.innerWidth > 1024) {
        $(".main").onepage_scroll({
            sectionContainer: ".scroll-section", // контейнер, к которому будет применяться скролл
            easing: "ease", // Тип анимации "ease", "linear", "ease-in", "ease-out", "ease-in-out"
            animationTime: 1000, // время анимации
            pagination: true, // скрыть или отобразить пагинатор
            updateURL: false, // обновлять URL или нет
            loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
            keyboard: false,                  // You can activate the keyboard controls
            responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
            // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
            // the browser's width is less than 600, the fallback will kick in.
            direction: "vertical"

        });
    }

    if($('.to-up').length){
        $(".to-up").click(function() {
            $(".main").moveUp(1);
        })
    }

    jQuery('a.noclick').on('click', function (e) {
        e.preventDefault();
    });



    if ($('section.team').length) {
        let teamSlider;
        const teamInit = () => {
            teamSlider = new Swiper("section.team .swiper-container", {
                slidesPerView: 3,
                spaceBetween: 60,
                breakpoints: {
                    // when window width is >= 320px
                    320: {
                        slidesPerView: 2,
                        spaceBetween: 20
                    },
                    // when window width is >= 480px
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    },
                    // when window width is >= 640px
                    1200: {
                        slidesPerView: 2,
                        spaceBetween: 40
                    },
                    1400: {
                        slidesPerView: 3,
                        spaceBetween: 50
                    }
                }
            });
            console.log(teamSlider);
        }
        if (window.innerWidth > 1024) {
            teamInit();
        }
        $( window ).resize(function() {
            if (window.innerWidth < 1025) {
                if (teamSlider !== undefined) {
                    teamSlider.destroy('true','true');
                }
            } else {
                teamInit();
            }
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
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                1200: {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
            }
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

