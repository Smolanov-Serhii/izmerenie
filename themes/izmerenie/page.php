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
        <section class="banner height-section">
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

    </main>
<?php
get_footer();