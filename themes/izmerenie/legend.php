<?php /* Template Name: Легенда */ ?>

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
$post_id = get_the_ID();
?>
<main id="main" class="main">
    <section class="legend-page">
        <div class="legend-page__container main-container">
            <div class="back-button" onclick="window.history.back()">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                    <rect x="23.4854" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4854 13)" fill="#A0BCC8"/>
                    <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                </svg>
            </div>
            <h1 class="legend-page__title page-title">
                <?php echo the_field("zagolovok", $post_id); ?>
            </h1>
            <div class="legend-page__content">
                <?php echo the_field("opys_storinky", $post_id); ?>
            </div>
            <a class="legend-page__lnk fresco" href="<?php echo the_field("posylannya_na_video_z_yutuba", $post_id); ?>">
                <img class="legend-page__cover" src="<?php echo the_field("obkladynka_dlya_video", $post_id); ?>" alt="<?php echo the_field("zagolovok", $post_id); ?>">
                <img class="legend-page__btn" src="<?php echo get_template_directory_uri() . '/img/select/video-btn.svg'; ?>" alt="">
            </a>
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
</body>
</html>