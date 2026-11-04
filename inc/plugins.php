<?php
defined( 'ABSPATH' ) || exit;

/**
 * TGM Plugin Activation configuration.
 */

require_once get_template_directory() . '/classes/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'ha_register_required_plugins' );
function ha_register_required_plugins() {
  $plugins = array(
    array(
      'name'     => 'Import Export Menu',
      'slug'     => 'import-export-menu',
      'required' => true,
    ),
    array(
      'name'     => 'Multisite Language Switcher',
      'slug'     => 'multisite-language-switcher',
      'required' => true,
    ),
    array(
      'name'     => 'Classic Editor',
      'slug'     => 'classic-editor',
      'required' => false,
    ),
    array(
      'name'     => 'Contact Form 7',
      'slug'     => 'contact-form-7',
      'required' => false,
    ),
  );

  $config = array(
    'id'           => 'homeaffairs',
    'default_path' => '',
    'menu'         => 'tgmpa-install-plugins',
    'parent_slug'  => 'themes.php',
    'capability'   => 'edit_theme_options',
    'has_notices'  => true,
    'dismissable'  => true,
    'dismiss_msg'  => '',
    'is_automatic' => true,
    'message'      => '',
  );

  tgmpa( $plugins, $config );
}
