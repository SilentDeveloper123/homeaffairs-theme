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
/**
 * Generate a placeholder image URL using placehold.co
 *
 * @param int $width Width in pixels
 * @param int $height Height in pixels
 * @param string $text Optional label text
 * @return string Placeholder image URL
 */
function ha_placeholder_image( $width = 800, $height = 400, $text = '' ) {
	$url = 'https://placehold.co/' . absint( $width ) . 'x' . absint( $height );
	if ( ! empty( $text ) ) {
		$url .= '?text=' . rawurlencode( $text );
	}
	return $url;
}

/**
 * Safely resolve an image field value (URL string or attachment ID) to a full URL
 *
 * @param mixed $image_val URL string or attachment ID
 * @param string $size Image size
 * @param string $fallback_placeholder Optional placeholder URL if empty
 * @return string Image URL
 */
function ha_resolve_image_url( $image_val, $size = 'full', $fallback_placeholder = '' ) {
	if ( empty( $image_val ) ) {
		return $fallback_placeholder;
	}
	if ( is_numeric( $image_val ) ) {
		$url = wp_get_attachment_image_url( intval( $image_val ), $size );
		return $url ?: $fallback_placeholder;
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
 * Get the Blog ID of the English version in the multisite network
 *
 * @return int Blog ID
 */
/**
 * Detect the active language code ('en', 'si', or 'ta') for the current site / request
 *
 * @return string Language code
 */
function ha_get_current_language() {
	if ( is_multisite() ) {
		$blog_id = get_current_blog_id();
		if ( 2 === $blog_id ) {
			return 'si';
		} elseif ( 3 === $blog_id ) {
			return 'ta';
		} elseif ( 4 === $blog_id || 1 === $blog_id ) {
			return 'en';
		}

		$site = get_site( $blog_id );
		if ( $site && isset( $site->path ) ) {
			if ( strpos( $site->path, '/si' ) !== false ) {
				return 'si';
			} elseif ( strpos( $site->path, '/ta' ) !== false ) {
				return 'ta';
			}
		}
	}

	$locale = get_locale();
	if ( strpos( $locale, 'si' ) === 0 ) {
		return 'si';
	} elseif ( strpos( $locale, 'ta' ) === 0 ) {
		return 'ta';
	}

	return 'en';
}

function ha_get_english_blog_id() {
	static $en_blog_id = null;
	if ( null !== $en_blog_id ) {
		return $en_blog_id;
	}
	if ( is_multisite() ) {
		$sites = get_sites( array( 'path' => '/moha/en/' ) );
		if ( ! empty( $sites ) ) {
			$en_blog_id = (int) $sites[0]->blog_id;
			return $en_blog_id;
		}
		$all_sites = get_sites( array( 'number' => 10 ) );
		foreach ( $all_sites as $s ) {
			if ( rtrim( $s->path, '/' ) === '/moha/en' || str_ends_with( rtrim( $s->path, '/' ), '/en' ) ) {
				$en_blog_id = (int) $s->blog_id;
				return $en_blog_id;
			}
		}
	}
	$en_blog_id = 4;
	return $en_blog_id;
}

/**
 * Retrieve a theme option value with automatic fallback to the English version when empty
 *
 * @param string $key Option key without leading underscore
 * @param mixed  $fallback Optional default fallback if empty across current and English sites
 * @return mixed
 */
function ha_get_theme_option( $key, $fallback = '' ) {
	$val = function_exists( 'carbon_get_theme_option' ) ? carbon_get_theme_option( $key ) : null;
	if ( empty( $val ) ) {
		$raw = get_option( '_' . $key );
		if ( ! empty( $raw ) ) {
			$val = $raw;
		}
	}

	$has_val = ( null !== $val && '' !== $val && array() !== $val );
	if ( $has_val ) {
		return $val;
	}

	// If empty on current site, fallback to English site in multisite
	if ( is_multisite() ) {
		$current_id = get_current_blog_id();
		$en_id      = ha_get_english_blog_id();
		if ( $current_id !== $en_id ) {
			switch_to_blog( $en_id );
			$en_val = function_exists( 'carbon_get_theme_option' ) ? carbon_get_theme_option( $key ) : null;
			if ( empty( $en_val ) ) {
				$raw = get_option( '_' . $key );
				if ( ! empty( $raw ) ) {
					$en_val = $raw;
				}
			}
			restore_current_blog();

			if ( null !== $en_val && '' !== $en_val && array() !== $en_val ) {
				return $en_val;
			}
		}
	}

	return $fallback;
}

/**
 * Retrieve an image theme option URL with automatic fallback to the English version when empty
 *
 * @param string $key Option key without leading underscore
 * @param string $size Image size (default 'full')
 * @param string $fallback Fallback image URL
 * @return string Image URL
 */
function ha_get_theme_image_url( $key, $size = 'full', $fallback = '' ) {
	$img_val = function_exists( 'carbon_get_theme_option' ) ? carbon_get_theme_option( $key ) : null;
	if ( empty( $img_val ) ) {
		$raw = get_option( '_' . $key );
		if ( ! empty( $raw ) ) {
			$img_val = $raw;
		}
	}

	if ( ! empty( $img_val ) ) {
		if ( is_numeric( $img_val ) ) {
			$url = wp_get_attachment_image_url( (int) $img_val, $size );
			if ( ! empty( $url ) ) {
				return $url;
			}
		} elseif ( is_string( $img_val ) && filter_var( $img_val, FILTER_VALIDATE_URL ) ) {
			return $img_val;
		}
	}

	// Fallback to English site if empty on current site
	if ( is_multisite() ) {
		$current_id = get_current_blog_id();
		$en_id      = ha_get_english_blog_id();
		if ( $current_id !== $en_id ) {
			switch_to_blog( $en_id );
			$en_img = function_exists( 'carbon_get_theme_option' ) ? carbon_get_theme_option( $key ) : null;
			if ( empty( $en_img ) ) {
				$raw = get_option( '_' . $key );
				if ( ! empty( $raw ) ) {
					$en_img = $raw;
				}
			}
			$en_url = '';
			if ( ! empty( $en_img ) ) {
				if ( is_numeric( $en_img ) ) {
					$en_url = wp_get_attachment_image_url( (int) $en_img, $size );
				} elseif ( is_string( $en_img ) && filter_var( $en_img, FILTER_VALIDATE_URL ) ) {
					$en_url = $en_img;
				}
			}
			restore_current_blog();

			if ( ! empty( $en_url ) ) {
				return $en_url;
			}
		}
	}

	return $fallback;
}

/**
 * Safely retrieve a theme option icon field with graceful fallback to raw option and English site
 *
 * @param string $field_name Option name without underscore
 * @param string $default Default CSS icon class
 * @return string CSS class string
 */
function ha_get_theme_icon( $field_name, $default = 'fas fa-info-circle' ) {
	$icon = ha_get_theme_option( $field_name );
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

/**
 * Filter an already-formatted date string to substitute accurate Gregorian months and days in Tamil and Sinhala
 *
 * @param string      $date Formatted date string
 * @param string|null $lang Language code ('en', 'si', 'ta')
 * @return string
 */
function ha_filter_localized_date_string( $date, $lang = null ) {
	if ( ! is_string( $date ) || '' === $date ) {
		return $date;
	}

	if ( null === $lang ) {
		$lang = function_exists( 'ha_get_current_language' ) ? ha_get_current_language() : 'en';
	}

	if ( 'ta' === $lang ) {
		static $ta_map = array(
			// Core WordPress archaic Tamil sidereal solar months mapping to official Gregorian Tamil
			'தை'        => 'ஜனவரி',
			'மாசி'      => 'பெப்ரவரி',
			'பங்குனி'   => 'மார்ச்',
			'சித்திரை'  => 'ஏப்ரல்',
			'வைகாசி'    => 'மே',
			'ஆனி'       => 'ஜூன்',
			'ஆடி'       => 'ஜூலை',
			'ஆவணி'      => 'ஆகஸ்ட்',
			'புரட்டாதி' => 'செப்டம்பர்',
			'ஐப்பசி'    => 'அக்டோபர்',
			'கார்த்திகை' => 'நவம்பர்',
			'மார்கழி'   => 'டிசம்பர்',

			// Full English month names
			'January'   => 'ஜனவரி',
			'February'  => 'பெப்ரவரி',
			'March'     => 'மார்ச்',
			'April'     => 'ஏப்ரல்',
			'May'       => 'மே',
			'June'      => 'ஜூன்',
			'July'      => 'ஜூலை',
			'August'    => 'ஆகஸ்ட்',
			'September' => 'செப்டம்பர்',
			'October'   => 'அக்டோபர்',
			'November'  => 'நவம்பர்',
			'December'  => 'டிசம்பர்',

			// Abbreviated English month names (3-letter)
			'Jan'       => 'ஜன.',
			'Feb'       => 'பெப்.',
			'Mar'       => 'மார்.',
			'Apr'       => 'ஏப்.',
			'Jun'       => 'ஜூன்',
			'Jul'       => 'ஜூலை',
			'Aug'       => 'ஆக.',
			'Sep'       => 'செப்.',
			'Oct'       => 'அக்.',
			'Nov'       => 'நவ.',
			'Dec'       => 'டிச.',

			// Days of week
			'Monday'    => 'திங்கள்',
			'Tuesday'   => 'செவ்வாய்',
			'Wednesday' => 'புதன்',
			'Thursday'  => 'வியாழன்',
			'Friday'    => 'வெள்ளி',
			'Saturday'  => 'சனி',
			'Sunday'    => 'ஞாயிறு',
			'Mon'       => 'திங்.',
			'Tue'       => 'செவ்.',
			'Wed'       => 'புதன்',
			'Thu'       => 'வியா.',
			'Fri'       => 'வெள்.',
			'Sat'       => 'சனி',
			'Sun'       => 'ஞாயி.',
		);
		return strtr( $date, $ta_map );
	}

	if ( 'si' === $lang ) {
		static $si_map = array(
			// Full English month names
			'January'   => 'ජනවාරි',
			'February'  => 'පෙබරවාරි',
			'March'     => 'මාර්තු',
			'April'     => 'අප්‍රේල්',
			'May'       => 'මැයි',
			'June'      => 'ජූනි',
			'July'      => 'ජූලි',
			'August'    => 'අගෝස්තු',
			'September' => 'සැප්තැම්බර්',
			'October'   => 'ඔක්තෝබර්',
			'November'  => 'නොවැම්බර්',
			'December'  => 'දෙසැම්බර්',

			// Abbreviated English month names
			'Jan'       => 'ජන.',
			'Feb'       => 'පෙබ.',
			'Mar'       => 'මාර්තු',
			'Apr'       => 'අප්‍රේල්',
			'Jun'       => 'ජූනි',
			'Jul'       => 'ජූලි',
			'Aug'       => 'අගෝ.',
			'Sep'       => 'සැප්.',
			'Oct'       => 'ඔක්.',
			'Nov'       => 'නොවැ.',
			'Dec'       => 'දෙසැ.',

			// Days of week
			'Monday'    => 'සඳුදා',
			'Tuesday'   => 'අඟහරුවාදා',
			'Wednesday' => 'බදාදා',
			'Thursday'  => 'බ්‍රහස්පතින්දා',
			'Friday'    => 'සිකුරාදා',
			'Saturday'  => 'සෙනසුරාදා',
			'Sunday'    => 'ඉරිදා',
			'Mon'       => 'සඳුදා',
			'Tue'       => 'අඟහ.',
			'Wed'       => 'බදාදා',
			'Thu'       => 'බ්‍රහස්.',
			'Fri'       => 'සිකු.',
			'Sat'       => 'සෙන.',
			'Sun'       => 'ඉරිදා',
		);
		return strtr( $date, $si_map );
	}

	return $date;
}

/**
 * Localize and format a date in English, Sinhala, or Tamil.
 *
 * @param mixed       $date_or_post Post ID, WP_Post, timestamp, or date string. Defaults to current post.
 * @param string      $format       PHP date format string. Defaults to get_option('date_format').
 * @param string|null $lang         Language code ('en', 'si', 'ta'). Defaults to active language.
 * @return string Localized date string.
 */
function ha_format_date( $date_or_post = null, $format = '', $lang = null ) {
	if ( empty( $format ) ) {
		$format = get_option( 'date_format', 'F j, Y' );
	}

	if ( null === $lang ) {
		$lang = function_exists( 'ha_get_current_language' ) ? ha_get_current_language() : 'en';
	}

	$timestamp = null;
	if ( null === $date_or_post ) {
		$timestamp = get_the_time( 'U' );
		if ( ! $timestamp ) {
			$timestamp = current_time( 'timestamp' );
		}
	} elseif ( is_numeric( $date_or_post ) && (int) $date_or_post > 2000000000 ) {
		$timestamp = (int) $date_or_post;
	} elseif ( is_numeric( $date_or_post ) || $date_or_post instanceof WP_Post ) {
		$post = get_post( $date_or_post );
		if ( $post && ! empty( $post->post_date ) ) {
			$timestamp = strtotime( $post->post_date );
		} else {
			$timestamp = current_time( 'timestamp' );
		}
	} elseif ( is_string( $date_or_post ) ) {
		$parsed = strtotime( $date_or_post );
		$timestamp = false !== $parsed ? $parsed : current_time( 'timestamp' );
	} else {
		$timestamp = current_time( 'timestamp' );
	}

	$formatted = wp_date( $format, $timestamp );
	return ha_filter_localized_date_string( $formatted, $lang );
}

/**
 * Global date filters for WordPress core date outputs
 */
add_filter( 'wp_date', 'ha_filter_wp_date_callback', 20, 4 );
function ha_filter_wp_date_callback( $date, $format, $timestamp, $timezone ) {
	return ha_filter_localized_date_string( $date );
}

add_filter( 'get_the_date', 'ha_filter_get_the_date_callback', 20, 3 );
function ha_filter_get_the_date_callback( $the_date, $format, $post ) {
	return ha_filter_localized_date_string( $the_date );
}

add_filter( 'get_the_modified_date', 'ha_filter_get_the_modified_date_callback', 20, 3 );
function ha_filter_get_the_modified_date_callback( $the_date, $format, $post ) {
	return ha_filter_localized_date_string( $the_date );
}

add_filter( 'date_i18n', 'ha_filter_date_i18n_callback', 20, 4 );
function ha_filter_date_i18n_callback( $date, $format, $timestamp, $gmt ) {
	return ha_filter_localized_date_string( $date );
}

