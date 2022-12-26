<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package izmerenie
 */

?>

	<footer id="footer" class="footer height-section vertical-center swiper-slide">
        <div class="footer__container main-container">
            <div class="footer__form">
                <h2 class="footer__title section-title">
                    Как связаться
                </h2>
                <div class="footer__socials">
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
                <?php echo do_shortcode('[contact-form-7 id="14" title="footer form"]') ?>
            </div>
            <div class="footer__img">
                <img src="<?php echo get_template_directory_uri() . '/img/footer/img.png'; ?>" alt="bg">
            </div>
            <div class="footer__bottom main-container">
                <div class="footer__copyright">
                    © 2022. Четвертое измерение. Все права защищены.
                </div>
                <a class="footer__phone" href="tel:+38(063)000-00-00">+38(063)000-00-00</a>
                <a class="footer__mail" href="mailto:4izmerenie@4izmerenie.com">4izmerenie@4izmerenie.com</a>
            </div>
        </div>
	</footer>
    <a href="#" class="to-up">
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

