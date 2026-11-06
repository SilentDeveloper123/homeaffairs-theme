<?php
/**
 * Single Template for ha-division Custom Post Type
 *
 * Displays Division details: Title, Scope, Duties, Head of Division Profile,
 * Sub-Units with Team Profiles, and a Sub-Units Anchor Sidebar.
 *
 * @package HomeAffairs
 */

defined( 'ABSPATH' ) || exit;

get_header();

get_template_part( 'template-parts/page-banner' );

$lang = function_exists( 'ha_get_current_language' ) ? ha_get_current_language() : 'en';

// Localized headings
$labels = array(
	'sidebar_title' => array( 'en' => 'Sub Units / Divisions', 'si' => 'උප ඒකක / අංශ', 'ta' => 'துணை அலகுகள் / பிரிவுகள்' ),
	'scope_title'   => array( 'en' => 'Scope of the Division', 'si' => 'අංශයේ විෂය පථය', 'ta' => 'பிரிவின் நோக்கம்' ),
	'duty_title'    => array( 'en' => 'Duty of the Division', 'si' => 'අංශයේ කාර්යභාරය', 'ta' => 'பிரிவின் கடமை' ),
	'head_title'    => array( 'en' => 'Head of Division', 'si' => 'අංශ ප්‍රධානී', 'ta' => 'பிரிவுத் தலைவர்' ),
	'subunits_title'=> array( 'en' => 'Sub Units / Divisions', 'si' => 'උප ඒකක / අංශ', 'ta' => 'துணை அலகுகள் / பிரிவுகள்' ),
	'mobile'        => array( 'en' => 'Mobile', 'si' => 'ජංගම', 'ta' => 'கைப்பேசி' ),
	'phone_fax'     => array( 'en' => 'Phone / Fax', 'si' => 'දුරකථන / ෆැක්ස්', 'ta' => 'தொலைபேசி / தொலைநகல்' ),
	'email'         => array( 'en' => 'Email', 'si' => 'විද්‍යුත් තැපෑල', 'ta' => 'மின்னஞ்சல்' ),
);

$lbl_sidebar  = $labels['sidebar_title'][ $lang ] ?? $labels['sidebar_title']['en'];
$lbl_scope    = $labels['scope_title'][ $lang ] ?? $labels['scope_title']['en'];
$lbl_duty     = $labels['duty_title'][ $lang ] ?? $labels['duty_title']['en'];
$lbl_head     = $labels['head_title'][ $lang ] ?? $labels['head_title']['en'];
$lbl_subunits = $labels['subunits_title'][ $lang ] ?? $labels['subunits_title']['en'];

