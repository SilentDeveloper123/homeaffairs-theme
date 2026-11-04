<?php
defined( 'ABSPATH' ) || exit;

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function ha_get_cta_icon_options() {
    $icons   = ha_get_curated_icons();
    $brands  = array_flip( ha_get_brand_icons() );
    $options = array();

    foreach ( $icons as $class => $label ) {
        $icon_name               = substr( $class, 3 );
        $style                   = isset( $brands[ $icon_name ] ) ? 'fab' : 'fas';
        $options[ $style . ' ' . $class ] = $label;
    }

    return $options;
}

add_action( 'carbon_fields_register_fields', 'ha_attach_theme_options' );

add_action( 'admin_enqueue_scripts', 'ha_crb_admin_assets' );
function ha_crb_admin_assets() {
    if ( empty( $_GET['page'] ) || strpos( $_GET['page'], 'crb_' ) !== 0 ) {
        return;
    }

    wp_enqueue_style(
        'font-awesome-6-admin',
        get_template_directory_uri() . '/assets/css/fontawesome-all.min.css',
        array(),
        '6.5.1'
    );
}

add_action( 'admin_footer', 'ha_crb_admin_footer_js' );
function ha_crb_admin_footer_js() {
    if ( empty( $_GET['page'] ) || strpos( $_GET['page'], 'crb_' ) !== 0 ) {
        return;
    }
    ?>
<script>
jQuery(function ($) {
    setTimeout(function () {
        var $mapIn = $('[name*="ha_map_embed_url"]');
        if ($mapIn.length) {
            $mapIn.closest('.carbon-field').after(
                '<div style="margin-top:6px;border:1px solid #ddd;border-radius:4px;overflow:hidden;max-width:100%">' +
                '<iframe style="width:100%;height:300px;border:0;display:block" allowfullscreen loading="lazy"></iframe></div>'
            );
            var $ifr = $mapIn.closest('.carbon-field').next().find('iframe');
            function upd() { var v = $mapIn.val().trim(); $ifr.attr('src', v).toggle(!!v); }
            $mapIn.on('change keyup', upd);
            upd();
        }
    }, 200);
});
</script>
    <?php
}
function ha_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'homeaffairs' ) )
        ->set_page_menu_title( __( 'Theme Options', 'homeaffairs' ) )
        ->set_page_parent( 'themes.php' )
        ->add_tab( __( 'Site Identity', 'homeaffairs' ), array(
            Field::make( 'text', 'ha_site_title', __( 'Site Title', 'homeaffairs' ) )
                ->set_default_value( get_option( 'blogname' ) )
                ->set_help_text( __( 'Syncs with Settings > General and Customizer > Site Identity.', 'homeaffairs' ) ),
            Field::make( 'text', 'ha_site_tagline', __( 'Tagline', 'homeaffairs' ) )
                ->set_default_value( get_option( 'blogdescription' ) )
                ->set_help_text( __( 'Syncs with Settings > General and Customizer > Site Identity.', 'homeaffairs' ) ),
            Field::make( 'image', 'ha_site_icon', __( 'Site Icon (Favicon)', 'homeaffairs' ) )
                ->set_help_text( __( 'Syncs with Customizer > Site Identity. Upload a square PNG at least 512×512.', 'homeaffairs' ) ),
        ) )
        ->add_tab( __( 'Branding & Header', 'homeaffairs' ), array(
            Field::make( 'text', 'ha_ministry_name', __( 'Ministry Name', 'homeaffairs' ) )
                ->set_default_value( 'Ministry of Public Administration, Provincial Councils and Local Government' )
                ->set_help_text( __( 'Parent ministry name shown in the header and footer branding hierarchy.', 'homeaffairs' ) ),
            Field::make( 'text', 'ha_division_name', __( 'Division Name', 'homeaffairs' ) )
                ->set_default_value( 'Home Affairs Division' )
                ->set_help_text( __( 'Highlighted division name shown prominently beneath the ministry name in header and footer branding.', 'homeaffairs' ) ),
            Field::make( 'image', 'ha_emblem', __( 'National Emblem (Header & Footer)', 'homeaffairs' ) )
                ->set_help_text( __( 'Official government emblem displayed beside the brand text in both header and footer branding. Leave empty to use the bundled Sri Lankan national emblem SVG.', 'homeaffairs' ) ),
            Field::make( 'text', 'ha_gov_gateway_url', __( 'Gov.lk Gateway URL', 'homeaffairs' ) )
                ->set_default_value( 'https://www.gov.lk' )
                ->set_attribute( 'placeholder', 'https://www.gov.lk' ),
            Field::make( 'text', 'ha_gov_gateway_logo_url', __( 'Gov.lk Gateway Logo URL', 'homeaffairs' ) )
                ->set_default_value( 'https://moha.gov.lk/web/images/gov.png' )
                ->set_attribute( 'placeholder', 'https://moha.gov.lk/web/images/gov.png' ),
            Field::make( 'text', 'ha_search_placeholder', __( 'Search Placeholder', 'homeaffairs' ) )
                ->set_default_value( 'Search...' )
                ->set_attribute( 'placeholder', 'Search...' ),
        ) )
        ->add_tab( __( 'Content', 'homeaffairs' ), array(
            Field::make( 'text', 'ha_copyright_text', __( 'Copyright Text', 'homeaffairs' ) )
                ->set_default_value( '© ' . date( 'Y' ) . ' Home Affairs Division — Sri Lanka. All Rights Reserved.' )
                ->set_help_text( __( 'Copyright notice in the footer bar.', 'homeaffairs' ) ),
            Field::make( 'text', 'ha_last_update_date', __( 'Last Update Date', 'homeaffairs' ) )
                ->set_attribute( 'placeholder', date( 'F j, Y' ) )
                ->set_help_text( __( 'Optional custom date displayed as "Last Update: <Date>" in the footer. Leave empty to automatically use the latest update date.', 'homeaffairs' ) ),
            Field::make( 'text', 'ha_gic_url', __( 'GIC Link URL', 'homeaffairs' ) )
                ->set_default_value( 'https://gic.gov.lk/' )
                ->set_attribute( 'placeholder', 'https://gic.gov.lk/' )
                ->set_help_text( __( 'Target link URL for the Government Information Center badge in the footer.', 'homeaffairs' ) ),
            Field::make( 'text', 'ha_gic_logo_url', __( 'GIC Logo URL', 'homeaffairs' ) )
                ->set_default_value( 'https://moha.gov.lk/web/images/gic_en.gif' )
                ->set_attribute( 'placeholder', 'https://moha.gov.lk/web/images/gic_en.gif' )
                ->set_help_text( __( 'Image URL for the Government Information Center badge in the footer.', 'homeaffairs' ) ),
            Field::make( 'text', 'ha_footer_menu_title', __( 'Footer Menu Column Title', 'homeaffairs' ) )
                ->set_default_value( __( 'Related Links', 'homeaffairs' ) ),
            Field::make( 'text', 'ha_contact_form_title', __( 'Contact Form Column Title', 'homeaffairs' ) )
                ->set_default_value( __( 'Quick Inquiry', 'homeaffairs' ) ),
            Field::make( 'text', 'ha_map_column_title', __( 'Map Column Title', 'homeaffairs' ) )
                ->set_default_value( __( 'Find Us', 'homeaffairs' ) ),
        ) )
        ->add_tab( __( 'Contact', 'homeaffairs' ), array(
            Field::make( 'textarea', 'ha_address', __( 'Official Address', 'homeaffairs' ) )
                ->set_rows( 3 )
                ->set_help_text( __( 'Division address shown in the footer.', 'homeaffairs' ) ),
            Field::make( 'text', 'ha_telephone', __( 'General / Hotline Telephone', 'homeaffairs' ) )
                ->set_attribute( 'placeholder', '+94 112 050 450' ),
            Field::make( 'text', 'ha_email', __( 'General / Hotline Email', 'homeaffairs' ) )
                ->set_default_value( 'info@moha.gov.lk' )
                ->set_attribute( 'placeholder', 'info@moha.gov.lk' ),
            Field::make( 'text', 'ha_fax', __( 'General / Hotline Fax', 'homeaffairs' ) )
                ->set_attribute( 'placeholder', '+94 112 050 451' ),
            Field::make( 'text', 'ha_website_url', __( 'Website URL / Label', 'homeaffairs' ) )
                ->set_default_value( 'www.moha.gov.lk' )
                ->set_attribute( 'placeholder', 'www.moha.gov.lk' )
                ->set_help_text( __( 'Official website URL or display text shown in the footer contact block.', 'homeaffairs' ) ),
        ) )
        ->add_tab( __( 'Social Media', 'homeaffairs' ), array(
            Field::make( 'text', 'ha_social_facebook', __( 'Facebook URL', 'homeaffairs' ) )
                ->set_attribute( 'placeholder', 'https://facebook.com/...' ),
            Field::make( 'text', 'ha_social_x', __( 'X (Twitter) URL', 'homeaffairs' ) )
                ->set_attribute( 'placeholder', 'https://x.com/...' ),
            Field::make( 'text', 'ha_social_youtube', __( 'YouTube URL', 'homeaffairs' ) )
                ->set_attribute( 'placeholder', 'https://youtube.com/@...' ),
        ) )
        ->add_tab( __( 'Map', 'homeaffairs' ), array(
            Field::make( 'text', 'ha_map_embed_url', __( 'Google Maps Embed URL', 'homeaffairs' ) )
                ->set_help_text( __( 'Full iframe src URL for the embedded Google Map in the footer.', 'homeaffairs' ) )
                ->set_attribute( 'placeholder', 'https://www.google.com/maps/embed?pb=...' ),
        ) )
        ->add_tab( __( 'Header CTA', 'homeaffairs' ), array(
            Field::make( 'text', 'ha_cta_button_text', __( 'Button Text', 'homeaffairs' ) )
                ->set_width( 70 )
                ->set_attribute( 'placeholder', 'Circuit Booking' )
                ->set_help_text( __( 'Label for the header CTA button (branding row on desktop, primary row on mobile).', 'homeaffairs' ) ),
            Field::make( 'icon', 'ha_cta_button_icon', __( 'Button Icon (Font Awesome)', 'homeaffairs' ) )
                ->set_width( 30 )
                ->set_default_value( 'calendar-check' )
                ->add_fontawesome_options()
                ->set_help_text( __( 'Select an icon from the visual icon picker (Font Awesome). Existing icon values are safely preserved.', 'homeaffairs' ) ),
            Field::make( 'text', 'ha_cta_button_link', __( 'Button Link', 'homeaffairs' ) )
                ->set_attribute( 'placeholder', 'https://example.com/circuit-booking' )
                ->set_help_text( __( 'Destination URL for the header CTA button.', 'homeaffairs' ) ),
        ) )
        ->add_tab( __( 'Tools', 'homeaffairs' ), array(
            Field::make( 'html', 'ha_tools_export' )
                ->set_html( ha_render_export_tab() ),
        ) );
}

