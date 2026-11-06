<?php
/**
 * Custom Post Types & Taxonomies for Home Affairs Theme
 *
 * @package HomeAffairs
 */

defined( 'ABSPATH' ) || exit;

add_action( 'init', 'ha_register_post_types_and_taxonomies', 0 );
function ha_register_post_types_and_taxonomies() {

	// ═══════════════════════════════════════════════════════════════════
	// 1. SPECIAL NOTICES (Taxonomy: notice_category | CPT: special_notice)
	// ═══════════════════════════════════════════════════════════════════

	// Taxonomy: Notice Categories
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
		'menu_name'                  => __( 'Notice Categories', 'homeaffairs' ),
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

	// CPT: Special Notices
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
		'menu_icon'          => 'dashicons-bell',
		'supports'           => array( 'title', 'thumbnail', 'excerpt', 'revisions' ),
		'taxonomies'         => array( 'notice_category' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'special_notice', $cpt_args );

	// ═══════════════════════════════════════════════════════════════════
	// 2. NEWS & ANNOUNCEMENTS (Taxonomy: news_category | CPT: news_announcement)
	// ═══════════════════════════════════════════════════════════════════

	// Taxonomy: News Categories
	$news_tax_labels = array(
		'name'                       => _x( 'News Categories', 'taxonomy general name', 'homeaffairs' ),
		'singular_name'              => _x( 'News Category', 'taxonomy singular name', 'homeaffairs' ),
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
		'menu_name'                  => __( 'News Categories', 'homeaffairs' ),
	);

	$news_tax_args = array(
		'hierarchical'          => true,
		'labels'                => $news_tax_labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'news-category' ),
		'show_in_rest'          => true,
	);

	register_taxonomy( 'news_category', array( 'news_announcement' ), $news_tax_args );

	// CPT: News & Announcements
	$news_cpt_labels = array(
		'name'                  => _x( 'News & Announcements', 'Post type general name', 'homeaffairs' ),
		'singular_name'         => _x( 'News & Announcement', 'Post type singular name', 'homeaffairs' ),
		'menu_name'             => _x( 'News & Announcements', 'Admin Menu text', 'homeaffairs' ),
		'name_admin_bar'        => _x( 'News & Announcement', 'Add New on Toolbar', 'homeaffairs' ),
		'add_new'               => __( 'Add New News', 'homeaffairs' ),
		'add_new_item'          => __( 'Add New News & Announcement', 'homeaffairs' ),
		'new_item'              => __( 'New News Item', 'homeaffairs' ),
		'edit_item'             => __( 'Edit News & Announcement', 'homeaffairs' ),
		'view_item'             => __( 'View News & Announcement', 'homeaffairs' ),
		'all_items'             => __( 'All News & Announcements', 'homeaffairs' ),
		'search_items'          => __( 'Search News & Announcements', 'homeaffairs' ),
		'parent_item_colon'     => __( 'Parent News Items:', 'homeaffairs' ),
		'not_found'             => __( 'No news & announcements found.', 'homeaffairs' ),
		'not_found_in_trash'    => __( 'No news & announcements found in Trash.', 'homeaffairs' ),
	);

	$news_cpt_args = array(
		'labels'             => $news_cpt_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news-announcements', 'with_front' => false ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 21,
		'menu_icon'          => 'dashicons-megaphone',
		'supports'           => array( 'title', 'thumbnail', 'excerpt', 'revisions', 'author' ),
		'taxonomies'         => array( 'news_category' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'news_announcement', $news_cpt_args );

	// ═══════════════════════════════════════════════════════════════════
	// 3. DIVISIONS (Taxonomy: division_category | CPT: ha-division & ha_division)
	// ═══════════════════════════════════════════════════════════════════

	// Taxonomy: Division Categories
	$div_tax_labels = array(
		'name'                       => _x( 'Division Categories', 'taxonomy general name', 'homeaffairs' ),
		'singular_name'              => _x( 'Division Category', 'taxonomy singular name', 'homeaffairs' ),
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
		'menu_name'                  => __( 'Division Categories', 'homeaffairs' ),
	);

	$div_tax_args = array(
		'hierarchical'          => true,
		'labels'                => $div_tax_labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'division-category' ),
		'show_in_rest'          => true,
	);

	register_taxonomy( 'division_category', array( 'ha-division', 'ha_division' ), $div_tax_args );

	// CPT: Divisions (ha-division)
	$div_cpt_labels = array(
		'name'                  => _x( 'Divisions', 'Post type general name', 'homeaffairs' ),
		'singular_name'         => _x( 'Division', 'Post type singular name', 'homeaffairs' ),
		'menu_name'             => _x( 'Divisions', 'Admin Menu text', 'homeaffairs' ),
		'name_admin_bar'        => _x( 'Division', 'Add New on Toolbar', 'homeaffairs' ),
		'add_new'               => __( 'Add New Division', 'homeaffairs' ),
		'add_new_item'          => __( 'Add New Division', 'homeaffairs' ),
		'new_item'              => __( 'New Division', 'homeaffairs' ),
		'edit_item'             => __( 'Edit Division', 'homeaffairs' ),
		'view_item'             => __( 'View Division', 'homeaffairs' ),
		'all_items'             => __( 'All Divisions', 'homeaffairs' ),
		'search_items'          => __( 'Search Divisions', 'homeaffairs' ),
		'parent_item_colon'     => __( 'Parent Divisions:', 'homeaffairs' ),
		'not_found'             => __( 'No divisions found.', 'homeaffairs' ),
		'not_found_in_trash'    => __( 'No divisions found in Trash.', 'homeaffairs' ),
	);

	$div_cpt_args = array(
		'labels'             => $div_cpt_labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'divisions', 'with_front' => false ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'menu_icon'          => 'dashicons-networking',
		'supports'           => array( 'title', 'thumbnail', 'excerpt', 'revisions' ),
		'taxonomies'         => array( 'division_category' ),
		'show_in_rest'       => true,
	);

	register_post_type( 'ha-division', $div_cpt_args );

	$div_cpt_alias_args = $div_cpt_args;
	$div_cpt_alias_args['show_in_menu'] = false;
	$div_cpt_alias_args['rewrite'] = false;
	register_post_type( 'ha_division', $div_cpt_alias_args );

	// ═══════════════════════════════════════════════════════════════════
	// 4. ORGANIZATIONAL STRUCTURE NODES (CPT: ha_org_node)
	// ═══════════════════════════════════════════════════════════════════
	$org_labels = array(
		'name'               => _x( 'Org Structure', 'Post type general name', 'homeaffairs' ),
		'singular_name'      => _x( 'Org Node', 'Post type singular name', 'homeaffairs' ),
		'menu_name'          => _x( 'Org Structure', 'Admin Menu text', 'homeaffairs' ),
		'name_admin_bar'     => _x( 'Org Node', 'Add New on Toolbar', 'homeaffairs' ),
		'add_new'            => __( 'Add New Node', 'homeaffairs' ),
		'add_new_item'       => __( 'Add New Org Node', 'homeaffairs' ),
		'new_item'           => __( 'New Org Node', 'homeaffairs' ),
		'edit_item'          => __( 'Edit Org Node', 'homeaffairs' ),
		'view_item'          => __( 'View Org Node', 'homeaffairs' ),
		'all_items'          => __( 'All Org Nodes', 'homeaffairs' ),
		'search_items'       => __( 'Search Org Nodes', 'homeaffairs' ),
		'parent_item_colon'  => __( 'Parent Node:', 'homeaffairs' ),
		'not_found'          => __( 'No org nodes found.', 'homeaffairs' ),
		'not_found_in_trash' => __( 'No org nodes found in Trash.', 'homeaffairs' ),
	);

	$org_args = array(
		'labels'             => $org_labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => false,
		'capability_type'    => 'page',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => 23,
		'menu_icon'          => 'dashicons-networking',
		'supports'           => array( 'title', 'page-attributes' ),
		'show_in_rest'       => false,
	);

	register_post_type( 'ha_org_node', $org_args );

	// Seed default taxonomy terms
	ha_seed_notice_categories();
	ha_seed_news_categories();
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

