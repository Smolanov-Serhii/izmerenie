<?php
/*
Template name: Оценка персонала
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
                        'orderby' => 'date',
                        'order' => 'DESC',
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

</main>
<?php wp_footer(); ?>
</body>
</html>