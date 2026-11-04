<?php
defined( 'ABSPATH' ) || exit;

/**
 * Resolve full icon class for rendering.
 * Handles backward compatibility: old data stored just 'fa-icon-name',
 * new data stores full class like 'fab fa-joomla'.
 */
function ha_icon_class( $icon ) {
	if ( empty( $icon ) ) {
		return '';
	}
	if ( preg_match( '/^(fas|far|fab)\s/', $icon ) ) {
		return $icon;
	}
	if ( str_starts_with( $icon, 'fa-' ) ) {
		return 'fas ' . $icon;
	}
	return 'fas fa-' . ltrim( $icon, 'fa-' );
}

/**
 * ── Primary Nav (Desktop) ──
 */
class HA_Nav_Walker extends Walker_Nav_Menu {
  public function start_lvl( &$output, $depth = 0, $args = null ) {
    $indent  = str_repeat( "\t", $depth );
    $output .= "\n$indent<div class=\"dropdown-menu text-[13px]\">\n";
  }

  public function end_lvl( &$output, $depth = 0, $args = null ) {
    $indent  = str_repeat( "\t", $depth );
    $output .= "$indent</div>\n";
  }

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $has_children = in_array( 'menu-item-has-children', $classes, true );
    $is_current   = in_array( 'current-menu-item', $classes, true ) || in_array( 'current_page_item', $classes, true );

    if ( $depth === 0 ) {
      $link_classes = 'px-3 xl:px-4 py-2 font-semibold rounded-lg transition-all whitespace-nowrap focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-secondary/60 focus-visible:ring-inset';
      if ( ! $has_children && empty( $item->icon ) ) {
        $link_classes .= ' shrink-0';
      }
      if ( $is_current ) {
        $link_classes .= ' text-secondary bg-secondary/10';
      } else {
        $link_classes .= ' text-gray-700 hover:text-secondary hover:bg-gray-50';
      }
      if ( $has_children || ! empty( $item->icon ) ) {
        $link_classes .= ' inline-flex items-center gap-1';
      }
    } else {
      $link_classes = 'inline-flex items-center gap-2 w-full whitespace-nowrap';
    }

    if ( $has_children ) {
      $output .= '<div class="dropdown-group shrink-0 self-stretch flex items-center">';
    }

    $output .= $indent . '<a href="' . esc_url( $item->url ) . '" class="' . esc_attr( $link_classes ) . '">';
    if ( $depth === 0 ) {
      if ( ! empty( $item->icon ) ) {
        $output .= '<i class="' . ha_icon_class( $item->icon ) . ' text-[11px] shrink-0"></i> ';
      }
    } else {
      if ( ! empty( $item->icon ) ) {
        $output .= '<i class="' . ha_icon_class( $item->icon ) . ' text-[11px] w-[14px] text-secondary shrink-0"></i> ';
      } else {
        $output .= '<i class="fas fa-chevron-right text-[11px] w-[14px] text-secondary shrink-0"></i> ';
      }
    }
    $output .= esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );

    if ( $has_children && 0 === $depth ) {
      $output .= ' <i class="fas fa-chevron-down text-[9px] shrink-0"></i>';
    } elseif ( $has_children && $depth > 0 && ! empty( $item->icon ) ) {
      $output .= ' <i class="fas fa-chevron-right text-[11px] ml-auto"></i>';
    }

    $output .= '</a>';
  }

  public function end_el( &$output, $item, $depth = 0, $args = null ) {
    $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
    $has_children = in_array( 'menu-item-has-children', $classes, true );
    if ( $has_children ) {
      $output .= '</div>';
    }
  }
}

/**
 * ── Primary Nav (Mobile accordion) ──
 */
class HA_Mobile_Walker extends Walker_Nav_Menu {
  public function start_lvl( &$output, $depth = 0, $args = null ) {
    $indent  = str_repeat( "\t", $depth );
    $output .= "\n$indent<div class=\"accordion-content hidden\">\n";
  }

  public function end_lvl( &$output, $depth = 0, $args = null ) {
    $indent  = str_repeat( "\t", $depth );
    $output .= "$indent</div>\n";
  }

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $has_children = in_array( 'menu-item-has-children', $classes, true );

