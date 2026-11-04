<?php
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', 'ha_enqueue_scripts' );
function ha_enqueue_scripts() {
    $theme = get_template_directory_uri();

    // --- Styles ---

    wp_enqueue_style(
        'fontawesome',
        $theme . '/assets/css/fontawesome-all.min.css',
        array(),
        '6.5.1'
    );

    wp_enqueue_style(
        'glightbox',
        $theme . '/assets/css/lib/glightbox.min.css',
        array(),
        '3.3.0'
    );

    wp_enqueue_style(
        'ha-theme-root',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get( 'Version' )
    );

    wp_enqueue_style(
        'ha-style',
        $theme . '/assets/css/style.css',
        array( 'fontawesome', 'glightbox' ),
        filemtime( get_template_directory() . '/assets/css/style.css' )
    );

    // Compiled Tailwind CSS (purged, production-ready build)
    // Run: npm run build:tailwind to generate assets/css/tailwind.css
    if ( file_exists( get_template_directory() . '/assets/css/tailwind.css' ) ) {
        wp_enqueue_style(
            'ha-tailwind',
            $theme . '/assets/css/tailwind.css',
            array( 'ha-style' ),
            filemtime( get_template_directory() . '/assets/css/tailwind.css' )
        );
    }

    // --- Scripts ---

    wp_deregister_script( 'jquery' );
    wp_register_script(
        'jquery',
        $theme . '/assets/js/lib/jquery-3.7.1.min.js',
        array(),
        '3.7.1',
        false
    );
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script(
        'glightbox',
        $theme . '/assets/js/lib/glightbox.min.js',
        array( 'jquery' ),
        '3.3.0',
        false
    );

    wp_enqueue_script(
        'ha-main',
        $theme . '/assets/js/main.js',
        array( 'jquery', 'glightbox' ),
        filemtime( get_template_directory() . '/assets/js/main.js' ),
        false
    );
}
