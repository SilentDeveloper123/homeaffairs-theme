<?php
/**
 * Carbon Fields Definitions: Governance & Structure Page and Organizational Chart Nodes
 *
 * @package HomeAffairs
 */

defined( 'ABSPATH' ) || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'ha_register_governance_carbon_fields' );
function ha_register_governance_carbon_fields() {

	// ═══════════════════════════════════════════════════════════════════
	// 1. SECTION VISIBILITY CONTAINER (Separate container for all toggles)
	// ═══════════════════════════════════════════════════════════════════
	Container::make( 'post_meta', 'ha_container_gov_visibility', __( 'Governance: Section Visibility', 'homeaffairs' ) )
		->where( 'post_template', '=', 'page-templates/template-governance-structure.php' )
		->add_fields( array(
			Field::make( 'html', 'ha_gov_vis_intro', __( 'Section Toggles', 'homeaffairs' ) )
				->set_html( '<div style="padding:10px 14px;background:#f0f6fc;border-left:4px solid #0056b3;border-radius:3px;font-size:13px;line-height:1.5;">' .
					'<strong>' . esc_html__( 'Section Visibility Controls:', 'homeaffairs' ) . '</strong> ' .
					esc_html__( 'Use the radio buttons below to individually show or hide each section on the Governance & Structure page.', 'homeaffairs' ) .
				'</div>' ),

			Field::make( 'radio', 'gov_show_header', __( 'Inner Title Section', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the page title and subtitle header.', 'homeaffairs' ) ),

			Field::make( 'radio', 'gov_show_profiles', __( 'Minister & Secretary Profile Cards Section', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the dual Minister & Secretary profile cards above the tabs.', 'homeaffairs' ) ),

			Field::make( 'radio', 'gov_show_tabs', __( 'Tabs Lounge (Entire Tabs Section)', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Master toggle for the entire tabbed lounge container.', 'homeaffairs' ) ),

			Field::make( 'radio', 'gov_show_minister_tab', __( "Minister's Message Tab", 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( "Controls visibility of the Minister's Message tab button and pane.", 'homeaffairs' ) ),

			Field::make( 'radio', 'gov_show_secretary_tab', __( "Secretary's Message Tab", 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( "Controls visibility of the Secretary's Message tab button and pane.", 'homeaffairs' ) ),

			Field::make( 'radio', 'gov_show_chart_tab', __( 'Organizational Structure Chart Tab', 'homeaffairs' ) )
				->set_options( array(
					'show' => __( 'Show', 'homeaffairs' ),
					'hide' => __( 'Hide', 'homeaffairs' ),
				) )
				->set_default_value( 'show' )
				->set_help_text( __( 'Controls visibility of the Organizational Structure Chart tab button and interactive chart canvas.', 'homeaffairs' ) ),
		) );

	// ═══════════════════════════════════════════════════════════════════
	// 2. INNER TITLE SECTION CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	Container::make( 'post_meta', 'ha_container_gov_header', __( 'Governance: Inner Title Section', 'homeaffairs' ) )
		->where( 'post_template', '=', 'page-templates/template-governance-structure.php' )
		->add_fields( array(
			Field::make( 'text', 'gov_header_tag', __( 'Badge / Tag Text (Optional)', 'homeaffairs' ) )
				->set_help_text( __( 'Small uppercase badge displayed above the title (e.g. MINISTRY GOVERNANCE).', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_header_title', __( 'Title', 'homeaffairs' ) )
				->set_help_text( __( 'Main page title for the inner section (e.g. Governance & Structure).', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_header_subtitle', __( 'Sub Title', 'homeaffairs' ) )
				->set_help_text( __( 'Optional subtitle displayed below the main title.', 'homeaffairs' ) ),
		) );

	// ═══════════════════════════════════════════════════════════════════
	// 3. MINISTER AND SECRETARY PROFILE SECTION CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	Container::make( 'post_meta', 'ha_container_gov_profiles', __( 'Governance: Minister & Secretary Profiles', 'homeaffairs' ) )
		->where( 'post_template', '=', 'page-templates/template-governance-structure.php' )
		->add_fields( array(
			Field::make( 'html', 'ha_gov_prof_sep1', __( 'Minister Profile Card', 'homeaffairs' ) )
				->set_html( '<div style="padding:8px 12px;background:#fef6e7;border-left:4px solid #dfa21f;font-weight:bold;font-size:13px;color:#591521;">' .
					esc_html__( 'Hon. Minister Profile Card', 'homeaffairs' ) .
				'</div>' ),

			Field::make( 'image', 'gov_minister_photo', __( 'Minister Upload Image (Size: 1100px * 975px)', 'homeaffairs' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Upload Minister portrait image (recommended resolution: 1100px &times; 975px).', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_minister_title', __( 'Title (Name)', 'homeaffairs' ) )
				->set_help_text( __( 'e.g. Hon. (Prof.) A.H.M.H. Abayarthna', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_minister_subtitle', __( 'Sub Title (Designation)', 'homeaffairs' ) )
				->set_help_text( __( 'e.g. Minister of Home Affairs', 'homeaffairs' ) ),

			Field::make( 'textarea', 'gov_minister_desc', __( 'Description', 'homeaffairs' ) )
				->set_rows( 4 )
				->set_help_text( __( 'Short summary profile description of the Hon. Minister.', 'homeaffairs' ) ),

			Field::make( 'html', 'ha_gov_prof_sep2', __( 'Secretary Profile Card', 'homeaffairs' ) )
				->set_html( '<div style="padding:8px 12px;background:#fef6e7;border-left:4px solid #dfa21f;font-weight:bold;font-size:13px;color:#591521;margin-top:15px;">' .
					esc_html__( 'Ministry Secretary Profile Card', 'homeaffairs' ) .
				'</div>' ),

			Field::make( 'image', 'gov_secretary_photo', __( 'Secretary Upload Image (Size: 1100px * 975px)', 'homeaffairs' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Upload Secretary portrait image (recommended resolution: 1100px &times; 975px).', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_secretary_title', __( 'Title (Name)', 'homeaffairs' ) )
				->set_help_text( __( 'e.g. Mr. S. Alokabandara', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_secretary_subtitle', __( 'Sub Title (Designation)', 'homeaffairs' ) )
				->set_help_text( __( 'e.g. Secretary, Home Affairs Division', 'homeaffairs' ) ),

			Field::make( 'textarea', 'gov_secretary_desc', __( 'Description', 'homeaffairs' ) )
				->set_rows( 4 )
				->set_help_text( __( 'Short summary profile description of the Ministry Secretary.', 'homeaffairs' ) ),
		) );

	// ═══════════════════════════════════════════════════════════════════
	// 4. MINISTER'S MESSAGE TAB CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	Container::make( 'post_meta', 'ha_container_gov_tab_minister', __( "Governance: Minister's Message Tab", 'homeaffairs' ) )
		->where( 'post_template', '=', 'page-templates/template-governance-structure.php' )
		->add_fields( array(
			Field::make( 'image', 'gov_tab_min_photo', __( 'Upload Image (Size: 1100px * 975px)', 'homeaffairs' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Upload Minister portrait image (recommended resolution: 1100px &times; 975px).', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_tab_min_designation', __( 'Designation', 'homeaffairs' ) )
				->set_help_text( __( 'e.g. Minister of Home Affairs', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_tab_min_name', __( 'Name', 'homeaffairs' ) )
				->set_help_text( __( 'e.g. Hon. (Prof.) A.H.M.H. Abayarthna', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_tab_min_ministry', __( 'Ministry Name', 'homeaffairs' ) )
				->set_help_text( __( 'e.g. Minister of Home Affairs', 'homeaffairs' ) ),

			Field::make( 'rich_text', 'gov_tab_min_message', __( 'Message (WYSIWYG Editor)', 'homeaffairs' ) )
				->set_help_text( __( "Official message from the Hon. Minister.", 'homeaffairs' ) ),

			Field::make( 'html', 'ha_gov_min_contact_sep', __( 'Contact Details (Optional)', 'homeaffairs' ) )
				->set_html( '<div style="padding:6px 10px;background:#f8fafc;border-left:3px solid #64748b;font-weight:600;font-size:12px;color:#334155;margin-top:10px;">' .
					esc_html__( 'Executive Office Contact Details', 'homeaffairs' ) .
				'</div>' ),

			Field::make( 'text', 'gov_tab_min_phone', __( 'Telephone', 'homeaffairs' ) )
				->set_width( 50 ),

			Field::make( 'text', 'gov_tab_min_fax', __( 'Fax', 'homeaffairs' ) )
				->set_width( 50 ),

			Field::make( 'text', 'gov_tab_min_email', __( 'Email', 'homeaffairs' ) )
				->set_width( 50 ),

			Field::make( 'text', 'gov_tab_min_address', __( 'Official Address', 'homeaffairs' ) )
				->set_width( 50 ),
		) );

	// ═══════════════════════════════════════════════════════════════════
	// 5. SECRETARY'S MESSAGE TAB CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	Container::make( 'post_meta', 'ha_container_gov_tab_secretary', __( "Governance: Secretary's Message Tab", 'homeaffairs' ) )
		->where( 'post_template', '=', 'page-templates/template-governance-structure.php' )
		->add_fields( array(
			Field::make( 'image', 'gov_tab_sec_photo', __( 'Upload Image (Size: 1100px * 975px)', 'homeaffairs' ) )
				->set_value_type( 'url' )
				->set_help_text( __( 'Upload Secretary portrait image (recommended resolution: 1100px &times; 975px).', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_tab_sec_designation', __( 'Designation', 'homeaffairs' ) )
				->set_help_text( __( 'e.g. Secretary', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_tab_sec_name', __( 'Name', 'homeaffairs' ) )
				->set_help_text( __( 'e.g. Mr. S. Alokabandara', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_tab_sec_ministry', __( 'Ministry Name', 'homeaffairs' ) )
				->set_help_text( __( 'e.g. Secretary, Home Affairs Division', 'homeaffairs' ) ),

			Field::make( 'rich_text', 'gov_tab_sec_message', __( 'Message (WYSIWYG Editor)', 'homeaffairs' ) )
				->set_help_text( __( 'Official message from the Ministry Secretary.', 'homeaffairs' ) ),

			Field::make( 'html', 'ha_gov_sec_contact_sep', __( 'Contact Details (Optional)', 'homeaffairs' ) )
				->set_html( '<div style="padding:6px 10px;background:#f8fafc;border-left:3px solid #64748b;font-weight:600;font-size:12px;color:#334155;margin-top:10px;">' .
					esc_html__( 'Executive Office Contact Details', 'homeaffairs' ) .
				'</div>' ),

			Field::make( 'text', 'gov_tab_sec_phone', __( 'Telephone', 'homeaffairs' ) )
				->set_width( 50 ),

			Field::make( 'text', 'gov_tab_sec_fax', __( 'Fax', 'homeaffairs' ) )
				->set_width( 50 ),

			Field::make( 'text', 'gov_tab_sec_email', __( 'Email', 'homeaffairs' ) )
				->set_width( 50 ),

			Field::make( 'text', 'gov_tab_sec_address', __( 'Official Address', 'homeaffairs' ) )
				->set_width( 50 ),
		) );

	// ═══════════════════════════════════════════════════════════════════
	// 6. ORGANIZATIONAL STRUCTURE CHART TAB SETTINGS CONTAINER
	// ═══════════════════════════════════════════════════════════════════
	Container::make( 'post_meta', 'ha_container_gov_chart_settings', __( 'Governance: Organizational Structure Chart Tab Settings', 'homeaffairs' ) )
		->where( 'post_template', '=', 'page-templates/template-governance-structure.php' )
		->add_fields( array(
			Field::make( 'text', 'gov_chart_title', __( 'Chart Title', 'homeaffairs' ) )
				->set_default_value( 'Organizational Structure' )
				->set_help_text( __( 'Header title displayed above the interactive chart canvas.', 'homeaffairs' ) ),

			Field::make( 'text', 'gov_chart_subtitle', __( 'Chart Subtitle / Instructions', 'homeaffairs' ) )
				->set_default_value( 'Click any + Staff button to expand subordinate operational staff branches.' )
				->set_help_text( __( 'Instructional subtitle displayed below the chart title.', 'homeaffairs' ) ),

			Field::make( 'association', 'gov_chart_root_node', __( 'Root Node (Tree Origin)', 'homeaffairs' ) )
				->set_types( array(
					array(
						'type'      => 'post',
						'post_type' => 'ha_org_node',
					),
				) )
				->set_max( 1 )
				->set_help_text( __( 'Select the root node of the organizational chart (typically Level 1 Hon. Minister). If unselected, the top published root node is automatically used.', 'homeaffairs' ) ),

			Field::make( 'radio', 'gov_chart_default_expand', __( 'Default Staff Subtree State', 'homeaffairs' ) )
				->set_options( array(
					'collapse' => __( 'Collapsed (Subordinate staff hidden until clicked)', 'homeaffairs' ),
					'expand'   => __( 'Expanded (All staff branches open by default)', 'homeaffairs' ),
				) )
				->set_default_value( 'collapse' ),
		) );

	// ═══════════════════════════════════════════════════════════════════
	// 7. ORG STRUCTURE NODE CONTAINER (Attached to ha_org_node CPT)
	// ═══════════════════════════════════════════════════════════════════
	Container::make( 'post_meta', 'ha_container_org_node', __( 'Organization Node Configuration', 'homeaffairs' ) )
		->where( 'post_type', '=', 'ha_org_node' )
		->add_fields( array(
			Field::make( 'select', 'org_card_style', __( 'Card Visual Style', 'homeaffairs' ) )
				->set_options( array(
					'l1'             => __( 'Level 1 (Hon. Minister)', 'homeaffairs' ),
					'l2'             => __( 'Level 2 (Secretary)', 'homeaffairs' ),
					'l3'             => __( 'Level 3 (Additional Secretary / Division Head)', 'homeaffairs' ),
					'l4'             => __( 'Level 4 (Director / Senior Assistant Secretary / Accountant)', 'homeaffairs' ),
					'l5'             => __( 'Level 5 (Assistant Secretary / Assistant Director)', 'homeaffairs' ),
					'intermediate-a' => __( 'Intermediate A (Administrative Officer / Planning Officer)', 'homeaffairs' ),
					'intermediate-b' => __( 'Intermediate B (Media Officer / Statistical Officer / Translator)', 'homeaffairs' ),
					'do'             => __( 'DO (Development Officer)', 'homeaffairs' ),
					'mso'            => __( 'MSO (Management Service Officer)', 'homeaffairs' ),
					'oes'            => __( 'OES (Office Employees Service)', 'homeaffairs' ),
					'support'        => __( 'Support Staff (Driver, Circuit Keeper, ACK)', 'homeaffairs' ),
				) )
				->set_default_value( 'l5' )
				->set_help_text( __( 'Controls color coding, border accents, and visual hierarchy level for this node.', 'homeaffairs' ) ),

			Field::make( 'textarea', 'org_display_title', __( 'Display Title Override (Optional)', 'homeaffairs' ) )
				->set_rows( 2 )
				->set_help_text( __( 'Optional HTML display title. Line breaks will be rendered as &lt;br&gt; for compact card formatting (e.g. "Additional Secretary<br>(Administration)"). Leave empty to use post title.', 'homeaffairs' ) ),

			Field::make( 'text', 'org_acronym', __( 'Card Acronym (Optional)', 'homeaffairs' ) )
				->set_help_text( __( 'Short acronym displayed inside the card pill (e.g. DO, MSO, OES, ICTO, ICTA).', 'homeaffairs' ) ),

			Field::make( 'text', 'org_sub_label', __( 'Sub-label / Language Lines (Optional)', 'homeaffairs' ) )
				->set_help_text( __( 'Additional metadata displayed below title (e.g. "(Sinhala - Tamil)<br>(Sinhala - English)" for Translator).', 'homeaffairs' ) ),

			Field::make( 'select', 'org_division_key', __( 'Division Category', 'homeaffairs' ) )
				->set_options( array(
					''              => __( '— None / Ministry Executive —', 'homeaffairs' ),
					'admin'         => __( 'Administration Division', 'homeaffairs' ),
					'home-affairs'  => __( 'Home Affairs Division', 'homeaffairs' ),
					'development'   => __( 'Development Division', 'homeaffairs' ),
					'investigation' => __( 'Investigation Division', 'homeaffairs' ),
					'rar'           => __( 'Regional Administration Reforms (RAR)', 'homeaffairs' ),
					'technical'     => __( 'Technical Division', 'homeaffairs' ),
					'planning'      => __( 'Planning Division', 'homeaffairs' ),
					'finance'       => __( 'Finance Division', 'homeaffairs' ),
					'audit'         => __( 'Internal Audit Division', 'homeaffairs' ),
				) )
				->set_help_text( __( 'Assigns this node (and its branch) to a division for filtering pills.', 'homeaffairs' ) ),

			Field::make( 'select', 'org_layout_preset', __( 'Layout Drop / Skip Preset', 'homeaffairs' ) )
				->set_options( array(
					'default'               => __( 'Default vertical spacing (24px)', 'homeaffairs' ),
					'skip-to-icto'          => __( 'Skip to ICTO (84px drop)', 'homeaffairs' ),
					'skip-to-do'            => __( 'Skip to DO (144px drop)', 'homeaffairs' ),
					'skip-to-mso'           => __( 'Skip to MSO (198px drop)', 'homeaffairs' ),
					'skip-to-oes'           => __( 'Skip to OES (140px drop)', 'homeaffairs' ),
					'skip-to-photo'         => __( 'Skip to Photographer (248px drop)', 'homeaffairs' ),
					'skip-to-asst-photo'    => __( 'Skip to Asst Photographer (90px drop)', 'homeaffairs' ),
					'skip-to-driver'        => __( 'Skip to Driver (42px drop)', 'homeaffairs' ),
					'skip-to-circuit-keeper'=> __( 'Skip to Circuit Keeper (92px drop)', 'homeaffairs' ),
					'skip-to-ack'           => __( 'Skip to ACK (6px drop)', 'homeaffairs' ),
					'skip-to-ta'            => __( 'Skip to Technical Assistant (82px drop)', 'homeaffairs' ),
					'skip-to-icta'          => __( 'Skip to ICTA (140px drop)', 'homeaffairs' ),
					'skip-to-to-from-apm'   => __( 'Skip to Tech Officer from APM (58px drop)', 'homeaffairs' ),
					'skip-to-translator'    => __( 'Skip to Translator (12px drop)', 'homeaffairs' ),
					'skip-to-do-from-ao'    => __( 'Skip to DO from AO (72px drop)', 'homeaffairs' ),
					'skip-to-tech-officer'  => __( 'Skip to Tech Officer (202px drop)', 'homeaffairs' ),
					'skip-to-draftman'      => __( 'Skip to Draftman (202px drop)', 'homeaffairs' ),
				) )
				->set_default_value( 'default' )
				->set_help_text( __( 'Controls precise vertical alignment in multi-column branch trees.', 'homeaffairs' ) ),

			Field::make( 'select', 'org_children_list_style', __( 'Children List Class Style', 'homeaffairs' ) )
				->set_options( array(
					'default'     => __( 'Standard Unordered List', 'homeaffairs' ),
					'ul-ao-staff' => __( 'AO Staff Multi-row Layout (ul-ao-staff)', 'homeaffairs' ),
					'ul-ack'      => __( 'Assistant Circuit Keeper Layout (ul-ack)', 'homeaffairs' ),
				) )
				->set_default_value( 'default' )
				->set_help_text( __( 'Applies specialized CSS layout classes to the subordinate &lt;ul&gt; element.', 'homeaffairs' ) ),

			Field::make( 'radio', 'org_children_mode', __( 'Children Display Mode', 'homeaffairs' ) )
				->set_options( array(
					'always'      => __( 'Always Expanded (Structural executive levels L1-L5)', 'homeaffairs' ),
					'collapsible' => __( 'Collapsible Staff Subtree (renders with &plusmn; Staff toggle button)', 'homeaffairs' ),
					'none'        => __( 'No Children / Leaf Node', 'homeaffairs' ),
				) )
				->set_default_value( 'always' )
				->set_help_text( __( 'Determines whether children are always visible or tucked inside an interactive collapsible staff subtree.', 'homeaffairs' ) ),

			Field::make( 'radio', 'org_direct_branch', __( 'Direct Bridge Branch (e.g. Internal Audit)', 'homeaffairs' ) )
				->set_options( array(
					'no'  => __( 'No (Normal branch connector)', 'homeaffairs' ),
					'yes' => __( 'Yes (Adds .org-branch-direct, suppresses L3 crossbar)', 'homeaffairs' ),
				) )
				->set_default_value( 'no' ),

			Field::make( 'radio', 'org_stop_crossbar', __( 'Stop Crossbar (e.g. Finance Division)', 'homeaffairs' ) )
				->set_options( array(
					'no'  => __( 'No (Crossbar continues)', 'homeaffairs' ),
					'yes' => __( 'Yes (Ends horizontal division crossbar)', 'homeaffairs' ),
				) )
				->set_default_value( 'no' ),

			Field::make( 'text', 'org_pair_group', __( 'Card Pair Group Key (Optional)', 'homeaffairs' ) )
				->set_help_text( __( 'Consecutive sibling nodes with matching pair group values will be rendered together inside one .org-card-pair block.', 'homeaffairs' ) ),

			Field::make( 'html', 'ha_gov_cross_sep', __( 'Cross-Connector Associations', 'homeaffairs' ) )
				->set_html( '<div style="padding:6px 10px;background:#f8fafc;border-left:3px solid #64748b;font-weight:600;font-size:12px;color:#334155;margin-top:10px;">' .
					esc_html__( 'Dynamic SVG Cross-Connector Links', 'homeaffairs' ) .
				'</div>' ),

			Field::make( 'association', 'org_cross_link_target', __( 'Cross-link Target Node', 'homeaffairs' ) )
				->set_types( array(
					array(
						'type'      => 'post',
						'post_type' => 'ha_org_node',
					),
				) )
				->set_max( 1 )
				->set_help_text( __( 'Select destination node for drawing an additional cross-branch connecting line.', 'homeaffairs' ) ),

			Field::make( 'association', 'org_cross_link_anchor', __( 'Cross-link Anchor Node (For Brackets)', 'homeaffairs' ) )
				->set_types( array(
					array(
						'type'      => 'post',
						'post_type' => 'ha_org_node',
					),
				) )
				->set_max( 1 )
				->set_help_text( __( 'Used for bracket connections (e.g. AS Admin &harr; AS Training anchored to shared Administrative Officer).', 'homeaffairs' ) ),

			Field::make( 'select', 'org_cross_link_style', __( 'Cross-link Line Style', 'homeaffairs' ) )
				->set_options( array(
					'none'         => __( 'None', 'homeaffairs' ),
					'elbow-bottom' => __( 'Elbow connector to destination top (e.g. Staff flow to OES)', 'homeaffairs' ),
					'bracket'      => __( 'Bracket connector (AS Admin &harr; AS Training to shared AO)', 'homeaffairs' ),
					'direct-right' => __( 'Direct right connector (Secretary &rarr; Chief Internal Auditor)', 'homeaffairs' ),
				) )
				->set_default_value( 'none' ),
		) );
}
