<?php
/*
Template name: Корпоративная культура
Template post type: programs
*/

get_header();
$post_id = get_the_ID();

?>
<main id="main" class="main">
    <section class="programs-page">
        <div class="programs-page__container main-container">
            <div class="back-button" onclick="window.history.back()">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                    <rect x="23.4854" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4854 13)" fill="#A0BCC8"/>
                    <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                </svg>
            </div>
            <h1 class="programs-page__title page-title">
                <?php
                $terms = get_the_terms( $post->ID, 'programs-category' );
                if( is_array( $terms ) ) {
                    foreach ( $terms as $key => $term ) {
                        echo $term->name;
                    }
                }
                ?>
            </h1>
            <div class="programs-page__content">
                <div class="programs-page__nav">
                    <?php
                    $currentLnk = get_permalink();
                    $customTaxonomyTerms = wp_get_object_terms( $post->ID, 'programs-category', array('fields' => 'ids') );
                    $args = array(
                        'post_type' => 'programs',
                        'post_status' => 'publish',
                        'posts_per_page' => 0,
                        'orderby' => 'ASC',
                        'order' => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'programs-category',
                                'field' => 'id',
                                'terms' => $customTaxonomyTerms
                            )
                        ),
//                        'post__not_in' => array ($post->ID),
                    );
                    $relatedPosts = new WP_Query( $args );
                    if($relatedPosts->have_posts()){
                        while($relatedPosts->have_posts()){
                            $relatedPosts->the_post();
                            $permalink = get_permalink( $post_id );
                            $postin_id = get_the_ID();
                            if(get_permalink( $post_id ) == get_permalink( $postin_id )){
                                ?>
                                <span class="programs-page__nav-item programs-page__nav-current"><?php the_title(); ?></span>
                                <?php
                            } else {
                                ?>
                                <a class="programs-page__nav-item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <?php
                            }
                        }
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="programs-page__block-1 block-1 main-container template-content">
        <div class="programs-page__container programs-page__light-bg programs-page__padding">
            <div class="block-1__content">
                <?php echo the_field("kontent_bloka_1", $post_id); ?>
            </div>
            <?php
            if( have_rows('shagi', $post_id) ):
                $counter = 1;
                ?>
                    <div class="block-1__steps">
                <?php
                while( have_rows('shagi', $post_id) ) : the_row();
                    $title = get_sub_field('opisanie_shaga');
                    $image = get_sub_field('izobrazhenie_shaga');
                    ?>
                    <div class="block-1__step">
                        <div class="block-1__bg">
                            <img src="<?php echo $image;?>" alt="<?php echo $title;?>">
                        </div>
                        <div class="block-1__digit">
                            <?php echo $counter;?>
                            <span><?php echo the_field("slovo_etap", 'options'); ?></span>
                        </div>
                        <div class="block-1__desc">
                            <?php echo $title;?>
                        </div>
                    </div>
                    <svg width="19" height="23" viewBox="0 0 19 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 11.5L0.249999 22.3253L0.25 0.674682L19 11.5Z" fill="#C1272D"/>
                    </svg>
                    <?php
                    ?>
                <?php
                    $counter ++;
                endwhile;
                ?>
                    </div>
                <?php
            endif;
            ?>
        </div>
    </section>
    <section class="programs-page__block-2 block-1 block-2 main-container template-content">
        <div class="programs-page__container programs-page__light-bg programs-page__padding">
            <div class="block-1__content text">
                <?php echo the_field("opisanie_vtoroj_sekczii", $post_id); ?>
                <img src="<?php the_field("izobrazhenie_vtoroj_sekczii", $post_id); ?>" alt="">
            </div>
        </div>
    </section>
    <section class="programs-page__block-3 block-3 main-container template-content">
        <div class="programs-page__container programs-page__light-bg programs-page__padding">
            <div class="block-1__content text">
                <?php echo the_field("opisanie_tretej_sekczii", $post_id); ?>
                            </div>
        </div>
        <div class="programs-page__modal-btn">
            <div class="button red-button js-modal" data-aos="fade-up" data-aos-delay="800"><span>Связаться с нами</span></div>
        </div>
    </section>
    <footer id="footer" class="footer footer__static">
        <div class="footer__success" style="display: none">
            <div class="footer__success__container">
                <p><?php echo the_field("pismo_otpravleno_uspeshno", 'options'); ?></p>
            </div>
        </div>
        <div class="footer__modal" style="display: none">
            <div class="footer__modal-container">
                <div class="footer__modal-close">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                        <rect x="25.6055" y="14.8794" width="2" height="15.1702" rx="1" transform="rotate(45 25.6055 14.8794)" fill="#A0BCC8"/>
                        <rect x="14.9121" y="16.3276" width="2" height="15.0751" rx="1" transform="rotate(-45 14.9121 16.3276)" fill="#A0BCC8"/>
                    </svg>
                </div>
                <h2 class="footer__modal-title section-title">
                    Связаться с нами
                </h2>
                <div class="footer__modal__socials">
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
                <?php echo do_shortcode('[contact-form-7 id="14" title="footer form"]'); ?>
            </div>
        </div>
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