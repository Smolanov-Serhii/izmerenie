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
<body <?php body_class(); ?>>
<div class="preloader">
    <div class="preloader__row">
        <div class="preloader__item"></div>
        <div class="preloader__item"></div>
    </div>
</div>
<?php wp_body_open(); ?>
<header id="header" class="header">
    <div class="header__branding">
        <?php
        the_custom_logo();
        ?>
    </div>
    <ul class="header__language">
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
    <div class="header__soc">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/header/fb.svg" width="24" height="24" alt="facebook"> </a>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/header/youtube.svg" width="24" height="24" alt="youtube"> </a>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/header/li.svg" width="24" height="24" alt="linkedin"> </a>
    </div>
</header>