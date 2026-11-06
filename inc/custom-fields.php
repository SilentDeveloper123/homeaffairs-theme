<?php
/**
 * Carbon Fields Definitions: Home Page, Special Notices, and News & Announcements
 *
 * @package HomeAffairs
 */

defined( 'ABSPATH' ) || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'ha_register_carbon_fields' );
function ha_register_carbon_fields() {

	// ═══════════════════════════════════════════════════════════════════
	// HELPER: Attach Container to Home Page Template or Front Page
	// ═══════════════════════════════════════════════════════════════════
	$front_page_id = (int) get_option( 'page_on_front' );

	$create_home_box = function( $id, $title ) use ( $front_page_id ) {
		$container = Container::make( 'post_meta', $id, $title )
			->where( 'post_template', '=', 'page-templates/template-home.php' );

		if ( $front_page_id > 0 ) {
			$container->or_where( 'post_id', '=', $front_page_id );
		}

		return $container;
	};

	// ═══════════════════════════════════════════════════════════════════
	// 1. SECTION VISIBILITY CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_visibility', __( 'Home Page: Section Visibility', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'html', 'ha_vis_intro', __( 'Section Toggles', 'homeaffairs' ) )
				->set_html( '<div style="padding:10px 14px;background:#f0f6fc;border-left:4px solid #0056b3;border-radius:3px;font-size:13px;line-height:1.5;">' .
					'<strong>' . esc_html__( 'Section Visibility Controls:', 'homeaffairs' ) . '</strong> ' .
					esc_html__( 'Use the radio buttons below to individually show or hide each section on the Home Page.', 'homeaffairs' ) .
				'</div>' ),

			Field::make( 'radio', 'ha_home_show_slider', __( 'Main Slider (Hero Left Column)', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the hero carousel slides on the left.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_notices', __( 'Special Notices (Hero Right Column)', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the Special Notices tiles column on the right.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_ticker', __( 'Breaking News Ticker (Hero Overlay)', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the bottom breaking news ticker band.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_stats', __( 'Stats Bar Section', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the modern slim statistics counter bar.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_news', __( 'News & Announcements Section', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the News & Announcements featured card and small cards grid.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_adv1_dt', __( 'Advertise Section 1 : Digital Transformations Column', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the Digital Transformation spotlight card on the left.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_adv1_banners', __( 'Advertise Section 1 : Government Projects Banners Slider', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the Government Projects Banners Slider on the right.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_services', __( 'Quick Access Section 1', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the Quick Access Section 1 cards grid.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_adv2_rti', __( 'Advertise Section 2 : Right to Information Column', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the Right to Information hero column on the left.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_adv2_1905', __( 'Advertise Section 2 : Grievances Hotline - 1905 Column', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the Grievances Hotline 1905 column on the right.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_downloads', __( 'Quick Access Section 3', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides Quick Access Section 3 resource cards (Subsidies, Publications, Vacancies, etc.).', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_contact_banner', __( 'Call to Action Banner Section', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the assistance / contact call to action banner.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_home_show_institutions', __( 'Related Organizations Slider Section', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Shows/hides the related government organizations logos section.', 'homeaffairs' ) ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 2. MAIN SLIDER CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_main_slider', __( 'Main Slider', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'complex', 'ha_home_slides', __( 'Hero Carousel Slides', 'homeaffairs' ) )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'text', 'slide_subtitle', __( 'Slide Sub Title', 'homeaffairs' ) )
						->set_help_text( __( 'Small pill badge above the main title.', 'homeaffairs' ) ),

					Field::make( 'text', 'slide_title', __( 'Slide Title', 'homeaffairs' ) )
						->set_help_text( __( 'Primary headline text for this slide.', 'homeaffairs' ) ),

					Field::make( 'textarea', 'slide_desc', __( 'Slide Description', 'homeaffairs' ) )
						->set_rows( 3 )
						->set_help_text( __( 'Supporting body copy displayed under the title.', 'homeaffairs' ) ),

					Field::make( 'text', 'slide_btn_text', __( 'Slide Button Text', 'homeaffairs' ) )
						->set_help_text( __( 'Label for the action button (e.g. About Us, Explore More). Leave empty to hide button.', 'homeaffairs' ) ),

					Field::make( 'text', 'slide_btn_url', __( 'Slide Button (Link)', 'homeaffairs' ) )
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
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 3. SPECIAL NOTICES COLUMN CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_special_notices', __( 'Special Notices Column', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'text', 'ha_home_notices_title', __( 'Column Badge / Title', 'homeaffairs' ) )
				->set_help_text( __( 'Badge text shown at the top of the notices column.', 'homeaffairs' ) ),

			Field::make( 'number', 'ha_home_notices_count', __( 'Number of Notices to Show', 'homeaffairs' ) )
				->set_default_value( 3 )
				->set_min( 1 )
				->set_max( 10 )
				->set_step( 1 )
				->set_help_text( __( 'How many recent special notices to display in the hero column (default: 3).', 'homeaffairs' ) ),

			Field::make( 'select', 'ha_home_notices_category', __( 'Filter by Category (Optional)', 'homeaffairs' ) )
				->set_options( 'ha_get_notice_category_options' )
				->set_help_text( __( 'Display notices from all categories or choose a specific category.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_notices_btn_text', __( 'Column Button (Text)', 'homeaffairs' ) )
				->set_attribute( 'placeholder', __( 'View all notices', 'homeaffairs' ) )
				->set_help_text( __( 'Button text label for the link at the bottom of the notices column.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_notices_view_all_url', __( '"View all notices" Link URL', 'homeaffairs' ) )
				->set_help_text( __( 'Destination link for the "View all notices" link at bottom of column.', 'homeaffairs' ) ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 4. STATS BAR SECTION CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_stats_bar', __( 'Stats Bar Section', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'html', 'ha_stats_intro', __( 'Stats Bar Configuration', 'homeaffairs' ) )
				->set_html( '<div style="padding:10px 14px;background:#f0f6fc;border-left:4px solid #0056b3;border-radius:3px;font-size:13px;line-height:1.5;">' .
					'<strong>' . esc_html__( 'Stats Bar Section:', 'homeaffairs' ) . '</strong> ' .
					esc_html__( 'Add statistical highlight cards below. Each item consists of a Title and a Count value.', 'homeaffairs' ) .
				'</div>' ),

			Field::make( 'complex', 'ha_home_stats', __( 'Stats Bar Items', 'homeaffairs' ) )
				->set_layout( 'tabbed-horizontal' )
				->add_fields( array(
					Field::make( 'text', 'stat_title', __( 'Title', 'homeaffairs' ) )
						->set_help_text( __( 'Metric title (e.g. Department, District Secretariats, GN Divisions).', 'homeaffairs' ) ),

					Field::make( 'text', 'stat_count', __( 'Count', 'homeaffairs' ) )
						->set_help_text( __( 'Counter value (e.g. 1, 25, 331, 14,022, 100%).', 'homeaffairs' ) ),
				) )
				->set_header_template( '<%- stat_count ? stat_count + " - " : "" %><%- stat_title ? stat_title : "Stat " + ($_index + 1) %>' ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 5. NEWS & ANNOUNCEMENTS SECTION CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_news_section', __( 'News & Announcements Section', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'text', 'ha_home_news_title', __( 'Section Title', 'homeaffairs' ) )
				->set_help_text( __( 'Main section heading.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_news_subtitle', __( 'Section Sub Title', 'homeaffairs' ) )
				->set_help_text( __( 'Small pill badge above the section title.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_news_view_all_text', __( 'View All Button (Text)', 'homeaffairs' ) )
				->set_attribute( 'placeholder', __( 'View All News', 'homeaffairs' ) )
				->set_help_text( __( 'Text label for the "View All News" button.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_news_view_all_url', __( 'View All News Button Link (Link to Page)', 'homeaffairs' ) )
				->set_help_text( __( 'Destination URL for the "View All News" button.', 'homeaffairs' ) ),

			Field::make( 'select', 'ha_home_news_featured_category', __( 'Featured News Category (Main Card)', 'homeaffairs' ) )
				->set_options( 'ha_get_news_category_options' )
				->set_default_value( 'featured-news' )
				->set_help_text( __( 'Category used for the Main Card (most recent post). Default: Featured News.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_news_featured_btn_text', __( 'Featured News Card Button (Text)', 'homeaffairs' ) )
				->set_attribute( 'placeholder', __( 'Read Full Article', 'homeaffairs' ) )
				->set_help_text( __( 'Button text label for the main featured news card (e.g. Read Full Article).', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_news_featured_pdf_btn_text', __( 'Featured News Card PDF Button (Text)', 'homeaffairs' ) )
				->set_attribute( 'placeholder', __( 'Download Document (PDF)', 'homeaffairs' ) )
				->set_help_text( __( 'Button text label for the main featured news card when the article is a PDF document.', 'homeaffairs' ) ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 6. ADVERTISE SECTION 1: DIGITAL TRANSFORMATIONS COLUMN CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_adv1_dt', __( 'Advertise Section 1 : Digital Transformations Column', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'text', 'ha_home_adv1_dt_title', __( 'Title', 'homeaffairs' ) )
				->set_help_text( __( 'Main headline for the left highlight card.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv1_dt_subtitle', __( 'Sub Title', 'homeaffairs' ) )
				->set_help_text( __( 'Pill badge title above headline.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'ha_home_adv1_dt_desc', __( 'Description', 'homeaffairs' ) )
				->set_rows( 3 )
				->set_help_text( __( 'Body paragraph copy.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv1_dt_tags', __( 'Tags (separated by commas)', 'homeaffairs' ) )
				->set_help_text( __( 'Features or tags separated by commas (e.g. Paperless, Digital ID, 24/7 Portal).', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv1_dt_btn_text', __( 'Button Text', 'homeaffairs' ) )
				->set_help_text( __( 'Action button text label.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv1_dt_btn_url', __( 'Button Link (Link to Page)', 'homeaffairs' ) )
				->set_help_text( __( 'Action button destination link.', 'homeaffairs' ) ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 7. ADVERTISE SECTION 1: GOVERNMENT PROJECTS BANNERS SLIDER CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_adv1_banners', __( 'Advertise Section 1 : Government Projects Banners Slider', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'complex', 'ha_home_adv1_banners', __( 'Government Projects Banners Slider', 'homeaffairs' ) )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'image', 'banner_image', __( 'Banner Image (Size: 1370px × 500px)', 'homeaffairs' ) )
						->set_value_type( 'url' )
						->set_help_text( __( 'Upload project banner photograph. Recommended size is 1370px × 500px.', 'homeaffairs' ) ),

					Field::make( 'text', 'banner_title', __( 'Banner Title / Alt Text', 'homeaffairs' ) )
						->set_help_text( __( 'Descriptive title / accessibility alt attribute for the banner.', 'homeaffairs' ) ),

					Field::make( 'text', 'banner_url', __( 'Banner Link (URL)', 'homeaffairs' ) )
						->set_help_text( __( 'Destination URL when the banner is clicked.', 'homeaffairs' ) ),
				) )
				->set_header_template( '<%- banner_title ? banner_title : "Banner " + ($_index + 1) %>' ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 8. QUICK ACCESS SECTION 1 CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_qa1', __( 'Quick Access Section 1', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'text', 'ha_home_qa1_title', __( 'Section Title', 'homeaffairs' ) )
				->set_help_text( __( 'Section heading text (default: Quick Access).', 'homeaffairs' ) ),

			Field::make( 'complex', 'ha_home_qa1_items', __( 'Quick Access Section 1 Items', 'homeaffairs' ) )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'icon', 'qa_icon', __( 'Icon (Font Awesome)', 'homeaffairs' ) )
						->add_fontawesome_options()
						->set_help_text( __( 'Select Font Awesome icon from the visual icon picker.', 'homeaffairs' ) ),

					Field::make( 'text', 'qa_title', __( 'Title', 'homeaffairs' ) )
						->set_help_text( __( 'Item headline label.', 'homeaffairs' ) ),

					Field::make( 'textarea', 'qa_desc', __( 'Description', 'homeaffairs' ) )
						->set_rows( 2 )
						->set_help_text( __( 'Short descriptive line beneath the title.', 'homeaffairs' ) ),

					Field::make( 'text', 'qa_url', __( 'Link', 'homeaffairs' ) )
						->set_help_text( __( 'Destination page URL.', 'homeaffairs' ) ),
				) )
				->set_header_template( '<%- qa_title ? qa_title : "Item " + ($_index + 1) %>' ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 9. ADVERTISE SECTION 2: RIGHT TO INFORMATION COLUMN CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_adv2_rti', __( 'Advertise Section 2 : Right to Information Column', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'text', 'ha_home_adv2_rti_title', __( 'Column Title', 'homeaffairs' ) )
				->set_help_text( __( 'Primary heading for the Right to Information column.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_rti_subtitle', __( 'Column Sub Title', 'homeaffairs' ) )
				->set_help_text( __( 'Badge / Subtitle text above the title.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'ha_home_adv2_rti_desc', __( 'Column Description', 'homeaffairs' ) )
				->set_rows( 3 )
				->set_help_text( __( 'Body copy describing Right to Information services.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_rti_label', __( 'Column Label Text', 'homeaffairs' ) )
				->set_help_text( __( 'Small legislative or reference label tag (e.g. Act No. 12 of 2016).', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_rti_btn_text', __( 'Column Button Text', 'homeaffairs' ) )
				->set_help_text( __( 'Action button label.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_rti_btn_url', __( 'Column Button Link', 'homeaffairs' ) )
				->set_help_text( __( 'Destination URL for the action button.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_rti_tagline', __( 'Column Tag Line', 'homeaffairs' ) )
				->set_help_text( __( 'Footer tagline next to the action button.', 'homeaffairs' ) ),

			Field::make( 'image', 'ha_home_adv2_rti_image', __( 'Column Image Upload (Size : 1025px * 695px)', 'homeaffairs' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Background photograph for RTI column (Recommended size: 1025px × 695px).', 'homeaffairs' ) ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 10. ADVERTISE SECTION 2: GRIEVANCES HOTLINE - 1905 COLUMN CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_adv2_1905', __( 'Advertise Section 2 : Grievances Hotline - 1905 Column', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'text', 'ha_home_adv2_1905_title', __( 'Column Title', 'homeaffairs' ) )
				->set_help_text( __( 'Primary heading for the Grievances Hotline column.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_1905_subtitle', __( 'Column Sub Title', 'homeaffairs' ) )
				->set_help_text( __( 'Badge / Subtitle text above the title.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'ha_home_adv2_1905_desc', __( 'Column Description', 'homeaffairs' ) )
				->set_rows( 3 )
				->set_help_text( __( 'Body copy describing hotline services.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_1905_label', __( 'Column Label Text', 'homeaffairs' ) )
				->set_help_text( __( 'Small highlight label tag (e.g. Shortcode 1905).', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_1905_btn_text', __( 'Column Button Text', 'homeaffairs' ) )
				->set_help_text( __( 'Action button label.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_1905_btn_url', __( 'Column Button Link', 'homeaffairs' ) )
				->set_help_text( __( 'Destination URL for the action button.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_1905_tagline', __( 'Column Tag Line', 'homeaffairs' ) )
				->set_help_text( __( 'Footer tagline next to the action button.', 'homeaffairs' ) ),

			Field::make( 'image', 'ha_home_adv2_1905_image', __( 'Column Image Upload (Size : 1025px * 695px)', 'homeaffairs' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Background photograph for 1905 Hotline column (Recommended size: 1025px × 695px).', 'homeaffairs' ) ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 11. QUICK ACCESS SECTION 3 CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_qa3', __( 'Quick Access Section 3', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'text', 'ha_home_qa3_title', __( 'Section Title', 'homeaffairs' ) )
				->set_help_text( __( 'Main section heading text.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_qa3_subtitle', __( 'Section Sub Title', 'homeaffairs' ) )
				->set_help_text( __( 'Badge text above main section heading.', 'homeaffairs' ) ),

			Field::make( 'complex', 'ha_home_qa3_items', __( 'Quick Access Section 3 Items', 'homeaffairs' ) )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'icon', 'qa3_icon', __( 'Icon (Font Awesome)', 'homeaffairs' ) )
						->add_fontawesome_options()
						->set_help_text( __( 'Select Font Awesome icon from the visual icon picker.', 'homeaffairs' ) ),

					Field::make( 'text', 'qa3_title', __( 'Title', 'homeaffairs' ) )
						->set_help_text( __( 'Card title.', 'homeaffairs' ) ),

					Field::make( 'textarea', 'qa3_desc', __( 'Description', 'homeaffairs' ) )
						->set_rows( 2 )
						->set_help_text( __( 'Card description text.', 'homeaffairs' ) ),

					Field::make( 'text', 'qa3_btn_text', __( 'Link Button Text', 'homeaffairs' ) )
						->set_help_text( __( 'Bottom button label text.', 'homeaffairs' ) ),

					Field::make( 'text', 'qa3_url', __( 'Link', 'homeaffairs' ) )
						->set_help_text( __( 'Destination URL for card and button.', 'homeaffairs' ) ),

					Field::make( 'text', 'qa3_badge', __( 'Category Badge (Optional)', 'homeaffairs' ) )
						->set_attribute( 'placeholder', __( 'Resources', 'homeaffairs' ) )
						->set_help_text( __( 'Top-right small badge text (e.g. Resources, Education, Public Services).', 'homeaffairs' ) ),
				) )
				->set_header_template( '<%- qa3_title ? qa3_title : "Item " + ($_index + 1) %>' ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 12. CALL TO ACTION BANNER SECTION CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_cta_banner', __( 'Call to Action Banner Section', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'text', 'ha_home_cta_title', __( 'Section Title', 'homeaffairs' ) )
				->set_help_text( __( 'Main call to action heading.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'ha_home_cta_desc', __( 'Section Description', 'homeaffairs' ) )
				->set_rows( 3 )
				->set_help_text( __( 'Supporting body copy displayed below heading.', 'homeaffairs' ) ),

			Field::make( 'icon', 'ha_home_cta_btn_icon', __( 'Link Button Icon (Font Awesome)', 'homeaffairs' ) )
				->add_fontawesome_options()
				->set_help_text( __( 'Select Font Awesome icon from the visual icon picker for the action button.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_cta_btn_text', __( 'Link Button Text', 'homeaffairs' ) )
				->set_help_text( __( 'Action button label.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_cta_btn_url', __( 'Link', 'homeaffairs' ) )
				->set_help_text( __( 'Action button destination URL.', 'homeaffairs' ) ),

			Field::make( 'image', 'ha_home_cta_bg_image', __( 'Background Image (Optional)', 'homeaffairs' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Optional custom banner background photograph (Size: 1920px × 600px).', 'homeaffairs' ) ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 13. RELATED ORGANIZATIONS SLIDER SECTION CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_related_orgs', __( 'Related Organizations Slider Section', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'text', 'ha_home_orgs_title', __( 'Section Title', 'homeaffairs' ) )
				->set_help_text( __( 'Heading for related organizations section.', 'homeaffairs' ) ),

			Field::make( 'complex', 'ha_home_orgs_items', __( 'Slider Items', 'homeaffairs' ) )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'image', 'org_logo', __( 'Logo (Image File Upload)', 'homeaffairs' ) )
						->set_value_type( 'url' )
						->set_help_text( __( 'Upload institution logo or national emblem (PNG or SVG recommended).', 'homeaffairs' ) ),

					Field::make( 'text', 'org_title', __( 'Title', 'homeaffairs' ) )
						->set_help_text( __( 'Full name of the related organization.', 'homeaffairs' ) ),

					Field::make( 'text', 'org_url', __( 'Link', 'homeaffairs' ) )
						->set_help_text( __( 'Official web address of the organization.', 'homeaffairs' ) ),
				) )
				->set_header_template( '<%- org_title ? org_title : "Organization " + ($_index + 1) %>' ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// SPECIAL NOTICES CUSTOM POST TYPE FIELDS
	// ═══════════════════════════════════════════════════════════════════
	Container::make( 'post_meta', 'ha_container_special_notice_info', __( 'Special Notice Information', 'homeaffairs' ) )
		->where( 'post_type', '=', 'special_notice' )
		->add_fields( array(
			Field::make( 'icon', 'notice_icon', __( 'Notice Icon (Font Awesome)', 'homeaffairs' ) )
				->add_fontawesome_options()
				->set_help_text( __( 'Select Font Awesome icon from the visual icon picker.', 'homeaffairs' ) ),

			Field::make( 'text', 'notice_custom_title', __( 'Custom Display Title (Optional)', 'homeaffairs' ) )
				->set_help_text( __( 'Optional shorter headline for the homepage tile. If left blank, the main Post Title above will be used.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'notice_short_desc', __( 'Short Description', 'homeaffairs' ) )
				->set_rows( 2 )
				->set_help_text( __( 'Brief summary displayed on the homepage hero notice tile (e.g. "Training programme for officers").', 'homeaffairs' ) ),

			Field::make( 'textarea', 'notice_desc', __( 'Description', 'homeaffairs' ) )
				->set_rows( 4 )
				->set_help_text( __( 'Fuller description or announcement details.', 'homeaffairs' ) ),

			Field::make( 'file', 'notice_attachment', __( 'Upload Attachment / PDF File', 'homeaffairs' ) )
				->set_type( array( 'pdf', 'document' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Upload official PDF file or document. When clicked, this file opens or downloads directly.', 'homeaffairs' ) ),

			Field::make( 'text', 'notice_url', __( 'External URL / Alternative Link', 'homeaffairs' ) )
				->set_help_text( __( 'Alternative web link (used if no attachment file is uploaded above).', 'homeaffairs' ) ),

			Field::make( 'text', 'notice_ref', __( 'Reference Number (Optional)', 'homeaffairs' ) )
				->set_help_text( __( 'Official reference code, e.g. MOHA/2026/SN/01.', 'homeaffairs' ) ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// NEWS & ANNOUNCEMENTS CUSTOM POST TYPE FIELDS
	// ═══════════════════════════════════════════════════════════════════
	Container::make( 'post_meta', 'ha_container_news_details', __( 'News & Announcement Details', 'homeaffairs' ) )
		->where( 'post_type', '=', 'news_announcement' )
		->add_fields( array(
			Field::make( 'text', 'news_custom_title', __( 'Custom Display Title (Optional)', 'homeaffairs' ) )
				->set_help_text( __( 'Optional custom headline. If left blank, the main Post Title above will be used.', 'homeaffairs' ) ),

			Field::make( 'rich_text', 'news_description', __( 'Description (WYSIWYG Editor)', 'homeaffairs' ) )
				->set_help_text( __( 'Full formatted article description, announcement text, and formatted body copy.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'news_short_desc', __( 'Short Description', 'homeaffairs' ) )
				->set_rows( 3 )
				->set_help_text( __( 'Brief summary displayed on the homepage news cards (1-2 sentences).', 'homeaffairs' ) ),

			Field::make( 'image', 'news_featured_image', __( 'Featured Image (Upload Image File) (1600px × 980px)', 'homeaffairs' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Upload high-resolution featured image (Recommended size: 1600px × 980px). Used on homepage featured card and post header.', 'homeaffairs' ) ),

			Field::make( 'complex', 'news_gallery', __( 'Media Gallery (Size: 1200px × 800px) Max 8 Images', 'homeaffairs' ) )
				->set_layout( 'tabbed-horizontal' )
				->set_max( 8 )
				->add_fields( array(
					Field::make( 'image', 'gallery_image', __( 'Gallery Image', 'homeaffairs' ) )
						->set_value_type( 'url' )
						->set_help_text( __( 'Upload image to include in the news photo gallery.', 'homeaffairs' ) ),

					Field::make( 'text', 'gallery_caption', __( 'Caption / Description (Optional)', 'homeaffairs' ) )
						->set_help_text( __( 'Optional caption displayed beneath this gallery image.', 'homeaffairs' ) ),
				) )
				->set_header_template( '<%- gallery_caption ? gallery_caption : "Image " + ($_index + 1) %>' )
				->set_help_text( __( 'Add up to 8 images for the media gallery on this news post.', 'homeaffairs' ) ),

			Field::make( 'file', 'news_attachment', __( 'Add Attachment / Upload PDF File', 'homeaffairs' ) )
				->set_type( array( 'pdf', 'document' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Upload official PDF press release, gazette, or circular file.', 'homeaffairs' ) ),

			Field::make( 'text', 'news_attachment_url', __( 'Attachment External Link (Optional)', 'homeaffairs' ) )
				->set_help_text( __( 'Alternative external URL for documents hosted elsewhere.', 'homeaffairs' ) ),

			Field::make( 'text', 'news_custom_btn_text', __( 'Custom Button Text (Optional)', 'homeaffairs' ) )
				->set_help_text( __( 'Optional custom button text for this news article. Overrides the section default button text.', 'homeaffairs' ) ),
		) );

	// ═══════════════════════════════════════════════════════════════════
	// DIVISIONS LANDING PAGE TEMPLATE (template-divisions.php)
	// ═══════════════════════════════════════════════════════════════════
	Container::make( 'post_meta', 'ha_container_divisions_visibility', __( 'Divisions Page: Section Visibility', 'homeaffairs' ) )
		->where( 'post_template', '=', 'page-templates/template-divisions.php' )
		->add_fields( array(
			Field::make( 'html', 'ha_divisions_vis_intro', __( 'Section Toggles', 'homeaffairs' ) )
				->set_html( '<div style="padding:10px 14px;background:#f0f6fc;border-left:4px solid #0056b3;border-radius:3px;font-size:13px;line-height:1.5;">' .
					'<strong>' . esc_html__( 'Section Visibility Controls:', 'homeaffairs' ) . '</strong> ' .
					esc_html__( 'Use the radio buttons below to individually show or hide each section on the Divisions Landing Page.', 'homeaffairs' ) .
				'</div>' ),

			Field::make( 'radio', 'ha_divisions_show_intro', __( 'Introduction Area', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the top Introduction heading and description block.', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_divisions_show_facts', __( 'Quick Facts Area', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the Quick Facts card (Total Divisions, Sub-Units / Divisions, Jurisdiction).', 'homeaffairs' ) ),

			Field::make( 'radio', 'ha_divisions_show_grid', __( 'Divisions Grid Section', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the 9-per-page Divisions card grid and pagination.', 'homeaffairs' ) ),
		) );

	Container::make( 'post_meta', 'ha_container_divisions_intro', __( 'Divisions Page: Introduction Area', 'homeaffairs' ) )
		->where( 'post_template', '=', 'page-templates/template-divisions.php' )
		->add_fields( array(
			Field::make( 'text', 'ha_divisions_intro_title', __( 'Title', 'homeaffairs' ) )
				->set_default_value( 'Introduction' )
				->set_help_text( __( 'Main heading for the introduction area.', 'homeaffairs' ) ),

			Field::make( 'rich_text', 'ha_divisions_intro_desc', __( 'Description', 'homeaffairs' ) )
				->set_help_text( __( 'Introduction description content with formatted paragraphs.', 'homeaffairs' ) ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// HA-DIVISION CUSTOM POST TYPE FIELDS (Section-Wise Containers)
	// ═══════════════════════════════════════════════════════════════════

	// 1. Overview & Scope Container
	Container::make( 'post_meta', 'ha_container_division_overview', __( 'Division: Overview & Scope', 'homeaffairs' ) )
		->where( 'post_type', '=', 'ha-division' )
		->or_where( 'post_type', '=', 'ha_division' )
		->add_fields( array(
			Field::make( 'icon', 'division_icon', __( 'Division Icon (Font Awesome)', 'homeaffairs' ) )
				->add_fontawesome_options()
				->set_help_text( __( 'Select Font Awesome icon from the visual icon picker.', 'homeaffairs' ) ),

			Field::make( 'text', 'division_title', __( 'Title of the Division', 'homeaffairs' ) )
				->set_help_text( __( 'Official title of the division. If left blank, post title will be used.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'division_short_intro', __( 'Short Introduction', 'homeaffairs' ) )
				->set_rows( 3 )
				->set_help_text( __( 'Short summary for division grid cards.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'division_scope', __( 'Scope of the Division', 'homeaffairs' ) )
				->set_rows( 4 )
				->set_help_text( __( 'Scope and mandate of this division.', 'homeaffairs' ) ),

			Field::make( 'rich_text', 'division_duty', __( 'Duty of the Division', 'homeaffairs' ) )
				->set_help_text( __( 'Detailed duties and responsibilities (WYSIWYG editor).', 'homeaffairs' ) ),
		) );

	// 2. Head of Division Container
	Container::make( 'post_meta', 'ha_container_division_head', __( 'Division: Head of the Division', 'homeaffairs' ) )
		->where( 'post_type', '=', 'ha-division' )
		->or_where( 'post_type', '=', 'ha_division' )
		->add_fields( array(
			Field::make( 'image', 'division_head_photo', __( 'Photo (Size: 1817px × 2565px)', 'homeaffairs' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Portrait photo of Head of Division (Recommended size: 1817px × 2565px).', 'homeaffairs' ) ),

			Field::make( 'text', 'division_head_name', __( 'Name', 'homeaffairs' ) )
				->set_help_text( __( 'Name of Head of Division.', 'homeaffairs' ) ),

			Field::make( 'text', 'division_head_designation', __( 'Designation', 'homeaffairs' ) )
				->set_help_text( __( 'Designation of Head of Division.', 'homeaffairs' ) ),

			Field::make( 'text', 'division_head_mobile', __( 'Mobile Number', 'homeaffairs' ) )
				->set_help_text( __( 'Mobile phone number.', 'homeaffairs' ) ),

			Field::make( 'text', 'division_head_phone_fax', __( 'Land Line / Fax Number', 'homeaffairs' ) )
				->set_help_text( __( 'Official landline phone number and/or fax number.', 'homeaffairs' ) ),

			Field::make( 'text', 'division_head_email', __( 'Email Address', 'homeaffairs' ) )
				->set_help_text( __( 'Official email address.', 'homeaffairs' ) ),
		) );

	// 3. Sub-Units Container
	Container::make( 'post_meta', 'ha_container_division_sub_units', __( 'Division: Sub-Units / Divisions', 'homeaffairs' ) )
		->where( 'post_type', '=', 'ha-division' )
		->or_where( 'post_type', '=', 'ha_division' )
		->add_fields( array(
			Field::make( 'complex', 'division_sub_units', __( 'Sub-Units / Divisions', 'homeaffairs' ) )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'text', 'sub_unit_title', __( 'Sub Unit / Division Title', 'homeaffairs' ) )
						->set_help_text( __( 'Title of the sub-unit (e.g. Information Technology Unit).', 'homeaffairs' ) ),

					Field::make( 'complex', 'sub_unit_team', __( 'Sub Unit / Division Team Profiles', 'homeaffairs' ) )
						->set_layout( 'tabbed-horizontal' )
						->add_fields( array(
							Field::make( 'image', 'member_photo', __( 'Photo (Size: 1817px × 2565px)', 'homeaffairs' ) )
								->set_value_type( 'url' )
								->set_help_text( __( 'Portrait photo (Recommended size: 1817px × 2565px).', 'homeaffairs' ) ),

							Field::make( 'text', 'member_name', __( 'Name', 'homeaffairs' ) ),

							Field::make( 'text', 'member_designation', __( 'Designation', 'homeaffairs' ) ),

							Field::make( 'text', 'member_mobile', __( 'Mobile Number', 'homeaffairs' ) ),

							Field::make( 'text', 'member_phone', __( 'Land Line Number', 'homeaffairs' ) ),

							Field::make( 'text', 'member_email', __( 'Email Address', 'homeaffairs' ) ),
						) )
						->set_header_template( '<%- member_name ? member_name : "Member" %>' ),
				) )
				->set_header_template( '<%- sub_unit_title ? sub_unit_title : "Sub Unit / Division" %>' ),
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

/**
 * Helper to retrieve news categories for Carbon Fields select options
 */
function ha_get_news_category_options() {
	$lang = function_exists( 'ha_get_current_language' ) ? ha_get_current_language() : 'en';
	$default_label = __( 'Featured News (Default)', 'homeaffairs' );
	if ( 'si' === $lang ) {
		$default_label = 'විශේෂ පුවත් (පෙරනිමි)';
	} elseif ( 'ta' === $lang ) {
		$default_label = 'முக்கிய செய்திகள் (இயல்புநிலை)';
	}

	$options = array(
		'featured-news' => $default_label,
	);

	if ( taxonomy_exists( 'news_category' ) ) {
		$terms = get_terms( array(
			'taxonomy'   => 'news_category',
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

/**
 * Ensure all modern theme icons are registered in Carbon Fields Icon picker options
 */
add_filter( 'carbon_field_icon_options', 'ha_extend_carbon_icon_options', 10, 2 );
function ha_extend_carbon_icon_options( $options, $field_name = '' ) {
	$theme_icons = array(
		'phone-alt'        => array( 'name' => 'Phone Alt', 'class' => 'fas fa-phone-alt' ),
		'chart-simple'     => array( 'name' => 'Chart Simple', 'class' => 'fas fa-chart-simple' ),
		'arrows-rotate'    => array( 'name' => 'Arrows Rotate', 'class' => 'fas fa-arrows-rotate' ),
		'laptop-file'      => array( 'name' => 'Laptop File', 'class' => 'fas fa-laptop-file' ),
		'house-user'       => array( 'name' => 'House User', 'class' => 'fas fa-house-user' ),
		'map-location-dot' => array( 'name' => 'Map Location Dot', 'class' => 'fas fa-map-location-dot' ),
		'shield-halved'    => array( 'name' => 'Shield Halved', 'class' => 'fas fa-shield-halved' ),
		'file-arrow-down'  => array( 'name' => 'File Arrow Down', 'class' => 'fas fa-file-arrow-down' ),
		'handshake-angle'  => array( 'name' => 'Handshake Angle', 'class' => 'fas fa-handshake-angle' ),
		'calendar-days'    => array( 'name' => 'Calendar Days', 'class' => 'fas fa-calendar-days' ),
		'file-shield'      => array( 'name' => 'File Shield', 'class' => 'fas fa-file-shield' ),
		'id-card'          => array( 'name' => 'ID Card', 'class' => 'fas fa-id-card' ),
		'bolt'             => array( 'name' => 'Lightning Bolt', 'class' => 'fas fa-bolt' ),
		'location-dot'     => array( 'name' => 'Location Dot', 'class' => 'fas fa-location-dot' ),
	);

	foreach ( $theme_icons as $id => $info ) {
		if ( ! isset( $options[ $id ] ) ) {
			$options[ $id ] = array(
				'value'        => $id,
				'name'         => $info['name'],
				'class'        => $info['class'],
				'search_terms' => array( $id, str_replace( '-', ' ', $id ) ),
				'provider'     => 'fontawesome',
			);
		}
	}

	// Enforce exclusively Font Awesome icons: filter out any non-fontawesome icon providers
	foreach ( $options as $key => $opt ) {
		if ( isset( $opt['provider'] ) && 'fontawesome' !== $opt['provider'] ) {
			unset( $options[ $key ] );
		}
	}

	return $options;
}

// ═══════════════════════════════════════════════════════════════════
// ADMIN ENHANCEMENTS: FONT AWESOME ASSETS
// ═══════════════════════════════════════════════════════════════════
add_action( 'admin_enqueue_scripts', 'ha_cpt_fields_admin_assets' );
function ha_cpt_fields_admin_assets( $hook ) {
	// Enqueue Font Awesome on post edit screens so icons render cleanly in Carbon Fields preview and admin list tables
	if ( in_array( $hook, array( 'post.php', 'post-new.php' ), true ) ) {
		wp_enqueue_style(
			'font-awesome-6-admin',
			get_template_directory_uri() . '/assets/css/fontawesome-all.min.css',
			array(),
			'6.5.1'
		);
	}
}

// ═══════════════════════════════════════════════════════════════════
// HIDE DEFAULT WYSIWYG EDITOR & FEATURED IMAGE ON PAGE TEMPLATES & CPTS
// ═══════════════════════════════════════════════════════════════════

/**
 * Helper to determine if a page uses a custom page template or is the front page
 */
function ha_is_custom_page_template( $post_id = 0 ) {
	if ( ! $post_id ) {
		if ( isset( $_GET['post'] ) ) {
			$post_id = (int) $_GET['post'];
		} elseif ( isset( $_POST['post_ID'] ) ) {
			$post_id = (int) $_POST['post_ID'];
		}
	}

	if ( ! $post_id ) {
		return false;
	}

	$front_page_id = (int) get_option( 'page_on_front' );
	if ( $front_page_id > 0 && $post_id === $front_page_id ) {
		return true;
	}

	$template = get_post_meta( $post_id, '_wp_page_template', true );
	if ( ! empty( $template ) && 'default' !== $template ) {
		return true;
	}

	return false;
}

/**
 * Remove default editor and thumbnail support for custom post types and page templates
 */
add_action( 'admin_init', 'ha_hide_default_editor_and_thumbnail_for_templates' );
function ha_hide_default_editor_and_thumbnail_for_templates() {
	// 1. Remove editor from Custom Post Types
	remove_post_type_support( 'special_notice', 'editor' );
	remove_post_type_support( 'news_announcement', 'editor' );
	remove_post_type_support( 'ha-division', 'editor' );
	remove_post_type_support( 'ha_division', 'editor' );

	// 2. Remove editor & thumbnail from Pages using Page Templates / Front Page
	if ( ha_is_custom_page_template() ) {
		remove_post_type_support( 'page', 'editor' );
		remove_post_type_support( 'page', 'thumbnail' );
	}
}

/**
 * Remove meta boxes for page templates
 */
add_action( 'add_meta_boxes', 'ha_remove_meta_boxes_for_page_templates', 99, 2 );
function ha_remove_meta_boxes_for_page_templates( $post_type, $post ) {
	if ( 'page' !== $post_type || ! is_a( $post, 'WP_Post' ) ) {
		return;
	}

	if ( ha_is_custom_page_template( $post->ID ) ) {
		remove_post_type_support( 'page', 'editor' );
		remove_post_type_support( 'page', 'thumbnail' );
		if ( function_exists( 'remove_meta_box' ) ) {
			remove_meta_box( 'postimagediv', 'page', 'side' );
			remove_meta_box( 'postdivrich', 'page', 'normal' );
		}
	}
}

/**
 * CSS fail-safe to suppress the default editor and featured image on custom field & page template screens
 */
add_action( 'admin_head', 'ha_admin_hide_editor_styles' );
function ha_admin_hide_editor_styles() {
	global $post, $current_screen;

	$hide_editor    = false;
	$hide_thumbnail = false;

	// Custom post types with custom fields
	if ( isset( $current_screen->post_type ) && in_array( $current_screen->post_type, array( 'special_notice', 'news_announcement', 'ha-division', 'ha_division' ), true ) ) {
		$hide_editor = true;
	}

	// Pages with custom page template or front page
	if ( isset( $current_screen->post_type ) && 'page' === $current_screen->post_type && isset( $post->ID ) ) {
		if ( ha_is_custom_page_template( $post->ID ) ) {
			$hide_editor    = true;
			$hide_thumbnail = true;
		}
	}

	if ( $hide_editor || $hide_thumbnail ) {
		echo '<style id="ha-hide-editor-thumbnail-styles">' . "\n";
		if ( $hide_editor ) {
			echo '#postdivrich,
			#postdivrich.postarea,
			#wp-content-wrap,
			#wp-content-editor-container,
			.editor-block-list__layout,
			.block-editor-block-list__layout,
			.block-editor-writing-flow__click-redirect,
			.block-editor-default-block-appender,
			.edit-post-visual-editor {
				display: none !important;
			}' . "\n";
		}
		if ( $hide_thumbnail ) {
			echo '#postimagediv,
			.editor-post-featured-image,
			.components-panel__body:has(.editor-post-featured-image) {
				display: none !important;
			}' . "\n";
		}
		echo '</style>' . "\n";
	}
}

/**
 * Dynamic JavaScript toggle when user switches template in Page Attributes
 */
add_action( 'admin_footer', 'ha_admin_template_switch_script' );
function ha_admin_template_switch_script() {
	global $pagenow;
	if ( ! in_array( $pagenow, array( 'post.php', 'post-new.php' ), true ) ) {
		return;
	}
	?>
	<script>
	jQuery(function ($) {
		function isPageTemplateSelected(tmpl) {
			if (!tmpl) return false;
			return tmpl !== 'default' && tmpl !== '';
		}

		function checkTemplateVisibility() {
			var tmpl = $('#page_template').val();
			var postType = $('input#post_type').val() || '';

			// Custom post types
			if (postType === 'special_notice' || postType === 'news_announcement' || postType === 'ha-division' || postType === 'ha_division') {
				$('#postdivrich').hide();
				$('.block-editor-block-list__layout').hide();
			}

			// Pages
			if (postType === 'page' || (!postType && $('#page_template').length)) {
				var isTmpl = isPageTemplateSelected(tmpl);

				if (isTmpl || $('body').hasClass('page-template')) {
					if (tmpl && tmpl !== 'default') {
						$('#postdivrich').hide();
						$('#postimagediv').hide();
						$('.block-editor-block-list__layout').hide();
						$('.edit-post-visual-editor').hide();
						$('.editor-post-featured-image').closest('.components-panel__body').hide();
						$('.editor-post-featured-image').hide();

						if (window.wp && wp.data && wp.data.dispatch) {
							try {
								wp.data.dispatch('core/edit-post').removeEditorPanel('featured-image');
							} catch (e) {}
						}
					} else if (tmpl === 'default') {
						$('#postdivrich').show();
						$('#postimagediv').show();
						$('.block-editor-block-list__layout').show();
						$('.edit-post-visual-editor').show();
						$('.editor-post-featured-image').closest('.components-panel__body').show();
						$('.editor-post-featured-image').show();
					}
				}
			}
		}

		$(document).on('change', '#page_template', checkTemplateVisibility);
		setTimeout(checkTemplateVisibility, 200);
		setTimeout(checkTemplateVisibility, 600);
		setTimeout(checkTemplateVisibility, 1200);
	});
	</script>
	<?php
}