/**
 * Sync specific fields with WordPress core options.
 * Runs after a Carbon Fields container saves.
 */
add_action( 'carbon_fields_theme_options_container_saved', 'ha_sync_core_options', 10, 2 );
function ha_sync_core_options( $user_data = null, $container = null ) {
    if ( ! is_null( $container ) && ! is_a( $container, 'Carbon_Fields\Container\Theme_Options_Container' ) ) {
        return;
    }

    $title = carbon_get_theme_option( 'ha_site_title' );
    if ( ! empty( $title ) ) {
        update_option( 'blogname', wp_unslash( $title ) );
    }

    $tagline = carbon_get_theme_option( 'ha_site_tagline' );
    if ( ! empty( $tagline ) ) {
        update_option( 'blogdescription', wp_unslash( $tagline ) );
    }

    $icon_id = carbon_get_theme_option( 'ha_site_icon' );
    if ( ! empty( $icon_id ) ) {
        update_option( 'site_icon', absint( $icon_id ) );
    }

}

/**
 * Sync core option changes back to Carbon Fields theme options.
 * Catches updates from Settings > General and Customizer > Site Identity.
 */
add_action( 'update_option_blogname', 'ha_sync_from_core_blogname', 10, 3 );
function ha_sync_from_core_blogname( $old_value, $new_value, $option ) {
    $current = carbon_get_theme_option( 'ha_site_title' );
    if ( $current !== $new_value ) {
        carbon_set_theme_option( 'ha_site_title', wp_slash( $new_value ) );
    }
}

