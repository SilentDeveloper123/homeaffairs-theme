<?php
/**
 * Carbon Fields Definitions: Home Page & Special Notices
 *
 * @package HomeAffairs
 */

defined( 'ABSPATH' ) || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'ha_register_carbon_fields' );
function ha_register_carbon_fields() {

	// ═══════════════════════════════════════════════════════════════════
	// 1. HOME PAGE CONFIGURATION (template-home.php)
	// ═══════════════════════════════════════════════════════════════════
	$front_page_id = (int) get_option( 'page_on_front' );

	$home_container = Container::make( 'post_meta', __( 'Home Page Configuration', 'homeaffairs' ) )
		->where( 'post_template', '=', 'page-templates/template-home.php' );

	if ( $front_page_id > 0 ) {
		$home_container->or_where( 'post_id', '=', $front_page_id );
	}

	$home_container
		// ── Tab 1: Section Visibility (Show/Hide radio button for each section) ──
		->add_tab( __( 'Section Visibility', 'homeaffairs' ), array(
			Field::make( 'html', 'ha_vis_intro', __( 'Section Toggles', 'homeaffairs' ) )
				->set_html( '<div style="padding:10px 14px;background:#f0f6fc;border-left:4px solid #0056b3;border-radius:3px;font-size:13px;line-height:1.5;">' .
					'<strong>' . esc_html__( 'Section Visibility Controls:', 'homeaffairs' ) . '</strong> ' .
					esc_html__( 'Use the radio buttons below to individually show or hide each section on the Home Page.', 'homeaffairs' ) .
				'</div>' ),

			Field::make( 'radio', 'ha_home_show_slider', __( '1. Main Slider (Hero Left Column)', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the hero carousel slides on the left.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_notices', __( '2. Special Notices (Hero Right Column)', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the Special Notices tiles column on the right.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_ticker', __( '3. Breaking News Ticker (Hero Overlay)', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the bottom breaking news ticker band.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_stats', __( '4. Statistics Counter Section', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the 25 Districts, 335 Divisions, 14,022 GN Divisions counter strip.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_news', __( '5. Latest News & Updates Section', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the featured news item and 4 small news cards.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_initiatives', __( '6. Featured Projects & District Gallery', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides Circuit Bungalows feature spotlight and district slider.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_services', __( '7. Citizen Services & Quick Links', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the 8 citizen service portal cards.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_leadership', __( '8. Leadership Messages / Spotlight', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides leadership spotlight cards.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_downloads', __( '9. Downloads & Resources Section', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides Publications, Scholarships, Vacancies, Calendar cards.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_contact_banner', __( '10. 1905 Contact / Help Banner', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the emergency 1905 helpline banner.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_institutions', __( '11. Related Institutions', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the government institution logos strip.', 'homeaffairs' ) ),
		) )

		// ── Tab 2: Main Slider Repeater ──
		->add_tab( __( 'Main Slider', 'homeaffairs' ), array(
			Field::make( 'complex', 'ha_home_slides', __( 'Hero Carousel Slides', 'homeaffairs' ) )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'text', 'slide_subtitle', __( 'Slide Sub Title', 'homeaffairs' ) )
						->set_default_value( 'HOME AFFAIRS DIVISION' )
						->set_help_text( __( 'Small pill badge above the main title.', 'homeaffairs' ) ),

					Field::make( 'text', 'slide_title', __( 'Slide Title', 'homeaffairs' ) )
						->set_default_value( 'Seamless Governance from Central to Grassroots' )
						->set_help_text( __( 'Primary headline text for this slide.', 'homeaffairs' ) ),

					Field::make( 'textarea', 'slide_desc', __( 'Slide Description', 'homeaffairs' ) )
						->set_rows( 3 )
						->set_default_value( 'Empowering Regional Secretariats Across the Nation—Facilitating and coordinating Sri Lanka administrative ecosystem to deliver efficient, technology-driven public services.' )
						->set_help_text( __( 'Supporting body copy displayed under the title.', 'homeaffairs' ) ),

					Field::make( 'text', 'slide_btn_text', __( 'Slide Button Text', 'homeaffairs' ) )
						->set_default_value( 'About Us' )
						->set_help_text( __( 'Label for the action button (e.g. About Us, Explore More). Leave empty to hide button.', 'homeaffairs' ) ),

					Field::make( 'text', 'slide_btn_url', __( 'Slide Button Link (URL)', 'homeaffairs' ) )
						->set_default_value( '#' )
						->set_help_text( __( 'Destination URL for this slide\'s button.', 'homeaffairs' ) ),

					Field::make( 'radio', 'slide_btn_target', __( 'Button Target', 'homeaffairs' ) )
						->set_options( array(
							'_self'  => __( 'Same Window (_self)', 'homeaffairs' ),
							'_blank' => __( 'New Tab (_blank)', 'homeaffairs' ),
						) )
						->set_default_value( '_self' ),

					Field::make( 'image', 'slide_image', __( 'Slide Image Upload (Size 800px × 400px)', 'homeaffairs' ) )
						->set_value_type( 'url' )
						->set_help_text( __( 'Upload slide background photograph. Recommended aspect ratio is 2:1 (Size: 800px × 400px or 1600px × 800px).', 'homeaffairs' ) ),
				) )
				->set_header_template( '<%- slide_title ? slide_title : "Slide " + ($_index + 1) %>' ),
		) )

		// ── Tab 3: Special Notices Column Options ──
		->add_tab( __( 'Special Notices Column', 'homeaffairs' ), array(
			Field::make( 'text', 'ha_home_notices_title', __( 'Column Badge / Title', 'homeaffairs' ) )
				->set_default_value( 'Special Notices' )
				->set_help_text( __( 'Badge text shown at the top of the notices column.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_notices_count', __( 'Number of Notices to Show', 'homeaffairs' ) )
				->set_default_value( '3' )
				->set_attribute( 'type', 'number' )
				->set_attribute( 'min', '1' )
				->set_attribute( 'max', '10' )
				->set_help_text( __( 'How many recent special notices to display in the hero column (default: 3).', 'homeaffairs' ) ),

			Field::make( 'select', 'ha_home_notices_category', __( 'Filter by Category (Optional)', 'homeaffairs' ) )
				->set_options( 'ha_get_notice_category_options' )
				->set_help_text( __( 'Display notices from all categories or choose a specific category.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_notices_view_all_url', __( '"View all notices" Link URL', 'homeaffairs' ) )
				->set_default_value( home_url( '/special-notices/' ) )
				->set_help_text( __( 'Destination link for the "View all notices" link at bottom of column.', 'homeaffairs' ) ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 2. SPECIAL NOTICES CUSTOM POST TYPE FIELDS
	// ═══════════════════════════════════════════════════════════════════
	Container::make( 'post_meta', __( 'Special Notice Information', 'homeaffairs' ) )
		->where( 'post_type', '=', 'special_notice' )
		->add_fields( array(
			Field::make( 'text', 'notice_icon', __( 'Font Awesome Icon', 'homeaffairs' ) )
				->set_default_value( 'fas fa-bullhorn' )
				->set_help_text( __( 'Type or choose a Font Awesome 6 icon class (e.g. fas fa-bullhorn, fas fa-graduation-cap, fas fa-laptop, fas fa-file-invoice, fas fa-bell).', 'homeaffairs' ) ),

			Field::make( 'text', 'notice_custom_title', __( 'Custom Display Title (Optional)', 'homeaffairs' ) )
				->set_help_text( __( 'Optional shorter headline for the homepage tile. If left blank, the main Post Title above will be used.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'notice_desc', __( 'Notice Description', 'homeaffairs' ) )
				->set_rows( 3 )
				->set_help_text( __( 'Brief summary or description displayed in the notice tile/card.', 'homeaffairs' ) ),

			Field::make( 'file', 'notice_attachment', __( 'Upload Attachment / PDF File', 'homeaffairs' ) )
				->set_type( array( 'pdf', 'document' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Upload official PDF file or document. When clicked, this file opens or downloads directly.', 'homeaffairs' ) ),

			Field::make( 'text', 'notice_url', __( 'External URL / Alternative Link', 'homeaffairs' ) )
				->set_help_text( __( 'Alternative web link (used if no attachment file is uploaded above).', 'homeaffairs' ) ),

			Field::make( 'text', 'notice_ref', __( 'Reference Number (Optional)', 'homeaffairs' ) )
				->set_help_text( __( 'Official reference code, e.g. MOHA/2026/SN/01.', 'homeaffairs' ) ),
		) );
}

/**
 * Helper to retrieve notice categories for Carbon Fields select options
 */
function ha_get_notice_category_options() {
	$options = array(
		'' => __( 'All Categories (Latest Notices)', 'homeaffairs' ),
	);

	if ( taxonomy_exists( 'notice_category' ) ) {
		$terms = get_terms( array(
			'taxonomy'   => 'notice_category',
			'hide_empty' => false,
		) );

		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
			foreach ( $terms as $term ) {
				$options[ $term->slug ] = $term->name;
			}
		}
	}

	return $options;
}

// ═══════════════════════════════════════════════════════════════════
// 3. ADMIN ENHANCEMENTS: FONT AWESOME SELECTION & LIVE PREVIEW
// ═══════════════════════════════════════════════════════════════════
add_action( 'admin_enqueue_scripts', 'ha_cpt_fields_admin_assets' );
function ha_cpt_fields_admin_assets( $hook ) {
	global $post_type;

	// Enqueue on special_notice edit and page edit screens
	if ( in_array( $hook, array( 'post.php', 'post-new.php' ), true ) ) {
		wp_enqueue_style(
			'font-awesome-6-admin',
			get_template_directory_uri() . '/assets/css/fontawesome-all.min.css',
			array(),
			'6.5.1'
		);

		if ( function_exists( 'ha_enqueue_icon_picker_modal' ) ) {
			ha_enqueue_icon_picker_modal();
		}
	}
}

add_action( 'admin_footer', 'ha_notice_icon_admin_footer' );
function ha_notice_icon_admin_footer() {
	global $pagenow, $post_type;

	if ( ! in_array( $pagenow, array( 'post.php', 'post-new.php' ), true ) ) {
		return;
	}

	$icon_options = function_exists( 'ha_get_cta_icon_options' ) ? ha_get_cta_icon_options() : array();
	?>
	<datalist id="ha-notice-icon-list">
		<?php foreach ( $icon_options as $val => $lbl ) : ?>
			<option value="<?php echo esc_attr( $val ); ?>"><?php echo esc_html( $lbl ); ?></option>
		<?php endforeach; ?>
	</datalist>

	<script>
	jQuery(function ($) {
		function initNoticeIconField() {
			var $iconInputs = $('[name*="notice_icon"]');
			$iconInputs.each(function () {
				var $input = $(this);
				if ($input.data('ha-icon-inited')) return;
				$input.data('ha-icon-inited', true);

				$input.attr('list', 'ha-notice-icon-list');

				// Wrapper
				var $wrap = $('<div class="ha-icon-picker-field ha-icon-picker-cf" style="display:inline-flex;align-items:center;gap:8px;margin-top:6px;"></div>');
				var $preview = $('<div class="ha-icon-preview-box" style="display:inline-flex;align-items:center;gap:6px;padding:4px 8px;border:1px solid #ccd0d4;border-radius:4px;background:#f9f9f9;min-width:120px;height:30px;"><i style="font-size:16px;color:#800000;width:18px;text-align:center;"></i><span class="ha-icon-label" style="font-size:12px;color:#444;"></span></div>');
				var $chooseBtn = $('<button type="button" class="button ha-icon-choose" style="display:inline-flex;align-items:center;gap:4px;"><span class="dashicons dashicons-plus" style="font-size:14px;width:14px;height:14px;margin-top:3px;"></span> <?php echo esc_js( __( 'Browse Icons', 'homeaffairs' ) ); ?></button>');

				$wrap.append($preview).append($chooseBtn);
				$input.after($wrap);

				function refreshPreview() {
					var val = $input.val().trim();
					if (val) {
						$preview.find('i').attr('class', val);
						$preview.find('.ha-icon-label').text(val.replace(/^(fas|far|fab)\s+/, ''));
						$preview.show();
					} else {
						$preview.find('i').attr('class', 'fas fa-circle-question');
						$preview.find('.ha-icon-label').text('No icon');
					}
				}

				$input.on('input change keyup', refreshPreview);
				refreshPreview();
			});
		}

		// Run after Carbon Fields React mounts
		setTimeout(initNoticeIconField, 400);
		setTimeout(initNoticeIconField, 1200);
		$(document).on('click', '.carbon-tab, .carbon-section', function () {
			setTimeout(initNoticeIconField, 250);
		});
	});
	</script>
	<?php
}