/**
 * Get localized news category names based on language
 *
 * @param string|null $lang Optional language code ('en', 'si', 'ta')
 * @return array Slug to translated name mapping
 */
function ha_get_news_category_defaults( $lang = null ) {
	if ( null === $lang && function_exists( 'ha_get_current_language' ) ) {
		$lang = ha_get_current_language();
	}

	$translations = array(
		'si' => array(
			'featured-news'      => 'විශේෂ පුවත්',
			'press-releases'     => 'මාධ්‍ය නිවේදන',
			'egovernance'        => 'විද්‍යුත් පාලනය',
			'administration'     => 'පරිපාලනය',
			'events'             => 'නිල සිදුවීම්',
			'circulars-gazettes' => 'නියෝග සහ ගැසට් පත්‍ර',
		),
		'ta' => array(
			'featured-news'      => 'முக்கிய செய்திகள்',
			'press-releases'     => 'ஊடக வெளியீடுகள்',
			'egovernance'        => 'மின்-ஆளுகை',
			'administration'     => 'நிர்வாகம்',
			'events'             => 'உத்தியோகபூர்வ நிகழ்வுகள்',
			'circulars-gazettes' => 'கட்டளைகள் மற்றும் வர்த்தமானிகள்',
		),
		'en' => array(
			'featured-news'      => __( 'Featured News', 'homeaffairs' ),
			'press-releases'     => __( 'Press Releases', 'homeaffairs' ),
			'egovernance'        => __( 'eGovernance', 'homeaffairs' ),
			'administration'     => __( 'Administration', 'homeaffairs' ),
			'events'             => __( 'Official Events', 'homeaffairs' ),
			'circulars-gazettes' => __( 'Directives & Gazettes', 'homeaffairs' ),
		),
	);

	return isset( $translations[ $lang ] ) ? $translations[ $lang ] : $translations['en'];
}