add_action( 'update_option_blogdescription', 'ha_sync_from_core_tagline', 10, 3 );
function ha_sync_from_core_tagline( $old_value, $new_value, $option ) {
    $current = carbon_get_theme_option( 'ha_site_tagline' );
    if ( $current !== $new_value ) {
        carbon_set_theme_option( 'ha_site_tagline', wp_slash( $new_value ) );
    }
}

add_action( 'update_option_site_icon', 'ha_sync_from_core_site_icon', 10, 3 );
function ha_sync_from_core_site_icon( $old_value, $new_value, $option ) {
    $current = carbon_get_theme_option( 'ha_site_icon' );
    if ( absint( $current ) !== absint( $new_value ) ) {
        carbon_set_theme_option( 'ha_site_icon', absint( $new_value ) );
    }
}


/**
 * Render the Tools tab content with export/import UI.
 */
function ha_render_export_tab() {
    $export_url = admin_url( 'admin-post.php?action=ha_export_options&_wpnonce=' . wp_create_nonce( 'ha_export_options' ) );
    ob_start();
    ?>
    <div style="padding: 12px 0;">
        <h3 style="margin: 0 0 16px; font-size: 14px;"><?php esc_html_e( 'Export Theme Options', 'homeaffairs' ); ?></h3>
        <p style="margin: 0 0 12px; color: #555;">
            <?php esc_html_e( 'Download all theme options as a JSON file. Use this to back up your settings or transfer them to another site.', 'homeaffairs' ); ?>
        </p>
        <a href="<?php echo esc_url( $export_url ); ?>" class="button button-primary">
            <span style="display: inline-flex; align-items: center; gap: 6px;"><i class="fas fa-download" style="margin-right:6px;"></i><?php esc_html_e( 'Export Options (JSON)', 'homeaffairs' ); ?></span>
        </a>
    </div>
    <hr style="margin: 20px 0;">
    <div style="padding: 12px 0;">
        <h3 style="margin: 0 0 16px; font-size: 14px;"><?php esc_html_e( 'Import Theme Options', 'homeaffairs' ); ?></h3>
        <p style="margin: 0 0 12px; color: #555;">
            <?php esc_html_e( 'Upload a previously exported JSON file to restore theme options. This will overwrite all current settings.', 'homeaffairs' ); ?>
        </p>
        <form method="post" enctype="multipart/form-data" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
            <?php wp_nonce_field( 'ha_import_options', '_wpnonce' ); ?>
            <input type="hidden" name="action" value="ha_import_options">
            <input type="file" name="import_file" accept=".json" required style="margin-bottom: 12px; display: block;">
            <button type="submit" class="button button-secondary"><?php esc_html_e( 'Import Options (JSON)', 'homeaffairs' ); ?></button>
        </form>
    </div>
    <?php
    if ( ! empty( $_GET['ha_imported'] ) ) {
        echo '<div class="notice notice-success is-dismissible" style="margin-top: 16px;"><p>' . esc_html__( 'Theme options imported successfully.', 'homeaffairs' ) . '</p></div>';
    }
    if ( ! empty( $_GET['ha_export'] ) ) {
        echo '<div class="notice notice-success is-dismissible" style="margin-top: 16px;"><p>' . esc_html__( 'Export completed.', 'homeaffairs' ) . '</p></div>';
    }
    return ob_get_clean();
}