    if ( $has_children ) {
      $output .= '<div class="accordion-item">';
      $btn_pad = $depth === 0 ? 'px-4' : ( $depth === 1 ? 'pl-14 pr-4' : 'pl-20 pr-4' );
      $output .= '<button class="accordion-toggle flex items-center justify-between w-full text-white text-base font-semibold py-3 ' . $btn_pad . ' rounded-lg hover:bg-white/10 transition-colors">';
      $output .= '<span class="flex items-center gap-3">';
      if ( $depth === 0 ) {
        if ( ! empty( $item->icon ) ) {
          $output .= '<i class="' . ha_icon_class( $item->icon ) . ' w-5 text-secondary text-center shrink-0"></i> ';
        }
      } else {
        $output .= '<i class="fas fa-chevron-right w-4 text-secondary shrink-0"></i> ';
      }
      $output .= esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );
      $output .= '</span>';
      $output .= '<i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0"></i>';
      $output .= '</button>';
    } else {
      if ( $depth === 0 ) {
        $class_attr = 'flex items-center gap-3 text-white text-base font-semibold py-3 px-4 rounded-lg hover:bg-white/10 transition-colors';
      } elseif ( $depth === 1 ) {
        $class_attr = 'block text-white/70 text-sm py-2 pl-14 pr-4 rounded-lg hover:text-white hover:bg-white/5 transition-colors';
      } else {
        $class_attr = 'block text-white/60 text-xs py-2 pl-20 pr-4 rounded-lg hover:text-white hover:bg-white/5 transition-colors';
      }

      $output .= '<a href="' . esc_url( $item->url ) . '" class="' . esc_attr( $class_attr ) . '">';
      if ( $depth === 0 ) {
        if ( ! empty( $item->icon ) ) {
          $output .= '<i class="' . ha_icon_class( $item->icon ) . ' w-5 text-secondary text-center shrink-0"></i> ';
        }
      } else {
        $output .= '<i class="fas fa-chevron-right w-3 text-secondary mr-2 shrink-0"></i>';
      }
      $output .= esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );
      $output .= '</a>';
    }
  }

  public function end_el( &$output, $item, $depth = 0, $args = null ) {
    $classes      = empty( $item->classes ) ? array() : (array) $item->classes;
    $has_children = in_array( 'menu-item-has-children', $classes, true );
    if ( $has_children ) {
      $output .= '</div>';
    }
  }
}

/**
 * ── Topbar (desktop) ──
 * Same dropdown-group/dropdown-menu structure, smaller sizing.
 */
class HA_Topbar_Walker extends Walker_Nav_Menu {
  public function start_lvl( &$output, $depth = 0, $args = null ) {
    $indent  = str_repeat( "\t", $depth );
    $output .= "\n$indent<div class=\"dropdown-menu text-[10px] sm:text-[11px]\">\n";
  }

  public function end_lvl( &$output, $depth = 0, $args = null ) {
    $indent  = str_repeat( "\t", $depth );
    $output .= "$indent</div>\n";
  }

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $has_children = in_array( 'menu-item-has-children', $classes, true );

    $icon_html = '';
    if ( $depth === 0 ) {
      if ( ! empty( $item->icon ) ) {
        $icon_html = '<i class="' . ha_icon_class( $item->icon ) . ' text-[9px] sm:text-[10px] shrink-0"></i> ';
      }
    } else {
      $icon_class = 'text-[9px] sm:text-[10px] w-[14px] text-secondary shrink-0';
      if ( ! empty( $item->icon ) ) {
        $icon_html = '<i class="' . ha_icon_class( $item->icon ) . ' ' . $icon_class . '"></i> ';
      } else {
        $icon_html = '<i class="fas fa-chevron-right ' . $icon_class . '"></i> ';
      }
    }

    if ( $has_children ) {
      $output .= '<div class="dropdown-group shrink-0 self-stretch flex items-center">';
    }

    if ( $depth === 0 ) {
      $link_classes = 'px-3 py-1.5 text-white/80 hover:text-secondary hover:bg-white/10 transition-all font-medium border-r border-white/15 last:border-r-0 whitespace-nowrap shrink-0 self-center';
      if ( $has_children || ! empty( $item->icon ) ) {
        $link_classes .= ' inline-flex items-center gap-1';
      }
    } else {
      $link_classes = 'inline-flex items-center gap-1 w-full whitespace-nowrap';
    }
    $output .= $indent . '<a href="' . esc_url( $item->url ) . '" class="' . esc_attr( $link_classes ) . '">';
    $output .= $icon_html;
    $output .= esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );

    if ( $has_children && $depth === 0 ) {
      $output .= ' <i class="fas fa-chevron-down text-[7px] sm:text-[8px] ml-0.5"></i>';
    }

    $output .= '</a>';
  }

  public function end_el( &$output, $item, $depth = 0, $args = null ) {
    $classes   = empty( $item->classes ) ? array() : (array) $item->classes;
    $has_children = in_array( 'menu-item-has-children', $classes, true );
    if ( $has_children ) {
      $output .= '</div>';
    }
  }
}

