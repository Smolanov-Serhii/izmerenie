<?php /* Template Name: Головна сторінка */ ?>
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
        <section class="banner height-section scroll-section">
            <div class="banner__decoration position1">
                <img class="left" src="<?php echo get_template_directory_uri(); ?>/img/banner/left1.png" alt="decoration">
                <img class="top" src="<?php echo get_template_directory_uri(); ?>/img/banner/top1.png" alt="decoration">
                <img class="right" src="<?php echo get_template_directory_uri(); ?>/img/banner/right1.png" alt="decoration">
            </div>
            <div class="banner__container main-container">
                <div class="banner__content">
                    <div class="swiper-container">
                        <div class="banner__wrapper swiper-wrapper">
                            <?php
                            $counter = 1;
                            $last =0;
                            if( have_rows('slajder', $post_id) ):
                                while( have_rows('slajder', $post_id) ) : the_row();
                                    $last ++;
                                endwhile;
                            endif;
                                if( have_rows('slajder', $post_id) ):
                                    while( have_rows('slajder', $post_id) ) : the_row();
                                        $sub_title = get_sub_field('zagolovok_slajdu');
                                        $sub_image = get_sub_field('zobrazhennya_slajdu');
                                        $sub_lnk = get_sub_field('posylannya_na_knopku');
                                        $sub_repeater = get_sub_field('logotypy');
                                        $sub_btn = get_sub_field('nadpis_na_knopke');
                                        $sub_color = get_sub_field('czvet_teni');
                                        ?>
                                        <div class="banner__slide swiper-slide <?php echo ' swiper-slide-num' . $counter?><?php if($counter == $last){echo ' last-slide';};?> <?php if($counter == 1){echo 'first-slide';};?>" data-img="<?php echo $sub_image; ?>" data-color="<?php echo $sub_color ?>" data-count="<?php echo get_template_directory_uri() . '/img/banner/left' . $counter . '.png' ?>" data-up="<?php echo get_template_directory_uri() . '/img/banner/top' . $counter . '.png' ?>" data-right="<?php echo get_template_directory_uri() . '/img/banner/right' . $counter . '.png' ?>" data-position="<?php echo $counter ?>">
                                            <div class="banner__block">
                                                <h2 class="banner__title" data-aos="fade-right" data-aos-delay="300">
                                                    <?php echo $sub_title; ?>
                                                </h2>
                                                <?php
                                                if( have_rows('logotypy', $post_id) ):
                                                    ?>
                                                    <div class="banner__logos" data-aos="fade-up" data-aos-delay="500">
                                                    <?php
                                                    while( have_rows('logotypy', $post_id) ) : the_row();
                                                        $subin_title = get_sub_field('opys_logotypu');
                                                        $subin_image = get_sub_field('logotyp_v_slajd');
                                                        $subin_lnk = get_sub_field('posilannya_dlya_logotypa');
                                                        if($subin_lnk){
                                                            ?>
                                                            <a href="<?php echo $subin_lnk; ?>" class="banner__logo">
                                                                <img src="<?php echo $subin_image; ?>" alt="<?php echo $subin_title; ?>">
                                                            </a>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <div class="banner__logo">
                                                                <img src="<?php echo $subin_image; ?>" alt="<?php echo $subin_title; ?>">
                                                            </div>
                                                            <?php
                                                        }
                                                        ?>

                                                        <?php

                                                    endwhile;
                                                    ?>
                                                        </div>
                                                            <?php
                                                endif;
                                                ?>
                                            </div>
                                            <a class="button red-button banner__button" href="<?php echo $sub_lnk; ?>" data-aos="fade-right" data-aos-delay="800"><span><?php echo $sub_btn; ?></span></a>
                                        </div>
                                        <?php
                                        $counter ++;
                                    endwhile;
                                endif;
                            ?>
                        </div>