/**
 * Shared list of theme option keys used by export, import, and sync.
 * Add new fields here — they'll be picked up by all three handlers.
 */
function ha_get_option_keys() {
    return array(
        'ha_site_title',
        'ha_site_tagline',
        'ha_site_icon',
        'ha_ministry_name',
        'ha_division_name',
        'ha_emblem',
        'ha_gov_gateway_url',
        'ha_gov_gateway_logo_url',
        'ha_search_placeholder',
        'ha_copyright_text',
        'ha_last_update_date',
        'ha_gic_url',
        'ha_gic_logo_url',
        'ha_footer_menu_title',
        'ha_contact_form_title',
        'ha_map_column_title',
        'ha_address',
        'ha_telephone',
        'ha_email',
        'ha_fax',
        'ha_website_url',
        'ha_social_facebook',
        'ha_social_x',
        'ha_social_youtube',
        'ha_map_embed_url',
        'ha_cta_button_text',
        'ha_cta_button_icon',
        'ha_cta_button_link',
    );
}

/**
 * AJAX handler: export theme options as JSON.
 */
add_action( 'admin_post_ha_export_options', 'ha_handle_export' );
function ha_handle_export() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( esc_html__( 'Unauthorized.', 'homeaffairs' ) );
    }
    check_admin_referer( 'ha_export_options' );

    $data = array();
    foreach ( ha_get_option_keys() as $key ) {
        $data[ $key ] = carbon_get_theme_option( $key );
    }

    $filename = 'ha-theme-options-' . date( 'Y-m-d' ) . '.json';

    nocache_headers();
    header( 'Content-Type: application/json; charset=utf-8' );
    header( 'Content-Disposition: attachment; filename="' . $filename . '"' );
    echo wp_json_encode( $data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE );
    exit;
}

/**
 * AJAX handler: import theme options from JSON.
 */
add_action( 'admin_post_ha_import_options', 'ha_handle_import' );
function ha_handle_import() {
    if ( ! current_user_can( 'manage_options' ) ) {
        wp_die( esc_html__( 'Unauthorized.', 'homeaffairs' ) );
    }
    check_admin_referer( 'ha_import_options' );

    if ( empty( $_FILES['import_file'] ) || UPLOAD_ERR_OK !== $_FILES['import_file']['error'] ) {
        wp_redirect( add_query_arg( 'ha_imported', '0', wp_get_referer() ) );
        exit;
    }

    $content = file_get_contents( $_FILES['import_file']['tmp_name'] );
    $data    = json_decode( $content, true );

    if ( ! is_array( $data ) ) {
        wp_redirect( add_query_arg( 'ha_imported', '0', wp_get_referer() ) );
        exit;
    }

    $allowed = ha_get_option_keys();

    foreach ( $data as $key => $value ) {
        if ( ! in_array( $key, $allowed, true ) ) {
            continue;
        }
        if ( is_string( $value ) ) {
            carbon_set_theme_option( $key, wp_kses_post( $value ) );
        }
    }

    ha_sync_core_options( null, null );

    wp_redirect( add_query_arg( 'ha_imported', '1', wp_get_referer() ) );
    exit;
}
