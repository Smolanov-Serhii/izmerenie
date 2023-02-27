<?php /* Template Name: Публікації */ ?>
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
    <section class="publications-page">
        <div class="publications-page__container main-container">
            <div class="back-button" onclick="window.history.back()">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                    <rect x="23.4854" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4854 13)" fill="#A0BCC8"/>
                    <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                </svg>
            </div>
            <h1 class="publications-page__title page-title">
                <?php echo the_field("zagolovok_storinky", $post_id); ?>
            </h1>
        </div>
        <div class="publications-page__list main-container">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 9,
                'order' 	 => 'menu_order',
                'orderby'   => 'menu_order',
                'post_type' 	 => 'publications',
                'paged'	         => $paged
            );

            $MY_QUERY = new WP_Query( $args );
            if ( $MY_QUERY->have_posts() ) :
                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="publications-page__item">
                        <h2 class="publications-page__item-title"><?php echo the_field("zagolovok_zapysu"); ?></h2>
                        <div class="publications-page__item-excerpt">
                            <?php echo the_field("korotkyj_opys"); ?>
                        </div>
                    </a>
                <?php endwhile;
            endif;
            ?>
            <?php
            wp_reset_postdata();
            ?>
        </div>
    </section>
    <footer id="footer" class="footer footer__static">
        <div class="footer__container">
            <div class="footer__bottom main-container">
                <div class="footer__copyright">
                    <?php echo the_field("tekst_2022_chetvertoe_izmerenie_vse_prava_zashhishheny", 'options'); ?>
                </div>
                <a class="footer__phone" href="tel:<?php echo the_field("tulufon_na_sajt", 'options'); ?>"><?php echo the_field("tulufon_na_sajt", 'options'); ?></a>
                <a class="footer__mail" href="mailto:<?php echo the_field("pochta_na_sajt", 'options'); ?>"><?php echo the_field("pochta_na_sajt", 'options'); ?></a>
            </div>
        </div>
    </footer>
    <a href="#main" class="to-up">
        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle opacity="0.2" cx="21" cy="21" r="21" transform="rotate(90 21 21)" fill="#BFD9EB"/>
            <rect x="29" y="23.4853" width="2" height="12" rx="1" transform="rotate(135 29 23.4853)" fill="#A0BCC8"/>
            <rect x="20.5156" y="15" width="2" height="12" rx="1" transform="rotate(45 20.5156 15)" fill="#A0BCC8"/>
        </svg>
    </a>
</main>

<?php wp_footer(); ?>
</body>
</html>