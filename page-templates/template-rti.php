<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Right to Information (RTI) Portal
 *
 * RTI disclosures, forms, officers directory, and FAQ accordion.
 * SECONDARY (#58111A) & gold (#D4AF37) palette.
 */

get_header();

get_template_part( 'template-parts/page-banner' );

// ── Stat badges ──
$rti_stats = [
	[ 'icon' => 'fa-file-shield',  'label' => __( '100% Disclosure Compliant', 'homeaffairs' ) ],
	[ 'icon' => 'fa-gauge-high',    'label' => __( 'Fast-Track Processing', 'homeaffairs' ) ],
	[ 'icon' => 'fa-globe',         'label' => __( 'Online Submission', 'homeaffairs' ) ],
];

// ── Action cards ──
$action_cards = [
	[
		'icon' => 'fa-file-pen',
		'title' => __( 'Submit RTI Request', 'homeaffairs' ),
		'desc'  => __( 'Apply online for information under the RTI Act using the official application form.', 'homeaffairs' ),
		'url'   => '#downloadable-forms',
		'color' => 'from-maroon to-maroon-bright',
	],
	[
		'icon' => 'fa-folder-open',
		'title' => __( 'Proactive Disclosures', 'homeaffairs' ),
		'desc'  => __( 'Browse proactively published documents, budgets, and annual reports.', 'homeaffairs' ),
		'url'   => '#disclosures',
		'color' => 'from-maroon-bright to-maroon',
	],
	[
		'icon' => 'fa-scale-balanced',
		'title' => __( 'RTI Act & Guidelines', 'homeaffairs' ),
		'desc'  => __( 'Read the full RTI Act No. 12 of 2016 and operational guidelines.', 'homeaffairs' ),
		'url'   => '#rti-act-guidelines',
		'color' => 'from-maroon to-maroon-deep',
	],
	[
		'icon' => 'fa-address-book',
		'title' => __( 'Contact Officers', 'homeaffairs' ),
		'desc'  => __( 'Find the Information Officer and Appellate Authority for your division.', 'homeaffairs' ),
		'url'   => '#officers',
		'color' => 'from-maroon-deep to-maroon-bright',
	],
];

// ── Officers ──
$officers = [
	[
		'role'        => __( 'Designated Officer', 'homeaffairs' ),
		'name'        => __( 'Mr. S. Alokabandara', 'homeaffairs' ),
		'designation' => __( 'Secretary', 'homeaffairs' ),
		'phone'       => '+94 11 2695738',
		'photo'       => 'secretary.jpg',
		'email'       => 'secretary@pubad.gov.lk , pubad.secretary@sltnet.lk',
		'address'     => __( 'Ministry of Public Administration, Provincial Councils and Local Government, Independence Square, Colombo 07, Sri Lanka.', 'homeaffairs' ),
		'badge'       => __( 'Designated Officer', 'homeaffairs' ),
		'badge_class' => 'bg-secondary text-maroon'
		
	],

	[
		'role'        => __( 'Information Officer', 'homeaffairs' ),
		'name'        => __( 'Ms. G.C.S. Thilakarathna', 'homeaffairs' ),
		'designation' => __( 'Additional Secretary (Administration Division)', 'homeaffairs' ),
		'phone'       => '+94 112 050 321',
		'email'       => 'rti1@moha.gov.lk',
		'photo'       => 'thilakarathne.png',
		'address'     => __( '"Nila Madura",Elvitigala Mawatha, Narahenpita,Colombo 05, Sri Lanka.', 'homeaffairs' ),
		'badge'       => __( 'Information Officer', 'homeaffairs' ),
		'badge_class' => 'bg-secondary text-maroon',
		
	],
	
	[
		'role'        => __( 'Information Officer', 'homeaffairs' ),
		'name'        => __( 'Ms.O. Wimalarathne', 'homeaffairs' ),
		'designation' => __( 'Additional Secretary (Home Affairs Division)', 'homeaffairs' ),
		'phone'       => '+94 112 050 350',
		'email'       => 'rti2@moha.gov.lk',
		'photo'       => 'O._Wimalarathne.png',
		'address'     => __( '"Nila Madura",Elvitigala Mawatha, Narahenpita,Colombo 05, Sri Lanka.', 'homeaffairs' ),
		'badge'       => __( 'Information Officer', 'homeaffairs' ),
		'badge_class' => 'bg-secondary text-maroon',
	],

	[	'role'        => __( 'Information Officer', 'homeaffairs' ),
		'name'        => __( 'S.K.W. Sisira Kumara', 'homeaffairs' ),
		'designation' => __( 'Additional Secretary (Investigation Division)', 'homeaffairs' ),
		'phone'       => '+94 112 050 380',
		'email'       => 'rti3@moha.gov.lk',
		'photo'       => 'Sisira_Kumara.png',
		'address'     => __( '"Nila Madura",Elvitigala Mawatha, Narahenpita,Colombo 05, Sri Lanka.', 'homeaffairs' ),
		'badge'       => __( 'Information Officer', 'homeaffairs' ),
		'badge_class' => 'bg-secondary text-maroon',
	],

	[
		'role'        => __( 'Information Officer', 'homeaffairs' ),
		'name'        => __( 'Dr. Roshanie Dissanayake', 'homeaffairs' ),
		'designation' => __( 'Additional Secretary (Regional Administration Reforms Division)', 'homeaffairs' ),
		'phone'       => '+94 112 050 430',
		'email'       => ' rti4@moha.gov.lk',
		'photo'       => 'roshini.jpg',
		'address'     => __( '"Nila Madura",Elvitigala Mawatha, Narahenpita,Colombo 05, Sri Lanka.', 'homeaffairs' ),
		'badge'       => __( 'Information Officer', 'homeaffairs' ),
		'badge_class' => 'bg-secondary text-maroon',
	],
	[
		'role'        => __( 'Information Officer', 'homeaffairs' ),
		'name'        => __( 'Mr. M.R.P. Perera', 'homeaffairs' ),
		'designation' => __( 'Additional Secretary (District Administration)', 'homeaffairs' ),
		'phone'       => '+94 112 050 351',
		'email'       => 'rti5@moha.gov.lk',
		'photo'       => 'M.R.P._Perera.png',
		'address'     => __( '"Nila Madura",Elvitigala Mawatha, Narahenpita,Colombo 05, Sri Lanka.', 'homeaffairs' ),
		'badge'       => __( 'Information Officer', 'homeaffairs' ),
		'badge_class' => 'bg-secondary text-maroon',
	],
];

// ── Downloadable forms ──
$rti_forms = [
	[
		'title'    => __( 'RTI-01 — Application for Information', 'homeaffairs' ),
		'desc'     => __( 'Standard form to request information under the RTI Act No. 12 of 2016.', 'homeaffairs' ),
		'lang'     => __( 'Sinhala | English | Tamil', 'homeaffairs' ),
		'size'     => '245 KB',
		'icon'     => 'fa-file-pdf',
		'url'   => content_url( '/uploads/rti/rti-01.pdf' ),
		
		
	],

	[
		'title'    => __( 'RTI Fee Structure — Gazette Notification', 'homeaffairs' ),
		'desc'     => __( 'Official gazette prescribing fees for RTI applications, appeals, and photocopying.', 'homeaffairs' ),
		'lang'     => __( 'Sinhala | English | Tamil', 'homeaffairs' ),
		'size'     => '580 KB',
		'icon'     => 'fa-file-pdf',
		'url'      => content_url( '/uploads/rti/rti-01.pdf' ),
	],
];

$rti_guidelines = [
    [
        'icon'  => 'fa-scale-balanced',
        'title' => __( 'Right to Information Act No. 12 of 2016', 'homeaffairs' ),
        'desc'  => __( 'The complete primary act establishing the legal right to access government information in Sri Lanka.', 'homeaffairs' ),
        'lang'  => 'Sinhala | English | Tamil',
        'size'  => '1.8 MB',
        'url'   => content_url( '/uploads/rti/rti-01.pdf' ),
    ],
    [
        'icon'  => 'fa-file-contract',
        'title' => __( 'Extraordinary Gazette No. 2004/66', 'homeaffairs' ),
        'desc'  => __( 'Official gazette regulation prescribing rules and procedural guidelines under the RTI Act.', 'homeaffairs' ),
        'lang'  => 'Sinhala | English | Tamil',
        'size'  => '850 KB',
        'url'   => content_url( '/uploads/rti/rti-01.pdf' ),
    ],
    [
        'icon'  => 'fa-gavel',
        'title' => __( 'Extraordinary Gazette No. 2006/43', 'homeaffairs' ),
        'desc'  => __( 'Gazette notification detailing official regulations, authority powers, and operational protocols.', 'homeaffairs' ),
        'lang'  => 'Sinhala | English | Tamil',
        'size'  => '620 KB',
        'url'   => content_url( '/uploads/rti/rti-01.pdf' ),
    ],
    [
        'icon'  => 'fa-receipt',
        'title' => __( 'RTI Fee Structure Gazette', 'homeaffairs' ),
        'desc'  => __( 'Official fee guidelines for filing applications, obtaining photocopies, and processing information requests.', 'homeaffairs' ),
        'lang'  => 'Sinhala | English | Tamil',
        'size'  => '580 KB',
        'url'   => content_url( '/uploads/rti/rti-01.pdf' ),
    ],
];


// ── Downloadable forms ──
$rti_Disclosures_forms = [
	
	[
		'title'    => __( 'RTI-10 — Appeal Form (First Appeal)', 'homeaffairs' ),
		'desc'     => __( 'Appeal form for applicants aggrieved by the response of the Information Officer.', 'homeaffairs' ),
		'lang'     => __( 'Sinhala | English', 'homeaffairs' ),
		'size'     => '210 KB',
		'icon'     => 'fa-file-pdf',
		'url'      => home_url( '/wp-content/uploads/rti/rti-10.pdf' ),
	],
	[
		'title'    => __( 'Annual RTI Report — 2025', 'homeaffairs' ),
		'desc'     => __( 'Annual report on RTI applications received, processed, and disposed of during 2025.', 'homeaffairs' ),
		'lang'     => __( 'English', 'homeaffairs' ),
		'size'     => '1.2 MB',
		'icon'     => 'fa-file-pdf',
		'url'      => home_url( '/wp-content/uploads/rti/annual-report-2025.pdf' ),
	],
	
];

// ── FAQ ──
$faqs = [
	[
		'q' => __( 'How do I submit an RTI request?', 'homeaffairs' ),
		'a' => __( 'You can submit an RTI request by filling out Form RTI-01 and submitting it to the Information Officer of the relevant public authority. You may submit it in person, by post, or through the online portal. A fee as prescribed in the Gazette must accompany the application.', 'homeaffairs' ),
	],
	[
		'q' => __( 'What is the time limit for a response?', 'homeaffairs' ),
		'a' => __( 'The Information Officer must respond within 14 working days from receipt of the application. For requests involving third-party information, the timeframe is 30 working days.', 'homeaffairs' ),
	],
	[
		'q' => __( 'What are the fees involved?', 'homeaffairs' ),
		'a' => __( 'The application fee is LKR 25.00 per request. Additional fees may apply for photocopying (LKR 2.00 per page) and inspection of records. No fee is required for citizens below the poverty line.', 'homeaffairs' ),
	],
	[
		'q' => __( 'How do I file an appeal?', 'homeaffairs' ),
		'a' => __( 'If you are dissatisfied with the response from the Information Officer, you may file a first appeal under Section 31(1) of the RTI Act to the Appellate Authority within 30 working days of receiving the response.', 'homeaffairs' ),
	],
	[
		'q' => __( 'Can I request information in my language?', 'homeaffairs' ),
		'a' => __( 'Yes. You may submit your request in Sinhala, Tamil, or English. The Information Officer shall provide the information in the language in which it is maintained, or as mutually agreed.', 'homeaffairs' ),
	],
];
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">

	<!-- ═══ HERO / INTRO (EXACT TEMPLATE STRUCTURE) ═══ -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'RIGHT TO INFORMATION', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon"><?php esc_html_e( 'Right to Information (RTI) Portal', 'homeaffairs' ); ?></h1>
		</div>

	<!-- ═══ QUICK STAT BADGES ═══ -->
	<div class="flex flex-wrap items-center justify-center gap-4 mb-12 lg:mb-16">
		<?php foreach ( $rti_stats as $st ) : ?>
		<div class="inline-flex items-center gap-2.5 bg-white border border-gray-200/80 rounded-xl px-4 py-2.5 shadow-sm">
			<div class="w-8 h-8 rounded-lg bg-maroon/10 flex items-center justify-center text-maroon text-sm">
				<i class="fa-solid <?php echo esc_attr( $st['icon'] ); ?>"></i>
			</div>
			<span class="text-sm font-bold text-maroon"><?php echo esc_html( $st['label'] ); ?></span>
		</div>
		<?php endforeach; ?>
	</div>

	<!-- ═══ ACTION HUB (4 CARDS) ═══ -->
	<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-14 lg:mb-18">
		<?php foreach ( $action_cards as $ac ) : ?>
		<a href="<?php echo esc_url( $ac['url'] ); ?>" class="group relative overflow-hidden rounded-2xl bg-gradient-to-br <?php echo esc_attr( $ac['color'] ); ?> p-6 lg:p-7 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
			<div class="absolute -top-6 -right-6 w-24 h-24 bg-white/5 rounded-full"></div>
			<div class="relative z-10">
				<div class="w-12 h-12 bg-white/15 rounded-xl flex items-center justify-center text-white text-xl mb-4 group-hover:scale-110 transition-transform">
					<i class="fa-solid <?php echo esc_attr( $ac['icon'] ); ?>"></i>
				</div>
				<h3 class="text-base font-bold mb-1.5" style="color: var(--color-secondary-light) !important;"><?php echo esc_html( $ac['title'] ); ?></h3>
				<p class="text-xs text-white/70 leading-relaxed"><?php echo esc_html( $ac['desc'] ); ?></p>
				<span class="inline-flex items-center gap-1 text-xs font-bold text-secondary mt-3 group-hover:gap-1.5 transition-all">
					<?php esc_html_e( 'Access Now', 'homeaffairs' ); ?>
					<i class="fa-solid fa-arrow-right text-[10px]"></i>
				</span>
			</div>
		</a>
		<?php endforeach; ?>
	</div>

	<!-- ═══ DOWNLOADABLE FORMS RTI-01 & RTI Fee Structure ═══ -->
	 <section id="downloadable-forms" class="mb-14 lg:mb-18 scroll-mt-10">
		<div class="text-center mb-8">
			<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
				<?php esc_html_e( 'DOCUMENTS & FORMS', 'homeaffairs' ); ?>
			</span>
			<h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon">
				<?php esc_html_e( 'Downloadable RTI Request Forms', 'homeaffairs' ); ?>
			</h2>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
			<?php foreach ( $rti_forms as $f ) : ?>
			<div class="bg-white border border-gray-200/80 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-5 lg:p-6 flex flex-col sm:flex-row items-start gap-5">
				<div class="w-14 h-14 rounded-xl bg-maroon/5 flex items-center justify-center text-maroon text-2xl shrink-0">
					<i class="fa-solid <?php echo esc_attr( $f['icon'] ); ?>"></i>
				</div>
				<div class="flex-1 min-w-0">
					<h3 class="text-sm font-bold text-maroon mb-1"><?php echo esc_html( $f['title'] ); ?></h3>
					<p class="text-xs text-gray-500 leading-relaxed mb-2"><?php echo esc_html( $f['desc'] ); ?></p>
					<div class="flex flex-wrap items-center gap-3 text-[11px] text-gray-600">
						<span class="inline-flex items-center gap-1"><i class="fa-solid fa-language"></i> <?php echo esc_html( $f['lang'] ); ?></span>
						<span class="inline-flex items-center gap-1"><i class="fa-solid fa-database"></i> <?php echo esc_html( $f['size'] ); ?></span>
					</div>
				</div>
				<a href="<?php echo esc_url( $f['url'] ); ?>" class="inline-flex items-center gap-2 bg-maroon text-white text-xs font-bold px-4 py-2.5 rounded-xl hover:bg-maroon-bright transition-colors shadow-sm shrink-0 self-start sm:self-center">
					<i class="fa-solid fa-download"></i>
					<?php esc_html_e( 'Download', 'homeaffairs' ); ?>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</section>

	<!-- ═══ Proactive Disclosures & Report ═══ -->
	 <section id="disclosures" class="mb-14 lg:mb-18 scroll-mt-10">
		<div class="text-center mb-8">
			<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
				<?php esc_html_e( 'DOCUMENTS & FORMS', 'homeaffairs' ); ?>
			</span>
			<h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon">
				<?php esc_html_e( 'Proactive Disclosures & Report', 'homeaffairs' ); ?>
			</h2>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 gap-5">
			<?php foreach ( $rti_Disclosures_forms as $f ) : ?>
			<div class="bg-white border border-gray-200/80 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-5 lg:p-6 flex flex-col sm:flex-row items-start gap-5">
				<div class="w-14 h-14 rounded-xl bg-maroon/5 flex items-center justify-center text-maroon text-2xl shrink-0">
					<i class="fa-solid <?php echo esc_attr( $f['icon'] ); ?>"></i>
				</div>
				<div class="flex-1 min-w-0">
					<h3 class="text-sm font-bold text-maroon mb-1"><?php echo esc_html( $f['title'] ); ?></h3>
					<p class="text-xs text-gray-500 leading-relaxed mb-2"><?php echo esc_html( $f['desc'] ); ?></p>
					<div class="flex flex-wrap items-center gap-3 text-[11px] text-gray-600">
						<span class="inline-flex items-center gap-1"><i class="fa-solid fa-language"></i> <?php echo esc_html( $f['lang'] ); ?></span>
						<span class="inline-flex items-center gap-1"><i class="fa-solid fa-database"></i> <?php echo esc_html( $f['size'] ); ?></span>
					</div>
				</div>
				<a href="<?php echo esc_url( $f['url'] ); ?>" class="inline-flex items-center gap-2 bg-maroon text-white text-xs font-bold px-4 py-2.5 rounded-xl hover:bg-maroon-bright transition-colors shadow-sm shrink-0 self-start sm:self-center">
					<i class="fa-solid fa-download"></i>
					<?php esc_html_e( 'Download', 'homeaffairs' ); ?>
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</section>

<!-- ═══ rti-act-guidelines ═══ -->
	<section id="rti-act-guidelines" class="mb-14 lg:mb-18 scroll-mt-10">
    <div class="text-center mb-8">
        <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
            <?php esc_html_e( 'LEGAL FRAMEWORK & GUIDELINES', 'homeaffairs' ); ?>
        </span>
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon">
            <?php esc_html_e( 'RTI Act & Official Guidelines', 'homeaffairs' ); ?>
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
        <?php foreach ( $rti_guidelines as $g ) : ?>
        <div class="bg-white border border-gray-200/80 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-5 lg:p-6 flex flex-col sm:flex-row items-start gap-5">
            <div class="w-14 h-14 rounded-xl bg-maroon/5 flex items-center justify-center text-maroon text-2xl shrink-0">
                <i class="fa-solid <?php echo esc_attr( $g['icon'] ); ?>"></i>
            </div>
            <div class="flex-1 min-w-0">
                <h3 class="text-sm font-bold text-maroon mb-1"><?php echo esc_html( $g['title'] ); ?></h3>
                <p class="text-xs text-gray-500 leading-relaxed mb-2"><?php echo esc_html( $g['desc'] ); ?></p>
                <div class="flex flex-wrap items-center gap-3 text-[11px] text-gray-600">
                    <span class="inline-flex items-center gap-1"><i class="fa-solid fa-language"></i> <?php echo esc_html( $g['lang'] ); ?></span>
                    <span class="inline-flex items-center gap-1"><i class="fa-solid fa-database"></i> <?php echo esc_html( $g['size'] ); ?></span>
                </div>
            </div>
            <a href="<?php echo esc_url( $g['url'] ); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-maroon text-white text-xs font-bold px-4 py-2.5 rounded-xl hover:bg-maroon-bright transition-colors shadow-sm shrink-0 self-start sm:self-center">
                <i class="fa-solid fa-download"></i>
                <?php esc_html_e( 'Download', 'homeaffairs' ); ?>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>





	<!-- ═══ OFFICERS DIRECTORY ═══ -->
	<section id="officers" class="mb-14 lg:mb-18 scroll-mt-24">
		<div class="text-center mb-8">
			<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
				<?php esc_html_e( 'DIRECTORY', 'homeaffairs' ); ?>
			</span>
			<h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon">
				<?php esc_html_e( 'Information Officers & Appellate Authority', 'homeaffairs' ); ?>
			</h2>
		</div>

		<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
			<?php foreach ( $officers as $off ) : ?>
			<div class="bg-white border border-gray-200/80 rounded-2xl shadow-sm hover:shadow-md transition-all duration-300 p-6 flex flex-col">
				<div class="flex items-start justify-between mb-4">
					
				<div class="w-16 h-24 sm:w-20 sm:h-28 rounded-2xl bg-gray-100 border-2 border-gray-200 overflow-hidden shrink-0">
					<?php if ( ! empty( $off['photo'] ) ) : ?>
						<img loading="lazy" decoding="async" src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/staff/' . $off['photo'] ); ?>" 
							alt="<?php echo esc_attr( $off['name'] ); ?>" 
							class="w-full h-full object-cover">
							<?php else : ?>

						<div class="w-full h-full flex items-center justify-center text-maroon text-2xl bg-maroon/10">
							<i class="fa-solid fa-user-tie"></i>
						</div>
					<?php endif; ?>
				</div>
					
					<span class="text-[10px] font-bold uppercase tracking-wider px-2.5 py-1 rounded-full <?php echo esc_attr( $off['badge_class'] ); ?>">
						<?php echo esc_html( $off['badge'] ); ?>
					</span>
				</div>
				<h3 class="text-base font-bold text-maroon"><?php echo esc_html( $off['name'] ); ?></h3>
				<p class="text-xs text-gray-500 font-medium mb-3"><?php echo esc_html( $off['designation'] ); ?></p>
				<p class="text-xs text-gray-500 leading-relaxed mb-4 flex-1"><?php echo esc_html( $off['address'] ); ?></p>
				<div class="flex flex-wrap items-center gap-2 mt-auto pt-3 border-t border-gray-100">
					<a href="tel:<?php echo esc_attr( $off['phone'] ); ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-maroon bg-maroon/5 px-3 py-1.5 rounded-lg hover:bg-maroon/10 transition-colors">
						<i class="fa-solid fa-phone"></i>
						<?php esc_html_e( 'Call Now', 'homeaffairs' ); ?>
					</a>
					<a href="mailto:<?php echo esc_attr( $off['email'] ); ?>" class="inline-flex items-center gap-1.5 text-xs font-bold text-secondary bg-secondary/5 px-3 py-1.5 rounded-lg hover:bg-secondary/10 transition-colors">
						<i class="fa-solid fa-envelope"></i>
						<?php esc_html_e( 'Send Email', 'homeaffairs' ); ?>
					</a>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</section>

	

	<!-- ═══ FAQ ACCORDION ═══ -->
	<section>
		<div class="text-center mb-8">
			<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
				<?php esc_html_e( 'HELP & GUIDANCE', 'homeaffairs' ); ?>
			</span>
			<h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon">
				<?php esc_html_e( 'Frequently Asked Questions', 'homeaffairs' ); ?>
			</h2>
		</div>

		<div class="max-w-3xl mx-auto space-y-3" id="rti-faq">
			<?php foreach ( $faqs as $fi => $faq ) : ?>
			<div class="faq-item bg-white border border-gray-200/80 rounded-xl overflow-hidden shadow-sm">
				<button type="button" class="faq-toggle w-full flex items-center justify-between gap-4 px-5 lg:px-6 py-4 text-left transition-colors hover:bg-gray-50" data-index="<?php echo $fi; ?>">
					<span class="text-sm font-bold text-maroon flex-1"><?php echo esc_html( $faq['q'] ); ?></span>
					<i class="fa-solid fa-chevron-down text-secondary text-xs transition-transform duration-300 shrink-0"></i>
				</button>
				<div class="faq-answer px-5 lg:px-6 pb-0 max-h-0 overflow-hidden transition-all duration-300">
					<p class="text-sm text-gray-500 leading-relaxed pb-5"><?php echo esc_html( $faq['a'] ); ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</section>

</main>

<script>
(function() {
	document.querySelectorAll('.faq-toggle').forEach(function(btn) {
		btn.addEventListener('click', function() {
			var item = this.parentElement;
			var answer = item.querySelector('.faq-answer');
			var icon = this.querySelector('.fa-chevron-down');
			var isOpen = item.classList.contains('active');

			document.querySelectorAll('.faq-item').forEach(function(el) {
				el.classList.remove('active');
				el.querySelector('.faq-answer').style.maxHeight = '0';
				el.querySelector('.fa-chevron-down').style.transform = 'rotate(0deg)';
			});

			if (!isOpen) {
				item.classList.add('active');
				answer.style.maxHeight = answer.scrollHeight + 'px';
				icon.style.transform = 'rotate(180deg)';
			}
		});
	});
})();
</script>

<?php get_footer(); ?>