<!--                        <div class="banner__bottom" data-aos="fade-up" data-aos-delay="600">-->
<!--                            --><?php //echo the_field("napys_skrolte_vnyz", $post_id); ?>
<!--                        </div>-->
                        <div class="swiper-pagination">
                            <div class="prev">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                                    <rect x="23.4853" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4853 13)" fill="#A0BCC8"/>
                                    <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                                </svg>
                            </div>
                            <div class="next">
                                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.2" cx="21" cy="21" r="21" transform="rotate(180 21 21)" fill="#BFD9EB"/>
                                    <rect x="18.5147" y="29" width="2" height="12" rx="1" transform="rotate(-135 18.5147 29)" fill="#A0BCC8"/>
                                    <rect x="27" y="20.5147" width="2" height="12" rx="1" transform="rotate(135 27 20.5147)" fill="#A0BCC8"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner__image">
                <div class="banner__mask">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/banner/bg1.jpg" alt="decoration">
                </div>
                <div class="banner__bg">

                </div>
            </div>
        </section>
        <section class="select height-section scroll-section">
            <div class="select__decoration">
                <img src="<?php echo get_template_directory_uri() . '/img/select/dec.png'; ?>" alt="decoration">
            </div>
            <div class="select__container">
                <div class="select__bg">
                    <img src="<?php echo get_template_directory_uri() . '/img/select/bg.jpg'; ?>" alt="bg">
                </div>
                <div class="select__left padding-left padding-right">
                    <h2 class="select__title section-title" data-aos="fade-right" data-aos-delay="300">
                        <?php echo the_field("zagolovok_bloku_vybir_sylnyh", $post_id); ?>
                    </h2>
                    <div class="select__content" data-aos="fade-up" data-aos-delay="500">
                        <?php echo the_field("opys_bloku_vybir_sylnyh", $post_id); ?>
                    </div>
                    <a class="button red-button select__button" href="<?php the_field("posylannya_na_knopku_vybir_sylnh", $post_id); ?>" data-aos="fade-up"><span>Подробнее</span></a>
                </div>
                <?php
                    $video = get_field("posilannya_na_video", $post_id);
                    if($video){
                        ?>
                        <div class="select__video">
                            <div class="select__video-btn fresco" href='<?php the_field("posilannya_na_video", $post_id); ?>'>
                                <img src="<?php echo get_template_directory_uri() . '/img/select/video-btn.svg'; ?>" alt="">
                            </div>
                        </div>
                        <?php
                    }
                ?>

            </div>
        </section>
        <section class="power height-section vertical-center scroll-section">
            <div class="power__wrapper">
                <div class="power__decoration">
                    <img class="power__decoration-left" src="<?php echo get_template_directory_uri() . '/img/power/dec-left.png'; ?>" alt="decoration">
                    <img class="power__decoration-right" src="<?php echo get_template_directory_uri() . '/img/power/dec-right.svg'; ?>" alt="decoration">
                </div>
                <h2 class="power__title section-title main-container" data-aos="fade-right" data-aos-delay="200">
                    <?php echo the_field("zagolovok_bloku_4_syly", $post_id); ?>
                    <svg class="default-power" width="39" height="33" viewBox="0 0 39 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1415_4326)">
                            <path d="M39.0002 17.5837C38.6117 18.0062 38.2901 18.3555 37.9248 18.7538C35.9293 16.9468 33.9428 15.1479 31.8526 13.2551V13.8715C31.8526 19.8257 31.8526 25.7799 31.8526 31.7342C31.8526 32.7319 31.6231 32.9597 30.6218 32.9597C23.1803 32.9597 15.7388 32.9597 8.29737 32.9597C7.38628 32.9597 7.12457 32.7024 7.12457 31.8048C7.12457 25.821 7.12457 19.8364 7.12457 13.8527C7.12457 13.675 7.12457 13.4981 7.12457 13.1819C5.05854 15.0791 3.07558 16.9004 1.06046 18.7512C0.721038 18.3849 0.382506 18.0187 0.00109863 17.6078C0.505771 17.1371 0.997045 16.6726 1.49546 16.2153C3.55524 14.3261 5.61859 12.4414 7.67748 10.5514C9.84623 8.56125 12.0123 6.56667 14.1793 4.57568C15.6567 3.21797 17.1332 1.85848 18.6159 0.505249C19.2224 -0.0476578 19.4993 -0.0431917 20.1013 0.501676C23.6162 3.68602 27.1283 6.87305 30.645 10.0556C33.2684 12.4298 35.8971 14.7986 38.5232 17.1693C38.6769 17.3077 38.8367 17.4408 39.0002 17.5828V17.5837ZM19.3796 1.95495C19.2966 2.01301 19.2447 2.0416 19.2019 2.0809C17.5172 3.63243 15.8362 5.18664 14.1507 6.73549C12.4428 8.30489 10.7261 9.86446 9.02803 11.4446C8.86368 11.5973 8.71183 11.8564 8.70736 12.0698C8.6761 13.4829 8.68414 14.8978 8.68325 16.3118C8.68235 20.5841 8.68325 24.8564 8.68325 29.1278C8.68325 29.8647 8.68325 30.6016 8.68325 31.343H13.9167C13.9167 30.188 13.9167 29.0599 13.9167 27.9317C13.9167 25.1029 13.9158 22.274 13.9175 19.4452C13.9175 18.7261 14.2418 18.4064 14.9412 18.4064C17.9031 18.4064 20.8651 18.4037 23.8279 18.4046C24.8345 18.4046 25.0641 18.6386 25.0641 19.6328C25.0641 23.37 25.0641 27.1064 25.0641 30.8436V31.3376H30.2698C30.2805 31.2197 30.2948 31.1322 30.2948 31.0446C30.2957 24.7465 30.2984 18.4492 30.285 12.1511C30.285 11.9644 30.1537 11.7304 30.0108 11.5982C28.16 9.89751 26.2985 8.21021 24.4362 6.52291C22.7614 5.00532 21.083 3.49219 19.3823 1.95406L19.3796 1.95495ZM15.5361 19.9945V31.3403H23.4474V19.9945H15.5361Z" fill="#213540"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_1415_4326">
                                <rect width="39" height="32.8671" fill="white" transform="translate(0 0.0927734)"/>
                            </clipPath>
                        </defs>
                    </svg>

                </h2>
                <div class="power__container main-container tabs-elements">
                    <div class="power__nav">
                        <div class="power__nav-item power__nav-else tabs-nav-item" data-aos="fade-right" data-aos-delay="100">

                        </div>
                        <?php
                        $counter = 200;
                        $page_children = new WP_Query(array(
                                'post_type' => 'page',
                                'post_parent' => 140 // из основного цикла
                            )
                        );

                        if($page_children->have_posts()) :
                            while($page_children->have_posts()): $page_children->the_post();
                                ?>
                                <div class="power__nav-item tabs-nav-item" data-aos="fade-right" data-aos-delay="<?php echo $counter;?>">
                                    <?php the_title(); ?>
