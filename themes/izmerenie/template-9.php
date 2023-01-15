<?php
/*
Template name: Лидерские конференции
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
            <div class="block-1__content text">
                <?php echo the_field("opisanie_pervogo_bloka", $post_id); ?>
            </div>
            <img src="<?php echo the_field("izobrazhenie_pervogo_bloka", $post_id); ?>">
        </div>
    </section>
    <section class="programs-page__block-1 block-1 main-container template-content">
        <div class="programs-page__container programs-page__light-bg programs-page__padding">
            <div class="block-1__content text">
                <?php echo the_field("opisanie_vtorogo_bloka", $post_id); ?>
            </div>
        </div>
    </section>
    <section class="programs-page__block-1 block-1 main-container template-content">
        <div class="programs-page__container programs-page__light-bg programs-page__padding">
            <img class="margin-bottom-small" src="<?php echo the_field("izobrazhenie_tretego_bloka", $post_id); ?>">
            <div class="block-1__content text">
                <?php echo the_field("opisanie_tretego_bloka", $post_id); ?>
            </div>
            <?php
            if( have_rows('otzivi', $post_id) ):
                ?>
                <div class="programs-page__revs">
                    <?php
                    while( have_rows('otzivi', $post_id) ) : the_row();
                        $fio = get_sub_field('fio');
                        $work = get_sub_field('dolzhnost');
                        $desc = get_sub_field('opisanie');
                        $image = get_sub_field('izobrazhenie');
                        $alt = get_sub_field('opisanie_pod_foto');
                        ?>
                        <div class="programs-page__rev">
                            <div class="programs-page__rev-top">
                                <div class="programs-page__rev-fio">
                                    <?php echo $fio;?>
                                </div>
                                <div class="programs-page__rev-work">
                                    <?php echo $work;?>
                                </div>
                            </div>
                            <div class="programs-page__rev-bottom">
                                <svg width="98" height="79" viewBox="0 0 98 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2" d="M5.52734 78.4336L0.271485 71.0215C8.08789 65.1816 13.8828 59.4316 17.6563 53.7715C21.3398 48.1113 23.1816 42.3613 23.1816 36.5215L23.1816 34.6348C21.9238 34.8144 20.7559 34.9492 19.6777 35.0391C18.5098 35.2187 17.3867 35.3086 16.3086 35.3086C11.457 35.3086 7.54883 33.7363 4.58399 30.5918C1.5293 27.5371 0.00195792 23.6289 0.00195833 18.8672C0.00195884 13.1172 1.61915 8.53515 4.85352 5.12109C8.0879 1.70702 12.4453 -7.43025e-06 17.9258 -6.95114e-06C24.125 -6.40918e-06 29.291 2.38085 33.4238 7.14257C37.4668 11.9043 39.4883 18.0137 39.4883 25.4707C39.4883 35.4434 36.6582 44.8769 30.998 53.7715C25.248 62.7559 16.7578 70.9766 5.52734 78.4336ZM63.7461 78.4336L58.4902 71.0215C66.3066 65.1816 72.1016 59.4316 75.875 53.7715C79.5586 48.1113 81.4004 42.3613 81.4004 36.5215L81.4004 34.6348C80.0527 34.8145 78.8398 34.9492 77.7617 35.0391C76.5938 35.2187 75.5156 35.3086 74.5273 35.3086C69.7656 35.3086 65.8125 33.7363 62.668 30.5918C59.5234 27.4473 57.9512 23.5391 57.9512 18.8672C57.9512 13.1172 59.6133 8.53515 62.9375 5.12109C66.2617 1.70703 70.6641 -2.34061e-06 76.1445 -1.86149e-06C82.3438 -1.31954e-06 87.4649 2.38086 91.5078 7.14258C95.4609 11.9043 97.4375 18.0137 97.4375 25.4707C97.4375 35.7129 94.6074 45.2812 88.9473 54.1758C83.2871 63.0703 74.8867 71.1562 63.7461 78.4336Z" fill="#A0BCC8"/>
                                </svg>
                                <div class="programs-page__rev-desc">
                                    <?php echo $desc;?>
                                </div>
                                <?php if($image){
                                    ?>
                                    <div class="programs-page__rev-img">
                                        <img src="<?php echo $image;?>" alt="<?php echo $alt;?>">
                                        <p><?php echo $alt;?></p>
                                    </div>
                                    <?php
                                }?>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    ?>
                </div>
            <?php
            endif;
            ?>
        </div>
        <div class="programs-page__modal-btn">
            <div class="button red-button js-modal" data-aos="fade-up" data-aos-delay="800"><span>Связаться с нами</span></div>
        </div>
    </section>
    <footer id="footer" class="footer footer__static">
        <div class="footer__success" style="display: none">
            <div class="footer__success__container">
                <p><?php echo the_field("opisanie_tretego_bloka", 'options'); ?></p>
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