<?php /* Template Name: Контакти */ ?>
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
?>
<main id="main" class="main">

    <footer id="footer" class="footer height-section vertical-center scroll-section">
        <div class="footer__container main-container">
            <div class="footer__form">
                <h2 class="footer__title section-title">
                    Контакты
                </h2>
                <div class="footer__desc">
                    <p>Вы можете связаться с нами любым удобным для вас способом или оставить свои контактные данные и мы свяжемся с вами самостоятельно</p>
                </div>
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
                <div class="footer__contacts">
                    <span class="footer__contacts-row">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.9993 10.6667C23.9993 6.25333 20.4127 2.66667 15.9993 2.66667C11.586 2.66667 7.99935 6.25333 7.99935 10.6667C7.99935 16.6667 15.9993 25.3333 15.9993 25.3333C15.9993 25.3333 23.9993 16.6667 23.9993 10.6667ZM13.3327 10.6667C13.3327 9.2 14.5327 8 15.9993 8C17.466 8 18.666 9.2 18.666 10.6667C18.666 11.3739 18.3851 12.0522 17.885 12.5523C17.3849 13.0524 16.7066 13.3333 15.9993 13.3333C15.2921 13.3333 14.6138 13.0524 14.1137 12.5523C13.6136 12.0522 13.3327 11.3739 13.3327 10.6667ZM6.66602 26.6667V29.3333H25.3327V26.6667H6.66602Z" fill="#BFD9EB"/>
                        </svg>
                        04214, Украина, Киев, ул. Героев Днепра, 40Б, офис 58
                    </span>
                    <a href="tel:+380 50 751 91 43" class="footer__contacts-row">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 13H22C21.9992 12.2046 21.6829 11.442 21.1204 10.8796C20.558 10.3171 19.7954 10.0008 19 10V8C20.3256 8.00159 21.5964 8.52888 22.5338 9.46622C23.4711 10.4036 23.9984 11.6744 24 13Z" fill="#BFD9EB"/>
                            <path d="M27.999 13H25.999C25.9969 11.1441 25.2587 9.36489 23.9465 8.05259C22.6342 6.7403 20.8549 6.00212 18.999 6V4C21.3852 4.00265 23.6728 4.95171 25.3601 6.63896C27.0473 8.32622 27.9964 10.6139 27.999 13ZM20.332 21.482L22.572 19.242C22.8719 18.9421 23.2531 18.7368 23.6685 18.6514C24.084 18.5661 24.5153 18.6046 24.909 18.762L27.637 19.854C28.0391 20.0149 28.3838 20.2925 28.6265 20.6512C28.8693 21.0098 28.9991 21.4329 28.999 21.866V26.827C28.9997 27.1219 28.9403 27.4138 28.8242 27.6848C28.7082 27.9559 28.5381 28.2005 28.3243 28.4035C28.1105 28.6066 27.8575 28.7638 27.5808 28.8657C27.3041 28.9676 27.0095 29.0119 26.715 28.996C7.59304 27.806 3.73104 11.61 3.01404 5.408C2.97932 5.1048 3.00917 4.79767 3.10166 4.50684C3.19414 4.216 3.34714 3.94804 3.55061 3.72058C3.75408 3.49311 4.0034 3.31131 4.28218 3.18711C4.56095 3.06292 4.86286 2.99915 5.16804 3H10.041C10.4741 2.99999 10.8973 3.12973 11.2559 3.3725C11.6145 3.61527 11.8922 3.95992 12.053 4.362L13.144 7.09C13.3015 7.48377 13.3399 7.91509 13.2546 8.3305C13.1693 8.74592 12.964 9.12716 12.664 9.427L10.424 11.667C10.424 11.667 11.666 20.399 20.332 21.482Z" fill="#BFD9EB"/>
                        </svg>
                        +380 50 751 91 43
                    </a>
                    <a href="mailto:4izmerenie@4izmerenie.com" class="footer__contacts-row">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 6C6.93913 6 5.92172 6.42143 5.17157 7.17157C4.42143 7.92172 4 8.93913 4 10V10.402L16 16.864L28 10.404V10C28 8.93913 27.5786 7.92172 26.8284 7.17157C26.0783 6.42143 25.0609 6 24 6H8ZM28 12.674L16.474 18.88C16.3283 18.9584 16.1655 18.9995 16 18.9995C15.8345 18.9995 15.6717 18.9584 15.526 18.88L4 12.674V22C4 23.0609 4.42143 24.0783 5.17157 24.8284C5.92172 25.5786 6.93913 26 8 26H24C25.0609 26 26.0783 25.5786 26.8284 24.8284C27.5786 24.0783 28 23.0609 28 22V12.674Z" fill="#BFD9EB"/>
                        </svg>
                        4izmerenie@4izmerenie.com
                    </a>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="145" title="contact form"]') ?>
            </div>
            <div class="footer__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2536.6925003207443!2d30.506446451810927!3d50.521288090037594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4d238c5b15555%3A0x17b82fe7dc33177f!2z0YPQuy4g0JPQtdGA0L7QtdCyINCU0L3QtdC_0YDQsCwgNDDQsSwg0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1672214642448!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
</main>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/dist/js/main.js'; ?>"></script>
</body>
</html>