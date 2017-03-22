<?php

function propstorm_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'propstorm-style', get_stylesheet_uri(), $dependencies );
}

function propstorm_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}

function propstorm_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'propstorm_wp_setup' );
add_action( 'wp_enqueue_scripts', 'propstorm_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'propstorm_enqueue_scripts' );

?>
