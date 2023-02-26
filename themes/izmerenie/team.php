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
        <div class="team-page__decoration">
            <svg class="right" width="451" height="602" viewBox="0 0 451 602" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g opacity="0.2" filter="url(#filter0_d_1101_3953)">
                    <path d="M76.5 287.507C49.1667 271.726 49.1667 232.274 76.5 216.493L507 -32.0564C534.333 -47.8373 568.5 -28.1111 568.5 3.45069L568.5 500.549C568.5 532.111 534.333 551.837 507 536.056L76.5 287.507Z" fill="white"/>
                </g>
                <g opacity="0.2" filter="url(#filter1_d_1101_3953)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M508 -30.3243L77.5 218.225C51.5 233.236 51.5 270.764 77.5 285.775L508 534.324C534 549.335 566.5 530.571 566.5 500.549L566.5 3.45069C566.5 -26.5715 534 -45.3354 508 -30.3243ZM76.5 216.493C49.1667 232.274 49.1667 271.726 76.5 287.507L507 536.056C534.333 551.837 568.5 532.111 568.5 500.549L568.5 3.45069C568.5 -28.1111 534.333 -47.8373 507 -32.0564L76.5 216.493Z" fill="#BFD9EB"/>
                </g>
                <defs>
                    <filter id="filter0_d_1101_3953" x="0" y="-89.6105" width="624.5" height="691.221" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="28"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.627451 0 0 0 0 0.737255 0 0 0 0 0.780392 0 0 0 0.54 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1101_3953"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1101_3953" result="shape"/>
                    </filter>
                    <filter id="filter1_d_1101_3953" x="0" y="-89.6105" width="624.5" height="691.221" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="28"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0.627451 0 0 0 0 0.737255 0 0 0 0 0.780392 0 0 0 0.54 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1101_3953"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1101_3953" result="shape"/>
                    </filter>
                </defs>
            </svg>
        </div>
        <div class="team-page__container main-container">
            <h1 class="team-page__title page-title">
                <?php echo the_field("zagolovok_storinky", $post_id); ?>
            </h1>
            <div class="team-page__content">
                <?php echo the_field("opys_storinky", $post_id); ?>
            </div>
        </div>
    </section>
    <?php
        $counter = 1;
        if( have_rows('komanda') ):
            while( have_rows('komanda') ) : the_row();
                $img = get_sub_field('fotografiya_spivrobitnyka');
                $fio = get_sub_field('fio');
                $about = get_sub_field('opys');
                ?>
                <section class="person height-section vertical-center scroll-section">
                    <?php if($counter == 1){
                        ?>
<!--                        <svg class="abs1" width="423" height="472" viewBox="0 0 423 472" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <g opacity="0.2" filter="url(#filter0_d_1101_3957)">-->
<!--                                <path d="M76.5 271.507C49.1667 255.726 49.1666 216.274 76.5 200.493L307.5 67.125C334.833 51.3441 369 71.0702 369 102.632L369 369.368C369 400.93 334.833 420.656 307.5 404.875L76.5 271.507Z" fill="white"/>-->
<!--                                <path d="M77 270.641C50.3334 255.245 50.3333 216.755 77 201.359L308 67.9911C334.667 52.595 368 71.84 368 102.632L368 369.368C368 400.16 334.667 419.405 308 404.009L77 270.641Z" stroke="#BFD9EB" stroke-width="2"/>-->
<!--                            </g>-->
<!--                            <defs>-->
<!--                                <filter id="filter0_d_1101_3957" x="0" y="9.57092" width="425" height="460.858" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">-->
<!--                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>-->
<!--                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>-->
<!--                                    <feOffset dy="4"/>-->
<!--                                    <feGaussianBlur stdDeviation="28"/>-->
<!--                                    <feComposite in2="hardAlpha" operator="out"/>-->
<!--                                    <feColorMatrix type="matrix" values="0 0 0 0 0.756863 0 0 0 0 0.858824 0 0 0 0 0.929412 0 0 0 1 0"/>-->
<!--                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1101_3957"/>-->
<!--                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1101_3957" result="shape"/>-->
<!--                                </filter>-->
<!--                            </defs>-->
<!--                        </svg>-->
                        <?php
                    } else if($counter == 2){
                        ?>
                        <svg width="525" height="692" viewBox="0 0 525 692" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.2" filter="url(#filter0_d_1101_3960)">
                                <path d="M448.5 306.493C475.833 322.274 475.833 361.726 448.5 377.507L17.9999 626.056C-9.3334 641.837 -43.5001 622.111 -43.5001 590.549L-43.5001 93.4506C-43.5001 61.8887 -9.33337 42.1626 17.9999 57.9435L448.5 306.493Z" fill="white"/>
                            </g>
                            <g opacity="0.2" filter="url(#filter1_d_1101_3960)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9999 624.324L447.5 375.775C473.5 360.764 473.5 323.236 447.5 308.225L16.9999 59.6756C-9.00006 44.6645 -41.5001 63.4283 -41.5001 93.4506L-41.5001 590.549C-41.5001 620.571 -9.00009 639.335 16.9999 624.324ZM448.5 377.507C475.833 361.726 475.833 322.274 448.5 306.493L17.9999 57.9435C-9.33337 42.1626 -43.5001 61.8887 -43.5001 93.4506L-43.5001 590.549C-43.5001 622.111 -9.3334 641.837 17.9999 626.056L448.5 377.507Z" fill="#BFD9EB"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_1101_3960" x="-99.5" y="0.389404" width="624.5" height="691.221" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="28"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.756863 0 0 0 0 0.858824 0 0 0 0 0.929412 0 0 0 1 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1101_3960"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1101_3960" result="shape"/>
                                </filter>
                                <filter id="filter1_d_1101_3960" x="-99.5" y="0.389404" width="624.5" height="691.221" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="28"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.756863 0 0 0 0 0.858824 0 0 0 0 0.929412 0 0 0 1 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1101_3960"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1101_3960" result="shape"/>
                                </filter>
                            </defs>
                        </svg>

                        <?php

                    } else if($counter == 3){
                        ?>
<!--                        <svg width="423" height="462" viewBox="0 0 423 462" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                            <g opacity="0.2" filter="url(#filter0_d_1101_3962)">-->
<!--                                <path d="M76.5 262.507C49.1667 246.726 49.1666 207.274 76.5 191.493L307.5 58.125C334.833 42.344 369 62.0701 369 93.632L369 360.368C369 391.93 334.833 411.656 307.5 395.875L76.5 262.507Z" fill="white"/>-->
<!--                            </g>-->
<!--                            <defs>-->
<!--                                <filter id="filter0_d_1101_3962" x="0" y="0.570801" width="425" height="460.858" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">-->
<!--                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>-->
<!--                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>-->
<!--                                    <feOffset dy="4"/>-->
<!--                                    <feGaussianBlur stdDeviation="28"/>-->
<!--                                    <feComposite in2="hardAlpha" operator="out"/>-->
<!--                                    <feColorMatrix type="matrix" values="0 0 0 0 0.756863 0 0 0 0 0.858824 0 0 0 0 0.929412 0 0 0 1 0"/>-->
<!--                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1101_3962"/>-->
<!--                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1101_3962" result="shape"/>-->
<!--                                </filter>-->
<!--                            </defs>-->
<!--                        </svg>-->


                        <?php
                    } else {
                        ?>
                        <svg width="525" height="692" viewBox="0 0 525 692" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.2" filter="url(#filter0_d_1101_3965)">
                                <path d="M448.5 306.493C475.833 322.274 475.833 361.726 448.5 377.507L17.9999 626.056C-9.3334 641.837 -43.5001 622.111 -43.5001 590.549L-43.5001 93.4506C-43.5001 61.8887 -9.33337 42.1626 17.9999 57.9435L448.5 306.493Z" fill="white"/>
                            </g>
                            <g opacity="0.2" filter="url(#filter1_d_1101_3965)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9999 624.324L447.5 375.775C473.5 360.764 473.5 323.236 447.5 308.225L16.9999 59.6756C-9.00006 44.6645 -41.5001 63.4283 -41.5001 93.4506L-41.5001 590.549C-41.5001 620.571 -9.00009 639.335 16.9999 624.324ZM448.5 377.507C475.833 361.726 475.833 322.274 448.5 306.493L17.9999 57.9435C-9.33337 42.1626 -43.5001 61.8887 -43.5001 93.4506L-43.5001 590.549C-43.5001 622.111 -9.3334 641.837 17.9999 626.056L448.5 377.507Z" fill="#BFD9EB"/>
                            </g>
                            <defs>
                                <filter id="filter0_d_1101_3965" x="-99.5" y="0.389404" width="624.5" height="691.221" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="28"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.756863 0 0 0 0 0.858824 0 0 0 0 0.929412 0 0 0 1 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1101_3965"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1101_3965" result="shape"/>
                                </filter>
                                <filter id="filter1_d_1101_3965" x="-99.5" y="0.389404" width="624.5" height="691.221" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                    <feOffset dy="4"/>
                                    <feGaussianBlur stdDeviation="28"/>
                                    <feComposite in2="hardAlpha" operator="out"/>
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.756863 0 0 0 0 0.858824 0 0 0 0 0.929412 0 0 0 1 0"/>
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1101_3965"/>
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1101_3965" result="shape"/>
                                </filter>
                            </defs>
                        </svg>


                        <?php
                    }
                    ?>

                    <!--                    --><?php
//                        if($counter == 0) {
//                            ?>
<!--                            -->
<!--                            --><?php
//                        }
                        $counter++;
//                    ?>
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
                            <?php
                                if($counter == 5){
                                    ?>
                                    <footer id="footer" class="footer footer__static">
                                        <div class="footer__container">
                                            <div class="footer__bottom">
                                                <div class="footer__copyright">
                                                    <?php echo the_field("tekst_2022_chetvertoe_izmerenie_vse_prava_zashhishheny", 'options'); ?>
                                                </div>
                                                <a class="footer__phone" href="tel:<?php echo the_field("tulufon_na_sajt", 'options'); ?>"><?php echo the_field("tulufon_na_sajt", 'options'); ?></a>
                                                <a class="footer__mail" href="mailto:<?php echo the_field("pochta_na_sajt", 'options'); ?>"><?php echo the_field("pochta_na_sajt", 'options'); ?></a>
                                            </div>
                                        </div>
                                    </footer>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </section>
                <?php
            endwhile;
        endif;
    ?>
</main>
<a href="#main" class="to-up">
    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle opacity="0.2" cx="21" cy="21" r="21" transform="rotate(90 21 21)" fill="#BFD9EB"/>
        <rect x="29" y="23.4853" width="2" height="12" rx="1" transform="rotate(135 29 23.4853)" fill="#A0BCC8"/>
        <rect x="20.5156" y="15" width="2" height="12" rx="1" transform="rotate(45 20.5156 15)" fill="#A0BCC8"/>
    </svg>
</a>
<div class="back-button" onclick="window.history.back()">
    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle opacity="0.2" cx="21" cy="21" r="21" fill="#BFD9EB"/>
        <rect x="23.4854" y="13" width="2" height="12" rx="1" transform="rotate(45 23.4854 13)" fill="#A0BCC8"/>
        <rect x="15" y="21.4853" width="2" height="12" rx="1" transform="rotate(-45 15 21.4853)" fill="#A0BCC8"/>
    </svg>
</div>
<?php wp_footer(); ?>
</body>
</html>