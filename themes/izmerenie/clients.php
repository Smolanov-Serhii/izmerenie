<?php /* Template Name: Клієнти */ ?>
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
    <section class="page-clients">
        <div class="page-clients__container main-container">
            <div class="back-button" onclick="window.history.back()">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                    <rect x="23.4854" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4854 13)" fill="#A0BCC8"/>
                    <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                </svg>
            </div>
            <h1 class="page-clients__title page-title">нам доверяют </h1>
            <p class="page-clients__subtitle page-subtitle">6 из 10 компаний, входящих в топ лучших работодателей Украины – наши постоянные клиенты </p>
            <div class="page-clients__list">
                <?php
                $counter = 0;
                if( have_rows('logotypy') ):
                    while( have_rows('logotypy') ) : the_row();
                        $img = get_sub_field('zobrazhennya_logotypa');
                        $title = get_sub_field('nazva_kompaniyi');
                        $lnk = get_sub_field('posilannya_yakshho_ye');
                        if($lnk){
                            ?>
                            <a class="page-clients__item" href="<?php echo $lnk;?>">
                                <img src="<?php echo $img;?>" alt="<?php echo $title;?>">
                            </a>
                            <?php
                        } else {
                            ?>
                            <div class="page-clients__item" >
                                <img src="<?php echo $img;?>" alt="<?php echo $title;?>">
                            </div>
                            <?php
                        }
                        ?>

                    <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </section>
    <section class="reviews height-section vertical-center scroll-section">
        <div class="reviews__decoration">
            <img class="reviews__decoration-left" src="<?php echo get_template_directory_uri() . '/img/reviews/dec-left.svg'; ?>" alt="decoration">
            <img class="reviews__decoration-right" src="<?php echo get_template_directory_uri() . '/img/reviews/dec-right.svg'; ?>" alt="decoration">
        </div>
        <div class="reviews__container main-container">
            <div class="reviews__block">
                <h2 class="reviews__title section-title">
                    Отзывы
                </h2>
                <div class="reviews__swiper swiper-container">
                    <div class="reviews__wrapper swiper-wrapper">
                        <div class="reviews__slide swiper-slide">
                            <div class="reviews__slide-header">
                                <div class="reviews__slide-img">
                                    <img src="<?php echo get_template_directory_uri() . '/img/reviews/ecosoft.png'; ?>" alt="Ecosoft Corporation">
                                </div>
                                <h2 class="reviews__slide-name">
                                    Ecosoft Corporation
                                </h2>
                            </div>
                            <div class="reviews__slide-desc">
                                <svg width="38" height="31" viewBox="0 0 38 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2" d="M37.3144 0.00019455L37.3144 10.2504C37.3144 14.0268 36.6251 17.4735 35.2464 20.5905C33.8677 23.7076 31.5299 26.9445 28.2331 30.3013L22.1189 25.5358C25.3558 22.2989 27.3639 19.2418 28.1431 16.3646L20.6803 16.3646L20.6803 0.000193095L37.3144 0.00019455ZM16.6341 0.000192742L16.6341 10.2504C16.6341 14.0268 15.9448 17.4735 14.5661 20.5905C13.1874 23.7076 10.8497 26.9445 7.55281 30.3013L1.43864 25.5358C4.67556 22.2989 6.68364 19.2418 7.46289 16.3646L2.02919e-05 16.3646L2.17225e-05 0.000191287L16.6341 0.000192742Z" fill="#A0BCC8"/>
                                </svg>
                                In consectetur odio egestas tortor dolor cursus vel odio. Integer non quam senectus justo mauris tempus. Posuere fames dolor sit augue scelerisque etiam sed augue. Diam, sapien, mollis ac pellentesque magna vulputate. Neque sed bibendum accumsan mattis.
                            </div>
                        </div>
                        <div class="reviews__slide swiper-slide">
                            <div class="reviews__slide-header">
                                <div class="reviews__slide-img">
                                    <img src="<?php echo get_template_directory_uri() . '/img/reviews/mandel.png'; ?>" alt="Ecosoft Corporation">
                                </div>
                                <h2 class="reviews__slide-name">
                                    Ecosoft Corporation
                                </h2>
                            </div>
                            <div class="reviews__slide-desc">
                                <svg width="38" height="31" viewBox="0 0 38 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2" d="M37.3144 0.00019455L37.3144 10.2504C37.3144 14.0268 36.6251 17.4735 35.2464 20.5905C33.8677 23.7076 31.5299 26.9445 28.2331 30.3013L22.1189 25.5358C25.3558 22.2989 27.3639 19.2418 28.1431 16.3646L20.6803 16.3646L20.6803 0.000193095L37.3144 0.00019455ZM16.6341 0.000192742L16.6341 10.2504C16.6341 14.0268 15.9448 17.4735 14.5661 20.5905C13.1874 23.7076 10.8497 26.9445 7.55281 30.3013L1.43864 25.5358C4.67556 22.2989 6.68364 19.2418 7.46289 16.3646L2.02919e-05 16.3646L2.17225e-05 0.000191287L16.6341 0.000192742Z" fill="#A0BCC8"/>
                                </svg>
                                In consectetur odio egestas tortor dolor cursus vel odio. Integer non quam senectus justo mauris tempus. Posuere fames dolor sit augue scelerisque etiam sed augue. Diam, sapien, mollis ac pellentesque magna vulputate. Neque sed bibendum accumsan mattis.
                            </div>
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
    </section>
    <footer id="footer" class="footer footer__static">
        <div class="footer__container main-container">
            <div class="footer__bottom">
                <div class="footer__copyright">
                    © 2022. Четвертое измерение. Все права защищены.
                </div>
                <a class="footer__phone" href="tel:+38(063)000-00-00">+38(063)000-00-00</a>
                <a class="footer__mail" href="mailto:4izmerenie@4izmerenie.com">4izmerenie@4izmerenie.com</a>
            </div>
        </div>
    </footer>
</main>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/dist/js/main.js'; ?>"></script>
</body>
</html>