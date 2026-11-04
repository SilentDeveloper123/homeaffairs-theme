<?php
/**
 * Custom Post Types & Taxonomies for Home Affairs Theme
 *
 * @package HomeAffairs
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', 'ha_register_post_types_and_taxonomies', 0 );
function ha_register_post_types_and_taxonomies() {

	// ── 1. Taxonomy: Notice Categories (notice_category) ──
	$tax_labels = array(
		'name'                       => _x( 'Notice Categories', 'taxonomy general name', 'homeaffairs' ),
		'singular_name'              => _x( 'Notice Category', 'taxonomy singular name', 'homeaffairs' ),
		'search_items'               => __( 'Search Categories', 'homeaffairs' ),
		'popular_items'              => __( 'Popular Categories', 'homeaffairs' ),
		'all_items'                  => __( 'All Categories', 'homeaffairs' ),
		'parent_item'                => __( 'Parent Category', 'homeaffairs' ),
		'parent_item_colon'          => __( 'Parent Category:', 'homeaffairs' ),
		'edit_item'                  => __( 'Edit Category', 'homeaffairs' ),
		'update_item'                => __( 'Update Category', 'homeaffairs' ),
		'add_new_item'               => __( 'Add New Category', 'homeaffairs' ),
		'new_item_name'              => __( 'New Category Name', 'homeaffairs' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'homeaffairs' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'homeaffairs' ),
		'choose_from_most_used'      => __( 'Choose from the most used categories', 'homeaffairs' ),
		'not_found'                  => __( 'No categories found.', 'homeaffairs' ),
		'menu_name'                  => __( 'Categories', 'homeaffairs' ),
	);

	$tax_args = array(
		'hierarchical'          => true,
		'labels'                => $tax_labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'notice-category' ),
		'show_in_rest'          => true,
	);

	register_taxonomy( 'notice_category', array( 'special_notice' ), $tax_args );

	// ── 2. Custom Post Type: Special Notices (special_notice) ──
	$cpt_labels = array(
		'name'                  => _x( 'Special Notices', 'Post type general name', 'homeaffairs' ),
		'singular_name'         => _x( 'Special Notice', 'Post type singular name', 'homeaffairs' ),
		'menu_name'             => _x( 'Special Notices', 'Admin Menu text', 'homeaffairs' ),
		'name_admin_bar'        => _x( 'Special Notice', 'Add New on Toolbar', 'homeaffairs' ),
		'add_new'               => __( 'Add New Notice', 'homeaffairs' ),
		'add_new_item'          => __( 'Add New Special Notice', 'homeaffairs' ),
		'new_item'              => __( 'New Special Notice', 'homeaffairs' ),
		'edit_item'             => __( 'Edit Special Notice', 'homeaffairs' ),
		'view_item'             => __( 'View Special Notice', 'homeaffairs' ),
		'all_items'             => __( 'All Special Notices', 'homeaffairs' ),
		'search_items'          => __( 'Search Special Notices', 'homeaffairs' ),
		'parent_item_colon'     => __( 'Parent Special Notices:', 'homeaffairs' ),
		'not_found'             => __( 'No special notices found.', 'homeaffairs' ),
		'not_found_in_trash'    => __( 'No special notices found in Trash.', 'homeaffairs' ),
	);

	$cpt_args = array(
		'labels'             => $cpt_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'special-notices', 'with_front' => false ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'menu_icon'          => 'dashicons-megaphone',
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions' ),
		'taxonomies'         => array( 'notice_category' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'special_notice', $cpt_args );

	// Seed default taxonomy terms if not already present
	ha_seed_notice_categories();
}

/**
 * Seed default categories for Special Notices
 */
function ha_seed_notice_categories() {
	if ( ! taxonomy_exists( 'notice_category' ) ) {
		return;
	}

	$defaults = array(
		'urgent'  => __( 'Urgent Announcements', 'homeaffairs' ),
		'general' => __( 'General Notices', 'homeaffairs' ),
		'policy'  => __( 'Policy Updates', 'homeaffairs' ),
		'press'   => __( 'Press Releases', 'homeaffairs' ),
	);

	foreach ( $defaults as $slug => $name ) {
		if ( ! term_exists( $slug, 'notice_category' ) ) {
			wp_insert_term( $name, 'notice_category', array( 'slug' => $slug ) );
		}
	}
}

// ── Admin Column Customization for Special Notices ──
add_filter( 'manage_special_notice_posts_columns', 'ha_special_notice_edit_columns' );
function ha_special_notice_edit_columns( $columns ) {
	$new_columns = array();
	foreach ( $columns as $key => $title ) {
		$new_columns[ $key ] = $title;
		if ( 'title' === $key ) {
			$new_columns['notice_icon']       = __( 'Icon', 'homeaffairs' );
			$new_columns['notice_desc']       = __( 'Description', 'homeaffairs' );
			$new_columns['notice_attachment'] = __( 'Attachment / Link', 'homeaffairs' );
		}
	}
	return $new_columns;
}

add_action( 'manage_special_notice_posts_custom_column', 'ha_special_notice_column_content', 10, 2 );
function ha_special_notice_column_content( $column, $post_id ) {
	switch ( $column ) {
		case 'notice_icon':
			$icon = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'notice_icon' ) : '';
			$icon = $icon ?: 'fas fa-bullhorn';
			echo '<span style="font-size:18px;color:#800000;display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;background:#f5f5f5;border-radius:4px;"><i class="' . esc_attr( $icon ) . '"></i></span>';
			break;

		case 'notice_desc':
			$short_desc = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'notice_short_desc' ) : '';
			$desc       = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'notice_desc' ) : '';
			$display    = $short_desc ?: $desc;
			echo $display ? esc_html( wp_trim_words( $display, 8 ) ) : '<em>&mdash;</em>';
			break;

		case 'notice_attachment':
			$file = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'notice_attachment' ) : '';
			$url  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'notice_url' ) : '';
			if ( $file ) {
				echo '<a href="' . esc_url( $file ) . '" target="_blank" class="button button-small" style="color:#135e96;"><span class="dashicons dashicons-pdf" style="font-size:16px;line-height:24px;vertical-align:middle;margin-right:2px;"></span>' . esc_html__( 'PDF File', 'homeaffairs' ) . '</a>';
			} elseif ( $url ) {
				echo '<a href="' . esc_url( $url ) . '" target="_blank" class="button button-small"><span class="dashicons dashicons-admin-links" style="font-size:16px;line-height:24px;vertical-align:middle;margin-right:2px;"></span>' . esc_html__( 'Link', 'homeaffairs' ) . '</a>';
			} else {
				echo '<span style="color:#999;">&mdash;</span>';
			}
			break;
	}
}
