<?php
/**
 * Enqueue child theme CSS and JS for MobiusRift Theme (Bricks Child Theme)
 * 
 * Guidelines:
 *  - Order of enqueued stylesheets matters: 
 *      1. The child theme's main stylesheet (style.css) is loaded first. 
 *      2. Additional stylesheets (e.g., custom.css) should be loaded after, 
 *         so they can override previous styles if necessary.
 *  - JavaScript files should be enqueued after styles and can be set to load in the footer for better performance.
 *  - File paths are relative to the theme root.
 * 
 * Disclaimer:
 *  The enqueue order is important. 
 *  Stylesheets enqueued later will override styles from earlier ones (if selectors are equally specific).
 *  JavaScript dependencies (if any) should be managed using the dependencies array in wp_enqueue_script.
 *  When organizing scripts/styles in subfolders, always update paths accordingly.
 *  Keep versioning in sync with your theme for cache-busting.
 */

add_action('wp_enqueue_scripts', function() {
    // Use the theme version (from style.css) for cache busting.
    $ver = wp_get_theme()->get('Version');

    // 1. Enqueue child theme's main stylesheet (style.css)
    //    This provides base styles and makes WP recognize the theme as active.
    wp_enqueue_style(
        'qfds-child-style',              // Unique handle for this stylesheet
        get_stylesheet_uri(),            // URL to style.css in theme root
        [],                              // No dependencies (loads first)
        $ver                             // Version for cache busting
    );

    // 2. Enqueue custom.css for additional overrides or enhancements
    //    This file should come after style.css so it can override base styles.
    wp_enqueue_style(
        'qfds-custom-style', 
        get_stylesheet_directory_uri() . '/custom.css',
        ['qfds-child-style'],            // Loads after child style for override capability
        $ver
    );

    // 3. Enqueue custom.js for site-specific JS
    //    Loads in the footer for best performance.
    wp_enqueue_script(
        'qfds-custom-js',
        get_stylesheet_directory_uri() . '/custom.js',
        [],                              // Add dependencies (e.g. ['jquery']) if needed
        $ver,
        true                             // Load in footer
    );
});