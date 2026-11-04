<?php
defined( 'ABSPATH' ) || exit;

add_action( 'widgets_init', 'ha_widgets_init' );
function ha_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'homeaffairs' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Main sidebar widget area', 'homeaffairs' ),
    'before_widget' => '<div id="%1$s" class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6 widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="font-bold text-primary text-base mb-4 flex items-center gap-2"><i class="fas fa-list text-secondary"></i> ',
    'after_title'   => '</h3>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer Column 1', 'homeaffairs' ),
    'id'            => 'footer-1',
    'description'   => __( 'Footer about column', 'homeaffairs' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="text-white text-xs font-bold uppercase tracking-wider mb-6">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer Column 2', 'homeaffairs' ),
    'id'            => 'footer-2',
    'description'   => __( 'Footer links column', 'homeaffairs' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="text-white text-xs font-bold uppercase tracking-wider mb-6">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer Column 3', 'homeaffairs' ),
    'id'            => 'footer-3',
    'description'   => __( 'Footer inquiry/form column', 'homeaffairs' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="text-white text-xs font-bold uppercase tracking-wider mb-6">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer Column 4', 'homeaffairs' ),
    'id'            => 'footer-4',
    'description'   => __( 'Footer find-us/map column', 'homeaffairs' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="text-white text-xs font-bold uppercase tracking-wider mb-6">',
    'after_title'   => '</h4>',
  ) );
}
