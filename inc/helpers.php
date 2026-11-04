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
