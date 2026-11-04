<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Internal Affairs Unit
 *
 * Dedicated portal for the Internal Affairs Unit (IAU) under the Ministry of
 * Public Administration, Provincial Councils and Local Government / Home Affairs.
 * Provides public integrity objectives, complaints guidance, contact channels,
 * responsibilities under Anti-Corruption Act No. 9 of 2023, and unit composition.
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$ha_uri = get_template_directory_uri();
$qr_img = $ha_uri . '/assets/images/iau-qr-pubad.jpg';
$member_pdf = $ha_uri . '/assets/images/pubad-iau-unit-member-list-e.pdf';

// Key Objectives
$key_objectives = [
	[
		'icon'  => 'fas fa-shield-halved',
		'title' => __( 'Prevent Corruption & Cultivate Integrity', 'homeaffairs' ),
		'desc'  => __( 'Prevent corruption within the institution and cultivate a robust culture of integrity across all administrative operations and public interactions.', 'homeaffairs' ),
	],
	[
		'icon'  => 'fas fa-scale-balanced',
		'title' => __( 'Ensure Transparency & Accountability', 'homeaffairs' ),
		'desc'  => __( 'Ensure transparency and accountability in all departmental activities, guaranteeing public access to information on institutional practices and administrative decisions.', 'homeaffairs' ),
	],
	[
		'icon'  => 'fas fa-gavel',
		'title' => __( 'Promote Ethical Governance', 'homeaffairs' ),
		'desc'  => __( 'Promote ethical governance and professional standards across all divisions, district secretariats, and affiliated administrative bodies.', 'homeaffairs' ),
	],
	[
		'icon'  => 'fas fa-user-shield',
		'title' => __( 'Whistleblower Protection & Secure Reporting', 'homeaffairs' ),
		'desc'  => __( 'Develop and maintain a secure, accessible system to encourage reporting misconduct while protecting whistleblowers and ensuring complete confidentiality.', 'homeaffairs' ),
	],
	[
		'icon'  => 'fas fa-handshake-angle',
		'title' => __( 'Legal Enforcement & CIABOC Collaboration', 'homeaffairs' ),
		'desc'  => __( 'Support legal enforcement through active collaboration with law enforcement agencies and the Commission to Investigate Allegations of Bribery or Corruption (CIABOC).', 'homeaffairs' ),
	],
];

