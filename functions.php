<?php

// ENQUEUE GLOBAL SCRIPTS
function enqueue_parent_styles() {
  wp_enqueue_style('wabbajack-style',   get_stylesheet_directory_uri() .'/style.css', array(), null, 'all');
  wp_enqueue_script('jquery-script',    'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
  wp_enqueue_style('font-awesome',      'https://use.fontawesome.com/releases/v5.6.3/css/all.css');
  wp_enqueue_script('burger-script',    get_stylesheet_directory_uri() .'/js/burger.js', false, null, true);
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

// MENUS
function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __('Main Menu'),
      'footer-menu' => __('Footer Menu')
    )
  );
}
add_action('init', 'register_menus');

// ACF OPTIONS PANEL
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Theme Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

?>