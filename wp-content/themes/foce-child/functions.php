<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 20);
function theme_enqueue_styles() {
    wp_enqueue_script( 'theme-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array(), '1.0', true );
    wp_enqueue_script( 'swiper', get_stylesheet_directory_uri() . '/js/swiper.js', array(), '1.0', true );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
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

//---------- Swiper.js to module type ----------

function add_defer_attribute($tag, $handle) {
    if ( 'swiper' !== $handle )
      return $tag;
    return str_replace( ' src', ' type="module" src', $tag );
  }
  
  add_filter('script_loader_tag', 'add_defer_attribute', 10, 3);