<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'ha_setup' );
function ha_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'ha-slider-thumb', 800, 400, true );
    add_image_size( 'ha-news-hero', 1600, 980, true );
    add_image_size( 'ha-news-card', 600, 360, true );
    add_image_size( 'ha-banner-project', 1370, 500, true );
    add_image_size( 'ha-adv2-banner', 1025, 695, true );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );

    register_nav_menus( array(
        'menu-topbar'    => __( 'Topbar Menu (Desktop)', 'homeaffairs' ),
        'menu-primary'   => __( 'Primary Navigation (Sticky Header)', 'homeaffairs' ),
        'menu-mobile'    => __( 'Mobile Quick Links (More Panel)', 'homeaffairs' ),
        'menu-footer'    => __( 'Footer Links', 'homeaffairs' ),
        'menu-copyright'  => __( 'Copyright Bar', 'homeaffairs' ),
    ) );
}

add_action( 'template_redirect', function () {
    if ( is_404() && ! is_subdomain_install() && get_current_blog_id() === 1 ) {
        wp_safe_redirect( home_url( '/' ) );
        exit;
    }
} );
