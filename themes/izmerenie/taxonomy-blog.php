<?php /* Template Name: Відео */ ?>
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
    <section class="page-videos">
        <div class="page-videos__container main-container">
            <div class="back-button" onclick="window.history.back()">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                    <rect x="23.4854" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4854 13)" fill="#A0BCC8"/>
                    <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                </svg>
            </div>
            <h1 class="page-videos__title page-title">
                <?php
                single_term_title();
                ?>
            </h1>
            <div class="page-videos__wrapper">
                <div class="page-videos__rubrik">
                    <?php
                    $args = array(
                        'show_option_all'    => '',
                        'show_option_none'   => __('No categories'),
                        'orderby'            => 'name',
                        'order'              => 'ASC',
                        'style'              => 'list',
                        'show_count'         => 0,
                        'hide_empty'         => 1,
                        'use_desc_for_title' => 0,
                        'child_of'           => 0,
                        'feed'               => '',
                        'feed_type'          => '',
                        'feed_image'         => '',
                        'exclude'            => '',
                        'exclude_tree'       => '',
                        'include'            => '',
                        'hierarchical'       => true,
                        'title_li'           => false,
                        'number'             => NULL,
                        'echo'               => 1,
                        'depth'              => 0,
                        'current_category'   => 0,
                        'pad_counts'         => 0,
                        'taxonomy'           => 'blog-category',
                        'walker'             => 'Walker_Category',
                        'hide_title_if_empty' => false,
                        'separator'          => '<br />',
                    );

                    echo '<ul>';
                    if (is_single()) {
                        $cat = get_the_category();
                        $cat = $cat[0]->cat_ID;
                        $currentCat = '&current_category='.$cat;
                    }
                    wp_list_categories( $args , $currentCat );
                    echo '</ul>';
                    ?>
                </div>
                <div class="page-videos__list">
                    <?php if ( have_posts() ) : ?>
                        <?php
                        while ( have_posts() ) :
                            the_post();
                        ?>
                            <div class="page-videos__item fresco" href="<?php echo the_field("posylannya_na_video"); ?>">
                                <div class="page-videos__item-img">
                                    <div class="page-videos__item-time">
                                        <?php echo the_field("chas_video"); ?>
                                    </div>
                                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M46 23C46 35.7025 35.7025 46 23 46C10.2975 46 0 35.7025 0 23C0 10.2975 10.2975 0 23 0C35.7025 0 46 10.2975 46 23Z" fill="#BFD9EB"/>
                                        <path d="M31 23.5L18.25 30.8612V16.1388L31 23.5Z" fill="#6F8C9E"/>
                                    </svg>
                                    <img src="<?php echo the_field("zobrazhennya_dlya_video"); ?>" alt="<?php echo the_field("zagolovok_dlya_video"); ?>">
                                </div>
                                <div class="page-videos__item-content">
                                    <h2 class="page-videos__item-title"><?php echo the_field("zagolovok_dlya_video"); ?></h2>
                                    <h3 class="page-videos__item-name">
                                        <?php echo the_field("vykladach"); ?>
                                    </h3>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    else :

                        echo 'empty';

                    endif;
                    ?>
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
</body>
</html>