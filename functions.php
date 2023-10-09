<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    // Chargement du style.css du thème parent foce
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
    //chargement du CSS pour swiper
    wp_enqueue_style('swiper-style', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css", array(),"1.0");
}

 add_action('wp_enqueue_scripts', 'ajouter_script_custom');
function ajouter_script_custom() {
    //  script.js theme enfant
    wp_enqueue_script('mon-scriptjs', get_stylesheet_directory_uri() . '/assets/script.js', array(), filemtime(get_stylesheet_directory() . '/assets/script.js'),true);
    //script du slider
    wp_enqueue_script('swiper-scriptjs', "https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js", array(),"1.0",true);
    wp_enqueue_script('script-slider', get_stylesheet_directory_uri() . '/assets/script_slider.js', array(), filemtime(get_stylesheet_directory() . '/assets/script_slider.js'),true);
    //skroller
    wp_enqueue_script('script-skrollr-link', "https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js", array(),"1.0",true);
    wp_enqueue_script('script-skroller', get_stylesheet_directory_uri() . '/assets/skroller.js', array(), filemtime(get_stylesheet_directory() . '/assets/skroller.js'),true);
    //script menu burger
    wp_enqueue_script('script-menu', get_stylesheet_directory_uri() . '/assets/script_menu.js', array(), filemtime(get_stylesheet_directory() . '/assets/script_menu.js'),true);
}



// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}