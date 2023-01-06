<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package izmerenie
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&family=Rubik:wght@300&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<script>
    window.onload = function () {
        document.body.classList.add('loaded_hiding');
        window.setTimeout(function () {
            document.body.classList.add('loaded');
            document.body.classList.remove('loaded_hiding');
        }, 500);

    }
</script>
<?php if ( is_page( array( '45', '47', '122', '124', '126', '128', '50', '52', '56', '58' ) ) || get_post_type() == 'blog' || get_post_type() == 'publications') { $class='non-scroll'; } else  { $class=''; }?>
<body <?php body_class($class); ?> >
<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>
<?php wp_body_open(); ?>
<header id="header" class="header">
    <div class="header__mobile main-container">
        <?php
            if(!is_front_page()){
                ?>
                    <a href="<?php echo get_home_url(); ?>"><img class="header__mobile-logo" src="<?php echo get_template_directory_uri() . '/img/header/logo-mobile.svg'; ?>" alt="logo-mobile"></a>
                <?php
            } else {
                ?>
                    <img class="header__mobile-logo" src="<?php echo get_template_directory_uri() . '/img/header/logo-mobile.svg'; ?>" alt="logo-mobile">
                <?php
            }
        ?>
        <div class="header__burger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="header__wrapper">
        <div class="header__branding header__container">
            <?php
            if(!is_front_page()){
                if (get_locale() == 'uk') {
                    ?>
                    <a href="<?php echo get_home_url(); ?>"><img class="header__logo" src="<?php echo the_field("logotyp_ukr", 'options'); ?>" alt="logo"></a>
                    <?php
                } else if (get_locale() == 'ru_RU') {
                    ?>
                    <a href="<?php echo get_home_url(); ?>"><img class="header__logo" src="<?php echo the_field("logotyp_rus", 'options'); ?>" alt="logo"></a>
                    <?php
                }
            } else {
                if (get_locale() == 'uk') {
                    ?>
                    <img class="header__logo" src="<?php echo the_field("logotyp_ukr", 'options'); ?>" alt="logo">
                    <?php
                } else if (get_locale() == 'ru_RU') {
                    ?>
                    <img class="header__logo" src="<?php echo the_field("logotyp_rus", 'options'); ?>" alt="logo">
                    <?php
                }
            }
            ?>
        </div>
        <ul class="header__language header__container">
            <?php
            pll_the_languages();
            ?>
        </ul>
        <nav id="header__nav" class="header__nav">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'Aside-menu',
                    'menu_id'        => 'primary-menu',
                )
            );
            ?>
        </nav>
        <div class="header__soc header__container">
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/header/fb.svg" width="24" height="24" alt="facebook"> </a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/header/youtube.svg" width="24" height="24" alt="youtube"> </a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/header/li.svg" width="24" height="24" alt="linkedin"> </a>
        </div>
    </div>
</header>
