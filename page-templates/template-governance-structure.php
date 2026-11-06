<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Governance & Structure
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$post_id = get_the_ID();

// Section Visibility Controllers
$gov_show_header        = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_show_header' ) : 'show';
$gov_show_profiles      = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_show_profiles' ) : 'show';
$gov_show_tabs          = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_show_tabs' ) : 'show';
$gov_show_minister_tab  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_show_minister_tab' ) : 'show';
$gov_show_secretary_tab = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_show_secretary_tab' ) : 'show';
$gov_show_chart_tab     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_show_chart_tab' ) : 'show';

// Defaults
if ( empty( $gov_show_header ) ) $gov_show_header = 'show';
if ( empty( $gov_show_profiles ) ) $gov_show_profiles = 'show';
if ( empty( $gov_show_tabs ) ) $gov_show_tabs = 'show';
if ( empty( $gov_show_minister_tab ) ) $gov_show_minister_tab = 'show';
if ( empty( $gov_show_secretary_tab ) ) $gov_show_secretary_tab = 'show';
if ( empty( $gov_show_chart_tab ) ) $gov_show_chart_tab = 'show';

// Locale detection
$locale = get_locale();
$is_si  = ( 0 === strpos( $locale, 'si' ) );
$is_ta  = ( 0 === strpos( $locale, 'ta' ) );

// Placeholder Image URL (1100x975 brand Maroon)
$placeholder_photo = 'https://placehold.co/1100x975/591521/ffffff?text=Leadership+Photo';

// 1. Inner Title Section Meta
$gov_header_tag      = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_header_tag' ) : '';
$gov_header_title    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_header_title' ) : '';
$gov_header_subtitle = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_header_subtitle' ) : '';

// 2. Minister and Secretary Profile Section Meta
$gov_minister_photo    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_minister_photo' ) : '';
$gov_minister_title    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_minister_title' ) : '';
$gov_minister_subtitle = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_minister_subtitle' ) : '';
$gov_minister_desc     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_minister_desc' ) : '';

$gov_secretary_photo    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_secretary_photo' ) : '';
$gov_secretary_title    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_secretary_title' ) : '';
$gov_secretary_subtitle = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_secretary_subtitle' ) : '';
$gov_secretary_desc     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_secretary_desc' ) : '';

$minister_photo_src  = ! empty( $gov_minister_photo ) ? $gov_minister_photo : $placeholder_photo;
$secretary_photo_src = ! empty( $gov_secretary_photo ) ? $gov_secretary_photo : $placeholder_photo;

// 3. Tabs Section Meta
// Minister Tab
$gov_tab_min_photo       = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_min_photo' ) : '';
$gov_tab_min_designation = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_min_designation' ) : '';
$gov_tab_min_name        = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_min_name' ) : '';
$gov_tab_min_ministry    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_min_ministry' ) : '';
$gov_tab_min_message     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_min_message' ) : '';
$gov_tab_min_phone       = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_min_phone' ) : '';
$gov_tab_min_fax         = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_min_fax' ) : '';
$gov_tab_min_email       = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_min_email' ) : '';
$gov_tab_min_address     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_min_address' ) : '';

$tab_min_photo_src = ! empty( $gov_tab_min_photo ) ? $gov_tab_min_photo : $placeholder_photo;

// Secretary Tab
$gov_tab_sec_photo       = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_sec_photo' ) : '';
$gov_tab_sec_designation = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_sec_designation' ) : '';
$gov_tab_sec_name        = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_sec_name' ) : '';
$gov_tab_sec_ministry    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_sec_ministry' ) : '';
$gov_tab_sec_message     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_sec_message' ) : '';
$gov_tab_sec_phone       = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_sec_phone' ) : '';
$gov_tab_sec_fax         = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_sec_fax' ) : '';
$gov_tab_sec_email       = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_sec_email' ) : '';
$gov_tab_sec_address     = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_tab_sec_address' ) : '';

$tab_sec_photo_src = ! empty( $gov_tab_sec_photo ) ? $gov_tab_sec_photo : $placeholder_photo;

// Chart Settings
$gov_chart_title    = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_chart_title' ) : '';
$gov_chart_subtitle = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'gov_chart_subtitle' ) : '';

// Active initial tab
$default_active_tab = 'tab-structure';
if ( 'hide' === $gov_show_chart_tab ) {
	if ( 'hide' !== $gov_show_minister_tab ) {
		$default_active_tab = 'tab-minister';
	} elseif ( 'hide' !== $gov_show_secretary_tab ) {
		$default_active_tab = 'tab-secretary';
	}
}

