<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    //liaison du fichier main.css dem on child-theme
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/main.css', array(), filemtime( get_stylesheet_directory() . '/main.css' ) );

    // liaison du fichier JavaScript
    wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/js/scroll-titles.js', array(), null, true);
    wp_enqueue_script('skrollr', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js', array(), null, true);
    // wp_enqueue_script('main-scripts', get_stylesheet_directory_uri() . '/js/main.js', array(), null, true);

    // liaison Swiper JS
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), '11.0.5', true);

    // liaison Swiper CSS
    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css', array(), '11.0.5', true);
    
    // liaison main.js
    wp_enqueue_script('main-scripts', get_stylesheet_directory_uri() . '/js/main.js', array(), null, true);

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
