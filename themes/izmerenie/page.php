<?php /* Template Name: Головна сторінка */ ?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package izmerenie
 */

get_header();
?>
    <main id="main" class="main">
        <div id="app">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <section class="banner height-section swiper-slide">
                        <div class="banner__decoration">
                            <img class="left" src="<?php echo get_template_directory_uri(); ?>/img/banner/left.svg" alt="decoration">
                            <img class="top" src="<?php echo get_template_directory_uri(); ?>/img/banner/top.svg" alt="decoration">
                            <img class="right" src="<?php echo get_template_directory_uri(); ?>/img/banner/right.svg" alt="decoration">
                        </div>
                        <div class="banner__container">
                            <div class="banner__content">
                                <div class="swiper-container">
                                    <div class="banner__wrapper swiper-wrapper">
                                        <div class="banner__slide swiper-slide" data-img="<?php echo get_template_directory_uri(); ?>/img/banner/bg1.jpg">
                                            <div class="banner__block">
                                                <h2 class="banner__title">
                                                    20 лет <br>успешного <br>опыта
                                                </h2>
                                            </div>
                                            <a class="button red-button banner__button" href="#"><span>Больше</span></a>
                                        </div>
                                        <div class="banner__slide swiper-slide" data-img="<?php echo get_template_directory_uri(); ?>/img/banner/bg2.jpg">
                                            <div class="banner__block">
                                                <h2 class="banner__title">
                                                    слабых делаем сильными
                                                    <br><br>
                                                    Сильных ответственными
                                                </h2>
                                            </div>
                                            <a class="button red-button banner__button" href="#"><span>Больше</span></a>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination">
                                        <div class="prev">
                                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                                                <rect x="23.4853" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4853 13)" fill="#A0BCC8"/>
                                                <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                                            </svg>
                                        </div>
                                        <div class="next">
                                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle opacity="0.2" cx="21" cy="21" r="21" transform="rotate(180 21 21)" fill="#BFD9EB"/>
                                                <rect x="18.5147" y="29" width="2" height="12" rx="1" transform="rotate(-135 18.5147 29)" fill="#A0BCC8"/>
                                                <rect x="27" y="20.5147" width="2" height="12" rx="1" transform="rotate(135 27 20.5147)" fill="#A0BCC8"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="banner__image">
                            <div class="banner__mask">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/banner/bg1.jpg" alt="decoration">
                            </div>
                            <div class="banner__bg">

                            </div>
                        </div>
                        <div class="banner__bottom">
                            скрольте вниз
                        </div>
                    </section>
                    <section class="height-section swiper-slide"></section>
                </div>
            </div>
            <div class="demo-shader-picker">
                <div class="demo-shader-selector">
                    <span>Shader:</span>
                    <div class="demo-shader-current">random</div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="currentColor">
                        <path
                                d="M 28.0000 39.4609 C 28.5859 39.4609 29.1718 39.2266 29.5703 38.7813 L 47.7344 20.1953 C 48.1328 19.7969 48.3672 19.2813 48.3672 18.6953 C 48.3672 17.4766 47.4297 16.5391 46.2109 16.5391 C 45.6484 16.5391 45.0859 16.7735 44.6875 17.1484 L 28.0000 34.2109 L 11.3125 17.1484 C 10.9140 16.7735 10.3750 16.5391 9.7891 16.5391 C 8.5703 16.5391 7.6328 17.4766 7.6328 18.6953 C 7.6328 19.2813 7.8672 19.7969 8.2656 20.2187 L 26.4297 38.7813 C 26.875 39.2266 27.3906 39.4609 28.0000 39.4609 Z" />
                    </svg>
                </div>
                <div class="demo-shader-options">
                    <span>random</span>
                    <span>dots</span>
                    <span>flyeye</span>
                    <span>morph-x</span>
                    <span>morph-y</span>
                    <span>page-curl</span>
                    <span>peel-x</span>
                    <span>peel-y</span>
                    <span>polygons-fall</span>
                    <span>polygons-morph</span>
                    <span>polygons-wind</span>
                    <span>pixelize</span>
                    <span>ripple</span>
                    <span>shutters</span>
                    <span>slices</span>
                    <span>squares</span>
                    <span>stretch</span>
                    <span>wave-x</span>
                    <span>wind</span>
                </div>
            </div>
        </div>
    </main>
<?php
get_footer();