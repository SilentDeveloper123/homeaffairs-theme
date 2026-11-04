<?php
defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once get_template_directory() . '/vendor/autoload.php';
    \Carbon_Fields\Carbon_Fields::boot();
}

require_once get_template_directory() . '/inc/setup.php';
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/custom-fields.php';
require_once get_template_directory() . '/inc/theme-options.php';
require_once get_template_directory() . '/inc/enqueue.php';
require_once get_template_directory() . '/inc/widgets.php';
require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/menu-icons.php';
require_once get_template_directory() . '/inc/walkers.php';
require_once get_template_directory() . '/inc/plugins.php';
