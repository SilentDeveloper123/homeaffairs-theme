<?php
/**
 * Recursive Renderer for Backend-Managed Organizational Chart
 *
 * @package HomeAffairs
 */

defined( 'ABSPATH' ) || exit;

/**
 * Fetch all published Org Nodes indexed by ID and grouped by post_parent
 *
 * @return array{nodes: array<int, WP_Post>, by_parent: array<int, array<int>>, root_id: int}
 */
function ha_get_org_tree_data() {
	$posts = get_posts( array(
		'post_type'      => 'ha_org_node',
		'post_status'    => 'publish',
		'posts_per_page' => -1,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	) );

	if ( empty( $posts ) ) {
		return array(
			'nodes'     => array(),
			'by_parent' => array(),
			'root_id'   => 0,
		);
	}

	$nodes     = array();
	$by_parent = array();
	$root_id   = 0;

	foreach ( $posts as $p ) {
		$nodes[ $p->ID ] = $p;
		$parent_id       = (int) $p->post_parent;
		if ( ! isset( $by_parent[ $parent_id ] ) ) {
			$by_parent[ $parent_id ] = array();
		}
		$by_parent[ $parent_id ][] = $p->ID;

		if ( 0 === $parent_id && 0 === $root_id ) {
			$root_id = $p->ID;
		}
	}

	return array(
		'nodes'     => $nodes,
		'by_parent' => $by_parent,
		'root_id'   => $root_id,
	);
}

/**
 * Render dynamic division filter pills based on active branches in the tree
 *
 * @param array $tree_data
 * @return string HTML
 */
function ha_render_org_filter_pills( $tree_data = null ) {
	if ( null === $tree_data ) {
		$tree_data = ha_get_org_tree_data();
	}

	// Division label translations by locale
	$locale = get_locale();
	$is_si  = ( 0 === strpos( $locale, 'si' ) );
	$is_ta  = ( 0 === strpos( $locale, 'ta' ) );

	$div_labels = array(
		'admin'         => $is_si ? 'පරිපාලන' : ( $is_ta ? 'நிர்வாகம்' : 'Admin' ),
		'home-affairs'  => $is_si ? 'ස්වදේශ කටයුතු අංශය' : ( $is_ta ? 'உள்நாட்டு அலுவல்கள் பிரிவு' : 'Home Affairs Division' ),
		'development'   => $is_si ? 'සංවර්ධන' : ( $is_ta ? 'அபிவிருத்தி' : 'Development' ),
		'investigation' => $is_si ? 'විමර්ශන' : ( $is_ta ? 'விசாரணை' : 'Investigation' ),
		'rar'           => $is_si ? 'කලාපීය පරිපාලන ප්‍රතිසංස්කරණ' : ( $is_ta ? 'பிராந்திய நிர்வாக மறுசீரமைப்பு' : 'RAR' ),
		'technical'     => $is_si ? 'තාක්ෂණික' : ( $is_ta ? 'தொழில்நுட்பம்' : 'Technical' ),
		'planning'      => $is_si ? 'ක්‍රමසම්පාදන' : ( $is_ta ? 'திட்டமிடல்' : 'Planning' ),
		'finance'       => $is_si ? 'මුදල්' : ( $is_ta ? 'நிதி' : 'Finance' ),
		'audit'         => $is_si ? 'අභ්‍යන්තර විගණන' : ( $is_ta ? 'உள் தணிக்கை' : 'Internal Audit' ),
	);

	$all_text = $is_si ? 'සියලුම අංශ (%d)' : ( $is_ta ? 'அனைத்துப் பிரிவுகளும் (%d)' : 'All Divisions (%d)' );

	// Detect which divisions exist among published nodes
	$active_divisions = array();
	if ( ! empty( $tree_data['nodes'] ) ) {
		foreach ( $tree_data['nodes'] as $n ) {
			$div = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $n->ID, 'org_division_key' ) : '';
			if ( $div && isset( $div_labels[ $div ] ) && ! in_array( $div, $active_divisions, true ) ) {
				$active_divisions[] = $div;
			}
		}
	}

	// Fallback to all 9 if none specifically set
	if ( empty( $active_divisions ) ) {
		$active_divisions = array_keys( $div_labels );
	}

	$count_num = count( $active_divisions );
	$all_label = sprintf( $all_text, $count_num );

	$html = '<div class="flex flex-wrap items-center gap-1.5" id="orgDivisionFilters">' . "\n";
	$html .= sprintf(
		'<button type="button" class="org-filter-pill active px-3 py-1 rounded-full text-xs font-bold transition-all bg-primary-darker text-white" data-div="all">%s</button>' . "\n",
		esc_html( $all_label )
	);

	foreach ( $active_divisions as $div_key ) {
		$label = isset( $div_labels[ $div_key ] ) ? $div_labels[ $div_key ] : ucfirst( str_replace( '-', ' ', $div_key ) );
		$html .= sprintf(
			'<button type="button" class="org-filter-pill px-2.5 py-1 rounded-full text-xs font-semibold transition-all bg-white text-slate-600 border border-slate-200 hover:border-secondary" data-div="%s">%s</button>' . "\n",
			esc_attr( $div_key ),
			esc_html( $label )
		);
	}

	$html .= '</div>' . "\n";
	return $html;
}

