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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <nav id="site-navigation" class="main-navigation"> -->
        <div class="menu_container">
            <nav id="site-navigation" class="main-navigation">   
                <ul>
                <li class="empty"> </li>  
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                    <li class="li_burger"> 
                        <div class="burger-menu">
                            <div class="bar bar1"></div>
                            <div class="bar bar2"></div>
                            <div class="bar bar3"></div>
                            <!-- <div class="cross">X</div> -->
                        </div>  
                    </li>
                </ul>  
            </nav><!-- #site-navigation -->          
        </div>
        <section class="menu-items">
            <div class="menu-items__container">     
                <img class="menu-items__container__logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Image_logo';?>" alt="logo menu">
                <nav class="menu-items__container__nav">
                    <ul class="liste">
                        <li class="link1"><a href="#story">Histoire</a></li>
                        <li class="link2"><a href="#characters">Personnages</a></li>
                        <li class="link3"><a href="#place">lieu</a></li>
                        <li class="link4"><a href="#studio">Studio Koukaki</a></li>
                    </ul>
                </nav>
            
            <img id="cat1" class="img_cat"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat';?>" alt=" chat1">
            <img id="cat2" class="img_cat"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat2';?>" alt=" chat2">
            <img id="cat3" class="img_cat"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/cat3';?>" alt=" chat3">
            <img id="flower1" class="img_flower"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/sunflower';?>" alt="sunflower">
            <img id="flower2" class="img_flower"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/orchid';?>" alt="orchid">
            <img id="flower3" class="img_flower"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus footer';?>" alt="hibiscus">
            <img id="flower4" class="img_flower"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random flower';?>" alt="random flower">
            <img id="flower5" class="img_flower"src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower';?>" alt="flower">
            <p>Studio KOUKAKI</p>
        </div>
        </section>    
	</header><!-- #masthead -->

   