<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>
	<header id="masthead" class="site-header">
		<nav id="nav" class="main-navigation">
            <div id="icons" class="burger">
                <span></span>
            </div>
            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
            <ul>
                <div class="orchid_menu flower__menu"></div>
                <div class="cat-1_menu cat"></div>
                <div class="sunflower_menu flower__menu"></div>
                <div class="random-flower_menu flower__menu"></div>
                <div class="flower_menu flower__menu"></div>
                <div class="cat-2_menu cat"></div>
                <div class="cat-3_menu cat"></div>
                <div class="hibiscus_menu flower__menu"></div>
                <div class="logo_menu"></div>
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
                <p>STUDIO KOUKAKI</p>
            </ul>
		</nav><!-- #nav -->
	</header><!-- #masthead -->