/**
 * Render single card markup
 *
 * @param WP_Post $post
 * @return string HTML
 */
function ha_render_org_card_markup( $post ) {
	$post_id = $post->ID;
	$style   = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_card_style' ) : 'l5';
	if ( empty( $style ) ) {
		$style = 'l5';
	}

	$card_classes = array( 'org-card', 'org-card-' . sanitize_html_class( $style ) );

	$display_title = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_display_title' ) : '';
	$acronym       = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_acronym' ) : '';
	$sub_label     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_sub_label' ) : '';

	if ( ! empty( $sub_label ) ) {
		$card_classes[] = 'org-card-translator';
	}

	$title = get_the_title( $post );

	// Cross link data attributes
	$cross_target = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_cross_link_target' ) : null;
	$cross_anchor = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_cross_link_anchor' ) : null;
	$cross_style  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_cross_link_style' ) : 'none';

	$cross_attrs = '';
	if ( ! empty( $cross_target ) && is_array( $cross_target ) && ! empty( $cross_target[0]['id'] ) ) {
		$t_id = (int) $cross_target[0]['id'];
		$cross_attrs .= ' data-cross-target="org-node-' . $t_id . '"';
		if ( ! empty( $cross_style ) && 'none' !== $cross_style ) {
			$cross_attrs .= ' data-cross-style="' . esc_attr( $cross_style ) . '"';
		}
		if ( ! empty( $cross_anchor ) && is_array( $cross_anchor ) && ! empty( $cross_anchor[0]['id'] ) ) {
			$a_id = (int) $cross_anchor[0]['id'];
			$cross_attrs .= ' data-cross-anchor="org-node-' . $a_id . '"';
		}
	}

	$html = sprintf(
		'<div class="%s" id="org-node-%d" data-node-id="%d" data-title="%s"%s>',
		esc_attr( implode( ' ', $card_classes ) ),
		$post_id,
		$post_id,
		esc_attr( $title ),
		$cross_attrs
	);

	if ( in_array( $style, array( 'do', 'mso', 'oes' ), true ) || ! empty( $acronym ) ) {
		$disp_acronym = ! empty( $acronym ) ? $acronym : strtoupper( $style );
		$html .= '<span class="org-acronym">' . esc_html( $disp_acronym ) . '</span>';
	} elseif ( ! empty( $sub_label ) ) {
		$html .= '<span class="org-title">' . esc_html( $title ) . '</span>';
		$html .= '<span class="org-sub-lang">' . wp_kses( $sub_label, array( 'br' => array() ) ) . '</span>';
	} else {
		$content_title = ! empty( $display_title ) ? wp_kses( $display_title, array( 'br' => array() ) ) : esc_html( $title );
		$html .= '<div class="org-title">' . $content_title . '</div>';
	}

	$html .= '</div>';
	return $html;
}

/**
 * Recursive branch rendering helper
 *
 * @param int   $node_id
 * @param array $tree_data
 * @param int   $depth
 * @return string HTML
 */
