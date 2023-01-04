<?php /* Template Name: Сила */ ?>

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
    <section class="page-sila">
        <div class="page-sila__container main-container">
            <div class="back-button" onclick="window.history.back()">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                    <rect x="23.4854" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4854 13)" fill="#A0BCC8"/>
                    <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                </svg>
            </div>
            <h1 class="page-sila__title page-title">
                <?php echo the_field("zagolovok", $post_id); ?>
            </h1>
            <div class="page-sila__content">
                <?php echo the_field("pershyj_blok", $post_id); ?>
            </div>
            <div class="page-sila__content">
                <?php echo the_field("drugyj_blok", $post_id); ?>
            </div>
            <div class="page-sila__excerpt">
                <svg width="98" height="79" viewBox="0 0 98 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.2" d="M5.52539 78.4336L0.269532 71.0215C8.08594 65.1816 13.8809 59.4316 17.6543 53.7715C21.3379 48.1113 23.1797 42.3613 23.1797 36.5215L23.1797 34.6348C21.9219 34.8144 20.7539 34.9492 19.6758 35.0391C18.5078 35.2187 17.3848 35.3086 16.3066 35.3086C11.4551 35.3086 7.54688 33.7363 4.58204 30.5918C1.52735 27.5371 4.79118e-06 23.6289 5.20746e-06 18.8672C5.71014e-06 13.1172 1.61719 8.53515 4.85157 5.12109C8.08594 1.70702 12.4434 -7.43025e-06 17.9238 -6.95114e-06C24.1231 -6.40918e-06 29.2891 2.38085 33.4219 7.14257C37.4648 11.9043 39.4863 18.0137 39.4863 25.4707C39.4863 35.4434 36.6563 44.8769 30.9961 53.7715C25.2461 62.7559 16.7559 70.9766 5.52539 78.4336ZM63.7441 78.4336L58.4883 71.0215C66.3047 65.1816 72.0996 59.4316 75.873 53.7715C79.5566 48.1113 81.3984 42.3613 81.3984 36.5215L81.3984 34.6348C80.0508 34.8145 78.8379 34.9492 77.7598 35.0391C76.5918 35.2187 75.5137 35.3086 74.5254 35.3086C69.7637 35.3086 65.8106 33.7363 62.666 30.5918C59.5215 27.4473 57.9492 23.5391 57.9492 18.8672C57.9492 13.1172 59.6113 8.53515 62.9356 5.12109C66.2598 1.70703 70.6621 -2.34061e-06 76.1426 -1.86149e-06C82.3418 -1.31954e-06 87.4629 2.38086 91.5059 7.14258C95.459 11.9043 97.4356 18.0137 97.4356 25.4707C97.4356 35.7129 94.6055 45.2812 88.9453 54.1758C83.2852 63.0703 74.8848 71.1562 63.7441 78.4336Z" fill="#A0BCC8"/>
                </svg>
                <?php echo the_field("czytata", $post_id); ?>
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