// UI text translations
$txt_minister_tab  = $is_si ? 'අමාත්‍යතුමාගේ පණිවිඩය' : ( $is_ta ? 'அமைச்சரின் செய்தி' : "Minister's Message" );
$txt_secretary_tab = $is_si ? 'ලේකම්තුමාගේ පණිවිඩය' : ( $is_ta ? 'செயலாளரின் செய்தி' : "Secretary's Message" );
$txt_chart_tab     = $is_si ? 'ආයතනික ව්‍යුහ සටහන' : ( $is_ta ? 'நிறுவனக் கட்டமைப்பு வரைபடம்' : 'Organizational Structure Chart' );
$txt_contact       = $is_si ? 'සබඳතා තොරතුරු' : ( $is_ta ? 'தொடர்பு விபரங்கள்' : 'Contact Details' );
$txt_expand_staff  = $is_si ? 'සියලු කාර්ය මණ්ඩලය විහිදුවන්න' : ( $is_ta ? 'அனைத்து பணியாளர்களையும் விரிவுபடுத்துக' : 'Expand All Staff' );
$txt_download_chart= $is_si ? 'සටහන බාගත කරන්න' : ( $is_ta ? 'வரைபடத்தைப் பதிவிறக்குக' : 'Download Chart' );
$txt_search_holder = $is_si ? 'තනතුර සොයන්න...' : ( $is_ta ? 'பதவியைத் தேடுக...' : 'Search designation...' );
$txt_acronyms_hdr  = $is_si ? 'කෙටි යෙදුම්:' : ( $is_ta ? 'சுருக்கக் குறியீடுகள்:' : 'Acronyms:' );
$txt_footer_label  = $is_si ? 'ස්වදේශ කටයුතු අංශය • ආයතනික ව්‍යුහය' : ( $is_ta ? 'உள்நாட்டு அலுவல்கள் பிரிவு • நிறுவனக் கட்டமைப்பு' : 'Home Affairs Division • Organizational Chart' );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">

	<?php if ( 'hide' !== $gov_show_header ) : ?>
		<!-- 1. Inner Title Section -->
		<div class="text-center max-w-3xl mx-auto mb-10 lg:mb-12">
			<?php if ( ! empty( $gov_header_tag ) ) : ?>
				<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
					<?php echo esc_html( $gov_header_tag ); ?>
				</span>
			<?php endif; ?>
			<?php if ( ! empty( $gov_header_title ) ) : ?>
				<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker tracking-tight"><?php echo esc_html( $gov_header_title ); ?></h1>
			<?php endif; ?>
			<?php if ( ! empty( $gov_header_subtitle ) ) : ?>
				<p class="text-sm sm:text-base text-slate-600 mt-2 max-w-2xl mx-auto"><?php echo esc_html( $gov_header_subtitle ); ?></p>
			<?php endif; ?>
		</div>
	<?php endif; ?>

	<?php if ( 'hide' !== $gov_show_profiles ) : ?>
		<!-- 2. Dual Executive Profile Matrix Section -->
		<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

			<!-- Minister Card -->
			<div class="gov-profile-card bg-warm-white rounded-2xl border border-primary-darker/15 shadow-sm p-6 sm:p-8 flex flex-col sm:flex-row items-center sm:items-start gap-6 relative overflow-hidden">
				<div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
				<div class="gov-profile-img shrink-0">
					<a href="<?php echo esc_url( $minister_photo_src ); ?>" class="glightbox block" data-gallery="gov-leadership" data-title="<?php echo esc_attr( $gov_minister_title ); ?>" data-description="<?php echo esc_attr( $gov_minister_subtitle ); ?>">
						<img loading="lazy" decoding="async" src="<?php echo esc_url( $minister_photo_src ); ?>" alt="<?php echo esc_attr( $gov_minister_title ); ?>" class="w-24 h-28 object-cover rounded-xl border border-secondary/30 shadow-sm hover:opacity-95 transition-opacity" onerror="this.onerror=null;this.src='<?php echo esc_url( $placeholder_photo ); ?>';">
					</a>
				</div>
				<div class="text-center sm:text-left flex-1">
					<?php if ( ! empty( $gov_minister_subtitle ) ) : ?>
						<span class="text-[10px] sm:text-xs font-bold text-secondary uppercase tracking-widest"><?php echo esc_html( $gov_minister_subtitle ); ?></span>
					<?php endif; ?>
					<?php if ( ! empty( $gov_minister_title ) ) : ?>
						<h2 class="text-xl sm:text-2xl font-extrabold text-primary-darker tracking-tight mt-1 mb-2"><?php echo esc_html( $gov_minister_title ); ?></h2>
					<?php endif; ?>
					<?php if ( ! empty( $gov_minister_desc ) ) : ?>
						<p class="text-sm text-slate-600 leading-relaxed m-0">
							<?php echo nl2br( esc_html( $gov_minister_desc ) ); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>

			<!-- Secretary Card -->
			<div class="gov-profile-card bg-warm-white rounded-2xl border border-primary-darker/15 shadow-sm p-6 sm:p-8 flex flex-col sm:flex-row items-center sm:items-start gap-6 relative overflow-hidden">
				<div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
				<div class="gov-profile-img shrink-0">
					<a href="<?php echo esc_url( $secretary_photo_src ); ?>" class="glightbox block" data-gallery="gov-leadership" data-title="<?php echo esc_attr( $gov_secretary_title ); ?>" data-description="<?php echo esc_attr( $gov_secretary_subtitle ); ?>">
						<img loading="lazy" decoding="async" src="<?php echo esc_url( $secretary_photo_src ); ?>" alt="<?php echo esc_attr( $gov_secretary_title ); ?>" class="w-24 h-28 object-cover rounded-xl border border-secondary/30 shadow-sm hover:opacity-95 transition-opacity" onerror="this.onerror=null;this.src='<?php echo esc_url( $placeholder_photo ); ?>';">
					</a>
				</div>
				<div class="text-center sm:text-left flex-1">
					<?php if ( ! empty( $gov_secretary_subtitle ) ) : ?>
						<span class="text-[10px] sm:text-xs font-bold text-secondary uppercase tracking-widest"><?php echo esc_html( $gov_secretary_subtitle ); ?></span>
					<?php endif; ?>
					<?php if ( ! empty( $gov_secretary_title ) ) : ?>
						<h2 class="text-xl sm:text-2xl font-extrabold text-primary-darker tracking-tight mt-1 mb-2"><?php echo esc_html( $gov_secretary_title ); ?></h2>
					<?php endif; ?>
					<?php if ( ! empty( $gov_secretary_desc ) ) : ?>
						<p class="text-sm text-slate-600 leading-relaxed m-0">
							<?php echo nl2br( esc_html( $gov_secretary_desc ) ); ?>
						</p>
					<?php endif; ?>
				</div>
			</div>

		</div>
	<?php endif; ?>

	<?php if ( 'hide' !== $gov_show_tabs ) : ?>
		<!-- 3. Tabs Lounge Section -->
		<div class="mt-12 lg:mt-16">

			<!-- Tab Bar -->
			<div class="flex flex-wrap justify-center border-b border-primary-darker/15 gap-2 sm:gap-4 pb-3">
				<?php if ( 'hide' !== $gov_show_minister_tab ) : ?>
					<button type="button" class="gov-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all <?php echo ( 'tab-minister' === $default_active_tab ) ? 'active bg-primary-darker text-white shadow-sm' : 'bg-white text-slate-600 border border-primary-darker/15 hover:border-secondary'; ?>" data-tab="tab-minister">
						<?php echo esc_html( $txt_minister_tab ); ?>
					</button>
				<?php endif; ?>

				<?php if ( 'hide' !== $gov_show_secretary_tab ) : ?>
					<button type="button" class="gov-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all <?php echo ( 'tab-secretary' === $default_active_tab ) ? 'active bg-primary-darker text-white shadow-sm' : 'bg-white text-slate-600 border border-primary-darker/15 hover:border-secondary'; ?>" data-tab="tab-secretary">
						<?php echo esc_html( $txt_secretary_tab ); ?>
					</button>
				<?php endif; ?>

				<?php if ( 'hide' !== $gov_show_chart_tab ) : ?>
					<button type="button" class="gov-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all <?php echo ( 'tab-structure' === $default_active_tab ) ? 'active bg-primary-darker text-white shadow-sm' : 'bg-white text-slate-600 border border-primary-darker/15 hover:border-secondary'; ?>" data-tab="tab-structure">
						<?php echo esc_html( $txt_chart_tab ); ?>
					</button>
				<?php endif; ?>
			</div>

			<?php if ( 'hide' !== $gov_show_minister_tab ) : ?>
				<!-- Panel 1: Minister's Message -->
				<div id="tab-minister" class="gov-tab-panel mt-8 <?php echo ( 'tab-minister' === $default_active_tab ) ? 'active' : 'hidden'; ?>">
					<div class="bg-warm-white rounded-2xl border border-primary-darker/15 shadow-sm p-6 sm:p-8 lg:p-10">
						<div class="flex flex-col sm:flex-row items-start gap-6 mb-8">
							<div class="w-24 h-28 rounded-xl border border-secondary/30 shadow-sm overflow-hidden shrink-0 bg-gradient-to-br from-primary-darker to-slate-800 flex items-center justify-center text-white/30">
								<a href="<?php echo esc_url( $tab_min_photo_src ); ?>" class="glightbox block w-full h-full" data-gallery="gov-messages" data-title="<?php echo esc_attr( $gov_tab_min_name ); ?>" data-description="<?php echo esc_attr( $gov_tab_min_designation ); ?>">
									<img loading="lazy" decoding="async" src="<?php echo esc_url( $tab_min_photo_src ); ?>" alt="<?php echo esc_attr( $gov_tab_min_name ); ?>" class="w-full h-full object-cover hover:opacity-95 transition-opacity" onerror="this.onerror=null;this.src='<?php echo esc_url( $placeholder_photo ); ?>';">
								</a>
							</div>
							<div>
								<?php if ( ! empty( $gov_tab_min_designation ) ) : ?>
									<span class="text-[10px] font-bold text-secondary uppercase tracking-widest"><?php echo esc_html( $gov_tab_min_designation ); ?></span>
								<?php endif; ?>
								<?php if ( ! empty( $gov_tab_min_name ) ) : ?>
									<h2 class="text-xl sm:text-2xl font-extrabold text-primary-darker tracking-tight mt-1"><?php echo esc_html( $gov_tab_min_name ); ?></h2>
								<?php endif; ?>
								<?php if ( ! empty( $gov_tab_min_ministry ) ) : ?>
									<p class="text-sm text-slate-600 font-medium"><?php echo esc_html( $gov_tab_min_ministry ); ?></p>
								<?php endif; ?>
							</div>
						</div>

						<?php if ( ! empty( $gov_tab_min_message ) ) : ?>
							<div class="gov-message-text space-y-4 mb-8 text-sm text-slate-600 leading-relaxed">
								<?php echo wp_kses_post( $gov_tab_min_message ); ?>
							</div>
						<?php endif; ?>

						<?php if ( ! empty( $gov_tab_min_phone ) || ! empty( $gov_tab_min_fax ) || ! empty( $gov_tab_min_email ) || ! empty( $gov_tab_min_address ) ) : ?>
							<div class="border-t border-primary-darker/10 pt-6">
								<h4 class="text-sm font-extrabold text-primary-darker mb-4 flex items-center gap-2"><i class="fas fa-address-card text-secondary"></i> <?php echo esc_html( $txt_contact ); ?></h4>
								<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs text-slate-600">
									<?php if ( ! empty( $gov_tab_min_phone ) ) : ?>
										<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-phone-alt text-secondary"></i><span><?php echo esc_html( $gov_tab_min_phone ); ?></span></div>
									<?php endif; ?>
									<?php if ( ! empty( $gov_tab_min_fax ) ) : ?>
										<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-fax text-secondary"></i><span><?php echo esc_html( $gov_tab_min_fax ); ?></span></div>
									<?php endif; ?>
									<?php if ( ! empty( $gov_tab_min_email ) ) : ?>
										<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-envelope text-secondary"></i><a href="mailto:<?php echo esc_attr( $gov_tab_min_email ); ?>" class="text-slate-600 hover:text-primary-darker no-underline"><?php echo esc_html( $gov_tab_min_email ); ?></a></div>
									<?php endif; ?>
									<?php if ( ! empty( $gov_tab_min_address ) ) : ?>
										<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-location-dot text-secondary"></i><span><?php echo esc_html( $gov_tab_min_address ); ?></span></div>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( 'hide' !== $gov_show_secretary_tab ) : ?>
				<!-- Panel 2: Secretary's Message -->
				<div id="tab-secretary" class="gov-tab-panel mt-8 <?php echo ( 'tab-secretary' === $default_active_tab ) ? 'active' : 'hidden'; ?>">
					<div class="bg-warm-white rounded-2xl border border-primary-darker/15 shadow-sm p-6 sm:p-8 lg:p-10">
						<div class="flex flex-col sm:flex-row items-start gap-6 mb-8">
							<div class="w-24 h-28 rounded-xl border border-secondary/30 shadow-sm overflow-hidden shrink-0 bg-gradient-to-br from-primary-darker to-slate-800 flex items-center justify-center text-white/30">
								<a href="<?php echo esc_url( $tab_sec_photo_src ); ?>" class="glightbox block w-full h-full" data-gallery="gov-messages" data-title="<?php echo esc_attr( $gov_tab_sec_name ); ?>" data-description="<?php echo esc_attr( $gov_tab_sec_designation ); ?>">
									<img loading="lazy" decoding="async" src="<?php echo esc_url( $tab_sec_photo_src ); ?>" alt="<?php echo esc_attr( $gov_tab_sec_name ); ?>" class="w-full h-full object-cover hover:opacity-95 transition-opacity" onerror="this.onerror=null;this.src='<?php echo esc_url( $placeholder_photo ); ?>';">
								</a>
							</div>
							<div>
								<?php if ( ! empty( $gov_tab_sec_designation ) ) : ?>
									<span class="text-[10px] font-bold text-secondary uppercase tracking-widest"><?php echo esc_html( $gov_tab_sec_designation ); ?></span>
								<?php endif; ?>
								<?php if ( ! empty( $gov_tab_sec_name ) ) : ?>
									<h2 class="text-xl sm:text-2xl font-extrabold text-primary-darker tracking-tight mt-1"><?php echo esc_html( $gov_tab_sec_name ); ?></h2>
								<?php endif; ?>
								<?php if ( ! empty( $gov_tab_sec_ministry ) ) : ?>
									<p class="text-sm text-slate-600 font-medium"><?php echo esc_html( $gov_tab_sec_ministry ); ?></p>
								<?php endif; ?>
							</div>
						</div>

						<?php if ( ! empty( $gov_tab_sec_message ) ) : ?>
							<div class="gov-message-text space-y-4 mb-8 text-sm text-slate-600 leading-relaxed">
								<?php echo wp_kses_post( $gov_tab_sec_message ); ?>
							</div>
						<?php endif; ?>

						<?php if ( ! empty( $gov_tab_sec_phone ) || ! empty( $gov_tab_sec_fax ) || ! empty( $gov_tab_sec_email ) || ! empty( $gov_tab_sec_address ) ) : ?>
							<div class="border-t border-primary-darker/10 pt-6">
								<h4 class="text-sm font-extrabold text-primary-darker mb-4 flex items-center gap-2"><i class="fas fa-address-card text-secondary"></i> <?php echo esc_html( $txt_contact ); ?></h4>
								<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs text-slate-600">
									<?php if ( ! empty( $gov_tab_sec_phone ) ) : ?>
										<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-phone-alt text-secondary"></i><span><?php echo esc_html( $gov_tab_sec_phone ); ?></span></div>
									<?php endif; ?>
									<?php if ( ! empty( $gov_tab_sec_fax ) ) : ?>
										<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-fax text-secondary"></i><span><?php echo esc_html( $gov_tab_sec_fax ); ?></span></div>
									<?php endif; ?>
									<?php if ( ! empty( $gov_tab_sec_email ) ) : ?>
										<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-envelope text-secondary"></i><a href="mailto:<?php echo esc_attr( $gov_tab_sec_email ); ?>" class="text-slate-600 hover:text-primary-darker no-underline"><?php echo esc_html( $gov_tab_sec_email ); ?></a></div>
									<?php endif; ?>
									<?php if ( ! empty( $gov_tab_sec_address ) ) : ?>
										<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-location-dot text-secondary"></i><span><?php echo esc_html( $gov_tab_sec_address ); ?></span></div>
									<?php endif; ?>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

			<?php if ( 'hide' !== $gov_show_chart_tab ) : ?>
				<!-- Panel 3: Organizational Structure Chart -->
				<div id="tab-structure" class="gov-tab-panel mt-8 space-y-10 <?php echo ( 'tab-structure' === $default_active_tab ) ? 'active' : 'hidden'; ?>">

					<div class="org-chart-container" id="interactiveOrgChartSection">
						<!-- Header & Actions -->
						<div class="org-chart-header flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
							<div>
								<h3 class="text-xl sm:text-2xl font-extrabold text-primary-darker m-0">
									<?php echo ! empty( $gov_chart_title ) ? esc_html( $gov_chart_title ) : esc_html__( 'Organizational Structure', 'homeaffairs' ); ?>
								</h3>
								<?php if ( ! empty( $gov_chart_subtitle ) ) : ?>
									<p class="text-xs sm:text-sm text-slate-600 mt-1 m-0"><?php echo wp_kses( $gov_chart_subtitle, array( 'span' => array( 'class' => array() ), 'strong' => array() ) ); ?></p>
								<?php endif; ?>
							</div>
							<div class="flex items-center gap-2 shrink-0">
								<button type="button" id="toggleAllStaffBtn" class="px-3 py-1.5 rounded-lg text-xs font-bold bg-white border border-primary-darker/20 text-primary-darker hover:bg-secondary hover:text-primary-darker transition-all flex items-center gap-1.5 shadow-2xs">
									<i class="fas fa-layer-group text-secondary"></i> <span><?php echo esc_html( $txt_expand_staff ); ?></span>
								</button>
								<button type="button" id="downloadChartBtn" class="px-3 py-1.5 rounded-lg text-xs font-bold bg-primary-darker text-white hover:bg-secondary hover:text-primary-darker transition-all flex items-center gap-1.5 shadow-2xs cursor-pointer" title="<?php echo esc_attr( $txt_download_chart ); ?>" aria-label="<?php echo esc_attr( $txt_download_chart ); ?>">
									<i class="fas fa-download"></i> <span><?php echo esc_html( $txt_download_chart ); ?></span>
								</button>
								<button type="button" id="fullscreenChartBtn" class="p-2 rounded-lg text-xs font-bold bg-white border border-primary-darker/20 text-primary-darker hover:bg-secondary hover:text-primary-darker transition-all shadow-2xs" title="Toggle Fullscreen" aria-label="Toggle Fullscreen">
									<i class="fas fa-expand"></i>
								</button>
							</div>
						</div>

						<!-- Toolbar: Division Filters, Search, and Zoom -->
						<div class="org-chart-toolbar">
							<!-- Dynamic Division Filter Pills -->
							<?php
							if ( function_exists( 'ha_render_org_filter_pills' ) ) {
								echo ha_render_org_filter_pills();
							}
							?>

							<!-- Search & Zoom Tools -->
							<div class="flex items-center gap-3 w-full sm:w-auto justify-between sm:justify-end">
								<!-- Search Box -->
								<div class="relative flex-1 sm:w-56">
									<i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs pointer-events-none"></i>
									<input type="text" id="orgChartSearchInput" placeholder="<?php echo esc_attr( $txt_search_holder ); ?>" class="w-full pl-8 pr-3 py-1.5 text-xs rounded-lg border border-slate-200 focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary bg-white">
								</div>

								<!-- Zoom Controls -->
								<div class="flex items-center gap-1 bg-slate-100 p-1 rounded-lg border border-slate-200 shrink-0">
									<button type="button" id="chartZoomOut" class="w-7 h-7 flex items-center justify-center rounded bg-white text-slate-700 hover:text-primary-darker hover:bg-slate-50 transition-colors text-xs font-bold shadow-2xs" title="Zoom Out" aria-label="Zoom Out">
										<i class="fas fa-minus"></i>
									</button>
									<span id="chartZoomLabel" class="text-[11px] font-bold text-slate-600 px-1.5 min-w-[38px] text-center select-none">100%</span>
									<button type="button" id="chartZoomIn" class="w-7 h-7 flex items-center justify-center rounded bg-white text-slate-700 hover:text-primary-darker hover:bg-slate-50 transition-colors text-xs font-bold shadow-2xs" title="Zoom In" aria-label="Zoom In">
										<i class="fas fa-plus"></i>
									</button>
									<button type="button" id="chartZoomReset" class="w-7 h-7 flex items-center justify-center rounded bg-white text-slate-700 hover:text-primary-darker hover:bg-slate-50 transition-colors text-xs font-bold shadow-2xs" title="Reset Zoom" aria-label="Reset Zoom">
										<i class="fas fa-rotate-left"></i>
									</button>
								</div>
							</div>
						</div>

						<!-- Pan & Zoom Canvas Viewport -->
						<div class="org-chart-viewport" id="orgChartViewport">
							<div class="org-chart-canvas relative" id="orgChartCanvas">
								<svg id="orgCrossConnectors" style="position:absolute;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:1;overflow:visible;"></svg>

								<?php
								$rendered_tree = function_exists( 'ha_render_org_tree' ) ? ha_render_org_tree( $post_id ) : false;
								if ( false !== $rendered_tree && ! empty( $rendered_tree ) ) {
									echo $rendered_tree;
								}
								?>
							</div>
						</div>

						<!-- Acronyms Reference Bar -->
						<div class="bg-warm-white border-t border-primary-darker/10 px-4 sm:px-6 py-3">
							<div class="flex flex-col sm:flex-row items-center justify-between gap-2 text-[11px] text-slate-500">
								<div class="flex flex-wrap items-center gap-1.5">
									<span class="font-bold text-primary-darker mr-1"><i class="fas fa-info-circle text-secondary"></i> <?php echo esc_html( $txt_acronyms_hdr ); ?></span>
									<?php if ( $is_si ) : ?>
										<span><strong>DO:</strong> සංවර්ධන නිලධාරී</span> &bull;
										<span><strong>MSO:</strong> කළමනාකරණ සේවා නිලධාරී</span> &bull;
										<span><strong>OES:</strong> කාර්යාල කාර්ය සහායක සේවය</span> &bull;
										<span><strong>ICTO:</strong> තොරතුරු හා සන්නිවේදන තාක්ෂණ නිලධාරී</span> &bull;
										<span><strong>ICTA:</strong> තොරතුරු හා සන්නිවේදන තාක්ෂණ සහකාර</span> &bull;
										<span><strong>RAR:</strong> කලාපීය පරිපාලන ප්‍රතිසංස්කරණ</span>
									<?php elseif ( $is_ta ) : ?>
										<span><strong>DO:</strong> அபிவிருத்தி அதிகாரி</span> &bull;
										<span><strong>MSO:</strong> முகாமைத்துவ சேவை அதிகாரி</span> &bull;
										<span><strong>OES:</strong> அலுவலகப் பணியாளர் சேவை</span> &bull;
										<span><strong>ICTO:</strong> தகவல் தொடர்பாடல் தொழில்நுட்ப அதிகாரி</span> &bull;
										<span><strong>ICTA:</strong> தகவல் தொடர்பாடல் தொழில்நுட்ப உதவியாளர்</span> &bull;
										<span><strong>RAR:</strong> பிராந்திய நிர்வாக மறுசீரமைப்பு</span>
									<?php else : ?>
										<span><strong>DO:</strong> Development Officer</span> &bull;
										<span><strong>MSO:</strong> Management Service Officer</span> &bull;
										<span><strong>OES:</strong> Office Employees Service</span> &bull;
										<span><strong>ICTO:</strong> ICT Officer</span> &bull;
										<span><strong>ICTA:</strong> ICT Assistant</span> &bull;
										<span><strong>RAR:</strong> Regional Administration Reforms</span>
									<?php endif; ?>
								</div>
								<div class="shrink-0 text-slate-400 hidden sm:block">
									<span><?php echo esc_html( $txt_footer_label ); ?></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			<?php endif; ?>

		</div>
	<?php endif; ?>

