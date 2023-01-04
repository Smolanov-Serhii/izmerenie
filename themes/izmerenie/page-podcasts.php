<?php /* Template Name: Підкасти */ ?>
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
    <section class="page-podcasts">
        <div class="page-podcasts__container main-container">
            <div class="back-button" onclick="window.history.back()">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                    <rect x="23.4854" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4854 13)" fill="#A0BCC8"/>
                    <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                </svg>
            </div>
            <h1 class="page-podcasts__title page-title">
                <?php echo the_field("zagolovok_storinky", $post_id); ?>
            </h1>
            <div class="page-podcasts__list">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'posts_per_page' => 10,
                    'order' 	 => 'DESC',
                    'post_type' 	 => 'podcasts',
                    'paged'	         => $paged
                );

                $MY_QUERY = new WP_Query( $args );
                if ( $MY_QUERY->have_posts() ) :
                    while ( $MY_QUERY->have_posts() ) : $MY_QUERY->the_post(); ?>
                        <div class="page-podcasts__item fresco" href="<?php echo the_field("posilannya_na_video"); ?>">
                            <div class="page-podcasts__item-img">
                                <div class="page-podcasts__item-time">
                                    <?php echo the_field("chas_u_zapysu"); ?>
                                </div>
                                <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23Z" fill="#BFD9EB"/>
                                    <path d="M31 23.5L18.25 30.8612V16.1388L31 23.5Z" fill="#6F8C9E"/>
                                </svg>
                                <img src="<?php echo the_field("zobrazhennya_dlya_zapysu"); ?>" alt="<?php the_title(); ?>">
                            </div>
                            <h2 class="page-podcasts__item-title"><?php the_title(); ?></h2>
                        </div>
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