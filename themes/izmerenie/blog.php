<?php /* Template Name: Блог */ ?>
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
    <section class="blog-page">
        <div class="blog-page__container main-container">
            <div class="back-button" onclick="window.history.back()">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                    <rect x="23.4854" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4854 13)" fill="#A0BCC8"/>
                    <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                </svg>
            </div>
            <h1 class="blog-page__title page-title">
                <?php echo the_field("zagolovok_storinky", $post_id); ?>
            </h1>
        </div>
        <div class="blog-page__list main-container">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'posts_per_page' => 9,
                'order' 	 => 'DESC',
                'post_type' 	 => 'blog',
                'paged'	         => $paged
            );

            $MY_QUERY = new WP_Query( $args );
            if ( $MY_QUERY->have_posts() ) :
                while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                    <a href="<?php the_permalink();?>" class="blog-page__item">
                        <div class="blog-page__item-img">
                            <img src="<?php echo the_field("zobrazhennya_zapysu"); ?>" alt="<?php echo the_field("zagolovok_zapysu"); ?>">
                        </div>
                        <span class="blog-page__item-date"><?php echo get_the_date('d.M.Y'); ?></span>
                        <div class="blog-page__item-content">
                            <h2 class="blog-page__item-title"><?php echo the_field("zagolovok_zapysu"); ?></h2>
                            <h3 class="blog-page__item-excerpt">
                                <?php echo the_field("korotkyj_opys"); ?>
                            </h3>
                        </div>
                    </a>
                <?php endwhile;
            endif;
            ?>
            <div class="pagination">
                <?php
                $GLOBALS['wp_query']->max_num_pages = $MY_QUERY->max_num_pages;
                the_posts_pagination(array(
                    'type'=>'inline',
                    'screen_reader_text' => __( '' ),
                    'end_size'     => 1,
                    'mid_size'     => 1,
                    'prev_next'    => True,
                    'prev_text'    => __('<'),
                    'next_text'    => __('>'),
                    'add_args'     => False
                ));
                ?>
            </div>
            <?php
            wp_reset_postdata();
            ?>
        </div>
    </section>
    <footer id="footer" class="footer footer__static">
        <div class="footer__container main-container">
            <div class="footer__bottom">
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
</body>
</html>