<?php /* Template Name: Команда */ ?>
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
    <section class="team-page height-section vertical-center scroll-section">
        <div class="team-page__container main-container">
            <div class="back-button" onclick="window.history.back()">
                <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
                    <rect x="23.4854" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4854 13)" fill="#A0BCC8"/>
                    <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
                </svg>
            </div>
            <h1 class="team-page__title page-title">
                <?php echo the_field("zagolovok_storinky", $post_id); ?>
            </h1>
            <div class="team-page__content">
                <?php echo the_field("opys_storinky", $post_id); ?>
            </div>
        </div>
    </section>
    <?php
        $counter = 0;
        if( have_rows('komanda') ):
            while( have_rows('komanda') ) : the_row();
                $img = get_sub_field('fotografiya_spivrobitnyka');
                $fio = get_sub_field('fio');
                $about = get_sub_field('opys');
                ?>
                <section class="person height-section vertical-center scroll-section">
<!--                    --><?php
//                        if($counter == 0) {
//                            ?>
<!--                            -->
<!--                            --><?php
//                        }
//                        $counter++;
//                    ?>
                    <div class="person__decoration">
                        <img class="person__decoration-left" src="<?php echo get_template_directory_uri() . '/img/person/dec-left.svg'; ?>" alt="decoration">
                        <img class="person__decoration-right" src="<?php echo get_template_directory_uri() . '/img/person/dec-right.svg'; ?>" alt="decoration">
                    </div>
                    <div class="person__container main-container">
                        <div class="person__item">
                            <div class="person__text">
                                <h2 class="person__title section-title">
                                    <?php echo $fio;?>
                                </h2>
                                <div class="person__content text">
                                    <?php echo $about;?>
                                </div>
                            </div>
                            <div class="person__image">
                                <img src="<?php echo $img ?>" alt="<?php echo $fio;?>">
                            </div>
                        </div>
                    </div>
                </section>
                <?php
            endwhile;
        endif;
    ?>
</main>
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
<?php wp_footer(); ?>
</body>
</html>