/**
 * ── Footer Links ──
 * Flat list with chevron/SECONDARY icons. Depth 1 only.
 */
class HA_Footer_Walker extends Walker_Nav_Menu {
  public function start_lvl( &$output, $depth = 0, $args = null ) {}

  public function end_lvl( &$output, $depth = 0, $args = null ) {}

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
    $class_names = esc_attr( $class_names );

    $target = ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
    $rel    = ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : ( ! empty( $item->target ) ? ' rel="noopener noreferrer"' : '' );

    $output .= $indent . '<li class="' . $class_names . '">';
    $output .= '<a href="' . esc_url( $item->url ) . '" class="hover:text-secondary transition-colors flex items-center gap-2"' . $target . $rel . '>';
    $output .= '<i class="fas fa-chevron-right text-[8px] text-secondary"></i> ';
    $output .= esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );
    $output .= '</a>';
  }

  public function end_el( &$output, $item, $depth = 0, $args = null ) {
    $output .= "</li>\n";
  }
}

/**
 * ── Mobile Quick Links (Secondary Menu) ──
 * Fixed-bottom accordion panel.  Depth 2.
 * Uses items_wrap='%3$s' to suppress ul/li wrapper.
 */
class HA_Quicklinks_Walker extends Walker_Nav_Menu {
  public function start_lvl( &$output, $depth = 0, $args = null ) {
    $output .= '<div class="accordion-content hidden">';
  }

  public function end_lvl( &$output, $depth = 0, $args = null ) {
    $output .= '</div>';
  }

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $has_children = in_array( 'menu-item-has-children', (array) $item->classes, true );

    $icon_html = '';
    if ( ! empty( $item->icon ) ) {
      $icon_html = '<i class="' . ha_icon_class( $item->icon ) . ' w-5 text-secondary text-center"></i>';
    }

    if ( 0 === $depth ) {
      if ( $has_children ) {
        $output .= '<div class="accordion-item">';
        $output .= '<button class="accordion-toggle flex items-center justify-between w-full text-white/80 text-sm py-3 px-3 rounded-lg hover:bg-white/10 hover:text-white transition-colors">';
        $output .= '<span class="flex items-center gap-3">' . $icon_html . esc_html( apply_filters( 'the_title', $item->title, $item->ID ) ) . '</span>';
        $output .= '<i class="fas fa-chevron-down text-xs transition-transform duration-300"></i>';
        $output .= '</button>';
      } else {
        $output .= '<a href="' . esc_url( $item->url ) . '" class="secondary-link flex items-center gap-3 text-white/80 text-sm py-3 px-3 rounded-lg hover:bg-white/10 hover:text-white transition-colors">';
        $output .= $icon_html . ' ' . esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );
        $output .= '</a>';
      }
    } elseif ( 1 === $depth ) {
      $output .= '<a href="' . esc_url( $item->url ) . '" class="block text-white/60 text-xs py-2 pl-14 pr-3 rounded-lg hover:text-white hover:bg-white/5 transition-colors">';
      $output .= '<i class="fas fa-chevron-right w-3 text-secondary mr-2"></i>';
      $output .= esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );
      $output .= '</a>';
    }
  }

  public function end_el( &$output, $item, $depth = 0, $args = null ) {
    if ( 0 === $depth && in_array( 'menu-item-has-children', (array) $item->classes, true ) ) {
      $output .= '</div>';
    }
  }
}

/**
 * ── Copyright Bar ──
 * Inline links with middle-dot separators.  Depth 1 only.
 * Uses items_wrap='%3$s' to suppress ul/li wrapper.
 */
class HA_Copyright_Walker extends Walker_Nav_Menu {
  private $item_count = 0;
  private $total_items = 0;

  public function walk( $elements, $max_depth, ...$args ) {
    $this->total_items = count( $elements );
    $this->item_count  = 0;
    return parent::walk( $elements, $max_depth, ...$args );
  }

  public function start_lvl( &$output, $depth = 0, $args = null ) {}

  public function end_lvl( &$output, $depth = 0, $args = null ) {}

  public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
    $output .= '<a href="' . esc_url( $item->url ) . '" class="text-gray-300 hover:text-secondary-light transition-colors text-xs font-medium">';
    $output .= esc_html( apply_filters( 'the_title', $item->title, $item->ID ) );
    $output .= '</a>';
  }

  public function end_el( &$output, $item, $depth = 0, $args = null ) {
    $this->item_count++;
    if ( $this->item_count < $this->total_items ) {
      $output .= ' <span class="text-white/30 mx-1 select-none" aria-hidden="true">&middot;</span> ';
    }
  }
}
