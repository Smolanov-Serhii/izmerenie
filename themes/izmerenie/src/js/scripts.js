$(document).ready(function () {
    // $('section.active').addClass('');

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
        // disable: function() {
        //     var minWidth = 1024;
        //     return window.innerWidth > minWidth;
        // },
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 80, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 700, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: true, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });

    $(".programs__list-show").click(function () {
        $(this).closest('.programs__list-item').find('.programs__list-chield').toggleClass('show');
        $(this).closest('.programs__list-item').toggleClass('show');
        $(this).toggleClass('showed');
    });

    if (window.innerWidth <= 1024) {
        $(".noclick.menu-item").click(function () {
            $(this).find('.sub-menu').fadeToggle(300);
            $(this).toggleClass('active');
        });
    }

    $(".header__burger").click(function () {
        $(this).toggleClass('active');
        $('body').toggleClass('locked');
        $('.header__wrapper').fadeToggle().css('display', 'flex');
    });
    if ($('.banner').length) {
        var startimage = $('.first-slide').data('img');
        $('.banner__mask img').attr('src', startimage);
        var banner = new Swiper(".banner .swiper-container", {
            slidesPerView: 1,
            spaceBetween: 40,
            effect: 'fade',
            loop: true,
            noSwiping: true,
            allowTouchMove: false,
            loopFillGroupWithBlank: true,
            fadeEffect: {
                crossFade: true
            },
            on: {
                slideChangeTransitionStart: function () {
                    $('.banner__title').hide(0);
                    $('.banner__title').removeClass('aos-init').removeClass('aos-animate');
                    $('.banner__button').hide(0);
                    $('.banner__button').removeClass('aos-init').removeClass('aos-animate');
                    $('.banner__logos').hide(0);
                    $('.banner__logos').removeClass('aos-init').removeClass('aos-animate');
                },
                slideChangeTransitionEnd: function () {
                    $('.banner__title').show(0);
                    $('.banner__button').show(0);
                    $('.banner__logos').show(0);
                    AOS.init();
                },
            }
        });
        let RotateCorner = 120;
        let ImageCorner = 120;
        let click = 0;
        let nextclick = 1;
        $( ".banner .prev" ).on( "click", function() {
            banner.slidePrev();
            var $PosData = $('.banner .swiper-slide-active').data('position');
            $('.banner__decoration').removeClass('position1').removeClass('position2').removeClass('position3');
            $('.banner__decoration').addClass('position' + $PosData);
            var $coundData = $('.banner .swiper-slide-active').data('count');
            var $UpData = $('.banner .swiper-slide-active').data('up');
            var  $RightData = $('.banner .swiper-slide-active').data('right');
            $( ".banner__decoration .left" ).attr("src",$coundData);
            $( ".banner__decoration .top" ).attr("src",$UpData);
            $( ".banner__decoration .right" ).attr("src",$RightData);
            click ++;
            nextclick ++;
            if (click == 1){
                if(nextclick == 4){
                    ImageCorner = 120;
                    nextclick = 2;
                } else {
                    ImageCorner = 0;
                }
            }else if(click == 2){
                ImageCorner = 120;
            }else if(click == 3){
                ImageCorner = 240;
            }
            let prev = $('.swiper-slide-active').data('img');
            $('.banner__mask').css({
                '-moz-transform':'rotate(-'+RotateCorner+'deg)',
                '-webkit-transform':'rotate(-'+RotateCorner+'deg)',
                '-o-transform':'rotate(-'+RotateCorner+'deg)',
                '-ms-transform':'rotate(-'+RotateCorner+'deg)',
                'transform':'rotate(-'+RotateCorner+'deg)'
            });
            $('.banner__mask img').removeClass('new-img').addClass('current-img').css('z-index', 0);
            $('.banner__mask').prepend($('<img class="new-img" src="'+prev+'" style="opacity: 0; z-index: 2; transform: rotate('+ImageCorner+'deg) translate(-70px, 50px)">'));
            $('.banner__mask .new-img').animate({opacity: '100%'}, 500);
            setTimeout(function() {
                $('.current-img').remove()
            }, 500);
            $('.banner__mask img').css({
                '-moz-transform':'rotate('+click * 120+'deg)',
                '-webkit-transform':'rotate('+click * 120+'deg)',
                '-o-transform':'rotate('+click * 120+'deg)',
                '-ms-transform':'rotate('+click * 120+'deg)',
                'transform':'rotate('+click * 120+'deg)'
            });
            RotateCorner = RotateCorner + 120;
            if(click == 3){
                click = 0;
            }
        });
        $( ".banner .next" ).on( "click", function() {
            banner.slideNext();
            var $PosData = $('.banner .swiper-slide-active').data('position');
            $('.banner__decoration').removeClass('position1').removeClass('position2').removeClass('position3');
            $('.banner__decoration').addClass('position' + $PosData);
            var $coundData = $('.banner .swiper-slide-active').data('count');
            var $UpData = $('.banner .swiper-slide-active').data('up');
            var  $RightData = $('.banner .swiper-slide-active').data('right');
            $( ".banner__decoration .left" ).attr("src",$coundData);
            $( ".banner__decoration .top" ).attr("src",$UpData);
            $( ".banner__decoration .right" ).attr("src",$RightData);
            click ++;
            nextclick ++;
            if (click == 1){
                if(nextclick == 4){
                    ImageCorner = 120;
                    nextclick = 2;
                } else {
                    ImageCorner = 0;
                }
            }else if(click == 2){
                ImageCorner = 120;
            }else if(click == 3){
                ImageCorner = 240;
            }
            let next = $('.swiper-slide-active').data('img');
            $('.banner__mask').css({
                '-moz-transform':'rotate(-'+RotateCorner+'deg)',
                '-webkit-transform':'rotate(-'+RotateCorner+'deg)',
                '-o-transform':'rotate(-'+RotateCorner+'deg)',
                '-ms-transform':'rotate(-'+RotateCorner+'deg)',
                'transform':'rotate(-'+RotateCorner+'deg)'
            });
            $('.banner__mask img').removeClass('new-img').addClass('current-img').css('z-index', 0);
            $('.banner__mask').prepend($('<img class="new-img" src="'+next+'" style="opacity: 0; z-index: 2; transform: rotate('+ImageCorner+'deg) translate(-70px, 50px)">'));
            $('.banner__mask .new-img').animate({opacity: '100%'}, 500);
            setTimeout(function() {
                $('.current-img').remove()
            }, 500);
            $('.banner__mask img').css({
                '-moz-transform':'rotate('+click * 120+'deg)',
                '-webkit-transform':'rotate('+click * 120+'deg)',
                '-o-transform':'rotate('+click * 120+'deg)',
                '-ms-transform':'rotate('+click * 120+'deg)',
                'transform':'rotate('+click * 120+'deg)'
            });
            RotateCorner = RotateCorner + 120;
            if(click == 3){
                click = 0;
            }
        });
        if (window.innerWidth < 1025) {
            $(".banner  .first-slide .banner__button ").click(function() {
                $([document.documentElement, document.body]).animate({
                    scrollTop: $("#reviews").offset().top
                }, 1000);
            })

        } else {
            $(".banner  .first-slide .banner__button ").click(function() {
                event.preventDefault();
                $(".main").moveTo(7);
            })
        }

    }

    if (window.innerWidth > 1024) {
        if ($("body").hasClass("non-scroll")) {

        } else {
            $('.main').onepage_scroll({
                sectionContainer: ".scroll-section", // контейнер, к которому будет применяться скролл
                easing: "ease", // Тип анимации "ease", "linear", "ease-in", "ease-out", "ease-in-out"
                animationTime: 700, // время анимации
                pagination: false, // скрыть или отобразить пагинатор
                updateURL: false, // обновлять URL или нет
                beforeMove: function(index) {
                    setTimeout(function() {
                        $('section.active').find('.aos-init').addClass('aos-animate');
                    }, 500);
                },
                loop: false,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
                keyboard: false,                  // You can activate the keyboard controls
                responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
                // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
                // the browser's width is less than 600, the fallback will kick in.
                direction: "vertical"
            });
        }

    }

    if($('.to-up').length){
        $(".to-up").click(function() {
            $(".main").moveTo(1);
        })
    }

    if($('.footer__modal').length){
        $(".js-modal").click(function() {
            $(".footer__modal").fadeIn(300);
            $("body").addClass('locked');
        })

        $(".footer__modal .footer__modal-close").click(function() {
            $(".wpcf7-form").trigger('reset');
            $(".footer__modal").fadeOut(300);
            $("body").removeClass('locked');
        })

        document.addEventListener( 'wpcf7mailsent', function( event ) {
            $(".wpcf7-form").trigger('reset');
            $(".footer__modal").fadeOut(300);
            $(".footer__success").fadeIn(300);
            setTimeout(function() {
                $(".footer__success").fadeOut(300);
            }, 1000);
            $("body").removeClass('locked');
        }, false );
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
            noSwiping: true,
            allowTouchMove: false,
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

    // var $page = $('html, body');
    // $('a.up-scroll[href*="#"]').click(function() {
    //     $page.animate({
    //         scrollTop: $($.attr(this, 'href')).offset().top
    //     }, 400);
    //     return false;
    // });

    if($('.tabs-elements').length){
        $(".tabs-elements .tabs-nav-item").click(function() {
            $(".tabs-elements .tabs-nav-item").removeClass("active").eq($(this).index()).addClass("active");
            $(".tabs-elements .tabs-content-item").removeClass("active").eq($(this).index()).addClass("active");
            $(".tabs-elements .tabs-content-item").hide().eq($(this).index()) .css("display", "flex")
                .hide()
                .fadeIn();
        }).eq(0).addClass("active");
        $(".tabs-elements .tabs-content-item").eq(0).addClass("active");

        $(".default-power").click(function() {
            $(this).fadeOut(300);
            $('.tabs-nav-item:eq(0)').click();
        })

        $(".tabs-nav-item:not(.power__nav-else)").click(function() {
            $(".default-power").fadeIn(300);
        })
    }

    if($('.reviews ').length){
        $(".reviews .reviews__slide").click(function() {
            $('.modal-rev .reviews__slide').remove();
            $(this).clone(true).appendTo('.modal-rev__container');
            $('body').addClass('locked');
            $('.modal-rev').fadeIn(300).css('display', 'flex');
        })
        $(".modal-rev__close").click(function() {
            $(this).clone(true).appendTo('.modal-rev__container');
            $('body').removeClass('locked');
            $('.modal-rev').fadeOut(300);
            setTimeout(function() {
                $('.modal-rev .reviews__slide').remove();
            }, 300);

        })
    }
});