// Responsibilities & Functions
$responsibilities = [
	[
		'num'   => '01',
		'title' => __( 'Procedure & Circular Review', 'homeaffairs' ),
		'text'  => __( 'Examine current procedures and circulars to identify systemic bottlenecks within the institution and simplify them to enhance operational efficiency.', 'homeaffairs' ),
	],
	[
		'num'   => '02',
		'title' => __( 'Corruption Risk Assessments (CRAs)', 'homeaffairs' ),
		'text'  => __( 'Conduct Corruption Risk Assessments (CRAs) to identify areas in the institution vulnerable to corruption and unethical conduct and take targeted preventive measures.', 'homeaffairs' ),
	],
	[
		'num'   => '03',
		'title' => __( 'Institutional Integrity Action Plan', 'homeaffairs' ),
		'text'  => __( 'Develop and implement an Institutional Integrity Action Plan outlining specific anti-corruption objectives and strategies tailored to the institution\'s needs.', 'homeaffairs' ),
	],
	[
		'num'   => '04',
		'title' => __( 'Alignment with National Anti-Corruption Action Plan', 'homeaffairs' ),
		'text'  => __( 'Ensure full compliance with national anti-corruption goals by aligning institutional policies and practices with the National Anti-Corruption Action Plan.', 'homeaffairs' ),
	],
	[
		'num'   => '05',
		'title' => __( 'Compliance Reviews & Legal Oversight', 'homeaffairs' ),
		'text'  => __( 'Conduct regular compliance reviews to assess the institution\'s compliance with national and international anti-corruption laws, including the Anti-Corruption Act No. 9 of 2023, and identify areas for improvement.', 'homeaffairs' ),
	],
	[
		'num'   => '06',
		'title' => __( 'Asset Declarations & Conflict of Interest', 'homeaffairs' ),
		'text'  => __( 'Ensure compliance with Asset Declaration requirements for all public officials and employees, and manage conflicts of interest in accordance with CIABOC regulations and the Anti-Corruption Act No. 9 of 2023.', 'homeaffairs' ),
	],
	[
		'num'   => '07',
		'title' => __( 'Secure Complaint Management System', 'homeaffairs' ),
		'text'  => __( 'Establish a secure system to receive and manage complaints related to corruption and unethical conduct; ensure prompt resolution by relevant officials; provide feedback to parties involved; and refer facts to CIABOC for investigation under the Anti-Corruption Act when warranted.', 'homeaffairs' ),
	],
	[
		'num'   => '08',
		'title' => __( 'Citizen\'s Charter Development', 'homeaffairs' ),
		'text'  => __( 'Develop and publish a comprehensive Citizen\'s Charter clearly outlining services, timelines, and standards provided by the institution to the general public.', 'homeaffairs' ),
	],
	[
		'num'   => '09',
		'title' => __( 'Standardized Code of Conduct', 'homeaffairs' ),
		'text'  => __( 'Establish and enforce institutional policies that promote ethical governance, including a standardized code of conduct to be strictly adhered to by public officials.', 'homeaffairs' ),
	],
	[
		'num'   => '10',
		'title' => __( 'Training & Anti-Corruption Motivation', 'homeaffairs' ),
		'text'  => __( 'Implement proactive capacity building, including staff training and awareness creation, to motivate employees to commit to anti-corruption principles.', 'homeaffairs' ),
	],
	[
		'num'   => '11',
		'title' => __( 'National Integrity Assessment Focal Point', 'homeaffairs' ),
		'text'  => __( 'Act as the institutional focal point for the National Anti-Corruption Integrity Assessment, ensuring that the institution aligns with assessment processes guided by CIABOC and the national integrity framework.', 'homeaffairs' ),
	],
	[
		'num'   => '12',
		'title' => __( 'CIABOC Liaison & Ongoing Guidance', 'homeaffairs' ),
		'text'  => __( 'Maintain close liaison with CIABOC to receive continuous guidance, advisory support, and strategic direction in executing the Unit\'s statutory duties.', 'homeaffairs' ),
	],
	[
		'num'   => '13',
		'title' => __( 'Periodic & Annual Progress Reporting', 'homeaffairs' ),
		'text'  => __( 'Produce periodic and annual reports summarizing the IAU\'s activities, progress in anti-corruption initiatives, challenges encountered, and key recommendations for further action.', 'homeaffairs' ),
	],
	[
		'num'   => '14',
		'title' => __( 'Private Sector & Stakeholder Collaboration', 'homeaffairs' ),
		'text'  => __( 'Collaborate with private sector stakeholders and civil society to plan and implement collaborative integrity development and anti-bribery programs.', 'homeaffairs' ),
	],
];

// Matters for complaints
$complaint_matters = [
	__( 'Requests for bribes, demanding money or other advantages to perform a service', 'homeaffairs' ),
	__( 'Unnecessary postponement or deliberate delay of public work', 'homeaffairs' ),
	__( 'Corrupt practices and abuse of administrative authority', 'homeaffairs' ),
	__( 'Dereliction of duty and neglect of official responsibilities', 'homeaffairs' ),
	__( 'Misconduct and unethical workplace behavior', 'homeaffairs' ),
	__( 'Irresponsible work practices affecting public service delivery', 'homeaffairs' ),
];
?>

