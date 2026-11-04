<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Administration Division Detail
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$divisions = [
	[ 'id' => 'administration',     'title' => 'Administration Division',             'icon' => 'fa-building',          'slug' => 'administration' ],
	[ 'id' => 'finance',            'title' => 'Finance Division',                    'icon' => 'fa-coins',             'slug' => 'finance' ],
	[ 'id' => 'planning',           'title' => 'Planning Division',                   'icon' => 'fa-chart-line',        'slug' => 'planning' ],
	[ 'id' => 'development',        'title' => 'Development Division',                'icon' => 'fa-tree',              'slug' => 'development' ],
	[ 'id' => 'engineering',        'title' => 'Engineering Division',                'icon' => 'fa-microchip',         'slug' => 'engineering' ],
	[ 'id' => 'regional-reforms',   'title' => 'Regional Administration Reforms Div.', 'icon' => 'fa-city',             'slug' => 'regional-reforms' ],
	[ 'id' => 'internal-audit',     'title' => 'Internal Audit Division',             'icon' => 'fa-file-invoice',      'slug' => 'internal-audit' ],
	[ 'id' => 'investigation',      'title' => 'Investigation Division',              'icon' => 'fa-search',            'slug' => 'investigation' ],
	[ 'id' => 'home-affairs',       'title' => 'Home Affairs Division',               'icon' => 'fa-house-chimney',     'slug' => 'home-affairs' ],
];
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
	<div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

		<!-- Sidebar Navigation -->
		<div>
			<div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 lg:sticky lg:top-6">
				<h3 class="text-sm font-extrabold text-primary mb-4 flex items-center gap-2">
					<i class="fas fa-th-list text-secondary"></i> Divisions
				</h3>
				<nav class="space-y-0.5">
					<?php foreach ( $divisions as $div ) :
						$is_active = ( $div['id'] === 'administration' );
						$page_url  = esc_url( home_url( '/divisions/' . $div['slug'] . '/' ) );
					?>
						<a href="<?php echo $page_url; ?>" class="div-side-link <?php echo $is_active ? 'active' : ''; ?>">
							<i class="fas fa-chevron-right"></i>
							<span><?php echo esc_html( $div['title'] ); ?></span>
						</a>
					<?php endforeach; ?>
				</nav>
			</div>
		</div>

		<!-- Main Content -->
		<div class="lg:col-span-3 space-y-8">

			<!-- Division Header -->
			<div>
				<div class="flex items-center gap-4 mb-5">
					<div class="w-14 h-14 rounded-2xl bg-primary text-secondary flex items-center justify-center shrink-0 text-2xl">
						<i class="fas fa-building"></i>
					</div>
					<div>
						<h1 class="text-2xl lg:text-3xl font-extrabold text-primary-dark tracking-tight m-0">
							Administration Division
						</h1>
					</div>
				</div>
				
			</div>

			<!-- Scope of the Division  -->
			<section>
				<h2 class="text-sm font-extrabold text-primary mb-3 flex items-center gap-2">
					<i class="fas fa-info-circle text-secondary"></i> Scope of the Division
				</h2>
				<p class="text-slate-600 text-justify text-sm sm:text-base leading-relaxed m-0">
					The Administration Division manages the day-to-day administrative functions of the Ministry, coordinates matters related to service conditions, and implements human resource management policies across all departments. It serves as the operational backbone ensuring seamless workflow coordination, staff welfare, and institutional compliance with established public service regulations.
				</p>
			</section>

			<!-- Duty of the Division -->
			<section>
				<h2 class="text-sm font-extrabold text-primary mb-3 flex items-center gap-2">
					<i class="fas fa-tasks text-secondary"></i> Duty of the Division
				</h2>
				<p class="text-slate-600 text-justify text-sm sm:text-base leading-relaxed m-0">
					Core responsibilities include coordinating all administrative workflows, managing employee welfare and leave records, organizing training programmes for staff, and driving overall operational efficiency across the Ministry's departments. The division also oversees the implementation of circular instructions, maintenance of service records, and facilitation of staff transfers and promotions in accordance with established norms.
				</p>
			</section>

			<!-- Head of Division -->
			<section class="bg-slate-50 border border-slate-100 rounded-3xl p-6">
				<h2 class="text-sm font-extrabold text-primary mb-5 flex items-center gap-2">
					<i class="fas fa-user-tie text-secondary"></i> Head of Division
				</h2>
				<div class="flex flex-col sm:flex-row items-start gap-5">
					<div class="w-20 h-28 sm:w-24 sm:h-32 rounded-2xl bg-gray-100 border-2 border-gray-200 overflow-hidden flex items-center justify-center text-gray-600 shrink-0">
						<img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/staff/thilakarathne.png"
						class="w-full h-full object-cover">
					</div>
					<div class="min-w-0 flex-1">
						<h3 class="text-base sm:text-lg font-extrabold text-primary m-0">Ms. G.C.S. Thilakarathna</h3>
						<p class="text-xs sm:text-sm text-secondary font-semibold mt-0.5 mb-3">Additional Secretary (Administration)</p>
						<div class="space-y-2 text-sm">
							<div class="flex items-center gap-3 text-gray-600">
								<i class="fas fa-phone-alt text-secondary w-4 text-center text-xs shrink-0"></i>
								<span>+94 11 269 0000</span>
							</div>
							<div class="flex items-center gap-3 text-gray-600">
								<i class="fas fa-fax text-secondary w-4 text-center text-xs shrink-0"></i>
								<span>+94 11 269 0000</span>
							</div>
							<div class="flex items-center gap-3 text-gray-600">
								<i class="fas fa-envelope text-secondary w-4 text-center text-xs shrink-0"></i>
								<a href="mailto:admin@moha.gov.lk" class="text-steel hover:text-secondary-dark transition-colors no-underline">admin@moha.gov.lk</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Sub-Units -->
			<section>
				<h2 class="text-sm font-extrabold text-primary mb-4 flex items-center gap-2">
					<i class="fas fa-layer-group text-secondary"></i> Sub-Units
				</h2>
				<div class="grid grid-cols-1 md:grid-cols-1 gap-6">
					
					<!-- Administration Division-->
					<div class="div-sub-card bg-white rounded-2xl border border-slate-100 shadow-sm p-5">
						<h3 class="text-sm font-extrabold text-primary mb-4 pb-2 border-b border-slate-100"> Administration Division </h3>
						<div class="flex items-start gap-4">


							<div class="w-16 h-20 rounded-xl bg-gray-100 border-2 border-gray-200 overflow-hidden flex items-center justify-center text-gray-600 shrink-0">
								<img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/staff/K.D.C.S_Kumaratunga.jpg"
									class="w-full h-full object-cover">
							</div>
							<div class="min-w-0 flex-1">
								<p class="text-sm font-bold text-gray-800 m-0">	Mr. K.D.C.S. Kumaratunga </p>
								<p class="text-xs text-gray-500 font-medium mt-0.5 mb-3">Senior Assistant Secretary </p>
								<div class="space-y-1.5 text-xs text-gray-600">
									<div class="flex items-center gap-2">
										<i class="fas fa-phone-alt text-secondary w-3 text-center shrink-0"></i>
										<span>+94 112 050 321 [Ext: 1401] </span>
									</div>
									<div class="flex items-center gap-2">
										<i class="fas fa-envelope text-secondary w-3 text-center shrink-0"></i>
										<a href="mailto:sasadmin@moha.gov.lk" class="text-steel hover:text-secondary-dark transition-colors no-underline truncate">sasadmin@moha.gov.lk</a>
									</div>
								</div>
							</div>


							<div class="w-16 h-20 rounded-xl bg-gray-100 border-2 border-gray-200 overflow-hidden flex items-center justify-center text-gray-600 shrink-0">
								<img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/staff/PWNDPerera.jpg"
									class="w-full h-full object-cover">
							</div>
							<div class="min-w-0 flex-1">
								<p class="text-sm font-bold text-gray-800 m-0">Mrs. P.W.N.D.Perera </p>
								<p class="text-xs text-gray-500 font-medium mt-0.5 mb-3"> Assistant Secretary </p>
								<div class="space-y-1.5 text-xs text-gray-600">
									<div class="flex items-center gap-2">
										<i class="fas fa-phone-alt text-secondary w-3 text-center shrink-0"></i>
										<span>+94 112 050 322 [Ext: 1402] </span>
									</div>
									<div class="flex items-center gap-2">
										<i class="fas fa-envelope text-secondary w-3 text-center shrink-0"></i>
										<a href="mailto:asadmin2@moha.gov.lk"class="text-steel hover:text-secondary-dark transition-colors no-underline truncate">asadmin2@moha.gov.lk</a>
									</div>
								</div>
							</div>

							

							<div class="w-16 h-20 rounded-xl bg-gray-100 border-2 border-gray-200 overflow-hidden flex items-center justify-center text-gray-600 shrink-0">
								<img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/staff/DY_Aroshi.png"
									class="w-full h-full object-cover">
							</div>
							<div class="min-w-0 flex-1">
								<p class="text-sm font-bold text-gray-800 m-0">Ms. D.Y. Aroshi</p>
								<p class="text-xs text-gray-500 font-medium mt-0.5 mb-3">Assistant Secretary (Establishment & Training)</p>
								<div class="space-y-1.5 text-xs text-gray-600">
									<div class="flex items-center gap-2">
										<i class="fas fa-phone-alt text-secondary w-3 text-center shrink-0"></i>
										<span>+94 112 050 324 [Ext: 1404]</span>
									</div>
									<div class="flex items-center gap-2">
										<i class="fas fa-envelope text-secondary w-3 text-center shrink-0"></i>
										<a href="mailto:asadmin@moha.gov.lk" class="text-steel hover:text-secondary-dark transition-colors no-underline truncate">asadmin@moha.gov.lk</a>
									</div>
								</div>
							</div>


							<div class="w-16 h-20 rounded-xl bg-gray-100 border-2 border-gray-200 overflow-hidden flex items-center justify-center text-gray-600 shrink-0">
								<img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/staff/b_dumy.jpg"
									class="w-full h-full object-cover">
							</div>
							<div class="min-w-0 flex-1">
								<p class="text-sm font-bold text-gray-800 m-0">	Vacant </p>
								<p class="text-xs text-gray-500 font-medium mt-0.5 mb-3">Administrative Officer</p>
								<div class="space-y-1.5 text-xs text-gray-600">
									<div class="flex items-center gap-2">
										<i class="fas fa-phone-alt text-secondary w-3 text-center shrink-0"></i>
										<span>+94 112 050 325 [Ext: 1405]</span>
									</div>
									<div class="flex items-center gap-2">
										<i class="fas fa-envelope text-secondary w-3 text-center shrink-0"></i>
										<a href="mailto:ao@moha.gov.lk"class="text-steel hover:text-secondary-dark transition-colors no-underline truncate">ao@moha.gov.lk</a>
									</div>
								</div>
							</div>



						</div>
					</div>


					<!-- Information Technology Unit -->
					<div class="div-sub-card bg-white rounded-2xl border border-slate-100 shadow-sm p-5">
						<h3 class="text-sm font-extrabold text-primary mb-4 pb-2 border-b border-slate-100">Information Technology Unit</h3>
						<div class="flex items-start gap-4">

							
							<div class="w-16 h-20 rounded-xl bg-gray-100 border-2 border-gray-200 overflow-hidden flex items-center justify-center text-gray-600 shrink-0">
									<img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/staff/RKK_Siriwardhana.jpg"
										class="w-full h-full object-cover">
								</div>
								<div class="min-w-0 flex-1">
									<p class="text-sm font-bold text-gray-800 m-0">Mr. R.K.K. Siriwardhana</p>
									<p class="text-xs text-gray-500 font-medium mt-0.5 mb-3">Director - ICT</p>
									<div class="space-y-1.5 text-xs text-gray-600">
										<div class="flex items-center gap-2">
											<i class="fas fa-phone-alt text-secondary w-3 text-center shrink-0"></i>
											<span>+94 112 050 308 [Ext: 1720]</span>
										</div>
										<div class="flex items-center gap-2">
											<i class="fas fa-envelope text-secondary w-3 text-center shrink-0"></i>
											<a href="mailto:dir_ict@moha.gov.lk"
											class="text-steel hover:text-secondary-dark transition-colors no-underline truncate">dir_ict@moha.gov.lk</a>
										</div>
									</div>
								</div>
							

							<div class="w-16 h-20 rounded-xl bg-gray-100 border-2 border-gray-200 overflow-hidden flex items-center justify-center text-gray-600 shrink-0">
									<img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/staff/200682_adit_adm_mg.jpg"
										class="w-full h-full object-cover">
								</div>
								<div class="min-w-0 flex-1">
									<p class="text-sm font-bold text-gray-800 m-0">Mr. M. Gunasinghe </p>
									<p class="text-xs text-gray-500 font-medium mt-0.5 mb-3">Assistant Director - ICT</p>
									<div class="space-y-1.5 text-xs text-gray-600">
										<div class="flex items-center gap-2">
											<i class="fas fa-phone-alt text-secondary w-3 text-center shrink-0"></i>
											<span>+94 112 050 340 [Ext: 1210]</span>
										</div>
										<div class="flex items-center gap-2">
											<i class="fas fa-envelope text-secondary w-3 text-center shrink-0"></i>
											<a href="mailto:adit@moha.gov.lk"
											class="text-steel hover:text-secondary-dark transition-colors no-underline truncate">adit@moha.gov.lk</a>
										</div>
									</div>
								</div>
							
						
						</div>


					</div>

					<!-- Legal Unit -->
					<div class="div-sub-card bg-white rounded-2xl border border-slate-100 shadow-sm p-5">
						<h3 class="text-sm font-extrabold text-primary mb-4 pb-2 border-b border-slate-100">Legal Unit</h3>
						<div class="flex items-start gap-4">

							<div class="w-16 h-20 rounded-xl bg-gray-100 border-2 border-gray-200 overflow-hidden flex items-center justify-center text-gray-600 shrink-0">
								<img loading="lazy" decoding="async" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/staff/MKE_Karunarathne.png"
										class="w-full h-full object-cover">

							</div>
							<div class="min-w-0 flex-1">
								<p class="text-sm font-bold text-gray-800 m-0">Mrs. M.K.E. Karunarathne</p>
								<p class="text-xs text-gray-500 font-medium mt-0.5 mb-3">Legal officer </p>
								<div class="space-y-1.5 text-xs text-gray-600">
									<div class="flex items-center gap-2">
										<i class="fas fa-phone-alt text-secondary w-3 text-center shrink-0"></i>
										<span>+94 112 050 345 [Ext: 1421]</span>
									</div>
									<div class="flex items-center gap-2">
										<i class="fas fa-envelope text-secondary w-3 text-center shrink-0"></i>
										<a href="mailto:legaloff@moha.gov.lk"
										class="text-steel hover:text-secondary-dark transition-colors no-underline truncate">legaloff@moha.gov.lk</a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

		</div>

	</div>
</main>

<?php get_footer(); ?>
