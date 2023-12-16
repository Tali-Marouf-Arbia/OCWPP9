<?php
/**
 * The header for child-theme
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
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>
    <header id="masthead" class="site-header">
        <h1 class="main-title"><?php bloginfo('name'); ?></h1>
            <nav id="barre-navigation" class="main-navigation"> 
                    <div class="burger-menu">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </div>
                <div class="fullscreen-menu fade-in"> <!--menu en fullscreen-->
                    <h1 class="site-title"><?php bloginfo('name'); ?></h1> 
                    <img id="img-logo-menu-burger" src="wp-content/themes/foce-child/assets/images/menu/Image logo en paralax.png">
                    <img id="orchide" src="wp-content/themes/foce-child/assets/images/menu/orchid copy.png">
                    <img id="sun-flower" src="wp-content/themes/foce-child/assets/images/menu/Sunflower.png">
                    <img id="random" src="wp-content/themes/foce-child/assets/images/menu/Random Flower(1).png">
                    <img id="hibiscus" src="wp-content/themes/foce-child/assets/images/menu/Hibiscus-footer.png">
                    <img id="flower" src="wp-content/themes/foce-child/assets/images/menu/Flower.png">
                    <img id="chat-noir" src="wp-content/themes/foce-child/assets/images/menu/Group-180.png">
                    <img id="chat-violet" src="wp-content/themes/foce-child/assets/images/menu/cat(1).png">
                    <img id="chat-orange" src="wp-content/themes/foce-child/assets/images/menu/cat.png">
                    <ul>
                        <li><a class="scroll-in" href="#story">Histoire</a></li>
                        <li><a class="scroll-in" href="#characters">Personnages</a></li>
                        <li><a class="scroll-in" href="#place">Lieu</a></li>
                        <li><a class="scroll-in" href="#studio">Studio Koukaki</a></li>
                    </ul>
                    <p>STUDIO KOUKAKI</p>
                </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