<!--                                    <span class="arrow"></span>-->
<!--                                    <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.17155 0.496976L4.35353 4.38589C4.54879 4.62453 4.54879 5.01145 4.35353 5.25009L1.17155 9.13901C0.976284 9.37765 0.659702 9.37765 0.46444 9.13901C0.269178 8.90037 0.269178 8.51345 0.46444 8.27481L3.29287 4.81799L0.46444 1.36118C0.269178 1.12254 0.269178 0.735619 0.46444 0.496976C0.659702 0.258332 0.976284 0.258332 1.17155 0.496976Z" fill="#213540"/>-->
<!--                                    </svg>-->
                                </div>
                            <?php
                                $counter = $counter + 100;
                            endwhile;
                        endif;
                        wp_reset_query(); //обнуляем запрос
                        ?>
                    </div>
                    <div class="power__content" data-aos="fade-up" data-aos-delay="500">
                        <div class="power__content-item tabs-content-item">
                            <?php echo the_field("opys_bloku_4_syly"); ?>
                            <a class="button red-button power__button" href="<?php echo the_field("posilannya_na_storinku_bloku_4_syly"); ?>"><span>Больше</span></a>
                        </div>
                        <?php
                        $page_children = new WP_Query(array(
                                'post_type' => 'page',
                                'post_parent' => 140 // из основного цикла
                            )
                        );
                        $post_id = get_the_ID();
                        if($page_children->have_posts()) :
                            while($page_children->have_posts()): $page_children->the_post();
                                ?>
                                <div class="power__content-item tabs-content-item">
                                    <?php echo the_field("korotkyj_opys_dlya_golovnoyi_storinky"); ?>
                                    <a class="button red-button power__button" href="<?php the_permalink();?>"><span>Больше</span></a>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_query(); //обнуляем запрос
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="programs height-section vertical-center scroll-section">
            <div class="programs__container main-container">
                <div class="programs__decoration">
                    <img class="programs__decoration-left" src="<?php echo get_template_directory_uri() . '/img/programs/dec-left.svg'; ?>" alt="decoration">
                    <img class="programs__decoration-right" src="<?php echo get_template_directory_uri() . '/img/programs/dec-right.svg'; ?>" alt="decoration">
                </div>
                <div class="programs__list">
                    <?php
                    $terms = get_terms(
                        array(
                            'taxonomy'   => 'programs-category',
                            'hide_empty' => true,
                            'hierarchical' => false,
                            'orderby' => 'ASC',
                            'order' => 'ASC',
                        )
                    );
                    $counter = 100;
                    foreach ( $terms as $term ) { ?>
                        <?php
                        $queried_object = get_queried_object();
                        $taxonomy = 'programs-category';
                        $image = get_field('zobrazhennya_taksonomiyi', $term->taxonomy . '_' . $term->term_id);
                        $title = get_field('perevody_kategorii', $term->taxonomy . '_' . $term->term_id);
                        ?>
                        <div class="programs__list-item" data-aos="fade-right" data-aos-delay="<?php echo $counter;?>">
                                    <span class="programs__list-bg">
                                        <img src="<?php echo $image; ?>" alt="<?php echo $term->name; ?>">
                                    </span>
                            <h3><?php echo $title; ?>
                                <div class="programs__list-show">
                                    <svg width="17" height="10" viewBox="0 0 17 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.707156 2.12139C0.316632 1.73086 0.316632 1.0977 0.707156 0.707174C1.09768 0.31665 1.73084 0.31665 2.12137 0.707174L9.19244 7.77824C9.58296 8.16877 9.58296 8.80193 9.19243 9.19246C8.80191 9.58298 8.16875 9.58298 7.77822 9.19246L0.707156 2.12139Z" fill="#FFFFFF"/>
                                        <path d="M9.19243 9.19246C8.80191 9.58298 8.16875 9.58298 7.77822 9.19246C7.3877 8.80193 7.3877 8.16877 7.77822 7.77824L14.8493 0.707175C15.2398 0.316651 15.873 0.316651 16.2635 0.707175C16.654 1.0977 16.654 1.73087 16.2635 2.12139L9.19243 9.19246Z" fill="#FFFFFF"/>
                                    </svg>
                                </div>
                            </h3>
                            <ul class='programs__list-chield'>
                                <?php
                                $args = array(
                                    'post_type' => 'programs',
                                    'post_status' => 'publish',
                                    'posts_per_page' => 0,
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'programs-category',
                                            'field' => 'name',
                                            'terms' => $term->name
                                        )
                                    )
                                );
                                $partnersList = new WP_Query( $args );
                                if($partnersList->have_posts()) {
                                    while($partnersList->have_posts()) {
                                        $partnersList->the_post();
                                        ?>
                                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                        <?php
                                    }
                                }
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                    <?php
                        $counter = $counter + 200;
                    } ?>
                </div>
            </div>
        </section>
        <section class="person height-section vertical-center scroll-section">
            <h2 class="person__container-title main-container section-title" data-aos="fade-right" data-aos-delay="200">
                Команда
            </h2>
            <div class="person__decoration">
                <img class="person__decoration-left" src="<?php echo get_template_directory_uri() . '/img/person/dec-left.svg'; ?>" alt="decoration">