/**
 * Seed default categories for News & Announcements
 */
function ha_seed_news_categories() {
	if ( ! taxonomy_exists( 'news_category' ) ) {
		return;
	}

	$defaults = ha_get_news_category_defaults();

	foreach ( $defaults as $slug => $name ) {
		if ( ! term_exists( $slug, 'news_category' ) ) {
			wp_insert_term( $name, 'news_category', array( 'slug' => $slug ) );
		}
	}
}

// ═══════════════════════════════════════════════════════════════════
// 3. ADMIN COLUMNS: SPECIAL NOTICES
// ═══════════════════════════════════════════════════════════════════
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
			$icon = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $post_id, 'notice_icon', 'fas fa-bullhorn' ) : ( function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'notice_icon' ) : 'fas fa-bullhorn' );
			$icon = is_string( $icon ) ? $icon : ( function_exists( 'ha_get_icon_class' ) ? ha_get_icon_class( $icon, 'fas fa-bullhorn' ) : 'fas fa-bullhorn' );
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
				echo '<a href="' . esc_url( $file ) . '" target="_blank" class="button button-small" style="color:#135e96;"><i class="fas fa-file-pdf" style="color:#d9534f;margin-right:4px;"></i>' . esc_html__( 'PDF File', 'homeaffairs' ) . '</a>';
			} elseif ( $url ) {
				echo '<a href="' . esc_url( $url ) . '" target="_blank" class="button button-small"><i class="fas fa-link" style="color:#0073aa;margin-right:4px;"></i>' . esc_html__( 'Link', 'homeaffairs' ) . '</a>';
			} else {
				echo '<span style="color:#999;">&mdash;</span>';
			}
			break;
	}
}

