<?php

function homepage_files() {
    wp_enqueue_style('homepage_main_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('homepage_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'homepage_files');

function enqueue_fa_script() {

    wp_enqueue_script( 'fascript', 'https://kit.fontawesome.com/1629a23b6c.js' );

}

add_action('wp_enqueue_scripts', 'enqueue_fa_script');

function add_google_fonts() {
    wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

function my_theme_scripts() {
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
