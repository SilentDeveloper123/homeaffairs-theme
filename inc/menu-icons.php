<?php
defined( 'ABSPATH' ) || exit;

function ha_get_curated_icons() {
	static $icons = null;
	if ( $icons === null ) {
		$icons = include __DIR__ . '/fa-icons.php';
	}
	return $icons;
}

function ha_get_brand_icons() {
	static $brands = null;
	if ( $brands === null ) {
		$brands = include __DIR__ . '/fa-brands.php';
	}
	return $brands;
}

add_action( 'wp_nav_menu_item_custom_fields', 'ha_menu_item_icon_fields', 10, 4 );
function ha_menu_item_icon_fields( $item_id, $item, $depth, $args ) {
	$icon   = get_post_meta( $item_id, '_menu_item_icon', true );
	$icons  = ha_get_curated_icons();
	$brands = array_flip( ha_get_brand_icons() );

	$display_class = '';
	$display_label = '';

	if ( ! empty( $icon ) ) {
		if ( preg_match( '/^(fas|far|fab)\s+(.+)$/', $icon, $m ) ) {
			$icon_name = $m[2];
			$style     = $m[1];
		} else {
			$icon_name = $icon;
			$style     = isset( $brands[ ltrim( $icon, 'fa-' ) ] ) ? 'fab' : 'fas';
		}
		$display_class = $style . ' ' . $icon_name;
		$display_label = isset( $icons[ $icon_name ] ) ? $icons[ $icon_name ] : $icon_name;
	}
	?>
	<div class="ha-icon-picker-field" style="margin-bottom:8px">
		<input type="hidden" id="edit-menu-item-icon-<?php echo esc_attr( $item_id ); ?>" name="menu-item-icon[<?php echo esc_attr( $item_id ); ?>]" value="<?php echo esc_attr( $icon ); ?>">

		<div class="ha-icon-preview" data-item-id="<?php echo esc_attr( $item_id ); ?>" style="display:<?php echo $icon ? 'flex' : 'none'; ?>;align-items:center;gap:8px;padding:6px 10px;border:1px solid #c3c4c7;border-radius:4px;background:#f6f7f7;margin-bottom:6px;width:fit-content;min-width:140px">
			<i class="<?php echo esc_attr( $display_class ); ?>" style="font-size:16px;width:20px;text-align:center;color:var(--color-primary)"></i>
			<span class="ha-icon-label" style="flex:1;font-size:13px"><?php echo esc_html( $display_label ); ?></span>
			<button type="button" class="ha-icon-remove" data-item-id="<?php echo esc_attr( $item_id ); ?>" style="border:none;background:transparent;cursor:pointer;color:#a00;padding:0 4px;font-size:16px;line-height:1" title="<?php esc_attr_e( 'Remove icon', 'homeaffairs' ); ?>">&times;</button>
		</div>

		<div style="display:flex;gap:4px">
			<button type="button" class="button ha-icon-choose" data-item-id="<?php echo esc_attr( $item_id ); ?>">
				<i class="fas fa-plus" style="font-size:12px;margin-right:3px"></i> <?php esc_html_e( 'Choose Icon', 'homeaffairs' ); ?>
			</button>
			<button type="button" class="button ha-icon-remove-btn" data-item-id="<?php echo esc_attr( $item_id ); ?>" style="display:<?php echo $icon ? 'inline-block' : 'none'; ?>"><?php esc_html_e( 'Remove', 'homeaffairs' ); ?></button>
		</div>
	</div>
	<?php
}

/**
 * Enqueue Font Awesome and render the icon picker modal (CSS + HTML + JS).
 * Safe to call multiple times — will only render once.
 */