<main id="main-content" role="main" class="bg-slate-50/50 py-10 lg:py-16">
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">


		<!-- ── Section 1: Main Objective & Matters on Which Complaints Can Be Made ── -->
		<section id="overview" class="scroll-mt-24">
			<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
				
				<!-- Main Objective Card (Col 5) -->
				<div class="lg:col-span-5 bg-gradient-to-br from-primary-darker via-primary to-primary-light rounded-3xl p-7 sm:p-9 text-white shadow-xl flex flex-col justify-between relative overflow-hidden">
					<div class="absolute -right-10 -bottom-10 w-44 h-44 bg-secondary/10 rounded-full blur-2xl pointer-events-none"></div>
					<div class="relative z-10">
						<div class="inline-flex items-center gap-1.5 bg-secondary/20 text-secondary-light text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-5 border border-secondary/30 backdrop-blur-md">
							<i class="fas fa-shield-halved text-[9px] text-secondary"></i> <?php esc_html_e( 'PUBLIC SERVICE INTEGRITY', 'homeaffairs' ); ?>
						</div>
						<h2 class="text-2xl sm:text-3xl font-extrabold text-white leading-tight mb-4 tracking-tight">
							<?php esc_html_e( 'Main Objective', 'homeaffairs' ); ?>
						</h2>
						<p class="text-white/90 text-sm sm:text-base leading-relaxed mb-4">
							<?php esc_html_e( 'Maintaining an integrity-driven public service free from bribery and corruption, and receiving inquiries and complaints related to service delivery.', 'homeaffairs' ); ?>
						</p>
					</div>

					<div class="relative z-10 pt-6 border-t border-white/15 flex items-center justify-between flex-wrap gap-3">
						<div class="flex items-center gap-3">
							<div class="w-10 h-10 rounded-xl bg-secondary/20 flex items-center justify-center text-secondary border border-secondary/30">
								<i class="fas fa-scale-balanced text-base"></i>
							</div>
							<div>
								<span class="block text-[11px] font-bold text-secondary-light uppercase tracking-wider"><?php esc_html_e( 'Legal Mandate', 'homeaffairs' ); ?></span>
								<span class="block text-xs text-white/80"><?php esc_html_e( 'Anti-Corruption Act No. 9 of 2023', 'homeaffairs' ); ?></span>
							</div>
						</div>
						<a href="#contact-information" class="bg-secondary hover:bg-secondary-dark text-primary-dark font-bold px-4 py-2 rounded-xl text-xs inline-flex items-center gap-1.5 transition-all shadow-sm">
							<?php esc_html_e( 'Lodge Inquiry', 'homeaffairs' ); ?> <i class="fas fa-arrow-down text-[10px]"></i>
						</a>
					</div>
				</div>

				<!-- Matters for Complaints (Col 7) -->
				<div class="lg:col-span-7 bg-white rounded-3xl p-7 sm:p-9 border border-gray-200 shadow-sm flex flex-col justify-between">
					<div>
						<div class="flex items-center justify-between mb-4 flex-wrap gap-2">
							<h3 class="text-xl sm:text-2xl font-extrabold text-primary-dark tracking-tight flex items-center gap-2.5">
								<i class="fas fa-list-check text-secondary"></i> <?php esc_html_e( 'Matters on Which Complaints Can Be Made', 'homeaffairs' ); ?>
							</h3>
							<span class="text-[10px] font-bold uppercase tracking-wider bg-red-50 text-red-700 px-2.5 py-1 rounded-full border border-red-200">
								<?php esc_html_e( 'Actionable Scope', 'homeaffairs' ); ?>
							</span>
						</div>
						<p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-6">
							<?php esc_html_e( 'Citizens and public servants can report irregularities, ethical breaches, or administrative delays directly to the Internal Affairs Unit under any of the following categories:', 'homeaffairs' ); ?>
						</p>

						<div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
							<?php foreach ( $complaint_matters as $matter ) : ?>
								<div class="flex items-start gap-2.5 p-3 rounded-xl bg-slate-50 border border-slate-100 hover:border-secondary/40 hover:bg-warm-white transition-all">
									<div class="w-6 h-6 rounded-lg bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5 text-xs">
										<i class="fas fa-check"></i>
									</div>
									<span class="text-xs font-medium text-gray-800 leading-snug">
										<?php echo esc_html( $matter ); ?>
									</span>
								</div>
							<?php endforeach; ?>
						</div>
					</div>

					<div class="mt-6 pt-5 border-t border-gray-100 flex items-center gap-2 text-xs text-gray-500">
						<i class="fas fa-user-lock text-primary text-sm shrink-0"></i>
						<span><?php esc_html_e( 'All complaints and identity disclosures are handled with strict confidentiality under CIABOC guidelines.', 'homeaffairs' ); ?></span>
					</div>
				</div>

			</div>
		</section>

		<!-- ── Section 2: Contact Information ── -->
		<section id="contact-information" class="scroll-mt-24">
			<div class="bg-white rounded-3xl border border-gray-200 shadow-sm p-6 sm:p-8 lg:p-10">
				
				<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 mb-8 border-b border-gray-100">
					<div>
						<div class="inline-flex items-center gap-1.5 text-secondary font-bold text-[10px] tracking-wider uppercase bg-secondary/10 px-3 py-1 rounded-full mb-2">
							<i class="fas fa-headset text-[9px]"></i> <?php esc_html_e( 'DIRECT ACCESS CHANNELS', 'homeaffairs' ); ?>
						</div>
						<h2 class="text-2xl sm:text-3xl font-extrabold text-primary-dark tracking-tight">
							<?php esc_html_e( 'Contact Information', 'homeaffairs' ); ?>
						</h2>
					</div>
					<div class="inline-flex items-center gap-2 bg-emerald-50 text-emerald-800 text-xs font-semibold px-4 py-2 rounded-xl border border-emerald-200 self-start md:self-auto">
						<span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
						<?php esc_html_e( 'Active Confidential Hotline & WhatsApp Channel', 'homeaffairs' ); ?>
					</div>
				</div>

				<div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
					
					<!-- Left: QR Code Card (Col 4) -->
					<div class="lg:col-span-4 flex flex-col items-center justify-center p-6 rounded-2xl bg-slate-50 border border-slate-200 text-center">
						<div class="relative p-3 bg-white rounded-2xl shadow-sm border border-gray-200 mb-4 max-w-[220px]">
							<img src="<?php echo esc_url( $qr_img ); ?>" alt="<?php esc_attr_e( 'Internal Affairs Unit QR Code', 'homeaffairs' ); ?>" class="w-full h-auto rounded-lg object-contain" loading="lazy">
							<div class="absolute -top-2 -right-2 bg-secondary text-primary-dark font-extrabold text-[9px] px-2 py-0.5 rounded-full shadow-sm uppercase tracking-wider">
								<?php esc_html_e( 'Scan QR', 'homeaffairs' ); ?>
							</div>
						</div>
						<h4 class="text-sm font-bold text-primary-dark mb-1">
							<?php esc_html_e( 'Scan for Direct Access', 'homeaffairs' ); ?>
						</h4>
						<p class="text-xs text-gray-500 max-w-xs">
							<?php esc_html_e( 'Scan with your smartphone camera to connect with the IAU WhatsApp line and contact directory.', 'homeaffairs' ); ?>
						</p>
					</div>

					<!-- Right: Unit Head & Direct Contact Details (Col 8) -->
					<div class="lg:col-span-8 space-y-6">
						
						<!-- Unit Head Banner -->
						<div class="p-5 rounded-2xl bg-warm-white border border-secondary/30 flex items-center gap-4">
							<div class="w-12 h-12 rounded-xl bg-primary text-secondary flex items-center justify-center text-xl shrink-0 shadow-sm">
								<i class="fas fa-user-tie"></i>
							</div>
							<div>
								<span class="block text-[10px] font-bold text-secondary uppercase tracking-wider">
									<?php esc_html_e( 'Designated Leadership', 'homeaffairs' ); ?>
								</span>
								<h3 class="text-base sm:text-lg font-extrabold text-primary-dark">
									<?php esc_html_e( 'Unit Head: Additional Secretary (Internal Administration)', 'homeaffairs' ); ?>
								</h3>
								<p class="text-xs text-gray-600 mt-0.5">
									<?php esc_html_e( 'Direct oversight of anti-corruption protocols, ethics enforcement, and inquiry proceedings.', 'homeaffairs' ); ?>
								</p>
							</div>
						</div>

						<!-- Direct Channels Grid -->
						<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
							
							<!-- Telephone -->
							<a href="tel:+94702667737" class="group p-4 rounded-2xl border border-gray-200 hover:border-primary hover:bg-slate-50 transition-all flex items-center gap-3.5 shadow-2xs">
								<div class="w-11 h-11 rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white flex items-center justify-center text-base transition-colors shrink-0">
									<i class="fas fa-phone"></i>
								</div>
								<div class="min-w-0">
									<span class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider"><?php esc_html_e( 'Direct Telephone', 'homeaffairs' ); ?></span>
									<span class="block text-sm font-extrabold text-primary-dark group-hover:text-primary transition-colors truncate">+94 70 26 67 737</span>
								</div>
							</a>

							<!-- WhatsApp -->
							<a href="https://wa.me/94702667737" target="_blank" rel="noopener noreferrer" class="group p-4 rounded-2xl border border-emerald-200 hover:border-emerald-500 hover:bg-emerald-50/50 transition-all flex items-center gap-3.5 shadow-2xs">
								<div class="w-11 h-11 rounded-xl bg-emerald-100 text-emerald-700 group-hover:bg-emerald-600 group-hover:text-white flex items-center justify-center text-lg transition-colors shrink-0">
									<i class="fab fa-whatsapp"></i>
								</div>
								<div class="min-w-0">
									<span class="block text-[10px] font-bold text-emerald-600 uppercase tracking-wider"><?php esc_html_e( 'Official WhatsApp', 'homeaffairs' ); ?></span>
									<span class="block text-sm font-extrabold text-emerald-950 group-hover:text-emerald-700 transition-colors truncate">+94 70 26 67 737</span>
								</div>
							</a>

							<!-- Email -->
							<a href="mailto:pubad.iau@sltnet.lk" class="group p-4 rounded-2xl border border-gray-200 hover:border-primary hover:bg-slate-50 transition-all flex items-center gap-3.5 shadow-2xs">
								<div class="w-11 h-11 rounded-xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white flex items-center justify-center text-base transition-colors shrink-0">
									<i class="fas fa-envelope"></i>
								</div>
								<div class="min-w-0">
									<span class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider"><?php esc_html_e( 'Official Inquiries Email', 'homeaffairs' ); ?></span>
									<span class="block text-sm font-extrabold text-primary-dark group-hover:text-primary transition-colors truncate">pubad.iau@sltnet.lk</span>
								</div>
							</a>

							<!-- Address -->
							<div class="p-4 rounded-2xl border border-gray-200 bg-slate-50/70 flex items-start gap-3.5 shadow-2xs">
								<div class="w-11 h-11 rounded-xl bg-secondary/20 text-secondary-dark flex items-center justify-center text-base shrink-0 mt-0.5">
									<i class="fas fa-location-dot"></i>
								</div>
								<div class="min-w-0">
									<span class="block text-[10px] font-bold text-gray-400 uppercase tracking-wider"><?php esc_html_e( 'Postal / Physical Address', 'homeaffairs' ); ?></span>
									<p class="text-xs text-gray-700 font-medium leading-relaxed mt-0.5">
										<?php esc_html_e( 'Ministry of Public Administration, Provincial Councils and Local Government, Independence Square, Colombo 07', 'homeaffairs' ); ?>
									</p>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>
		</section>

		<!-- ── Section 3: Key Objectives ── -->
		<section id="key-objectives-of-the-internal-affairs-unit-iau" class="scroll-mt-24">
			<div class="text-center max-w-3xl mx-auto mb-10">
				<span class="inline-flex items-center gap-1.5 text-secondary font-bold text-[10px] tracking-[2px] uppercase bg-secondary/10 px-3.5 py-1 rounded-full mb-3">
					<i class="fas fa-bullseye text-[9px]"></i> <?php esc_html_e( 'STRATEGIC FOUNDATION', 'homeaffairs' ); ?>
				</span>
				<h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-dark tracking-tight">
					<?php esc_html_e( 'Key Objectives of the Internal Affairs Unit (IAU)', 'homeaffairs' ); ?>
				</h2>
				<p class="text-gray-600 text-sm mt-3 leading-relaxed">
					<?php esc_html_e( 'Guided by CIABOC and the national anti-corruption legal framework to maintain integrity, transparency, and accountability.', 'homeaffairs' ); ?>
				</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
				<?php foreach ( $key_objectives as $idx => $obj ) : ?>
					<div class="bg-white rounded-3xl p-6 border border-gray-200 shadow-sm hover:shadow-md hover:border-secondary transition-all flex flex-col justify-between group">
						<div>
							<div class="w-12 h-12 rounded-2xl bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white flex items-center justify-center text-xl transition-all mb-4">
								<i class="<?php echo esc_attr( $obj['icon'] ); ?>"></i>
							</div>
							<h3 class="text-base font-bold text-primary-dark mb-2.5 leading-snug">
								<?php echo esc_html( $obj['title'] ); ?>
							</h3>
							<p class="text-xs text-gray-600 leading-relaxed">
								<?php echo esc_html( $obj['desc'] ); ?>
							</p>
						</div>
						<div class="mt-5 pt-4 border-t border-gray-100 flex items-center justify-between">
							<span class="text-[10px] font-bold text-secondary uppercase tracking-wider">
								<?php echo sprintf( esc_html__( 'Objective #%02d', 'homeaffairs' ), $idx + 1 ); ?>
							</span>
							<i class="fas fa-check-circle text-secondary/40 text-xs"></i>
						</div>
					</div>
				<?php endforeach; ?>

				<!-- Summary Commitment Card -->
				<div class="bg-gradient-to-br from-primary to-primary-dark text-white rounded-3xl p-6 shadow-md flex flex-col justify-between">
					<div>
						<div class="w-12 h-12 rounded-2xl bg-secondary text-primary-dark flex items-center justify-center text-xl mb-4">
							<i class="fas fa-award"></i>
						</div>
						<h3 class="text-base font-bold text-white mb-2 leading-snug">
							<?php esc_html_e( 'National Integrity Assessment', 'homeaffairs' ); ?>
						</h3>
						<p class="text-xs text-white/80 leading-relaxed">
							<?php esc_html_e( 'Institutional participation in national integrity benchmarks, promoting continuous public trust and measurable zero-corruption compliance.', 'homeaffairs' ); ?>
						</p>
					</div>
					<div class="mt-5 pt-4 border-t border-white/15 text-[11px] text-secondary-light font-semibold">
						<i class="fas fa-certificate mr-1 text-secondary"></i> <?php esc_html_e( 'CIABOC Aligned Framework', 'homeaffairs' ); ?>
					</div>
				</div>
			</div>
		</section>

		<!-- ── Section 4: Responsibilities and Functions ── -->
		<section id="responsibilities-and-functions-of-the-internal-affairs-unit-iau" class="scroll-mt-24">
			<div class="bg-white rounded-3xl border border-gray-200 shadow-sm p-6 sm:p-8 lg:p-10">
				
				<div class="max-w-3xl mb-8">
					<span class="inline-flex items-center gap-1.5 text-secondary font-bold text-[10px] tracking-wider uppercase bg-secondary/10 px-3 py-1 rounded-full mb-2">
						<i class="fas fa-briefcase text-[9px]"></i> <?php esc_html_e( 'STATUTORY FUNCTIONS', 'homeaffairs' ); ?>
					</span>
					<h2 class="text-2xl sm:text-3xl font-extrabold text-primary-dark tracking-tight mb-3">
						<?php esc_html_e( 'Responsibilities and Functions of the Internal Affairs Unit (IAU)', 'homeaffairs' ); ?>
					</h2>
					<p class="text-gray-600 text-xs sm:text-sm leading-relaxed">
						<?php esc_html_e( 'The IAU is tasked with the following specific responsibilities and functions to ensure proactive, clear and focused anti-corruption efforts, addressing key aspects of institutional integrity:', 'homeaffairs' ); ?>
					</p>
				</div>

				<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
					<?php foreach ( $responsibilities as $res ) : ?>
						<div class="p-4 sm:p-5 rounded-2xl bg-slate-50 border border-slate-200 hover:border-secondary hover:bg-warm-white transition-all flex items-start gap-3.5 group">
							<span class="w-8 h-8 rounded-xl bg-primary text-secondary font-black text-xs flex items-center justify-center shrink-0 group-hover:bg-secondary group-hover:text-primary-dark transition-colors shadow-2xs">
								<?php echo esc_html( $res['num'] ); ?>
							</span>
							<div class="min-w-0">
								<h4 class="text-xs sm:text-sm font-bold text-primary-dark mb-1 leading-snug">
									<?php echo esc_html( $res['title'] ); ?>
								</h4>
								<p class="text-xs text-gray-600 leading-relaxed">
									<?php echo esc_html( $res['text'] ); ?>
								</p>
							</div>
						</div>
					<?php endforeach; ?>
				</div>

			</div>
		</section>

		<!-- ── Section 5: Composition of Internal Affairs Unit ── -->
		<section id="composition-of-internal-affairs-unit" class="scroll-mt-24">
			<div class="bg-gradient-to-br from-primary-darker via-primary to-primary-light rounded-3xl p-6 sm:p-8 lg:p-10 text-white shadow-xl relative overflow-hidden">
				
				<div class="absolute -right-16 -top-16 w-60 h-60 bg-secondary/10 rounded-full blur-3xl pointer-events-none"></div>

				<div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
					
					<div class="max-w-2xl">
						<div class="inline-flex items-center gap-1.5 bg-secondary/20 text-secondary-light text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full mb-3 border border-secondary/30 backdrop-blur-md">
							<i class="fas fa-users-gear text-[9px] text-secondary"></i> <?php esc_html_e( 'OFFICIAL APPOINTMENTS', 'homeaffairs' ); ?>
						</div>
						<h2 class="text-2xl sm:text-3xl font-extrabold text-white leading-tight mb-3 tracking-tight">
							<?php esc_html_e( 'Composition of Internal Affairs Unit', 'homeaffairs' ); ?>
						</h2>
						<p class="text-white/85 text-xs sm:text-sm leading-relaxed mb-4">
							<?php esc_html_e( 'Access the official gazetted committee and member list of designated officers serving on the Internal Affairs Unit for the Ministry of Public Administration, Provincial Councils and Local Government / Home Affairs.', 'homeaffairs' ); ?>
						</p>
						<div class="flex items-center gap-4 text-xs text-secondary-light">
							<span class="inline-flex items-center gap-1.5"><i class="fas fa-file-pdf text-secondary text-sm"></i> <?php esc_html_e( 'PDF Document', 'homeaffairs' ); ?></span>
							<span class="inline-flex items-center gap-1.5"><i class="fas fa-check-double text-secondary"></i> <?php esc_html_e( 'Verified Member List', 'homeaffairs' ); ?></span>
							<span class="inline-flex items-center gap-1.5"><i class="fas fa-shield text-secondary"></i> <?php esc_html_e( 'Official Directory', 'homeaffairs' ); ?></span>
						</div>
					</div>

					<!-- Document Download Card -->
					<div class="bg-white rounded-2xl p-5 sm:p-6 text-gray-800 shadow-lg shrink-0 w-full sm:w-auto sm:min-w-[320px]">
						<div class="flex items-start gap-4 mb-4">
							<div class="w-12 h-12 rounded-xl bg-red-100 text-red-600 flex items-center justify-center text-2xl shrink-0">
								<i class="fas fa-file-pdf"></i>
							</div>
							<div>
								<h3 class="text-sm font-bold text-primary-dark leading-snug">
									<?php esc_html_e( 'IAU Committee Member List', 'homeaffairs' ); ?>
								</h3>
								<span class="text-[11px] text-gray-500 block mt-0.5"><?php esc_html_e( 'File size: ~543 KB • Language: English', 'homeaffairs' ); ?></span>
							</div>
						</div>

						<div class="flex flex-col gap-2 pt-3 border-t border-gray-100">
							<a href="<?php echo esc_url( $member_pdf ); ?>" target="_blank" rel="noopener noreferrer" class="w-full bg-primary hover:bg-primary-dark text-white font-bold py-2.5 px-4 rounded-xl text-xs text-center inline-flex items-center justify-center gap-2 transition-all shadow-sm">
								<i class="fas fa-eye text-xs"></i> <?php esc_html_e( 'View Member List (PDF)', 'homeaffairs' ); ?>
							</a>
							<a href="<?php echo esc_url( $member_pdf ); ?>" download="pubad-iau-unit-member-list-e.pdf" class="w-full bg-slate-100 hover:bg-secondary hover:text-primary-dark text-gray-700 font-semibold py-2 px-4 rounded-xl text-xs text-center inline-flex items-center justify-center gap-2 transition-all">
								<i class="fas fa-download text-xs"></i> <?php esc_html_e( 'Download Document', 'homeaffairs' ); ?>
							</a>
						</div>
					</div>

				</div>

			</div>
		</section>

		<!-- ── Section 6: Security & Whistleblower Notice Banner ── -->
		<section class="bg-warm-white rounded-2xl border border-secondary/30 p-6 flex flex-col sm:flex-row items-center gap-4 text-center sm:text-left">
			<div class="w-12 h-12 rounded-2xl bg-primary text-secondary flex items-center justify-center text-xl shrink-0">
				<i class="fas fa-lock"></i>
			</div>
			<div class="flex-1">
				<h4 class="text-sm font-bold text-primary-dark">
					<?php esc_html_e( 'Confidentiality & Whistleblower Protection Guaranteed', 'homeaffairs' ); ?>
				</h4>
				<p class="text-xs text-gray-600 mt-0.5 leading-relaxed">
					<?php esc_html_e( 'In compliance with the Anti-Corruption Act No. 9 of 2023, the Internal Affairs Unit ensures that the identity of complainants, witnesses, and whistleblowers is strictly protected from disclosure or workplace retaliation.', 'homeaffairs' ); ?>
				</p>
			</div>
			<a href="#contact-information" class="bg-primary hover:bg-primary-dark text-white text-xs font-bold px-4 py-2 rounded-xl shrink-0 transition-colors">
				<?php esc_html_e( 'Contact IAU', 'homeaffairs' ); ?>
			</a>
		</section>

	</div>
</main>

<?php get_footer(); ?>