<!--                <img class="person__decoration-right" src="--><?php //echo get_template_directory_uri() . '/img/person/dec-right.svg'; ?><!--" alt="decoration">-->
            </div>
            <div class="person__container main-container">
                <div class="person__text">
                    <h3 class="person__title section-title" data-aos="fade-right" data-aos-delay="500">
                        Виктория журавлева
                    </h3>
                    <div class="person__content text" data-aos="fade-right" data-aos-delay="700">
                        <ul>
                            <li>Основатель и управляющий партнер компании с 2001 года</li>
                            <li>Консультант по управлению и организационному развитию</li>
                            <li>Автор и ведущая Менторских программ</li>
                            <li>Преподадватель МВА</li>
                            <li>Основатель и шеф-редактор ресурса SHORTBOOK</li>
                        </ul>
                    </div>
                </div>
                <div class="person__image" data-aos="fade-left" data-aos-delay="300">
                    <img src="<?php echo get_template_directory_uri() . '/img/person/img.png'; ?>" alt="Виктория журавлева">
                </div>
            </div>
        </section>
        <section class="team height-section vertical-center scroll-section">
            <div class="team__decoration">
                <img class="team__decoration-left" src="<?php echo get_template_directory_uri() . '/img/team/dec-left.svg'; ?>" alt="decoration">
                <img class="team__decoration-right" src="<?php echo get_template_directory_uri() . '/img/team/dec-right.svg'; ?>" alt="decoration">
            </div>
            <div class="team__container main-container">
                <div class="team__swiper swiper-container">
                    <div class="team__wrapper swiper-wrapper">
                        <div class="team__slide swiper-slide">
                            <a href="#" class="team__lnk"></a>
                            <div class="team__slide-img">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/1.png'; ?>" alt="Юлия Сохач">
                            </div>
                            <h2 class="team__name">
                                Юлия Сохач
                            </h2>
                            <div class="team__work">
                                бизнес-тренер, психолог, коуч<br>
                                консультант по управлению
                            </div>
                        </div>
                        <div class="team__slide swiper-slide">
                            <a href="#" class="team__lnk"></a>
                            <div class="team__slide-img">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/2.png'; ?>" alt="Ирина Михайлова">
                            </div>
                            <h2 class="team__name">
                                Ирина Михайлова
                            </h2>
                            <div class="team__work">
                                бизнес-тренер, консультант по разработке стратегий<br>
                                ментор, мотивационный спикер

                            </div>
                        </div>
                        <div class="team__slide swiper-slide">
                            <a href="#" class="team__lnk"></a>
                            <div class="team__slide-img">
                                <img src="<?php echo get_template_directory_uri() . '/img/team/3.png'; ?>" alt="Инесса Василенко">
                            </div>
                            <h2 class="team__name">
                                Инесса Василенко
                            </h2>
                            <div class="team__work">
                                менеджер проектов
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="reviews height-section vertical-center scroll-section" id="reviews">
            <div class="reviews__decoration">
