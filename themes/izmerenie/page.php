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
            <div class="banner__decoration">
                <img class="left" src="<?php echo get_template_directory_uri(); ?>/img/banner/left.svg" alt="decoration">
                <img class="top" src="<?php echo get_template_directory_uri(); ?>/img/banner/top.svg" alt="decoration">
                <img class="right" src="<?php echo get_template_directory_uri(); ?>/img/banner/right.svg" alt="decoration">
            </div>
            <div class="banner__container main-container">
                <div class="banner__content">
                    <div class="swiper-container">
                        <div class="banner__wrapper swiper-wrapper">
                            <?php
                            $counter = 1;
                                if( have_rows('slajder', $post_id) ):
                                    while( have_rows('slajder', $post_id) ) : the_row();
                                        $sub_title = get_sub_field('zagolovok_slajdu');
                                        $sub_image = get_sub_field('zobrazhennya_slajdu');
                                        $sub_lnk = get_sub_field('posylannya_na_knopku');
                                        // Do something...
                                        ?>
                                        <div class="banner__slide swiper-slide <?php if($counter == 1){echo 'first-slide';};?>" data-img="<?php echo $sub_image; ?>">
                                            <div class="banner__block">
                                                <h2 class="banner__title">
                                                    <?php echo $sub_title; ?>
                                                </h2>
                                            </div>
                                            <a class="button red-button banner__button" href="<?php echo $sub_lnk; ?>"><span>Больше</span></a>
                                        </div>
                                        <?php
                                        $counter ++;
                                    endwhile;
                                endif;
                            ?>
                        </div>
                        <div class="banner__bottom">
                            скрольте вниз
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
                <img src="<?php echo get_template_directory_uri() . '/img/select/dec.svg'; ?>" alt="decoration">
            </div>
            <div class="select__container">
                <div class="select__bg">
                    <img src="<?php echo get_template_directory_uri() . '/img/select/bg.jpg'; ?>" alt="bg">
                </div>
                <div class="select__left padding-left padding-right">
                    <h2 class="select__title section-title">
                        Выбор сильных
                    </h2>
                    <div class="select__content">
                        <p>Каждая земля рождает свои мифы и легенды, так земля говорит с людьми, которые поселились на ней и выбрали ее, как родину.</p>
                        <p>Когда-то много лет назад, мы команда Четвертого измерения, столкнулись с одной из таких легенд, она называлась «Выбор сильных».
                            Эта легенда помогла нам понять, кто мы, как мы хотим работать и что должны делать. Тогда мы еще не знали, что судьба так сложится, что нам придется стать частью этой истории и воплощать ее.</p>
                        <p>Если вы хотите понять, что для нас важно и чем мы отличаемся от других, узнайте об этой легенде, которая сопровождает нашу деятельность уже более двадцати лет.</p>
                    </div>
                    <a class="button red-button select__button" href="<?php echo get_home_url() . '/legend'; ?>"><span>Подробнее</span></a>
                </div>
                <div class="select__video">
                    <div class="select__video-btn fresco" href="https://www.youtube.com/watch?v=4IHa7cL8l-c&ab_channel=%D0%9D%D0%BE%D0%B2%D0%B8%D0%BD%D0%B8.LIVE">
                        <img src="<?php echo get_template_directory_uri() . '/img/select/video-btn.svg'; ?>" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="power height-section vertical-center scroll-section">
            <div class="power__decoration">
                <img class="power__decoration-left" src="<?php echo get_template_directory_uri() . '/img/power/dec-left.svg'; ?>" alt="decoration">
                <img class="power__decoration-right" src="<?php echo get_template_directory_uri() . '/img/power/dec-right.svg'; ?>" alt="decoration">
            </div>
            <div class="power__wrapper">
                <h2 class="power__title section-title main-container">
                    4 силы
                </h2>
                <div class="power__container main-container tabs-elements">
                    <div class="power__nav">
                        <?php
                        $page_children = new WP_Query(array(
                                'post_type' => 'page',
                                'post_parent' => 140 // из основного цикла
                            )
                        );

                        if($page_children->have_posts()) :
                            while($page_children->have_posts()): $page_children->the_post();
                                ?>
                                <div class="power__nav-item tabs-nav-item">
                                    <?php the_title(); ?>
                                    <span class="arrow"></span>
                                    <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.17155 0.496976L4.35353 4.38589C4.54879 4.62453 4.54879 5.01145 4.35353 5.25009L1.17155 9.13901C0.976284 9.37765 0.659702 9.37765 0.46444 9.13901C0.269178 8.90037 0.269178 8.51345 0.46444 8.27481L3.29287 4.81799L0.46444 1.36118C0.269178 1.12254 0.269178 0.735619 0.46444 0.496976C0.659702 0.258332 0.976284 0.258332 1.17155 0.496976Z" fill="#213540"/>
                                    </svg>
                                </div>
                            <?php
                            endwhile;
                        endif;
                        wp_reset_query(); //обнуляем запрос
                        ?>
                    </div>
                    <div class="power__content">
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
            <div class="programs__decoration">
                <img class="programs__decoration-left" src="<?php echo get_template_directory_uri() . '/img/programs/dec-left.svg'; ?>" alt="decoration">
                <img class="programs__decoration-right" src="<?php echo get_template_directory_uri() . '/img/programs/dec-right.svg'; ?>" alt="decoration">
            </div>
            <div class="programs__container main-container">
                <div class="programs__list">
                    <?php
                    $page_children = new WP_Query(array(
                            'post_type' => 'page',
                            'post_parent' => 78 // из основного цикла
                        )
                    );

                    if($page_children->have_posts()) :
                        while($page_children->have_posts()): $page_children->the_post();
                            ?>
                            <a href="<?php the_permalink();?>" class="programs__list-item">
                                    <span class="programs__list-bg">
                                        <?php the_post_thumbnail(); ?>
                                    </span>
                                <h3><?php the_title(); ?></h3>
                            </a>
                        <?php
                        endwhile;
                    endif;
                    wp_reset_query(); //обнуляем запрос
                    ?>
                </div>
            </div>
        </section>
        <section class="person height-section vertical-center scroll-section">
            <h2 class="person__container-title main-container section-title">
                Команда
            </h2>
            <div class="person__decoration">
                <img class="person__decoration-left" src="<?php echo get_template_directory_uri() . '/img/person/dec-left.svg'; ?>" alt="decoration">
                <img class="person__decoration-right" src="<?php echo get_template_directory_uri() . '/img/person/dec-right.svg'; ?>" alt="decoration">
            </div>
            <div class="person__container main-container">
                <div class="person__text">
                    <h3 class="person__title section-title">
                        Виктория журавлева
                    </h3>
                    <div class="person__content text">
                        <ul>
                            <li>Основатель и управляющий партнер компании с 2001 года</li>
                            <li>Консультант по управлению и организационному развитию</li>
                            <li>Автор и ведущая Менторских программ</li>
                            <li>Преподадватель МВА</li>
                            <li>Основатель и шеф-редактор ресурса SHORTBOOK</li>
                        </ul>
                    </div>
                </div>
                <div class="person__image">
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
        <section class="reviews height-section vertical-center scroll-section">
            <div class="reviews__decoration">
                <img class="reviews__decoration-left" src="<?php echo get_template_directory_uri() . '/img/reviews/dec-left.svg'; ?>" alt="decoration">
                <img class="reviews__decoration-right" src="<?php echo get_template_directory_uri() . '/img/reviews/dec-right.svg'; ?>" alt="decoration">
            </div>
            <div class="reviews__container main-container">
                <div class="reviews__block">
                    <h2 class="reviews__title section-title">
                        Отзывы
                    </h2>
                    <div class="reviews__swiper swiper-container">
                        <div class="reviews__wrapper swiper-wrapper">
                            <div class="reviews__slide swiper-slide">
                                <div class="reviews__slide-header">
                                    <div class="reviews__slide-img">
                                        <img src="<?php echo get_template_directory_uri() . '/img/reviews/ecosoft.png'; ?>" alt="Ecosoft Corporation">
                                    </div>
                                    <h2 class="reviews__slide-name">
                                        Ecosoft Corporation
                                    </h2>
                                </div>
                                <div class="reviews__slide-desc">
                                    <svg width="38" height="31" viewBox="0 0 38 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2" d="M37.3144 0.00019455L37.3144 10.2504C37.3144 14.0268 36.6251 17.4735 35.2464 20.5905C33.8677 23.7076 31.5299 26.9445 28.2331 30.3013L22.1189 25.5358C25.3558 22.2989 27.3639 19.2418 28.1431 16.3646L20.6803 16.3646L20.6803 0.000193095L37.3144 0.00019455ZM16.6341 0.000192742L16.6341 10.2504C16.6341 14.0268 15.9448 17.4735 14.5661 20.5905C13.1874 23.7076 10.8497 26.9445 7.55281 30.3013L1.43864 25.5358C4.67556 22.2989 6.68364 19.2418 7.46289 16.3646L2.02919e-05 16.3646L2.17225e-05 0.000191287L16.6341 0.000192742Z" fill="#A0BCC8"/>
                                    </svg>
                                    In consectetur odio egestas tortor dolor cursus vel odio. Integer non quam senectus justo mauris tempus. Posuere fames dolor sit augue scelerisque etiam sed augue. Diam, sapien, mollis ac pellentesque magna vulputate. Neque sed bibendum accumsan mattis.
                                </div>
                            </div>
                            <div class="reviews__slide swiper-slide">
                                <div class="reviews__slide-header">
                                    <div class="reviews__slide-img">
                                        <img src="<?php echo get_template_directory_uri() . '/img/reviews/mandel.png'; ?>" alt="Ecosoft Corporation">
                                    </div>
                                    <h2 class="reviews__slide-name">
                                        Ecosoft Corporation
                                    </h2>
                                </div>
                                <div class="reviews__slide-desc">
                                    <svg width="38" height="31" viewBox="0 0 38 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.2" d="M37.3144 0.00019455L37.3144 10.2504C37.3144 14.0268 36.6251 17.4735 35.2464 20.5905C33.8677 23.7076 31.5299 26.9445 28.2331 30.3013L22.1189 25.5358C25.3558 22.2989 27.3639 19.2418 28.1431 16.3646L20.6803 16.3646L20.6803 0.000193095L37.3144 0.00019455ZM16.6341 0.000192742L16.6341 10.2504C16.6341 14.0268 15.9448 17.4735 14.5661 20.5905C13.1874 23.7076 10.8497 26.9445 7.55281 30.3013L1.43864 25.5358C4.67556 22.2989 6.68364 19.2418 7.46289 16.3646L2.02919e-05 16.3646L2.17225e-05 0.000191287L16.6341 0.000192742Z" fill="#A0BCC8"/>
                                    </svg>
                                    In consectetur odio egestas tortor dolor cursus vel odio. Integer non quam senectus justo mauris tempus. Posuere fames dolor sit augue scelerisque etiam sed augue. Diam, sapien, mollis ac pellentesque magna vulputate. Neque sed bibendum accumsan mattis.
                                </div>
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
            </div>
        </section>
        <?php
        get_footer();
        ?>
    </main>
<?php wp_footer(); ?>
<a href="#main" class="to-up">
    <svg width="106" height="106" viewBox="0 0 106 106" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_d_381_1971)">
            <rect x="23" y="19" width="60" height="60" rx="30" fill="#A0BCC8"/>
        </g>
        <rect x="61.9707" y="50.4854" width="2" height="12" rx="1" transform="rotate(135 61.9707 50.4854)" fill="white"/>
        <rect x="53.4854" y="42.0001" width="2" height="12" rx="1" transform="rotate(45 53.4854 42.0001)" fill="white"/>
        <defs>
            <filter id="filter0_d_381_1971" x="0" y="0" width="106" height="106" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="4"/>
                <feGaussianBlur stdDeviation="11.5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0.756863 0 0 0 0 0.858824 0 0 0 0 0.929412 0 0 0 0.73 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_381_1971"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_381_1971" result="shape"/>
            </filter>
        </defs>
    </svg>
</a>
</body>
</html>