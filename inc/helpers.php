<?php
defined( 'ABSPATH' ) || exit;

function ha_breadcrumb_icons() {
  $output = '';
  $crumbs = array();

  if ( is_page() ) {
    global $post;
    $ancestors = get_post_ancestors( $post->ID );
    $ancestors = array_reverse( $ancestors );
    foreach ( $ancestors as $ancestor ) {
      $crumbs[] = '<a href="' . esc_url( get_permalink( $ancestor ) ) . '" class="hover:text-secondary transition-colors">' . esc_html( get_the_title( $ancestor ) ) . '</a>';
    }
  } elseif ( is_single() ) {
    $categories = get_the_category();
    if ( ! empty( $categories ) ) {
      $crumbs[] = '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '" class="hover:text-secondary transition-colors">' . esc_html( $categories[0]->name ) . '</a>';
    }
  } elseif ( is_category() ) {
    $crumbs[] = '<span class="text-gray-600">' . esc_html__( 'Category', 'homeaffairs' ) . '</span>';
  } elseif ( is_tag() ) {
    $crumbs[] = '<span class="text-gray-600">' . esc_html__( 'Tag', 'homeaffairs' ) . '</span>';
  } elseif ( is_search() ) {
    $crumbs[] = '<span class="text-gray-600">' . esc_html__( 'Search', 'homeaffairs' ) . '</span>';
  } elseif ( is_404() ) {
    $crumbs[] = '<span class="text-gray-600">' . esc_html__( 'Error', 'homeaffairs' ) . '</span>';
  }

  foreach ( $crumbs as $crumb ) {
    $output .= '<i class="fas fa-chevron-right text-[8px] mx-1"></i>' . $crumb;
  }

  return $output;
}

function ha_pagination() {
  global $wp_query;
  $big = 999999999;
  $pages = paginate_links( array(
    'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format'    => '?paged=%#%',
    'current'   => max( 1, get_query_var( 'paged' ) ),
    'total'     => $wp_query->max_num_pages,
    'type'      => 'array',
    'prev_text' => '<i class="fas fa-chevron-left"></i>',
    'next_text' => '<i class="fas fa-chevron-right"></i>',
  ) );

  if ( is_array( $pages ) ) {
    echo '<div class="flex items-center justify-center gap-1.5 pt-8 mt-10 border-t border-gray-100">';
    foreach ( $pages as $page ) {
      if ( strpos( $page, 'current' ) !== false ) {
        echo '<span class="bg-secondary text-white font-bold px-3.5 py-2 rounded-lg text-sm border border-secondary">' . wp_kses_post( $page ) . '</span>';
      } else {
        $page = str_replace( 'page-numbers', 'page-numbers px-3.5 py-2 rounded-lg text-sm text-gray-500 hover:bg-secondary hover:text-white hover:border-secondary transition-all border border-gray-200', $page );
        echo wp_kses_post( $page );
      }
    }
    echo '</div>';
  }
}

/**
 * Safely resolve an image field value (URL string or attachment ID) to a full URL
 *
 * @param mixed $image_val URL string or attachment ID
 * @param string $size Image size
 * @return string Image URL
 */
function ha_resolve_image_url( $image_val, $size = 'full' ) {
	if ( empty( $image_val ) ) {
		return '';
	}
	if ( is_numeric( $image_val ) ) {
		$url = wp_get_attachment_image_url( intval( $image_val ), $size );
		return $url ?: '';
	}
	return esc_url_raw( $image_val );
}

/**
 * Safely resolve a file field value (URL string or attachment ID) to a full URL
 *
 * @param mixed $file_val URL string or attachment ID
 * @return string File URL
 */
function ha_resolve_file_url( $file_val ) {
	if ( empty( $file_val ) ) {
		return '';
	}
	if ( is_numeric( $file_val ) ) {
		$url = wp_get_attachment_url( intval( $file_val ) );
		return $url ?: '';
	}
	return esc_url_raw( $file_val );
}

/**
 * Safely resolve an icon field value (from Carbon Field Icon or legacy string) to a valid CSS class
 *
 * @param mixed $icon Stored icon value (string or array from Carbon Field Icon)
 * @param string $default Default icon class if empty
 * @return string CSS icon class string
 */
function ha_get_icon_class( $icon, $default = 'fas fa-info-circle' ) {
	if ( is_array( $icon ) ) {
		if ( ! empty( $icon['class'] ) && ( strpos( $icon['class'], 'fa' ) !== false ) ) {
			return $icon['class'];
		}
		if ( ! empty( $icon['icon'] ) ) {
			return 'fas fa-' . ltrim( $icon['icon'], 'fa-' );
		}
		if ( ! empty( $icon['value'] ) ) {
			return 'fas fa-' . ltrim( $icon['value'], 'fa-' );
		}
	}
	if ( is_string( $icon ) && ! empty( trim( $icon ) ) ) {
		$icon = trim( $icon );
		if ( strpos( $icon, 'fas ' ) === 0 || strpos( $icon, 'far ' ) === 0 || strpos( $icon, 'fab ' ) === 0 ) {
			return $icon;
		}
		if ( strpos( $icon, 'dashicons-' ) === 0 || strpos( $icon, 'dashicons ' ) === 0 ) {
			$slug = str_replace( array( 'dashicons ', 'dashicons-' ), '', $icon );
			$dash_to_fa = array(
				'pdf'          => 'file-pdf',
				'admin-links'  => 'link',
				'bell'         => 'bell',
				'megaphone'    => 'bullhorn',
				'format-image' => 'image',
				'download'     => 'download',
				'plus'         => 'plus',
			);
			$slug = isset( $dash_to_fa[ $slug ] ) ? $dash_to_fa[ $slug ] : $slug;
			return 'fas fa-' . ltrim( $slug, 'fa-' );
		}
		if ( strpos( $icon, 'fa-' ) === 0 ) {
			return 'fas ' . $icon;
		}
		return 'fas fa-' . ltrim( $icon, 'fa-' );
	}
	return $default;
}

/**
 * Safely retrieve a post meta icon field with graceful fallback to raw post meta
 *
 * @param int $post_id Post ID
 * @param string $field_name Field name without underscore
 * @param string $default Default CSS icon class
 * @return string CSS class string
 */
function ha_get_post_icon( $post_id, $field_name, $default = 'fas fa-info-circle' ) {
	$icon = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, $field_name ) : null;
	if ( empty( $icon ) ) {
		$raw = get_post_meta( $post_id, '_' . $field_name, true );
		if ( empty( $raw ) ) {
			$raw = get_post_meta( $post_id, $field_name, true );
		}
		if ( ! empty( $raw ) ) {
			$icon = $raw;
		}
	}
	return ha_get_icon_class( $icon, $default );
}

/**
 * Safely retrieve a theme option icon field with graceful fallback to raw option
 *
 * @param string $field_name Option name without underscore
 * @param string $default Default CSS icon class
 * @return string CSS class string
 */
function ha_get_theme_icon( $field_name, $default = 'fas fa-info-circle' ) {
	$icon = function_exists( 'carbon_get_theme_option' ) ? carbon_get_theme_option( $field_name ) : null;
	if ( empty( $icon ) ) {
		$raw = get_option( '_' . $field_name );
		if ( empty( $raw ) ) {
			$raw = get_option( $field_name );
		}
		if ( ! empty( $raw ) ) {
			$icon = $raw;
		}
	}
	return ha_get_icon_class( $icon, $default );
}