// ═══════════════════════════════════════════════════════════════════
// 4. ADMIN COLUMNS: NEWS & ANNOUNCEMENTS
// ═══════════════════════════════════════════════════════════════════
add_filter( 'manage_news_announcement_posts_columns', 'ha_news_announcement_edit_columns' );
function ha_news_announcement_edit_columns( $columns ) {
	$new_columns = array();
	$new_columns['cb'] = isset( $columns['cb'] ) ? $columns['cb'] : '<input type="checkbox" />';
	$new_columns['news_thumb'] = __( 'Image', 'homeaffairs' );
	$new_columns['title'] = __( 'Title', 'homeaffairs' );
	$new_columns['taxonomy-news_category'] = __( 'Categories', 'homeaffairs' );
	$new_columns['news_short_desc'] = __( 'Short Description', 'homeaffairs' );
	$new_columns['news_attachment'] = __( 'Attachment / PDF', 'homeaffairs' );
	$new_columns['date'] = __( 'Date', 'homeaffairs' );
	return $new_columns;
}

add_action( 'manage_news_announcement_posts_custom_column', 'ha_news_announcement_column_content', 10, 2 );
function ha_news_announcement_column_content( $column, $post_id ) {
	switch ( $column ) {
		case 'news_thumb':
			$thumb_url = get_the_post_thumbnail_url( $post_id, array( 60, 60 ) );
			if ( ! $thumb_url && function_exists( 'carbon_get_post_meta' ) ) {
				$thumb_url = carbon_get_post_meta( $post_id, 'news_featured_image' );
			}
			if ( $thumb_url ) {
				echo '<img src="' . esc_url( $thumb_url ) . '" style="width:48px;height:36px;object-fit:cover;border-radius:4px;border:1px solid #ddd;" />';
			} else {
				echo '<span style="display:inline-block;width:48px;height:36px;background:#f0f0f0;border-radius:4px;border:1px solid #ddd;line-height:36px;text-align:center;color:#aaa;"><i class="fas fa-image" style="font-size:16px;line-height:36px;color:#aaa;"></i></span>';
			}
			break;

		case 'news_short_desc':
			$short_desc = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'news_short_desc' ) : '';
			if ( ! $short_desc ) {
				$short_desc = get_the_excerpt( $post_id );
			}
			echo $short_desc ? esc_html( wp_trim_words( $short_desc, 10 ) ) : '<em style="color:#999;">&mdash;</em>';
			break;

		case 'news_attachment':
			$file = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'news_attachment' ) : '';
			$url  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'news_attachment_url' ) : '';
			if ( $file ) {
				echo '<a href="' . esc_url( $file ) . '" target="_blank" class="button button-small" style="color:#135e96;"><i class="fas fa-file-pdf" style="color:#d9534f;margin-right:4px;"></i>' . esc_html__( 'PDF', 'homeaffairs' ) . '</a>';
			} elseif ( $url ) {
				echo '<a href="' . esc_url( $url ) . '" target="_blank" class="button button-small"><i class="fas fa-link" style="color:#0073aa;margin-right:4px;"></i>' . esc_html__( 'Link', 'homeaffairs' ) . '</a>';
			} else {
				echo '<span style="color:#bbb;">&mdash;</span>';
			}
			break;
	}
}


