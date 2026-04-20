<?php

// load css
function load_css(){
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

    wp_enqueue_style('tailwind-output', get_template_directory_uri() . '/dist/output.css', array(), false, 'all');

    wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), false, 'all' );
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'load_css');


// load js
function load_js(){
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true );
    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');

// menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'mobile-menu' => __( 'Mobile Menu' ),
      'navigasicepat-menu' => __( 'Navigasi Cepat Menu' ),
      'pendidikan-menu' => __( 'Pendidikan Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