<!--                <img class="reviews__decoration-left" src="--><?php //echo get_template_directory_uri() . '/img/reviews/dec-left.svg'; ?><!--" alt="decoration">-->
<!--                <img class="reviews__decoration-right" src="--><?php //echo get_template_directory_uri() . '/img/reviews/dec-right.svg'; ?><!--" alt="decoration">-->
            </div>
            <div class="reviews__container main-container">
                <div class="reviews__block">
                    <h2 class="reviews__title section-title">
                        Отзывы
                    </h2>
                    <div class="reviews__swiper swiper-container">
                        <div class="reviews__wrapper swiper-wrapper">
                            <?php
                            $args = array(
                                'post_type' => 'reviews',
                                'post_status' => 'publish',
                                'posts_per_page' => 0,
                                'orderby' => 'date',
                                'order' => 'DESC'
                            );
                            $partnersList = new WP_Query( $args );
                            if($partnersList->have_posts()) {
                                while($partnersList->have_posts()) {
                                    $partnersList->the_post();
                                    ?>
                                    <div class="reviews__slide swiper-slide">
                                        <div class="reviews__slide-header">
                                            <div class="reviews__slide-img">
                                                <img src="<?php echo the_field("logotip_kompanii"); ?>" alt="<?php echo the_field("nazvanie_kompanii"); ?>">
                                            </div>
                                            <h2 class="reviews__slide-name">
                                                <div class="fio">
                                                    <?php echo the_field("fio"); ?>
                                                </div>
                                                <div class="work">
                                                    <?php echo the_field("dolzhnost"); ?>
                                                </div>

                                            </h2>
                                        </div>
                                        <div class="reviews__slide-desc">
                                            <svg width="38" height="31" viewBox="0 0 38 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.2" d="M37.3144 0.00019455L37.3144 10.2504C37.3144 14.0268 36.6251 17.4735 35.2464 20.5905C33.8677 23.7076 31.5299 26.9445 28.2331 30.3013L22.1189 25.5358C25.3558 22.2989 27.3639 19.2418 28.1431 16.3646L20.6803 16.3646L20.6803 0.000193095L37.3144 0.00019455ZM16.6341 0.000192742L16.6341 10.2504C16.6341 14.0268 15.9448 17.4735 14.5661 20.5905C13.1874 23.7076 10.8497 26.9445 7.55281 30.3013L1.43864 25.5358C4.67556 22.2989 6.68364 19.2418 7.46289 16.3646L2.02919e-05 16.3646L2.17225e-05 0.000191287L16.6341 0.000192742Z" fill="#A0BCC8"/>
                                            </svg>
                                            <div class="reviews__slide-full">
                                                <?php echo the_field("otzyv"); ?>
                                            </div>
                                            <div class="reviews__slide-excerpt">
                                                <?php echo the_field("otzyv_korotkij"); ?>
                                            </div>
                                        </div>
                                        <div class="reviews__slide-more">Читать полностью</div>
                                    </div>
                                    <?php
                                }
                            }
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                    <div class="swiper-pagination">
                        <div class="prev">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                                <rect x="23.4853" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4853 13)" fill="#A0BCC8"/>
                                <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                            </svg>
                        </div>
                        <div class="next">
                            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle opacity="0.2" cx="21" cy="21" r="21" transform="rotate(180 21 21)" fill="#BFD9EB"/>
                                <rect x="18.5147" y="29" width="2" height="12" rx="1" transform="rotate(-135 18.5147 29)" fill="#A0BCC8"/>
                                <rect x="27" y="20.5147" width="2" height="12" rx="1" transform="rotate(135 27 20.5147)" fill="#A0BCC8"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        get_footer();
        ?>
    </main>