$placeholder_photo = 'https://placehold.co/1817x2565/591521/ffffff?text=Photo';
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		$post_id = get_the_ID();

		// Title
		$custom_title = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_title' ) : '';
		$disp_title   = ! empty( $custom_title ) ? $custom_title : get_the_title();

		// Icon
		$icon = function_exists( 'ha_get_post_icon' ) ? ha_get_post_icon( $post_id, 'division_icon', 'fas fa-sitemap' ) : ( function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_icon' ) : 'fas fa-sitemap' );
		$icon = is_string( $icon ) ? $icon : ( function_exists( 'ha_get_icon_class' ) ? ha_get_icon_class( $icon, 'fas fa-sitemap' ) : 'fas fa-sitemap' );
		if ( empty( $icon ) ) {
			$icon = 'fas fa-sitemap';
		}

		// Scope & Duty
		$scope = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_scope' ) : '';
		$duty  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_duty' ) : '';

		// Head of Division
		$head_photo = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_head_photo' ) : '';
		if ( empty( $head_photo ) ) {
			$head_photo = $placeholder_photo;
		}
		$head_name  = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_head_name' ) : '';
		$head_desig = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_head_designation' ) : '';
		$head_mob   = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_head_mobile' ) : '';
		$head_phone = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_head_phone_fax' ) : '';
		$head_email = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_head_email' ) : '';

		// Sub-Units
		$sub_units = function_exists( 'carbon_get_post_meta' ) ? carbon_get_post_meta( $post_id, 'division_sub_units' ) : array();
		if ( ! is_array( $sub_units ) ) {
			$sub_units = array();
		}
	?>

	<div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

		<!-- Sidebar: Sub Units Anchor Navigation -->
		<div>
			<div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 lg:sticky lg:top-6">
				<h3 class="text-sm font-extrabold text-primary mb-4 flex items-center gap-2">
					<i class="fas fa-th-list text-secondary"></i> <?php echo esc_html( $lbl_sidebar ); ?>
				</h3>
				<?php if ( ! empty( $sub_units ) ) : ?>
					<nav class="space-y-0.5">
						<?php foreach ( $sub_units as $s_idx => $sub ) :
							$sub_title = ! empty( $sub['sub_unit_title'] ) ? $sub['sub_unit_title'] : ( 'Sub Unit / Division ' . ( $s_idx + 1 ) );
							$target_id = 'sub-unit-' . ( $s_idx + 1 );
						?>
							<a href="#<?php echo esc_attr( $target_id ); ?>" class="div-side-link">
								<i class="fas fa-chevron-right"></i>
								<span><?php echo esc_html( $sub_title ); ?></span>
							</a>
						<?php endforeach; ?>
					</nav>
				<?php else : ?>
					<p class="text-xs text-gray-500 m-0">&mdash;</p>
				<?php endif; ?>
			</div>
		</div>

		<!-- Main Content Area -->
		<div class="lg:col-span-3 space-y-8">

			<!-- Division Header -->
			<div>
				<div class="flex items-center gap-4 mb-2">
					<div class="w-14 h-14 rounded-2xl bg-primary text-secondary flex items-center justify-center shrink-0 text-2xl shadow-sm">
						<i class="<?php echo esc_attr( $icon ); ?>"></i>
					</div>
					<div>
						<h1 class="text-2xl lg:text-3xl font-extrabold text-primary-dark tracking-tight m-0">
							<?php echo esc_html( $disp_title ); ?>
						</h1>
					</div>
				</div>
			</div>

			<!-- Scope of the Division -->
			<?php if ( ! empty( $scope ) ) : ?>
				<section class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 sm:p-7">
					<h2 class="text-sm font-extrabold text-primary mb-3 flex items-center gap-2">
						<i class="fas fa-info-circle text-secondary"></i> <?php echo esc_html( $lbl_scope ); ?>
					</h2>
					<p class="text-slate-600 text-justify text-sm sm:text-base leading-relaxed m-0 whitespace-pre-line">
						<?php echo esc_html( $scope ); ?>
					</p>
				</section>
			<?php endif; ?>

			<!-- Duty of the Division -->
			<?php if ( ! empty( $duty ) ) : ?>
				<section class="bg-white rounded-2xl border border-slate-100 shadow-sm p-6 sm:p-7">
					<h2 class="text-sm font-extrabold text-primary mb-3 flex items-center gap-2">
						<i class="fas fa-tasks text-secondary"></i> <?php echo esc_html( $lbl_duty ); ?>
					</h2>
					<div class="text-slate-600 text-justify text-sm sm:text-base leading-relaxed space-y-3 prose max-w-none">
						<?php echo wp_kses_post( $duty ); ?>
					</div>
				</section>
			<?php endif; ?>

			<!-- Head of the Division -->
			<?php if ( ! empty( $head_name ) || ! empty( $head_desig ) ) : ?>
				<section class="bg-slate-50 border border-slate-200/80 rounded-3xl p-6 sm:p-7">
					<h2 class="text-sm font-extrabold text-primary mb-5 flex items-center gap-2">
						<i class="fas fa-user-tie text-secondary"></i> <?php echo esc_html( $lbl_head ); ?>
					</h2>
					<div class="flex flex-col sm:flex-row items-start gap-5">
						<div class="w-24 h-32 sm:w-28 sm:h-36 rounded-2xl bg-white border border-slate-200 overflow-hidden flex items-center justify-center shrink-0 shadow-sm">
							<img loading="lazy" decoding="async" src="<?php echo esc_url( $head_photo ); ?>" alt="<?php echo esc_attr( $head_name ); ?>" class="w-full h-full object-cover">
						</div>
						<div class="min-w-0 flex-1">
							<?php if ( ! empty( $head_name ) ) : ?>
								<h3 class="text-base sm:text-lg font-extrabold text-primary m-0">
									<?php echo esc_html( $head_name ); ?>
								</h3>
							<?php endif; ?>

							<?php if ( ! empty( $head_desig ) ) : ?>
								<p class="text-xs sm:text-sm text-secondary font-semibold mt-0.5 mb-3">
									<?php echo esc_html( $head_desig ); ?>
								</p>
							<?php endif; ?>

							<div class="space-y-2 text-sm text-gray-600">
								<?php if ( ! empty( $head_mob ) ) : ?>
									<div class="flex items-center gap-3">
										<i class="fas fa-mobile-alt text-secondary w-4 text-center text-xs shrink-0"></i>
										<span><?php echo esc_html( $head_mob ); ?></span>
									</div>
								<?php endif; ?>

								<?php if ( ! empty( $head_phone ) ) : ?>
									<div class="flex items-center gap-3">
										<i class="fas fa-phone-alt text-secondary w-4 text-center text-xs shrink-0"></i>
										<span><?php echo esc_html( $head_phone ); ?></span>
									</div>
								<?php endif; ?>

								<?php if ( ! empty( $head_email ) ) : ?>
									<div class="flex items-center gap-3">
										<i class="fas fa-envelope text-secondary w-4 text-center text-xs shrink-0"></i>
										<a href="mailto:<?php echo esc_attr( $head_email ); ?>" class="text-steel hover:text-secondary-dark transition-colors no-underline">
											<?php echo esc_html( $head_email ); ?>
										</a>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>

			<!-- Sub-Units -->
			<?php if ( ! empty( $sub_units ) ) : ?>
				<section>
					<h2 class="text-sm font-extrabold text-primary mb-4 flex items-center gap-2">
						<i class="fas fa-layer-group text-secondary"></i> <?php echo esc_html( $lbl_subunits ); ?>
					</h2>
					<div class="space-y-6">
						<?php foreach ( $sub_units as $s_idx => $sub ) :
							$sub_title = ! empty( $sub['sub_unit_title'] ) ? $sub['sub_unit_title'] : ( 'Sub Unit / Division ' . ( $s_idx + 1 ) );
							$target_id = 'sub-unit-' . ( $s_idx + 1 );
							$team      = isset( $sub['sub_unit_team'] ) && is_array( $sub['sub_unit_team'] ) ? $sub['sub_unit_team'] : array();
						?>
							<div id="<?php echo esc_attr( $target_id ); ?>" class="div-sub-card bg-white rounded-2xl border border-slate-100 shadow-sm p-6 scroll-mt-24">
								<h3 class="text-sm font-extrabold text-primary mb-4 pb-2 border-b border-slate-100">
									<?php echo esc_html( $sub_title ); ?>
								</h3>

								<?php if ( ! empty( $team ) ) : ?>
									<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
										<?php foreach ( $team as $m ) :
											$m_photo = ! empty( $m['member_photo'] ) ? $m['member_photo'] : $placeholder_photo;
											$m_name  = ! empty( $m['member_name'] ) ? $m['member_name'] : '';
											$m_desig = ! empty( $m['member_designation'] ) ? $m['member_designation'] : '';
											$m_mob   = ! empty( $m['member_mobile'] ) ? $m['member_mobile'] : '';
											$m_phone = ! empty( $m['member_phone'] ) ? $m['member_phone'] : '';
											$m_email = ! empty( $m['member_email'] ) ? $m['member_email'] : '';
										?>
											<div class="flex items-start gap-3.5 p-3.5 rounded-xl bg-slate-50/70 border border-slate-100 hover:border-slate-200 transition-all">
												<div class="w-16 h-20 rounded-xl bg-gray-100 border border-gray-200 overflow-hidden flex items-center justify-center shrink-0 shadow-xs">
													<img loading="lazy" decoding="async" src="<?php echo esc_url( $m_photo ); ?>" alt="<?php echo esc_attr( $m_name ); ?>" class="w-full h-full object-cover">
												</div>
												<div class="min-w-0 flex-1">
													<?php if ( ! empty( $m_name ) ) : ?>
														<p class="text-sm font-bold text-gray-800 m-0 truncate">
															<?php echo esc_html( $m_name ); ?>
														</p>
													<?php endif; ?>

													<?php if ( ! empty( $m_desig ) ) : ?>
														<p class="text-xs text-gray-500 font-medium mt-0.5 mb-2 line-clamp-2">
															<?php echo esc_html( $m_desig ); ?>
														</p>
													<?php endif; ?>

													<div class="space-y-1 text-xs text-gray-600">
														<?php if ( ! empty( $m_mob ) ) : ?>
															<div class="flex items-center gap-2">
																<i class="fas fa-mobile-alt text-secondary w-3 text-center shrink-0"></i>
																<span class="truncate"><?php echo esc_html( $m_mob ); ?></span>
															</div>
														<?php endif; ?>

														<?php if ( ! empty( $m_phone ) ) : ?>
															<div class="flex items-center gap-2">
																<i class="fas fa-phone-alt text-secondary w-3 text-center shrink-0"></i>
																<span class="truncate"><?php echo esc_html( $m_phone ); ?></span>
															</div>
														<?php endif; ?>

														<?php if ( ! empty( $m_email ) ) : ?>
															<div class="flex items-center gap-2">
																<i class="fas fa-envelope text-secondary w-3 text-center shrink-0"></i>
																<a href="mailto:<?php echo esc_attr( $m_email ); ?>" class="text-steel hover:text-secondary-dark transition-colors no-underline truncate block">
																	<?php echo esc_html( $m_email ); ?>
																</a>
															</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
									</div>
								<?php else : ?>
									<p class="text-xs text-gray-400 m-0">&mdash;</p>
								<?php endif; ?>
							</div>
						<?php endforeach; ?>
					</div>
				</section>
			<?php endif; ?>

		</div>
	</div>

	<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