// ═══════════════════════════════════════════════════════════════════
// 5. ADMIN COLUMNS: DIVISIONS (ha-division & ha_division)
// ═══════════════════════════════════════════════════════════════════
add_filter( 'manage_ha-division_posts_columns', 'ha_division_edit_columns' );
add_filter( 'manage_ha_division_posts_columns', 'ha_division_edit_columns' );
function ha_division_edit_columns( $columns ) {
	$new_columns = array();
	$new_columns['cb']               = isset( $columns['cb'] ) ? $columns['cb'] : '<input type="checkbox" />';
	$new_columns['division_icon']    = __( 'Icon', 'homeaffairs' );
	$new_columns['title']            = __( 'Title of Division', 'homeaffairs' );
	$new_columns['division_head']    = __( 'Head of Division', 'homeaffairs' );
	$new_columns['division_subunits']= __( 'Sub-Units / Divisions', 'homeaffairs' );
	$new_columns['date']             = __( 'Date', 'homeaffairs' );
	return $new_columns;
}

add_action( 'manage_ha-division_posts_custom_column', 'ha_division_column_content', 10, 2 );
add_action( 'manage_ha_division_posts_custom_column', 'ha_division_column_content', 10, 2 );
function ha_division_column_content( $column, $post_id ) {
	switch ( $column ) {
		case 'division_icon':
			$icon = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $post_id, 'division_icon', 'fas fa-sitemap' ) : ( function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_icon' ) : 'fas fa-sitemap' );
			$icon = is_string( $icon ) ? $icon : ( function_exists( 'ha_get_icon_class' ) ? ha_get_icon_class( $icon, 'fas fa-sitemap' ) : 'fas fa-sitemap' );
			echo '<span style="font-size:18px;color:#591521;display:inline-flex;align-items:center;justify-content:center;width:32px;height:32px;background:#f5f0f0;border-radius:6px;border:1px solid #e2d2d4;"><i class="' . esc_attr( $icon ) . '"></i></span>';
			break;

		case 'division_head':
			$head_name  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_head_name' ) : '';
			$head_desig = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_head_designation' ) : '';
			if ( $head_name ) {
				echo '<strong>' . esc_html( $head_name ) . '</strong>';
				if ( $head_desig ) {
					echo '<br><span style="color:#666;font-size:12px;">' . esc_html( $head_desig ) . '</span>';
				}
			} else {
				echo '<em style="color:#999;">&mdash;</em>';
			}
			break;

		case 'division_subunits':
			$sub_units = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_sub_units' ) : array();
			$count = is_array( $sub_units ) ? count( $sub_units ) : 0;
			echo '<span class="badge" style="display:inline-block;padding:2px 8px;border-radius:12px;background:#dfa21f;color:#591521;font-weight:700;font-size:11px;">' . esc_html( $count ) . ' ' . esc_html__( 'Units', 'homeaffairs' ) . '</span>';
			break;
	}
}


/**
 * Register pagination rewrite rules for divisions landing page
 */
add_action( 'init', 'ha_divisions_pagination_rewrite_rules', 1 );
function ha_divisions_pagination_rewrite_rules() {
	add_rewrite_rule(
		'^divisions/page/([0-9]+)/?$',
		'index.php?pagename=divisions&paged=$matches[1]',
		'top'
	);
}

/**
 * Auto-sync Multisite Language Switcher (MSLS) relationships for ha-division posts
 */
add_action( 'save_post_ha-division', 'ha_sync_division_msls_links', 20, 2 );
add_action( 'save_post_ha_division', 'ha_sync_division_msls_links', 20, 2 );
function ha_sync_division_msls_links( $post_id, $post ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! is_multisite() || ! $post || 'publish' !== $post->post_status ) {
		return;
	}

	$slug = $post->post_name;
	if ( empty( $slug ) ) {
		return;
	}

	static $syncing = false;
	if ( $syncing ) {
		return;
	}
	$syncing = true;

	$languages = array(
		'en_US' => 4,
		'si_LK' => 2,
		'ta_LK' => 3,
	);

	$division_ids = array();
	foreach ( $languages as $lang => $bid ) {
		switch_to_blog( $bid );
		$found = get_posts( array(
			'post_type'      => array( 'ha-division', 'ha_division' ),
			'name'           => $slug,
			'post_status'    => 'publish',
			'posts_per_page' => 1,
		) );
		if ( ! empty( $found ) ) {
			$division_ids[ $lang ] = (int) $found[0]->ID;
		}
		restore_current_blog();
	}

	if ( count( $division_ids ) > 1 ) {
		foreach ( $division_ids as $lang => $id ) {
			$bid = $languages[ $lang ];
			$other_links = array();
			foreach ( $division_ids as $o_lang => $o_id ) {
				if ( $o_lang !== $lang ) {
					$other_links[ $o_lang ] = $o_id;
				}
			}
			switch_to_blog( $bid );
			update_option( "msls_{$id}", $other_links );
			restore_current_blog();
		}
	}

	$syncing = false;
}

