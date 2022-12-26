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
</main>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/dist/js/main.js'; ?>"></script>
</body>
</html>