function ha_render_org_subtree( $node_id, $tree_data, $depth = 1 ) {
	if ( ! isset( $tree_data['nodes'][ $node_id ] ) ) {
		return '';
	}

	$post      = $tree_data['nodes'][ $node_id ];
	$post_id   = $post->ID;
	$children  = isset( $tree_data['by_parent'][ $post_id ] ) ? $tree_data['by_parent'][ $post_id ] : array();

	$division      = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_division_key' ) : '';
	$preset        = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_layout_preset' ) : 'default';
	$child_mode    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_children_mode' ) : 'always';
	$list_style    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_children_list_style' ) : 'default';
	$direct_branch = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_direct_branch' ) : 'no';
	$stop_crossbar = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'org_stop_crossbar' ) : 'no';

	// Determine <li> classes
	$li_classes = array();
	if ( ! empty( $preset ) && 'default' !== $preset ) {
		$li_classes[] = sanitize_html_class( $preset );
	}

	// Direct children of Secretary (depth 3) are main division branches
	$li_attrs = '';
	if ( 3 === $depth || ! empty( $division ) && empty( $post->post_parent ) ) {
		$li_classes[] = 'org-branch';
		if ( 'yes' === $direct_branch ) {
			$li_classes[] = 'org-branch-direct';
		}
		if ( ! empty( $division ) ) {
			$li_attrs .= ' data-division="' . esc_attr( $division ) . '"';
		}
	}

	$class_attr = ! empty( $li_classes ) ? ' class="' . esc_attr( implode( ' ', $li_classes ) ) . '"' : '';

	$html = '<li' . $class_attr . $li_attrs . '>' . "\n";
	$html .= "\t" . ha_render_org_card_markup( $post ) . "\n";

	// Render subordinate staff subtree or regular child list
	if ( ! empty( $children ) ) {
		if ( 'collapsible' === $child_mode ) {
			$html .= "\t" . '<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>' . "\n";
			$ul_class = 'staff-subtree';
			if ( ! empty( $list_style ) && 'default' !== $list_style ) {
				$ul_class .= ' ' . sanitize_html_class( $list_style );
			}
			$html .= "\t" . '<ul class="' . esc_attr( $ul_class ) . '">' . "\n";
		} else {
			$ul_class = ( ! empty( $list_style ) && 'default' !== $list_style ) ? ' class="' . sanitize_html_class( $list_style ) . '"' : '';
			$html .= "\t" . '<ul' . $ul_class . '>' . "\n";
		}

		// Process children with pair grouping support
		$i = 0;
		$child_count = count( $children );
		while ( $i < $child_count ) {
			$cid = $children[ $i ];
			$cpost = isset( $tree_data['nodes'][ $cid ] ) ? $tree_data['nodes'][ $cid ] : null;
			$c_pair = $cpost && function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $cid, 'org_pair_group' ) : '';

			// Check if paired with next sibling
			$next_cid = ( $i + 1 < $child_count ) ? $children[ $i + 1 ] : null;
			$next_cpost = $next_cid && isset( $tree_data['nodes'][ $next_cid ] ) ? $tree_data['nodes'][ $next_cid ] : null;
			$next_pair = $next_cpost && function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $next_cid, 'org_pair_group' ) : '';

			if ( ! empty( $c_pair ) && $c_pair === $next_pair ) {
				// Render paired <li>
				$html .= "\t\t" . '<li>' . "\n";
				$html .= "\t\t\t" . '<div class="org-card-pair">' . "\n";
				$html .= "\t\t\t\t" . ha_render_org_card_markup( $cpost ) . "\n";
				$html .= "\t\t\t\t" . ha_render_org_card_markup( $next_cpost ) . "\n";
				$html .= "\t\t\t" . '</div>' . "\n";

				// Subtree of pair (attached to first card)
				$pair_children = isset( $tree_data['by_parent'][ $cid ] ) ? $tree_data['by_parent'][ $cid ] : array();
				$pair_child_mode = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $cid, 'org_children_mode' ) : 'always';
				if ( ! empty( $pair_children ) ) {
					if ( 'collapsible' === $pair_child_mode ) {
						$html .= "\t\t\t" . '<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>' . "\n";
						$html .= "\t\t\t" . '<ul class="staff-subtree">' . "\n";
					} else {
						$html .= "\t\t\t" . '<ul>' . "\n";
					}
					foreach ( $pair_children as $pcid ) {
						$html .= ha_render_org_subtree( $pcid, $tree_data, $depth + 2 );
					}
					$html .= "\t\t\t" . '</ul>' . "\n";
				}

				$html .= "\t\t" . '</li>' . "\n";
				$i += 2; // Advanced past both paired nodes
			} else {
				$html .= ha_render_org_subtree( $cid, $tree_data, $depth + 1 );
				$i++;
			}
		}

		$html .= "\t" . '</ul>' . "\n";
	}

	$html .= '</li>' . "\n";
	return $html;
}

/**
 * Main Entry Point: Render the complete organizational tree starting at the root
 *
 * @param int $page_id Optional governance page ID
 * @return string|false Rendered HTML or false if no nodes exist
 */
function ha_render_org_tree( $page_id = 0 ) {
	$tree_data = ha_get_org_tree_data();

	if ( empty( $tree_data['nodes'] ) ) {
		return false; // Triggers fallback to hardcoded tree
	}

	$root_id = 0;
	if ( $page_id > 0 && function_exists( 'carbon_get_post_meta' ) ) {
		$selected_root = carbon_get_post_meta( $page_id, 'gov_chart_root_node' );
		if ( ! empty( $selected_root ) && is_array( $selected_root ) && ! empty( $selected_root[0]['id'] ) ) {
			$candidate = (int) $selected_root[0]['id'];
			if ( isset( $tree_data['nodes'][ $candidate ] ) ) {
				$root_id = $candidate;
			}
		}
	}

	if ( 0 === $root_id ) {
		$root_id = $tree_data['root_id'];
	}

	if ( 0 === $root_id || ! isset( $tree_data['nodes'][ $root_id ] ) ) {
		return false;
	}

	$html = '<div class="org-tree">' . "\n";
	$html .= '<ul>' . "\n";
	$html .= ha_render_org_subtree( $root_id, $tree_data, 1 );
	$html .= '</ul>' . "\n";
	$html .= '</div>' . "\n";

	return $html;
}