/**
 * Auto-sync Multisite Language Switcher (MSLS) relationships for Overview pages
 */
add_action( 'save_post_page', 'ha_sync_overview_page_msls_links', 20, 2 );
function ha_sync_overview_page_msls_links( $post_id, $post ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! is_multisite() || ! $post || 'publish' !== $post->post_status ) {
		return;
	}

	$tmpl = get_post_meta( $post_id, '_wp_page_template', true );
	$slug = $post->post_name;
	if ( 'page-templates/template-overview.php' !== $tmpl && 'overview' !== $slug ) {
		return;
	}

	static $syncing = false;
	if ( $syncing ) {
		return;
	}
	$syncing = true;

	$languages = array(
		'en_US' => 4,
		'si_LK' => 2,
		'ta_LK' => 3,
	);

	$page_ids = array();
	foreach ( $languages as $lang => $bid ) {
		switch_to_blog( $bid );
		$found = get_posts( array(
			'post_type'      => 'page',
			'meta_key'       => '_wp_page_template',
			'meta_value'     => 'page-templates/template-overview.php',
			'post_status'    => 'publish',
			'posts_per_page' => 1,
		) );
		if ( empty( $found ) ) {
			$found = get_posts( array(
				'post_type'      => 'page',
				'name'           => 'overview',
				'post_status'    => 'publish',
				'posts_per_page' => 1,
			) );
		}
		if ( ! empty( $found ) ) {
			$page_ids[ $lang ] = (int) $found[0]->ID;
		}
		restore_current_blog();
	}

	if ( count( $page_ids ) > 1 ) {
		foreach ( $page_ids as $lang => $id ) {
			$bid = $languages[ $lang ];
			$other_links = array();
			foreach ( $page_ids as $o_lang => $o_id ) {
				if ( $o_lang !== $lang ) {
					$other_links[ $o_lang ] = $o_id;
				}
			}
			switch_to_blog( $bid );
			update_option( "msls_{$id}", $other_links );
			restore_current_blog();
		}
	}

	$syncing = false;
}


/**
 * Custom Admin Columns for ha_org_node
 */
add_filter( 'manage_ha_org_node_posts_columns', 'ha_org_node_edit_columns' );
function ha_org_node_edit_columns( $columns ) {
	$new = array();
	$new['cb']              = isset( $columns['cb'] ) ? $columns['cb'] : '<input type="checkbox" />';
	$new['title']           = __( 'Designation / Node Title', 'homeaffairs' );
	$new['org_style']       = __( 'Card Style', 'homeaffairs' );
	$new['org_division']    = __( 'Division', 'homeaffairs' );
	$new['org_parent']      = __( 'Parent Node', 'homeaffairs' );
	$new['org_order']       = __( 'Order', 'homeaffairs' );
	$new['org_cross_link']  = __( 'Cross-link', 'homeaffairs' );
	return $new;
}

