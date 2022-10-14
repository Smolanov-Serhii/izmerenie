<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package izmerenie
 */

?>

	<footer id="footer" class="footer height-section vertical-center swiper-slide">
        <div class="footer__container main-container">
            <div class="footer__form">
                <h2 class="footer__title section-title">
                    Как связаться
                </h2>
                <div class="footer__socials">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . '/img/footer/telegram.svg'; ?>" alt="telegram">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . '/img/footer/whatsup.svg'; ?>" alt="whatsup">
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . '/img/footer/viber.svg'; ?>" alt="viber">
                    </a>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="14" title="footer form"]') ?>
            </div>
            <div class="footer__img">
                <img src="<?php echo get_template_directory_uri() . '/img/footer/img.png'; ?>" alt="bg">
            </div>
            <div class="footer__bottom main-container">
                <div class="footer__copyright">
                    © 2022. Четвертое измерение. Все права защищены.
                </div>
                <a class="footer__phone" href="tel:+38(063)000-00-00">+38(063)000-00-00</a>
                <a class="footer__mail" href="mailto:4izmerenie@4izmerenie.com">4izmerenie@4izmerenie.com</a>
            </div>
        </div>
	</footer>

