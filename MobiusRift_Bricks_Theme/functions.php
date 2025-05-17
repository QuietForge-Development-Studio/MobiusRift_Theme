<?php
// Enqueue custom CSS and JS
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('qfds-child-style', get_stylesheet_uri());
    wp_enqueue_style('qfds-custom-style', get_stylesheet_directory_uri() . '/custom.css');
    wp_enqueue_script('qfds-custom-js', get_stylesheet_directory_uri() . '/custom.js', [], false, true);
});