<div class="modal-rev" style="display: none">
    <div class="modal-rev__container">
        <div class="modal-rev__close">
            <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                <rect x="25.6055" y="14.8794" width="2" height="15.1702" rx="1" transform="rotate(45 25.6055 14.8794)" fill="#A0BCC8"/>
                <rect x="14.9121" y="16.3276" width="2" height="15.0751" rx="1" transform="rotate(-45 14.9121 16.3276)" fill="#A0BCC8"/>
            </svg>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<a href="#main" class="to-up">
    <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_d_381_1951)">
            <rect x="23" y="19" width="42" height="42" rx="21" fill="#A0BCC8"/>
        </g>
        <rect x="50.2795" y="41.0397" width="1.4" height="8.4" rx="0.7" transform="rotate(135 50.2795 41.0397)" fill="white"/>
        <rect x="44.3398" y="35.1" width="1.4" height="8.4" rx="0.7" transform="rotate(45 44.3398 35.1)" fill="white"/>
        <defs>
            <filter id="filter0_d_381_1951" x="0" y="0" width="88" height="88" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="11.5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0.756863 0 0 0 0 0.858824 0 0 0 0 0.929412 0 0 0 0.73 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_381_1951"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_381_1951" result="shape"/>
            </filter>
        </defs>
    </svg>
</a>
</body>
</html>