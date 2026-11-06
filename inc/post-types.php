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
