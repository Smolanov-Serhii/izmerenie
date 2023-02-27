<?php /* Template Name: Контакти */ ?>
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

    <footer id="footer" class="footer height-section vertical-center scroll-section footer-page-contacts">
        <div class="footer__container main-container">
            <div class="back-button" onclick="window.history.back()">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                    <rect x="23.4854" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4854 13)" fill="#A0BCC8"/>
                    <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                </svg>
            </div>
            <div class="footer__form">
                <h2 class="footer__title section-title">
                    Как связаться
                </h2>
                <div class="footer__socials">

                    <a href="https://t.me/+380507519143" target="_blank">
                        <img src="<?php echo get_template_directory_uri() . '/img/footer/telegram.svg'; ?>" alt="telegram">
                    </a>
                    <a href="https://api.whatsapp.com/send/?phone=380507519143" target="_blank">
                        <img src="<?php echo get_template_directory_uri() . '/img/footer/whatsup.svg'; ?>" alt="whatsup">
                    </a>
                    <a href="viber://chat?number=+380507519143" target="_blank">
                        <img src="<?php echo get_template_directory_uri() . '/img/footer/viber.svg'; ?>" alt="viber">
                    </a>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="14" title="footer form"]') ?>
            </div>
<!--            <div class="footer__img">-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/img/footer/img.png'; ?><!--" alt="bg">-->
<!--            </div>-->
<!--            <div class="footer__bottom main-container">-->
<!--                <div class="footer__copyright">-->
<!--                    --><?php //echo the_field("tekst_2022_chetvertoe_izmerenie_vse_prava_zashhishheny", 'options'); ?>
<!--                </div>-->
<!--                <a class="footer__phone" href="tel:--><?php //echo the_field("tulufon_na_sajt", 'options'); ?><!--">--><?php //echo the_field("tulufon_na_sajt", 'options'); ?><!--</a>-->
<!--                <a class="footer__mail" href="mailto:--><?php //echo the_field("pochta_na_sajt", 'options'); ?><!--">--><?php //echo the_field("pochta_na_sajt", 'options'); ?><!--</a>-->
<!--            </div>-->
            <div class="footer__bottom main-container">
                <div class="footer__copyright">
                    <?php echo the_field("tekst_2022_chetvertoe_izmerenie_vse_prava_zashhishheny", 'options'); ?>
                </div>
                <a class="footer__phone" href="tel:<?php echo the_field("tulufon_na_sajt", 'options'); ?>"><?php echo the_field("tulufon_na_sajt", 'options'); ?></a>
                <a class="footer__mail" href="mailto:<?php echo the_field("pochta_na_sajt", 'options'); ?>"><?php echo the_field("pochta_na_sajt", 'options'); ?></a>
            </div>
        </div>
    </footer>
</main>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/dist/js/main.js'; ?>"></script>
</body>
</html>