add_action( 'manage_ha_org_node_posts_custom_column', 'ha_org_node_column_content', 10, 2 );
function ha_org_node_column_content( $column, $post_id ) {
	switch ( $column ) {
		case 'org_style':
			$style = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_card_style' ) : '';
			$style_labels = array(
				'l1'             => 'Level 1 (Minister)',
				'l2'             => 'Level 2 (Secretary)',
				'l3'             => 'Level 3 (Addl Sec / Head)',
				'l4'             => 'Level 4 (Director / SAS)',
				'l5'             => 'Level 5 (Asst Sec / AD)',
				'intermediate-a' => 'Intermediate A (AO / PO)',
				'intermediate-b' => 'Intermediate B (Media / Transl)',
				'do'             => 'DO (Development Officer)',
				'mso'            => 'MSO (Mgmt Service)',
				'oes'            => 'OES (Office Employees)',
				'support'        => 'Support Staff',
			);
			$label = isset( $style_labels[ $style ] ) ? $style_labels[ $style ] : ( $style ?: '—' );
			echo '<span class="badge" style="display:inline-block;padding:2px 8px;border-radius:4px;background:#f1f5f9;color:#334155;font-weight:600;font-size:11px;">' . esc_html( $label ) . '</span>';
			break;

		case 'org_division':
			$div = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_division_key' ) : '';
			$div_labels = array(
				'admin'        => 'Administration',
				'home-affairs' => 'Home Affairs',
				'development'  => 'Development',
				'investigation'=> 'Investigation',
				'rar'          => 'RAR',
				'technical'    => 'Technical',
				'planning'     => 'Planning',
				'finance'      => 'Finance',
				'audit'        => 'Internal Audit',
			);
			if ( ! empty( $div ) && isset( $div_labels[ $div ] ) ) {
				echo '<span style="color:#591521;font-weight:600;">' . esc_html( $div_labels[ $div ] ) . '</span>';
			} else {
				echo '<em style="color:#94a3b8;">—</em>';
			}
			break;

		case 'org_parent':
			$parent_id = wp_get_post_parent_id( $post_id );
			if ( $parent_id ) {
				echo '<a href="' . esc_url( get_edit_post_link( $parent_id ) ) . '">' . esc_html( get_the_title( $parent_id ) ) . '</a>';
			} else {
				echo '<strong style="color:#dfa21f;">' . esc_html__( 'Root (No Parent)', 'homeaffairs' ) . '</strong>';
			}
			break;

		case 'org_order':
			$post = get_post( $post_id );
			echo esc_html( $post->menu_order );
			break;

		case 'org_cross_link':
			$target = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_cross_link_target' ) : null;
			$style  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_cross_link_style' ) : '';
			if ( ! empty( $target ) && is_array( $target ) && ! empty( $target[0]['id'] ) ) {
				$t_id = (int) $target[0]['id'];
				echo '<span style="font-size:11px;">&rarr; <a href="' . esc_url( get_edit_post_link( $t_id ) ) . '">' . esc_html( get_the_title( $t_id ) ) . '</a> (' . esc_html( $style ) . ')</span>';
			} else {
				echo '<em style="color:#94a3b8;">—</em>';
			}
			break;
	}
}

/**
 * Filter Org Nodes by Division in admin list table
 */
add_action( 'restrict_manage_posts', 'ha_filter_org_nodes_by_division' );
function ha_filter_org_nodes_by_division() {
	global $typenow;
	if ( 'ha_org_node' !== $typenow ) {
		return;
	}

	$current_div = isset( $_GET['org_division_filter'] ) ? sanitize_text_field( wp_unslash( $_GET['org_division_filter'] ) ) : '';
	$div_options = array(
		'admin'        => 'Administration',
		'home-affairs' => 'Home Affairs',
		'development'  => 'Development',
		'investigation'=> 'Investigation',
		'rar'          => 'RAR',
		'technical'    => 'Technical',
		'planning'     => 'Planning',
		'finance'      => 'Finance',
		'audit'        => 'Internal Audit',
	);

	echo '<select name="org_division_filter">';
	echo '<option value="">' . esc_html__( 'All Divisions', 'homeaffairs' ) . '</option>';
	foreach ( $div_options as $key => $name ) {
		printf(
			'<option value="%s"%s>%s</option>',
			esc_attr( $key ),
			selected( $current_div, $key, false ),
			esc_html( $name )
		);
	}
	echo '</select>';
}

