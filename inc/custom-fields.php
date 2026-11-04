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

					Field::make( 'text', 'slide_btn_url', __( 'Slide Button (Link)', 'homeaffairs' ) )
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
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 3. SPECIAL NOTICES COLUMN CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_special_notices', __( 'Special Notices Column', 'homeaffairs' ) )
		->add_fields( array(
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
						->set_default_value( 'District Secretariats' )
						->set_help_text( __( 'Metric title (e.g. Department, District Secretariats, GN Divisions).', 'homeaffairs' ) ),

					Field::make( 'text', 'stat_count', __( 'Count', 'homeaffairs' ) )
						->set_default_value( '25' )
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
				->set_default_value( 'News & Announcements' )
				->set_help_text( __( 'Main section heading.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_news_subtitle', __( 'Section Sub Title', 'homeaffairs' ) )
				->set_default_value( 'Latest Updates' )
				->set_help_text( __( 'Small pill badge above the section title.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_news_view_all_url', __( 'View All News Button Link (Link to Page)', 'homeaffairs' ) )
				->set_default_value( home_url( '/news-announcements/' ) )
				->set_help_text( __( 'Destination URL for the "View All News" button.', 'homeaffairs' ) ),

			Field::make( 'select', 'ha_home_news_featured_category', __( 'Featured News Category (Main Card)', 'homeaffairs' ) )
				->set_options( 'ha_get_news_category_options' )
				->set_default_value( 'featured-news' )
				->set_help_text( __( 'Category used for the Main Card (most recent post). Default: Featured News.', 'homeaffairs' ) ),
		) );


	// ═══════════════════════════════════════════════════════════════════
	// 6. ADVERTISE SECTION 1: DIGITAL TRANSFORMATIONS COLUMN CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	$create_home_box( 'ha_container_adv1_dt', __( 'Advertise Section 1 : Digital Transformations Column', 'homeaffairs' ) )
		->add_fields( array(
			Field::make( 'text', 'ha_home_adv1_dt_title', __( 'Title', 'homeaffairs' ) )
				->set_default_value( 'Digital Transformation & Smart Services' )
				->set_help_text( __( 'Main headline for the left highlight card.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv1_dt_subtitle', __( 'Sub Title', 'homeaffairs' ) )
				->set_default_value( 'Smart e-Government Era' )
				->set_help_text( __( 'Pill badge title above headline.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'ha_home_adv1_dt_desc', __( 'Description', 'homeaffairs' ) )
				->set_rows( 3 )
				->set_default_value( 'Empowering citizens with seamless online services, digital ID integration, and cloud-first governance.' )
				->set_help_text( __( 'Body paragraph copy.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv1_dt_tags', __( 'Tags (separated by commas)', 'homeaffairs' ) )
				->set_default_value( 'Paperless, Digital ID, 24/7 Portal' )
				->set_help_text( __( 'Features or tags separated by commas (e.g. Paperless, Digital ID, 24/7 Portal).', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv1_dt_btn_text', __( 'Button Text', 'homeaffairs' ) )
				->set_default_value( 'Explore Services' )
				->set_help_text( __( 'Action button text label.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv1_dt_btn_url', __( 'Button Link (Link to Page)', 'homeaffairs' ) )
				->set_default_value( home_url( '/services/' ) )
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
						->set_default_value( 'Government Project' )
						->set_help_text( __( 'Descriptive title / accessibility alt attribute for the banner.', 'homeaffairs' ) ),

					Field::make( 'text', 'banner_url', __( 'Banner Link (URL)', 'homeaffairs' ) )
						->set_default_value( '#' )
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
				->set_default_value( 'Quick Access' )
				->set_help_text( __( 'Section heading text (default: Quick Access).', 'homeaffairs' ) ),

			Field::make( 'complex', 'ha_home_qa1_items', __( 'Quick Access Section 1 Items', 'homeaffairs' ) )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'text', 'qa_icon', __( 'Icon (Font Awesome)', 'homeaffairs' ) )
						->set_default_value( 'fas fa-file-alt' )
						->set_help_text( __( 'Font Awesome icon class (e.g. fas fa-file-alt, fas fa-chart-simple, fas fa-arrows-rotate, fas fa-receipt).', 'homeaffairs' ) ),

					Field::make( 'text', 'qa_title', __( 'Title', 'homeaffairs' ) )
						->set_default_value( 'Circulars' )
						->set_help_text( __( 'Item headline label.', 'homeaffairs' ) ),

					Field::make( 'textarea', 'qa_desc', __( 'Description', 'homeaffairs' ) )
						->set_rows( 2 )
						->set_default_value( 'Home Affairs directives' )
						->set_help_text( __( 'Short descriptive line beneath the title.', 'homeaffairs' ) ),

					Field::make( 'text', 'qa_url', __( 'Link', 'homeaffairs' ) )
						->set_default_value( '#' )
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
				->set_default_value( 'Right to Information' )
				->set_help_text( __( 'Primary heading for the Right to Information column.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_rti_subtitle', __( 'Column Sub Title', 'homeaffairs' ) )
				->set_default_value( 'Transparency Through Information' )
				->set_help_text( __( 'Badge / Subtitle text above the title.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'ha_home_adv2_rti_desc', __( 'Column Description', 'homeaffairs' ) )
				->set_rows( 3 )
				->set_default_value( 'Access official government documents and public information, submit Right to Information (RTI) applications seamlessly, and track active disclosures effortlessly through our central transparent portal.' )
				->set_help_text( __( 'Body copy describing Right to Information services.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_rti_label', __( 'Column Label Text', 'homeaffairs' ) )
				->set_default_value( 'Act No. 12 of 2016' )
				->set_help_text( __( 'Small legislative or reference label tag (e.g. Act No. 12 of 2016).', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_rti_btn_text', __( 'Column Button Text', 'homeaffairs' ) )
				->set_default_value( 'Submit RTI Request' )
				->set_help_text( __( 'Action button label.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_rti_btn_url', __( 'Column Button Link', 'homeaffairs' ) )
				->set_default_value( home_url( '/rti/' ) )
				->set_help_text( __( 'Destination URL for the action button.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_rti_tagline', __( 'Column Tag Line', 'homeaffairs' ) )
				->set_default_value( "Ensuring Citizens' Right to Information" )
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
				->set_default_value( 'Grievances Hotline - 1905' )
				->set_help_text( __( 'Primary heading for the Grievances Hotline column.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_1905_subtitle', __( 'Column Sub Title', 'homeaffairs' ) )
				->set_default_value( 'Report Complaints, Grievances & Issues' )
				->set_help_text( __( 'Badge / Subtitle text above the title.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'ha_home_adv2_1905_desc', __( 'Column Description', 'homeaffairs' ) )
				->set_rows( 3 )
				->set_default_value( 'Inform us of your grievances regarding unsatisfactory services provided by institution which are under the ministry of public administration, provincial councils & local goverments.' )
				->set_help_text( __( 'Body copy describing hotline services.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_1905_label', __( 'Column Label Text', 'homeaffairs' ) )
				->set_default_value( 'Shortcode 1905' )
				->set_help_text( __( 'Small highlight label tag (e.g. Shortcode 1905).', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_1905_btn_text', __( 'Column Button Text', 'homeaffairs' ) )
				->set_default_value( 'View More' )
				->set_help_text( __( 'Action button label.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_1905_btn_url', __( 'Column Button Link', 'homeaffairs' ) )
				->set_default_value( home_url( '/1905-2/' ) )
				->set_help_text( __( 'Destination URL for the action button.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_adv2_1905_tagline', __( 'Column Tag Line', 'homeaffairs' ) )
				->set_default_value( 'Direct Citizen Response & Issue Resolution' )
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
				->set_default_value( 'Information on Subsidies' )
				->set_help_text( __( 'Main section heading text.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_qa3_subtitle', __( 'Section Sub Title', 'homeaffairs' ) )
				->set_default_value( 'What We Offer' )
				->set_help_text( __( 'Badge text above main section heading.', 'homeaffairs' ) ),

			Field::make( 'complex', 'ha_home_qa3_items', __( 'Quick Access Section 3 Items', 'homeaffairs' ) )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'text', 'qa3_icon', __( 'Icon (Font Awesome)', 'homeaffairs' ) )
						->set_default_value( 'fas fa-file-arrow-down' )
						->set_help_text( __( 'Font Awesome icon class (e.g. fas fa-file-arrow-down, fas fa-user-graduate, fas fa-handshake-angle, fas fa-flag).', 'homeaffairs' ) ),

					Field::make( 'text', 'qa3_title', __( 'Title', 'homeaffairs' ) )
						->set_default_value( 'Publications & Downloads' )
						->set_help_text( __( 'Card title.', 'homeaffairs' ) ),

					Field::make( 'textarea', 'qa3_desc', __( 'Description', 'homeaffairs' ) )
						->set_rows( 2 )
						->set_default_value( 'Access official administrative reports, acts, guidelines, and downloadable forms.' )
						->set_help_text( __( 'Card description text.', 'homeaffairs' ) ),

					Field::make( 'text', 'qa3_btn_text', __( 'Link Button Text', 'homeaffairs' ) )
						->set_default_value( 'View Publications' )
						->set_help_text( __( 'Bottom button label text.', 'homeaffairs' ) ),

					Field::make( 'text', 'qa3_url', __( 'Link', 'homeaffairs' ) )
						->set_default_value( '#' )
						->set_help_text( __( 'Destination URL for card and button.', 'homeaffairs' ) ),

					Field::make( 'text', 'qa3_badge', __( 'Category Badge (Optional)', 'homeaffairs' ) )
						->set_default_value( 'Resources' )
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
				->set_default_value( 'Need Assistance with a Government Service?' )
				->set_help_text( __( 'Main call to action heading.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'ha_home_cta_desc', __( 'Section Description', 'homeaffairs' ) )
				->set_rows( 3 )
				->set_default_value( 'Contact your nearest Divisional Secretariat or reach our ministry helpdesk directly — we\'re here to help every citizen, every day.' )
				->set_help_text( __( 'Supporting body copy displayed below heading.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_cta_btn_icon', __( 'Link Button Icon (Font Awesome)', 'homeaffairs' ) )
				->set_default_value( 'fas fa-phone-alt' )
				->set_help_text( __( 'Font Awesome icon class for the button (e.g. fas fa-phone-alt, fas fa-envelope, fas fa-headset).', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_cta_btn_text', __( 'Link Button Text', 'homeaffairs' ) )
				->set_default_value( 'Contact Us' )
				->set_help_text( __( 'Action button label.', 'homeaffairs' ) ),

			Field::make( 'text', 'ha_home_cta_btn_url', __( 'Link', 'homeaffairs' ) )
				->set_default_value( home_url( '/contact/' ) )
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
				->set_default_value( 'Related Organizations' )
				->set_help_text( __( 'Heading for related organizations section.', 'homeaffairs' ) ),

			Field::make( 'complex', 'ha_home_orgs_items', __( 'Slider Items', 'homeaffairs' ) )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(
					Field::make( 'image', 'org_logo', __( 'Logo (Image File Upload)', 'homeaffairs' ) )
						->set_value_type( 'url' )
						->set_help_text( __( 'Upload institution logo or national emblem (PNG or SVG recommended).', 'homeaffairs' ) ),

					Field::make( 'text', 'org_title', __( 'Title', 'homeaffairs' ) )
						->set_default_value( 'Ministry of Public Administration, Provincial Councils and Local Government' )
						->set_help_text( __( 'Full name of the related organization.', 'homeaffairs' ) ),

					Field::make( 'text', 'org_url', __( 'Link', 'homeaffairs' ) )
						->set_default_value( 'https://moha.gov.lk/' )
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
			Field::make( 'text', 'notice_icon', __( 'Font Awesome Icon', 'homeaffairs' ) )
				->set_default_value( 'fas fa-bullhorn' )
				->set_help_text( __( 'Type or choose a Font Awesome 6 icon class (e.g. fas fa-bullhorn, fas fa-graduation-cap, fas fa-laptop, fas fa-file-invoice, fas fa-bell).', 'homeaffairs' ) ),

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
	$options = array(
		'featured-news' => __( 'Featured News (Default)', 'homeaffairs' ),
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

// ═══════════════════════════════════════════════════════════════════
// ADMIN ENHANCEMENTS: FONT AWESOME SELECTION & LIVE PREVIEW
// ═══════════════════════════════════════════════════════════════════
add_action( 'admin_enqueue_scripts', 'ha_cpt_fields_admin_assets' );
function ha_cpt_fields_admin_assets( $hook ) {
	global $post_type;

	// Enqueue on post edit screens
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
			var $iconInputs = $('[name*="notice_icon"], [name*="qa_icon"], [name*="qa3_icon"], [name*="cta_btn_icon"]');
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
	if ( isset( $current_screen->post_type ) && in_array( $current_screen->post_type, array( 'special_notice', 'news_announcement' ), true ) ) {
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
			if (postType === 'special_notice' || postType === 'news_announcement') {
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