function ha_enqueue_icon_picker_modal() {
	if ( did_action( 'ha_icon_picker_modal_rendered' ) ) {
		return;
	}
	do_action( 'ha_icon_picker_modal_rendered' );

	wp_enqueue_style(
		'font-awesome-6',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css',
		array(),
		'6.5.1'
	);

	wp_add_inline_style( 'font-awesome-6', '
		.ha-icon-picker-field label { display:block; margin-bottom:4px; font-weight:600; }
		#haIconPickerOverlay { display:none; position:fixed; z-index:99999; inset:0; background:rgba(0,0,0,0.6); }
		#haIconPickerOverlay.open { display:flex; align-items:center; justify-content:center; }
		#haIconPickerModal { background:#fff; border-radius:8px; max-width:680px; width:94%; max-height:84vh; display:flex; flex-direction:column; box-shadow:0 8px 32px rgba(0,0,0,0.3); }
		.ha-modal-header { display:flex; align-items:center; justify-content:space-between; padding:14px 20px; border-bottom:1px solid #e0e0e0; }
		.ha-modal-header h3 { margin:0; font-size:15px; font-weight:600; }
		.ha-modal-close { border:none; background:none; font-size:22px; cursor:pointer; color:#666; padding:0 4px; line-height:1; }
		.ha-modal-close:hover { color:#333; }
		.ha-modal-search { padding:10px 20px; border-bottom:1px solid #eee; }
		.ha-modal-search input { width:100%; padding:8px 10px; border:1px solid #c3c4c7; border-radius:4px; font-size:13px; box-sizing:border-box; }
		.ha-modal-search input:focus { border-color:#2271b1; box-shadow:0 0 0 1px #2271b1; outline:none; }
		.ha-icon-grid { display:grid; grid-template-columns:repeat(auto-fill,minmax(82px,1fr)); gap:6px; padding:14px 20px; overflow-y:auto; flex:1; }
		.ha-icon-option { display:flex; flex-direction:column; align-items:center; gap:4px; padding:10px 4px 8px; border:1px solid #e0e0e0; border-radius:6px; cursor:pointer; transition:all 0.15s; }
		.ha-icon-option:hover { border-color:#2271b1; background:#f0f6fc; }
		.ha-icon-option.selected { border-color:var(--color-primary); background:#e8ecf4; box-shadow:0 0 0 1px var(--color-primary); }
		.ha-icon-option i { font-size:22px; color:var(--color-primary); }
		.ha-icon-option span { font-size:10px; text-align:center; color:#555; line-height:1.2; word-break:break-all; max-width:100%; }
		.ha-icon-grid .no-results { grid-column:1/-1; text-align:center; padding:30px 0; color:#999; font-size:13px; }
		.ha-field-row { display:flex; align-items:center; gap:8px; flex-wrap:wrap; }
		.ha-icon-preview-box { display:inline-flex; align-items:center; gap:8px; padding:6px 10px; border:1px solid #c3c4c7; border-radius:4px; background:#f6f7f7; min-width:140px; }
		.ha-icon-preview-box i { font-size:16px; width:20px; text-align:center; color:var(--color-primary); }
		.ha-icon-preview-box .ha-icon-label { flex:1; font-size:13px; }
	' );

	$icons  = ha_get_curated_icons();
	$brands = array_flip( ha_get_brand_icons() );

	$modal_icons = '';
	foreach ( $icons as $class => $label ) {
		$icon_name  = substr( $class, 3 );
		$style      = isset( $brands[ $icon_name ] ) ? 'fab' : 'fas';
		$full_class = $style . ' ' . $class;
		$modal_icons .= sprintf(
			'<div class="ha-icon-option" data-icon="%s" data-style="%s" data-label="%s"><i class="%s"></i><span>%s</span></div>',
			esc_attr( $class ),
			esc_attr( $style ),
			esc_attr( $label ),
			esc_attr( $full_class ),
			esc_html( $label )
		);
	}

	add_action( 'admin_footer', function() use ( $modal_icons ) {
		?>
		<div id="haIconPickerOverlay">
			<div id="haIconPickerModal">
				<div class="ha-modal-header">
					<h3><?php esc_html_e( 'Choose an Icon', 'homeaffairs' ); ?></h3>
					<button type="button" class="ha-modal-close">&times;</button>
				</div>
				<div class="ha-modal-search">
					<input type="text" id="haIconSearch" placeholder="<?php esc_attr_e( 'Search icons...', 'homeaffairs' ); ?>" autofocus>
				</div>
				<div class="ha-icon-grid"><?php echo $modal_icons; ?></div>
			</div>
		</div>
		<script>
		(function($) {
			var $overlay = $("#haIconPickerOverlay");
			var $search  = $("#haIconSearch");
			var $grid    = $(".ha-icon-grid");
			var currentInput = null;

			function closeModal() {
				$overlay.removeClass("open");
				currentInput = null;
			}

			$(document).on("click", ".ha-icon-choose", function() {
				var $btn = $(this);
				currentInput = $("#edit-menu-item-icon-" + $btn.data("item-id"));
				if (!currentInput || !currentInput.length) { currentInput = null; return; }
				$overlay.addClass("open");
				$search.val("").focus();
				$search.trigger("keyup");
				var val = currentInput.val();
				$(".ha-icon-option").removeClass("selected");
				if (val) {
					var iconName = val.replace(/^(fas|far|fab)\s+/, "");
					$(".ha-icon-option[data-icon=\"" + iconName.replace(/"/g, '\\"') + "\"]").addClass("selected");
					var $sel = $(".ha-icon-option.selected");
					if ($sel[0]) $sel[0].scrollIntoView({ block: "nearest" });
				}
			});

			$overlay.on("click", function(e) {
				if (e.target === this) closeModal();
			});

			$(document).on("click", ".ha-modal-close", closeModal);

			$grid.on("click", ".ha-icon-option", function() {
				if (!currentInput) return;
				var iconName  = $(this).attr("data-icon");
				var style     = $(this).attr("data-style");
				var label     = $(this).attr("data-label");
				var fullClass = style + " " + iconName;

				currentInput.val(fullClass).trigger("change");
				var itemId = currentInput.attr("id").replace("edit-menu-item-icon-", "");
				$(".ha-icon-preview[data-item-id=\"" + itemId + "\"]").find("i").attr("class", fullClass);
				$(".ha-icon-preview[data-item-id=\"" + itemId + "\"]").find(".ha-icon-label").text(label);
				$(".ha-icon-preview[data-item-id=\"" + itemId + "\"]").show();
				$(".ha-icon-remove-btn[data-item-id=\"" + itemId + "\"]").show();
				closeModal();
			});

			$(document).on("click", ".ha-icon-remove, .ha-icon-remove-btn", function() {
				var $btn = $(this);
				var itemId = $btn.data("item-id");
				if (itemId) {
					$("#edit-menu-item-icon-" + itemId).val("");
					$(".ha-icon-preview[data-item-id=\"" + itemId + "\"]").hide();
					$(".ha-icon-remove-btn[data-item-id=\"" + itemId + "\"]").hide();
				}
			});

			$search.on("keyup", function() {
				var q = $(this).val().toLowerCase().trim();
				var $items = $(".ha-icon-option");
				var visible = 0;
				$items.each(function() {
					var label = $(this).attr("data-label") || $(this).find("span").text();
					var match = label.toLowerCase().indexOf(q) > -1;
					$(this).toggle(match);
					if (match) visible++;
				});
				$grid.find(".no-results").remove();
				if (visible === 0 && q.length > 0) {
					$grid.append("<div class=\"no-results\"><?php echo esc_js( __( 'No icons found.', 'homeaffairs' ) ); ?></div>");
				}
			});

			$(document).on("keydown", function(e) {
				if (e.key === "Escape" && $overlay.hasClass("open")) closeModal();
			});
		})(jQuery);
		</script>
		<?php
	} );
}

add_action( 'admin_enqueue_scripts', 'ha_menu_icon_admin_assets' );
function ha_menu_icon_admin_assets( $hook ) {
	if ( 'nav-menus.php' !== $hook ) {
		return;
	}
	ha_enqueue_icon_picker_modal();
}

add_action( 'wp_update_nav_menu_item', 'ha_menu_item_icon_save', 10, 3 );
function ha_menu_item_icon_save( $menu_id, $menu_item_db_id, $args ) {
	if ( isset( $_POST['menu-item-icon'][ $menu_item_db_id ] ) ) {
		$icon = sanitize_text_field( wp_unslash( $_POST['menu-item-icon'][ $menu_item_db_id ] ) );
		update_post_meta( $menu_item_db_id, '_menu_item_icon', $icon );
	} else {
		delete_post_meta( $menu_item_db_id, '_menu_item_icon' );
	}
}

add_filter( 'wp_setup_nav_menu_item', 'ha_menu_item_icon_setup' );
function ha_menu_item_icon_setup( $item ) {
	$item->icon = get_post_meta( $item->ID, '_menu_item_icon', true );
	return $item;
}