</main>

<script src="<?php echo esc_url( get_template_directory_uri() . '/assets/js/lib/html2canvas.min.js' ); ?>"></script>
<script>
(function() {
	var tabBtns = document.querySelectorAll('.gov-tab-btn');
	var tabPanels = {
		'tab-structure': document.getElementById('tab-structure'),
		'tab-minister': document.getElementById('tab-minister'),
		'tab-secretary': document.getElementById('tab-secretary')
	};

	tabBtns.forEach(function( btn ) {
		var panelId = btn.getAttribute('data-tab');
		btn.addEventListener('click', function() {
			tabBtns.forEach(function( b ) { 
				b.classList.remove('active', 'bg-primary-darker', 'text-white', 'shadow-sm');
				b.classList.add('bg-white', 'text-slate-600', 'border', 'border-primary-darker/15');
			});
			this.classList.remove('bg-white', 'text-slate-600', 'border', 'border-primary-darker/15');
			this.classList.add('active', 'bg-primary-darker', 'text-white', 'shadow-sm');

			for ( var id in tabPanels ) {
				if ( tabPanels[ id ] ) {
					if ( id === panelId ) {
						tabPanels[ id ].classList.remove('hidden');
						tabPanels[ id ].classList.add('active');
					} else {
						tabPanels[ id ].classList.add('hidden');
						tabPanels[ id ].classList.remove('active');
					}
				}
			}
			if ( panelId === 'tab-structure' && typeof updateCrossConnectors === 'function' ) {
				setTimeout(updateCrossConnectors, 50);
			}
		});
	});

	if ( typeof GLightbox !== 'undefined' ) {
		GLightbox({
			selector: '.glightbox',
			touchNavigation: true,
			loop: false,
			zoomable: true,
			draggable: true,
		});
	}

	// ========================================================
	// Interactive Org Chart Logic
	// ========================================================
	function isNodeVisibleInTree( el ) {
		if ( ! el ) return false;
		var branch = el.closest('.org-branch');
		if ( branch && branch.classList.contains('is-hidden') ) return false;

		var cur = el.parentElement;
		while ( cur && cur !== canvas ) {
			if ( cur.classList.contains('staff-subtree') && ! cur.classList.contains('is-expanded') ) {
				return false;
			}
			cur = cur.parentElement;
		}
		var rect = el.getBoundingClientRect();
		return rect.width > 0 && rect.height > 0;
	}

	function updateCrossConnectors() {
		var svg = document.getElementById('orgCrossConnectors');
		if ( ! svg ) return;
		var canvas = document.getElementById('orgChartCanvas');
		if ( ! canvas ) return;

		var canvasRect = canvas.getBoundingClientRect();
		var zoom = ( typeof currentZoom !== 'undefined' && currentZoom > 0 ) ? currentZoom : 1;
		var match = canvas.style.transform ? canvas.style.transform.match(/scale\(([^)]+)\)/) : null;
		if ( match ) {
			zoom = parseFloat( match[1] );
		}
		var paths = [];

		// 1. Dynamic Association Cross-Connectors from data-cross-target
		var crossSourceElements = document.querySelectorAll('[data-cross-target]');
		crossSourceElements.forEach(function( sourceCard ) {
			var targetId = sourceCard.getAttribute('data-cross-target');
			var targetCard = targetId ? document.getElementById(targetId) : null;
			var style = sourceCard.getAttribute('data-cross-style') || 'elbow-bottom';
			var anchorId = sourceCard.getAttribute('data-cross-anchor');
			var anchorCard = anchorId ? document.getElementById(anchorId) : null;

			if ( ! targetCard ) return;

			// Comprehensive visibility checks (ancestor branches & subtrees)
			if ( ! isNodeVisibleInTree( sourceCard ) || ! isNodeVisibleInTree( targetCard ) ) return;

			var rSource = sourceCard.getBoundingClientRect();
			var rTarget = targetCard.getBoundingClientRect();

			if ( style === 'bracket' && anchorCard ) {
				if ( isNodeVisibleInTree( anchorCard ) ) {
					var xSource = Math.round( ( rSource.left + rSource.width / 2 - canvasRect.left ) / zoom );
					var ySource = Math.round( ( rSource.bottom - canvasRect.top ) / zoom );
					var xTarget = Math.round( ( rTarget.left + rTarget.width / 2 - canvasRect.left ) / zoom );
					var yTarget = Math.round( ( rTarget.bottom - canvasRect.top ) / zoom );
					var yBar = Math.max( ySource, yTarget ) + 24;
					var pathD = 'M ' + xSource + ' ' + ySource + ' L ' + xSource + ' ' + yBar + ' L ' + xTarget + ' ' + yBar;
					paths.push('<path d="' + pathD + '" fill="none" stroke="#94a3b8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />');
				}
			} else if ( style === 'direct-right' ) {
				var xSecRight = Math.round( ( rSource.left + rSource.width * 0.78 - canvasRect.left ) / zoom );
				var ySecBottom = Math.round( ( rSource.bottom - canvasRect.top ) / zoom );
				var xTarget = Math.round( ( rTarget.left + rTarget.width / 2 - canvasRect.left ) / zoom );
				var yTargetTop = Math.round( ( rTarget.top - canvasRect.top ) / zoom );
				var yBar = ySecBottom + 12;
				var pathD = 'M ' + xSecRight + ' ' + ySecBottom + ' L ' + xSecRight + ' ' + yBar + ' L ' + xTarget + ' ' + yBar + ' L ' + xTarget + ' ' + yTargetTop;
				paths.push('<path d="' + pathD + '" fill="none" stroke="#94a3b8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />');
			} else if ( style === 'elbow-bottom' ) {
				var xSource = Math.round( ( rSource.left + rSource.width / 2 - canvasRect.left ) / zoom );
				var ySourceBottom = Math.round( ( rSource.bottom - canvasRect.top ) / zoom );
				var xTarget = Math.round( ( rTarget.left + rTarget.width / 2 - canvasRect.left ) / zoom );
				var yTargetTop = Math.round( ( rTarget.top - canvasRect.top ) / zoom );
				var yBar = yTargetTop - 8;
				var pathD = 'M ' + xSource + ' ' + ySourceBottom + ' L ' + xSource + ' ' + yBar + ' L ' + xTarget + ' ' + yBar;
				paths.push('<path d="' + pathD + '" fill="none" stroke="#94a3b8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />');
			}
		});

		svg.innerHTML = paths.join('');
	}
	window.updateCrossConnectors = updateCrossConnectors;

	window.toggleStaff = function( btn ) {
		var li = btn.closest('li');
		if ( ! li ) return;
		var subtree = li.querySelector(':scope > .staff-subtree');
		if ( ! subtree ) return;
		var isExpanded = subtree.classList.toggle('is-expanded');
		btn.classList.toggle('expanded', isExpanded);
		btn.innerHTML = isExpanded ? '− Staff' : '+ Staff';

		// If toggling node with anchor or target, ensure connected nodes also open
		var card = li.querySelector('.org-card');
		if ( card && card.hasAttribute('data-cross-target') && isExpanded ) {
			var tId = card.getAttribute('data-cross-target');
			var tCard = document.getElementById(tId);
			if ( tCard ) {
				var tLi = tCard.closest('li');
				var tSubtree = tLi ? tLi.querySelector('.staff-subtree') : null;
				var tBtn = tLi ? tLi.querySelector('.staff-toggle') : null;
				if ( tSubtree && ! tSubtree.classList.contains('is-expanded') ) {
					tSubtree.classList.add('is-expanded');
					if ( tBtn ) {
						tBtn.classList.add('expanded');
						tBtn.innerHTML = '− Staff';
					}
				}
			}
		}

		setTimeout(updateCrossConnectors, 50);
	};

	var chartContainer = document.getElementById('interactiveOrgChartSection');
	var viewport = document.getElementById('orgChartViewport');
	var canvas = document.getElementById('orgChartCanvas');
	var zoomInBtn = document.getElementById('chartZoomIn');
	var zoomOutBtn = document.getElementById('chartZoomOut');
	var zoomResetBtn = document.getElementById('chartZoomReset');
	var zoomLabel = document.getElementById('chartZoomLabel');
	var toggleAllBtn = document.getElementById('toggleAllStaffBtn');
	var fullscreenBtn = document.getElementById('fullscreenChartBtn');
	var searchInput = document.getElementById('orgChartSearchInput');

	// Zoom functionality
	var currentZoom = 1;
	function updateZoom( newZoom ) {
		currentZoom = Math.min( Math.max( newZoom, 0.5 ), 1.5 );
		canvas.style.transform = 'scale(' + currentZoom + ')';
		if ( zoomLabel ) {
			zoomLabel.textContent = Math.round( currentZoom * 100 ) + '%';
		}
		setTimeout(updateCrossConnectors, 180);
	}
	if ( canvas ) {
		canvas.addEventListener('transitionend', updateCrossConnectors);
	}

	if ( zoomInBtn ) {
		zoomInBtn.addEventListener('click', function() {
			updateZoom( currentZoom + 0.15 );
		});
	}
	if ( zoomOutBtn ) {
		zoomOutBtn.addEventListener('click', function() {
			updateZoom( currentZoom - 0.15 );
		});
	}
	if ( zoomResetBtn ) {
		zoomResetBtn.addEventListener('click', function() {
			updateZoom( 1 );
			if ( viewport ) {
				viewport.scrollTo({ left: ( canvas.scrollWidth - viewport.clientWidth ) / 2, behavior: 'smooth' });
			}
		});
	}

	window.addEventListener('resize', updateCrossConnectors);
	setTimeout(updateCrossConnectors, 200);

	// Center tree initially on load
	if ( viewport && canvas ) {
		setTimeout(function() {
			var scrollLeft = ( canvas.scrollWidth - viewport.clientWidth ) / 2;
			if ( scrollLeft > 0 ) {
				viewport.scrollLeft = scrollLeft;
			}
		}, 100);
	}

	// Drag to Pan
	if ( viewport ) {
		var isPanning = false;
		var startX = 0, startY = 0, scrollStartX = 0, scrollStartY = 0;

		viewport.addEventListener('mousedown', function( e ) {
			if ( e.target.closest('.staff-toggle') || e.target.closest('input') || e.target.closest('button') ) {
				return;
			}
			isPanning = true;
			startX = e.pageX - viewport.offsetLeft;
			startY = e.pageY - viewport.offsetTop;
			scrollStartX = viewport.scrollLeft;
			scrollStartY = viewport.scrollTop;
			viewport.style.cursor = 'grabbing';
		});

		window.addEventListener('mousemove', function( e ) {
			if ( ! isPanning ) return;
			e.preventDefault();
			var x = e.pageX - viewport.offsetLeft;
			var y = e.pageY - viewport.offsetTop;
			var walkX = ( x - startX );
			var walkY = ( y - startY );
			viewport.scrollLeft = scrollStartX - walkX;
			viewport.scrollTop = scrollStartY - walkY;
		});

		window.addEventListener('mouseup', function() {
			isPanning = false;
			if ( viewport ) {
				viewport.style.cursor = 'grab';
			}
		});
	}

	// Toggle All Staff
	var allStaffExpanded = false;
	if ( toggleAllBtn ) {
		toggleAllBtn.addEventListener('click', function() {
			allStaffExpanded = ! allStaffExpanded;
			var subtrees = document.querySelectorAll('.staff-subtree');
			var toggles = document.querySelectorAll('.staff-toggle');
			subtrees.forEach(function( subtree ) {
				if ( allStaffExpanded ) {
					subtree.classList.add('is-expanded');
				} else {
					subtree.classList.remove('is-expanded');
				}
			});
			toggles.forEach(function( btn ) {
				btn.classList.toggle('expanded', allStaffExpanded);
				btn.innerHTML = allStaffExpanded ? '− Staff' : '+ Staff';
			});
			toggleAllBtn.querySelector('span').textContent = allStaffExpanded ? 'Collapse All Staff' : 'Expand All Staff';
			setTimeout(updateCrossConnectors, 100);
		});
	}

	// Division Filters
	var filterPills = document.querySelectorAll('.org-filter-pill');
	var allBranches = document.querySelectorAll('.org-branch');
	filterPills.forEach(function( pill ) {
		pill.addEventListener('click', function() {
			var div = this.getAttribute('data-div');
			filterPills.forEach(function( p ) {
				p.classList.remove('active', 'bg-primary-darker', 'text-white');
				p.classList.add('bg-white', 'text-slate-600', 'border', 'border-slate-200');
			});
			this.classList.remove('bg-white', 'text-slate-600', 'border', 'border-slate-200');
			this.classList.add('active', 'bg-primary-darker', 'text-white');

			allBranches.forEach(function( branch ) {
				if ( div === 'all' || branch.getAttribute('data-division') === div ) {
					branch.classList.remove('is-hidden');
				} else {
					branch.classList.add('is-hidden');
				}
			});
			setTimeout(updateCrossConnectors, 30);
		});
	});

	// Search Input
	if ( searchInput ) {
		searchInput.addEventListener('input', function() {
			var q = this.value.trim().toLowerCase();
			var cards = document.querySelectorAll('.org-card');

			cards.forEach(function( card ) {
				card.classList.remove('highlight');
			});

			if ( q.length < 2 ) return;

			cards.forEach(function( card ) {
				var title = ( card.getAttribute('data-title') || '' ).toLowerCase();
				var cardText = card.textContent.toLowerCase();
				if ( title.indexOf( q ) !== -1 || cardText.indexOf( q ) !== -1 ) {
					card.classList.add('highlight');
					
					var parentBranch = card.closest('.org-branch');
					if ( parentBranch && parentBranch.classList.contains('is-hidden') ) {
						parentBranch.classList.remove('is-hidden');
					}
					
					// Expand ALL ancestor staff-subtrees so deeply nested nodes become visible
					var cur = card.parentElement;
					while ( cur && cur !== canvas ) {
						if ( cur.classList.contains('staff-subtree') ) {
							if ( ! cur.classList.contains('is-expanded') ) {
								cur.classList.add('is-expanded');
							}
							var parentLi = cur.closest('li');
							var toggleBtn = parentLi ? parentLi.querySelector(':scope > .staff-toggle') : null;
							if ( toggleBtn ) {
								toggleBtn.classList.add('expanded');
								toggleBtn.innerHTML = '− Staff';
							}
						}
						cur = cur.parentElement;
					}
				}
			});
			setTimeout(updateCrossConnectors, 50);
		});
	}

	// Download Chart as Image (PNG)
	var downloadBtn = document.getElementById('downloadChartBtn');
	if ( downloadBtn && canvas ) {
		downloadBtn.addEventListener('click', function() {
			var origHtml = downloadBtn.innerHTML;
			downloadBtn.disabled = true;
			downloadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <span>Generating...</span>';

			var prevTransform = canvas.style.transform;
			var prevTransition = canvas.style.transition;
			var subtrees = document.querySelectorAll('.staff-subtree');
			var branches = document.querySelectorAll('.org-branch');
			var toggles = document.querySelectorAll('.staff-toggle');
			var subtreeStates = [];
			subtrees.forEach(function( s ) {
				subtreeStates.push( s.classList.contains('is-expanded') );
			});
			var branchStates = [];
			branches.forEach(function( b ) {
				branchStates.push( b.classList.contains('is-hidden') );
			});

			subtrees.forEach(function( s ) {
				s.classList.add('is-expanded');
			});
			branches.forEach(function( b ) {
				b.classList.remove('is-hidden');
			});

			var overrideStyle = document.createElement('style');
			overrideStyle.id = 'h2c-override';
			overrideStyle.innerHTML = 
				'.org-tree li.org-branch-direct:before,' +
				'.org-tree li.org-branch-direct:after,' +
				'.org-tree li.org-branch-direct::before,' +
				'.org-tree li.org-branch-direct::after {' +
					'display: none !important;' +
					'content: none !important;' +
					'border: none !important;' +
					'width: 0px !important;' +
					'height: 0px !important;' +
					'visibility: hidden !important;' +
				'}' +
				'.org-tree li[data-division="finance"]:after,' +
				'.org-tree li[data-division="finance"]::after {' +
					'display: none !important;' +
					'border: none !important;' +
					'border-top: none !important;' +
					'border-top-width: 0px !important;' +
				'}';
			document.head.appendChild(overrideStyle);

			toggles.forEach(function( t ) {
				t.setAttribute('data-html2canvas-ignore', 'true');
			});

			canvas.style.transition = 'none';
			canvas.style.transform = 'none';
			void canvas.offsetWidth;

			updateCrossConnectors();
			var svg = document.getElementById('orgCrossConnectors');
			var paths = svg ? Array.from(svg.querySelectorAll('path')).map(function( p ) { return p.getAttribute('d'); }) : [];

			if ( svg ) svg.style.display = 'none';

			setTimeout(function() {
				if ( typeof html2canvas === 'function' ) {
					html2canvas(canvas, {
						backgroundColor: '#ffffff',
						scale: 1.5,
						logging: false,
						useCORS: true,
						allowTaint: true,
						scrollX: 0,
						scrollY: 0
					}).then(function( renderedCanvas ) {
						var finalCanvas = document.createElement('canvas');
						finalCanvas.width = renderedCanvas.width;
						finalCanvas.height = renderedCanvas.height;
						var ctx = finalCanvas.getContext('2d');
						ctx.drawImage(renderedCanvas, 0, 0);

						var scale = renderedCanvas.width / canvas.offsetWidth;
						ctx.save();
						ctx.scale(scale, scale);
						ctx.strokeStyle = '#94a3b8';
						ctx.lineWidth = 1.5;
						ctx.lineCap = 'round';
						ctx.lineJoin = 'round';

						paths.forEach(function( d ) {
							try {
								var p2d = new Path2D(d);
								ctx.stroke(p2d);
							} catch ( e ) {
								console.error('Error drawing path:', e);
							}
						});
						ctx.restore();

						var link = document.createElement('a');
						link.download = 'home-affairs-division-organizational-chart.png';
						link.href = finalCanvas.toDataURL('image/png');
						document.body.appendChild(link);
						link.click();
						document.body.removeChild(link);
					}).catch(function( err ) {
						console.error('Error generating chart image:', err);
						alert('Failed to generate chart image. Please try again.');
					}).finally(function() {
						if ( svg ) svg.style.display = '';
						if ( overrideStyle && overrideStyle.parentNode ) {
							overrideStyle.parentNode.removeChild(overrideStyle);
						}
						toggles.forEach(function( t ) {
							t.removeAttribute('data-html2canvas-ignore');
						});

						subtrees.forEach(function( s, idx ) {
							if ( subtreeStates[ idx ] ) {
								s.classList.add('is-expanded');
							} else {
								s.classList.remove('is-expanded');
							}
						});
						toggles.forEach(function( btn ) {
							var li = btn.closest('li');
							var s = li ? li.querySelector(':scope > .staff-subtree') : null;
							var isExp = s && s.classList.contains('is-expanded');
							btn.classList.toggle('expanded', isExp);
							btn.innerHTML = isExp ? '− Staff' : '+ Staff';
						});

						branches.forEach(function( b, idx ) {
							if ( branchStates[ idx ] ) {
								b.classList.add('is-hidden');
							} else {
								b.classList.remove('is-hidden');
							}
						});

						canvas.style.transform = prevTransform;
						void canvas.offsetWidth;
						canvas.style.transition = prevTransition;

						updateCrossConnectors();
						downloadBtn.disabled = false;
						downloadBtn.innerHTML = origHtml;
					});
				} else {
					console.error('html2canvas library is not loaded');
					if ( svg ) svg.style.display = '';
					if ( overrideStyle && overrideStyle.parentNode ) {
						overrideStyle.parentNode.removeChild(overrideStyle);
					}
					toggles.forEach(function( t ) {
						t.removeAttribute('data-html2canvas-ignore');
					});
					subtrees.forEach(function( s, idx ) {
						if ( subtreeStates[ idx ] ) {
							s.classList.add('is-expanded');
						} else {
							s.classList.remove('is-expanded');
						}
					});
					branches.forEach(function( b, idx ) {
						if ( branchStates[ idx ] ) {
							b.classList.add('is-hidden');
						} else {
							b.classList.remove('is-hidden');
						}
					});
					canvas.style.transform = prevTransform;
					canvas.style.transition = prevTransition;
					updateCrossConnectors();
					downloadBtn.disabled = false;
					downloadBtn.innerHTML = origHtml;
				}
			}, 50);
		});
	}

	// Fullscreen Toggle
	if ( fullscreenBtn && chartContainer ) {
		fullscreenBtn.addEventListener('click', function() {
			if ( ! document.fullscreenElement ) {
				if ( chartContainer.requestFullscreen ) {
					chartContainer.requestFullscreen();
				}
			} else {
				if ( document.exitFullscreen ) {
					document.exitFullscreen();
				}
			}
		});
	}
})();
</script>

<?php get_footer(); ?>