add_filter( 'parse_query', 'ha_filter_org_nodes_query' );
function ha_filter_org_nodes_query( $query ) {
	global $pagenow, $typenow;
	if ( is_admin() && 'edit.php' === $pagenow && 'ha_org_node' === $typenow && isset( $_GET['org_division_filter'] ) && '' !== $_GET['org_division_filter'] ) {
		$div = sanitize_text_field( wp_unslash( $_GET['org_division_filter'] ) );
		$meta_query = array(
			array(
				'key'     => '_org_division_key',
				'value'   => $div,
				'compare' => '=',
			),
		);
		$query->set( 'meta_query', $meta_query );
	}
}

/**
 * Deletion safeguard: prevent permanent deletion or trashing of an org node if it has active child nodes
 */
add_action( 'wp_trash_post', 'ha_org_node_prevent_delete_with_children', 10, 1 );
add_action( 'before_delete_post', 'ha_org_node_prevent_delete_with_children', 10, 1 );
function ha_org_node_prevent_delete_with_children( $post_id ) {
	if ( 'ha_org_node' !== get_post_type( $post_id ) ) {
		return;
	}

	$children = get_children( array(
		'post_parent' => $post_id,
		'post_type'   => 'ha_org_node',
		'numberposts' => 1,
	) );

	if ( ! empty( $children ) ) {
		wp_die(
			esc_html__( 'Cannot delete this Org Node because it has subordinate child nodes attached to it. Please reassign or delete its child nodes first.', 'homeaffairs' ),
			esc_html__( 'Node Has Child Dependencies', 'homeaffairs' ),
			array( 'back_link' => true )
		);
	}
}

/**
 * Auto-sync Multisite Language Switcher (MSLS) relationships for Governance & Structure pages
 */
add_action( 'save_post_page', 'ha_sync_governance_page_msls_links', 20, 2 );
function ha_sync_governance_page_msls_links( $post_id, $post ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! is_multisite() || ! $post || 'publish' !== $post->post_status ) {
		return;
	}

	$tmpl = get_post_meta( $post_id, '_wp_page_template', true );
	$slug = $post->post_name;
	if ( 'page-templates/template-governance-structure.php' !== $tmpl && 'governance-structure' !== $slug ) {
		return;
	}

	static $syncing = false;
	if ( $syncing ) {
		return;
	}
	$syncing = true;

	$languages = array(
		'en_US' => 4,
		'si_LK' => 2,
		'ta_LK' => 3,
	);

	$page_ids = array();
	foreach ( $languages as $lang => $bid ) {
		switch_to_blog( $bid );
		$found = get_posts( array(
			'post_type'      => 'page',
			'meta_key'       => '_wp_page_template',
			'meta_value'     => 'page-templates/template-governance-structure.php',
			'post_status'    => 'publish',
			'posts_per_page' => 1,
		) );
		if ( empty( $found ) ) {
			$found = get_posts( array(
				'post_type'      => 'page',
				'name'           => 'governance-structure',
				'post_status'    => 'publish',
				'posts_per_page' => 1,
			) );
		}
		if ( ! empty( $found ) ) {
			$page_ids[ $lang ] = (int) $found[0]->ID;
		}
		restore_current_blog();
	}

	if ( count( $page_ids ) > 1 ) {
		foreach ( $page_ids as $lang => $id ) {
			$bid = $languages[ $lang ];
			$other_links = array();
			foreach ( $page_ids as $o_lang => $o_id ) {
				if ( $o_lang !== $lang ) {
					$other_links[ $o_lang ] = $o_id;
				}
			}
			switch_to_blog( $bid );
			update_option( "msls_{$id}", $other_links );
			restore_current_blog();
		}
	}

	$syncing = false;
}
