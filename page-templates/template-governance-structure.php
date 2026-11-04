<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Governance & Structure
 */

get_header();

get_template_part( 'template-parts/page-banner' );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">

	<!-- Service Page Style Center Header -->
	<div class="text-center max-w-3xl mx-auto mb-10 lg:mb-12">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'MINISTRY GOVERNANCE', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker tracking-tight"><?php esc_html_e( 'Governance & Structure', 'homeaffairs' ); ?></h1>
		
	</div>

	<!-- Dual Executive Profile Matrix -->
	<div class="grid grid-cols-1 md:grid-cols-2 gap-8">

		<!-- Minister Card -->
		<div class="gov-profile-card bg-warm-white rounded-2xl border border-primary-darker/15 shadow-sm p-6 sm:p-8 flex flex-col sm:flex-row items-center sm:items-start gap-6 relative overflow-hidden">
			<div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
			<div class="gov-profile-img shrink-0">
				<img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/governance/minister.jpg' ); ?>" alt="Hon. Minister" class="w-24 h-28 object-cover rounded-xl border border-secondary/30 shadow-sm" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
				<div class="w-24 h-28 rounded-xl border border-secondary/30 shadow-sm bg-gradient-to-br from-primary-darker to-slate-800 flex items-center justify-center text-white/30 text-3xl" style="display:none"><i class="fas fa-user"></i></div>
			</div>
			<div class="text-center sm:text-left">
				<span class="text-[10px] sm:text-xs font-bold text-secondary uppercase tracking-widest">Minister</span>
				<h2 class="text-xl sm:text-2xl font-extrabold text-primary-darker tracking-tight mt-1 mb-2">Hon. (Prof.) A.H.M.H. Abayarthna</h2>
				<p class="text-sm text-slate-600 leading-relaxed m-0">
					Minister of Home Affairs of the Democratic Socialist Republic of Sri Lanka, overseeing policy direction, legislative governance, and strategic oversight of the Ministry's administrative framework.
				</p>
			</div>
		</div>

		<!-- Secretary Card -->
		<div class="gov-profile-card bg-warm-white rounded-2xl border border-primary-darker/15 shadow-sm p-6 sm:p-8 flex flex-col sm:flex-row items-center sm:items-start gap-6 relative overflow-hidden">
			<div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
			<div class="gov-profile-img shrink-0">
				<img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/governance/secretary.jpg' ); ?>" alt="Ministry Secretary" class="w-24 h-28 object-cover rounded-xl border border-secondary/30 shadow-sm" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
				<div class="w-24 h-28 rounded-xl border border-secondary/30 shadow-sm bg-gradient-to-br from-primary-darker to-slate-800 flex items-center justify-center text-white/30 text-3xl" style="display:none"><i class="fas fa-user"></i></div>
			</div>
			<div class="text-center sm:text-left">
				<span class="text-[10px] sm:text-xs font-bold text-secondary uppercase tracking-widest">Secretary</span>
				<h2 class="text-xl sm:text-2xl font-extrabold text-primary-darker tracking-tight mt-1 mb-2">Mr. S. Alokabandara</h2>
				<p class="text-sm text-slate-600 leading-relaxed m-0">
					Secretary to the Home Affairs Division, responsible for day-to-day administration, policy implementation, and coordination across all divisions and departments of the Ministry.
				</p>
			</div>
		</div>

	</div>

	<!-- Multi-Tab Interactive Governance Lounge -->
	<div class="mt-12 lg:mt-16">

		<!-- Tab Bar -->
		<div class="flex flex-wrap justify-center border-b border-primary-darker/15 gap-2 sm:gap-4 pb-3">
			<button type="button" class="gov-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all bg-white text-slate-600 border border-primary-darker/15 hover:border-secondary" data-tab="tab-minister">Minister's Message</button>
			<button type="button" class="gov-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all bg-white text-slate-600 border border-primary-darker/15 hover:border-secondary" data-tab="tab-secretary">Secretary's Message</button>
			<button type="button" class="gov-tab-btn active px-4 py-2 rounded-xl text-xs sm:text-sm font-bold transition-all bg-primary-darker text-white shadow-sm" data-tab="tab-structure">Organizational Structure Chart</button>
		</div>

		
		<!-- Panel 1: Minister's Message -->
		<div id="tab-minister" class="gov-tab-panel mt-8 hidden">
			<div class="bg-warm-white rounded-2xl border border-primary-darker/15 shadow-sm p-6 sm:p-8 lg:p-10">
				<div class="flex flex-col sm:flex-row items-start gap-6 mb-8">
					<div class="w-24 h-28 rounded-xl border border-secondary/30 shadow-sm overflow-hidden shrink-0 bg-gradient-to-br from-primary-darker to-slate-800 flex items-center justify-center text-white/30">
						<img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/governance/minister.jpg' ); ?>" alt="Hon. Minister" class="w-full h-full object-cover" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
						<i class="fas fa-user text-3xl" style="display:none"></i>
					</div>
					<div>
						<span class="text-[10px] font-bold text-secondary uppercase tracking-widest">Minister of Home Affairs</span>
						<h2 class="text-xl sm:text-2xl font-extrabold text-primary-darker tracking-tight mt-1">Hon. (Prof.) A.H.M.H. Abayarthna</h2>
						<p class="text-sm text-slate-600 font-medium">Minister of Home Affairs</p>
					</div>
				</div>

				<div class="gov-message-text space-y-4 mb-8 text-sm text-slate-600 leading-relaxed">
					<p>It is with great pride and a profound sense of responsibility that I address you as the Minister of Home Affairs of the Democratic Socialist Republic of Sri Lanka. Our Ministry stands as the cornerstone of civil administration, entrusted with the vital task of ensuring efficient, transparent, and citizen-centric public service delivery across every district and division of our beloved nation.</p>
					<p>The Home Affairs Division has embarked on an ambitious modernization journey, leveraging digital technology to streamline administrative processes, enhance accessibility, and bring government services closer to the people. From the digitization of Grama Niladhari records to the establishment of integrated service delivery frameworks at the Divisional Secretariat level, our reforms are designed to build a more responsive and accountable public administration system.</p>
					<p>I invite all citizens, public servants, and stakeholders to actively engage with our Ministry as we work tirelessly to uphold the highest standards of governance, integrity, and public service excellence.</p>
				</div>

				<div class="border-t border-primary-darker/10 pt-6">
					<h4 class="text-sm font-extrabold text-primary-darker mb-4 flex items-center gap-2"><i class="fas fa-address-card text-secondary"></i> Contact Details</h4>
					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs text-slate-600">
						<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-phone-alt text-secondary"></i><span>+94 11 269 0000</span></div>
						<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-fax text-secondary"></i><span>+94 11 269 0000</span></div>
						<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-envelope text-secondary"></i><a href="mailto:minister@moha.gov.lk" class="text-slate-600 hover:text-primary-darker no-underline">minister@moha.gov.lk</a></div>
						<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-location-dot text-secondary"></i><span>Home Affairs Division, Colombo 01</span></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Panel 2: Secretary's Message -->
		<div id="tab-secretary" class="gov-tab-panel mt-8 hidden">
			<div class="bg-warm-white rounded-2xl border border-primary-darker/15 shadow-sm p-6 sm:p-8 lg:p-10">
				<div class="flex flex-col sm:flex-row items-start gap-6 mb-8">
					<div class="w-24 h-28 rounded-xl border border-secondary/30 shadow-sm overflow-hidden shrink-0 bg-gradient-to-br from-primary-darker to-slate-800 flex items-center justify-center text-white/30">
						<img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/governance/secretary.jpg' ); ?>" alt="Ministry Secretary" class="w-full h-full object-cover" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
						<i class="fas fa-user text-3xl" style="display:none"></i>
					</div>
					<div>
						<span class="text-[10px] font-bold text-secondary uppercase tracking-widest">Secretary</span>
						<h2 class="text-xl sm:text-2xl font-extrabold text-primary-darker tracking-tight mt-1">Mr. S. Alokabandara</h2>
						<p class="text-sm text-slate-600 font-medium">Secretary, Home Affairs Division</p>
					</div>
				</div>

				<div class="gov-message-text space-y-4 mb-8 text-sm text-slate-600 leading-relaxed">
					<p>As the Secretary to the Home Affairs Division, it is my privilege to lead a dedicated team of public servants committed to the highest standards of administrative excellence. Our Ministry's mandate encompasses a broad spectrum of responsibilities — from overseeing the administrative apparatus of District and Divisional Secretariats to ensuring the effective functioning of the Grama Niladhari service network.</p>
					<p>We have prioritized the strengthening of institutional capacity, the simplification of bureaucratic procedures, and the adoption of digital solutions to enhance service delivery. Our ongoing initiatives include the comprehensive digitization of land records, the automation of personnel management systems, and the establishment of efficient grievance redressal mechanisms at all administrative levels.</p>
					<p>I extend my sincere appreciation to all officers and staff of the Ministry for their unwavering commitment, and I encourage the public to make full use of the services and information available through this portal.</p>
				</div>

				<div class="border-t border-primary-darker/10 pt-6">
					<h4 class="text-sm font-extrabold text-primary-darker mb-4 flex items-center gap-2"><i class="fas fa-address-card text-secondary"></i> Contact Details</h4>
					<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs text-slate-600">
						<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-phone-alt text-secondary"></i><span>+94 11 269 0000</span></div>
						<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-fax text-secondary"></i><span>+94 11 269 0000</span></div>
						<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-envelope text-secondary"></i><a href="mailto:secretary@moha.gov.lk" class="text-slate-600 hover:text-primary-darker no-underline">secretary@moha.gov.lk</a></div>
						<div class="flex items-center gap-2.5 bg-white p-3 rounded-xl border border-primary-darker/10"><i class="fas fa-location-dot text-secondary"></i><span>Home Affairs Division, Colombo 01</span></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Panel 3: Organizational Structure -->
		<div id="tab-structure" class="gov-tab-panel active mt-8 space-y-10">

			<!-- ======================================================== -->
			<!-- SECTION 1: NEW INTERACTIVE HTML ORGANIZATIONAL CHART      -->
			<!-- ======================================================== -->
			<div class="org-chart-container" id="interactiveOrgChartSection">
				<!-- Header & Actions -->
				<div class="org-chart-header flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
					<div>
						<h3 class="text-xl sm:text-2xl font-extrabold text-primary-darker m-0">Organizational Structure</h3>
						<p class="text-xs sm:text-sm text-slate-600 mt-1 m-0">Click any <span class="font-bold text-primary-darker bg-slate-100 px-1.5 py-0.5 rounded border border-slate-200">+ Staff</span> button to expand subordinate operational staff branches.</p>
					</div>
					<div class="flex items-center gap-2 shrink-0">
						<button type="button" id="toggleAllStaffBtn" class="px-3 py-1.5 rounded-lg text-xs font-bold bg-white border border-primary-darker/20 text-primary-darker hover:bg-secondary hover:text-primary-darker transition-all flex items-center gap-1.5 shadow-2xs">
							<i class="fas fa-layer-group text-secondary"></i> <span>Expand All Staff</span>
						</button>
						<button type="button" id="downloadChartBtn" class="px-3 py-1.5 rounded-lg text-xs font-bold bg-primary-darker text-white hover:bg-secondary hover:text-primary-darker transition-all flex items-center gap-1.5 shadow-2xs cursor-pointer" title="Download Chart as Image" aria-label="Download Chart as Image">
							<i class="fas fa-download"></i> <span>Download Chart</span>
						</button>
						<button type="button" id="fullscreenChartBtn" class="p-2 rounded-lg text-xs font-bold bg-white border border-primary-darker/20 text-primary-darker hover:bg-secondary hover:text-primary-darker transition-all shadow-2xs" title="Toggle Fullscreen" aria-label="Toggle Fullscreen">
							<i class="fas fa-expand"></i>
						</button>
					</div>
				</div>

				<!-- Toolbar: Division Filters, Search, and Zoom -->
				<div class="org-chart-toolbar">
					<!-- Division Filter Pills -->
					<div class="flex flex-wrap items-center gap-1.5" id="orgDivisionFilters">
						<button type="button" class="org-filter-pill active px-3 py-1 rounded-full text-xs font-bold transition-all bg-primary-darker text-white" data-div="all">All Divisions (9)</button>
						<button type="button" class="org-filter-pill px-2.5 py-1 rounded-full text-xs font-semibold transition-all bg-white text-slate-600 border border-slate-200 hover:border-secondary" data-div="admin">Admin</button>
						<button type="button" class="org-filter-pill px-2.5 py-1 rounded-full text-xs font-semibold transition-all bg-white text-slate-600 border border-slate-200 hover:border-secondary" data-div="home-affairs">Home Affairs Division</button>
						<button type="button" class="org-filter-pill px-2.5 py-1 rounded-full text-xs font-semibold transition-all bg-white text-slate-600 border border-slate-200 hover:border-secondary" data-div="development">Development</button>
						<button type="button" class="org-filter-pill px-2.5 py-1 rounded-full text-xs font-semibold transition-all bg-white text-slate-600 border border-slate-200 hover:border-secondary" data-div="investigation">Investigation</button>
						<button type="button" class="org-filter-pill px-2.5 py-1 rounded-full text-xs font-semibold transition-all bg-white text-slate-600 border border-slate-200 hover:border-secondary" data-div="rar">RAR</button>
						<button type="button" class="org-filter-pill px-2.5 py-1 rounded-full text-xs font-semibold transition-all bg-white text-slate-600 border border-slate-200 hover:border-secondary" data-div="technical">Technical</button>
						<button type="button" class="org-filter-pill px-2.5 py-1 rounded-full text-xs font-semibold transition-all bg-white text-slate-600 border border-slate-200 hover:border-secondary" data-div="planning">Planning</button>
						<button type="button" class="org-filter-pill px-2.5 py-1 rounded-full text-xs font-semibold transition-all bg-white text-slate-600 border border-slate-200 hover:border-secondary" data-div="finance">Finance</button>
						<button type="button" class="org-filter-pill px-2.5 py-1 rounded-full text-xs font-semibold transition-all bg-white text-slate-600 border border-slate-200 hover:border-secondary" data-div="audit">Internal Audit</button>
					</div>

					<!-- Search & Zoom Tools -->
					<div class="flex items-center gap-3 w-full sm:w-auto justify-between sm:justify-end">
						<!-- Search Box -->
						<div class="relative flex-1 sm:w-56">
							<i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs pointer-events-none"></i>
							<input type="text" id="orgChartSearchInput" placeholder="Search designation..." class="w-full pl-8 pr-3 py-1.5 text-xs rounded-lg border border-slate-200 focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary bg-white">
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
						<div class="org-tree">
							<ul>
								<!-- ============================================== -->
								<!-- LEVEL 1: HON. MINISTER                         -->
								<!-- ============================================== -->
								<li>
									<div class="org-card org-card-l1" data-title="Hon. Minister">
										<div class="org-title">Hon. Minister</div>
									</div>

									<ul>
										<!-- ============================================== -->
										<!-- LEVEL 2: SECRETARY                             -->
										<!-- ============================================== -->
										<li>
											<div class="org-card org-card-l2" data-title="Secretary">
												<div class="org-title">Secretary</div>
											</div>

											<ul>
												<!-- ============================================== -->
												<!-- LEVEL 3: 8 EXECUTIVE DIVISIONS + 1 AUDIT (L4)   -->
												<!-- ============================================== -->

												<!-- 1. ADDITIONAL SECRETARY (ADMIN) -->
												<li class="org-branch" data-division="admin">
													<div class="org-card org-card-l3" data-title="Additional Secretary (Admin)">
														<div class="org-title">Additional Secretary<br>(Admin)</div>
													</div>
													<ul>
														<!-- SAS (Admin) -->
														<li>
															<div class="org-card org-card-l4" data-title="Senior Assistant Secretary (Admin)">
																<div class="org-title">Senior Assistant Secretary<br>(Admin)</div>
															</div>
															<ul>
																<!-- Assistant Secretary (Admin) -->
																<li>
																	<div class="org-card org-card-l5" data-title="Assistant Secretary (Admin)">
																		<div class="org-title">Assistant Secretary<br>(Admin)</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">

																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																		<!-- Media Officer (Equal to DO Level) - Photographer and Videographer under this designation -->
																		<li class="skip-to-do">
																			<div class="org-card org-card-support" data-title="Media Officer">Media Officer</div>
																			<ul>
																				<li class="skip-to-photo">
																					<div class="org-card org-card-support" data-title="Photographer">Photographer</div>
																					<ul>
																						<li class="skip-to-asst-photo">
																							<div class="org-card org-card-support" data-title="Assistant Photographer">Assistant<br>Photographer</div>
																						</li>
																					</ul>
																				</li>
																				<li class="skip-to-photo">
																					<div class="org-card org-card-support" data-title="Videographer">Videographer</div>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>

																<!-- Assistant Secretary (Training) -->
																<li>
																	<div class="org-card org-card-l5" data-title="Assistant Secretary (Training)">
																		<div class="org-title">Assistant Secretary<br>(Training)</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<!-- Administrative Officer (Under AS Admin & AS Training) -->
																		<li>
																			<div class="org-card org-card-intermediate-a" data-title="Administrative Officer">Administrative<br>Officer</div>
																			<ul class="ul-ao-staff">
																				<li class="skip-to-translator">
																					<div class="org-card org-card-intermediate-b org-card-translator" data-title="Translator"><span class="org-title">Translator</span><span class="org-sub-lang">(Sinhala - Tamil)<br>(Sinhala - English)</span></div>
																				</li>
																				<li class="skip-to-do-from-ao">
																					<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																					<ul>
																						<li class="skip-to-mso">
																							<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																							<ul>
																								<li class="skip-to-driver">
																									<div class="org-card org-card-support" data-title="Driver">Driver</div>
																								</li>
																								<li class="skip-to-circuit-keeper">
																									<div class="org-card org-card-support" data-title="Circuit Keeper">Circuit Keeper</div>
																									<ul class="ul-ack">
																										<li class="skip-to-ack">
																											<div class="org-card org-card-support" data-title="Assistant Circuit Keeper">Assistant<br>Circuit Keeper</div>
																										</li>
																									</ul>
																								</li>
																								<li class="skip-to-oes">
																									<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																								</li>
																							</ul>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>

																<!-- Legal Officer -->
																<li>
																	<div class="org-card org-card-l5" data-title="Legal Officer">
																		<div class="org-title">Legal Officer</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>

														<!-- Director IT -->
														<li>
															<div class="org-card org-card-l4" data-title="Director IT">
																<div class="org-title">Director IT</div>
															</div>
															<ul>
																<li>
																	<div class="org-card org-card-l5" data-title="Assistant Director (IT)">
																		<div class="org-title">Assistant Director<br>(IT)</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-icto">
																			<div class="org-card org-card-intermediate-b" data-title="ICT Officer"><span class="org-acronym">ICTO</span></div>
																			<ul>
																				<li class="skip-to-icta">
																					<div class="org-card org-card-do" data-title="ICT Assistant"><span class="org-acronym">ICTA</span></div>
																				</li>
																			</ul>
																		</li>
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</li>

												<!-- 2. ADDITIONAL SECRETARY (HOME AFFAIRS) -->
												<li class="org-branch" data-division="home-affairs">
													<div class="org-card org-card-l3" data-title="Additional Secretary (Home Affairs)">
														<div class="org-title">Additional Secretary<br>(Home Affairs)</div>
													</div>
													<ul>
														<!-- SAS (District Admin) -->
														<li>
															<div class="org-card org-card-l4" data-title="Senior Assistant Secretary (District Admin)">
																<div class="org-title">Senior Assistant Secretary<br>(District Admin)</div>
															</div>
															<ul>
																<li>
																	<div class="org-card-pair">
																		<div class="org-card org-card-l5" data-title="Assistant Secretary"><div class="org-title">Assistant Secretary</div></div>
																		<div class="org-card org-card-l5" data-title="Assistant Secretary"><div class="org-title">Assistant Secretary</div></div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>

														<!-- SAS (Divisional Admin) -->
														<li>
															<div class="org-card org-card-l4" data-title="Senior Assistant Secretary (Divisional Admin)">
																<div class="org-title">Senior Assistant Secretary<br>(Divisional Admin)</div>
															</div>
															<ul>
																<li>
																	<div class="org-card-pair">
																		<div class="org-card org-card-l5" data-title="Assistant Secretary"><div class="org-title">Assistant Secretary</div></div>
																		<div class="org-card org-card-l5" data-title="Assistant Secretary"><div class="org-title">Assistant Secretary</div></div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>

														<!-- SAS (Grama Niladari Admin) -->
														<li>
															<div class="org-card org-card-l4" data-title="Senior Assistant Secretary (Grama Niladari Admin)">
																<div class="org-title">Senior Assistant Secretary<br>(Grama Niladari Admin)</div>
															</div>
															<ul>
																<li>
																	<div class="org-card org-card-l5" data-title="Assistant Secretary (Grama Niladari Admin)">
																		<div class="org-title">Assistant Secretary</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</li>

												<!-- 3. ADDITIONAL SECRETARY (DEVELOPMENT) -->
												<li class="org-branch" data-division="development">
													<div class="org-card org-card-l3" data-title="Additional Secretary (Development)">
														<div class="org-title">Additional Secretary<br>(Development)</div>
													</div>
													<ul>
														<li>
															<div class="org-card org-card-l4" data-title="Senior Assistant Secretary (Development)">
																<div class="org-title">Senior Assistant Secretary<br>(Development)</div>
															</div>
															<ul>
																<li>
																	<div class="org-card org-card-l5" data-title="Assistant Secretary (Development)">
																		<div class="org-title">Assistant Secretary</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</li>

												<!-- 4. ADDITIONAL SECRETARY (INVESTIGATION) -->
												<li class="org-branch" data-division="investigation">
													<div class="org-card org-card-l3" data-title="Additional Secretary (Investigation)">
														<div class="org-title">Additional Secretary<br>(Investigation)</div>
													</div>
													<ul>
														<li>
															<div class="org-card org-card-l4" data-title="Senior Assistant Secretary (Investigation)">
																<div class="org-title">Senior Assistant Secretary<br>(Investigation)</div>
															</div>
															<ul>
																<li>
																	<div class="org-card org-card-l5" data-title="Assistant Secretary (Investigation)">
																		<div class="org-title">Assistant Secretary</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-support" data-title="Investigation Officer">Investigation<br>Officer</div>
																		</li>
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</li>

												<!-- 5. ADDITIONAL SECRETARY (RAR) -->
												<li class="org-branch" data-division="rar">
													<div class="org-card org-card-l3" data-title="Additional Secretary (RAR)">
														<div class="org-title">Additional Secretary<br>(RAR)</div>
													</div>
													<ul>
														<li>
															<div class="org-card org-card-l4" data-title="Senior Assistant Secretary (RAR)">
																<div class="org-title">Senior Assistant Secretary<br>(RAR)</div>
															</div>
															<ul>
																<li>
																	<div class="org-card-pair">
																		<div class="org-card org-card-l5" data-title="Assistant Secretary"><div class="org-title">Assistant Secretary</div></div>
																		<div class="org-card org-card-l5" data-title="Deputy Director / Assistant Director (Planning)"><div class="org-title">Deputy Director /<br>Asst. Dir. (Planning)</div></div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</li>

												<!-- 6. DIRECTOR GENERAL (TECHNICAL) -->
												<li class="org-branch" data-division="technical">
													<div class="org-card org-card-l3" data-title="Director General (Technical)">
														<div class="org-title">Director General<br>(Technical)</div>
													</div>
													<ul>
														<li>
															<div class="org-card org-card-l4" data-title="Chief Engineer">
																<div class="org-title">Chief Engineer</div>
															</div>
															<ul>
																<!-- Engineer -->
																<li>
																	<div class="org-card org-card-l5" data-title="Engineer">
																		<div class="org-title">Engineer</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-tech-officer">
																			<div class="org-card org-card-intermediate-b" data-title="Technical Officer">Technical Officer</div>
																			<ul>
																				<li class="skip-to-ta">
																					<div class="org-card org-card-support" data-title="Technical Assistant">Technical<br>Assistant</div>
																				</li>
																			</ul>
																		</li>
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>

																<!-- Premises Manager -->
																<li>
																	<div class="org-card org-card-l5" data-title="Premises Manager">
																		<div class="org-title">Premises Manager</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-apm">
																			<div class="org-card org-card-intermediate-a" data-title="Assistant Premises Manager">Assistant Premises<br>Manager</div>
																			<ul>
																				<li class="skip-to-to-from-apm">
																					<div class="org-card org-card-intermediate-b" data-title="Technical Officer">Technical Officer</div>
																					<ul>
																						<li class="skip-to-ta">
																							<div class="org-card org-card-support" data-title="Technical Assistant">Technical<br>Assistant</div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>

																<!-- Architect -->
																<li>
																	<div class="org-card org-card-l5" data-title="Architect">
																		<div class="org-title">Architect</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-draftman">
																			<div class="org-card org-card-intermediate-b" data-title="Draftman">Draftman</div>
																		</li>
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</li>

												<!-- 7. DIRECTOR GENERAL (PLANNING) -->
												<li class="org-branch" data-division="planning">
													<div class="org-card org-card-l3" data-title="Director General (Planning)">
														<div class="org-title">Director General<br>(Planning)</div>
													</div>
													<ul>
														<li>
															<div class="org-card org-card-l4" data-title="Director (Planning)">
																<div class="org-title">Director (Planning)</div>
															</div>
															<ul>
																<li>
																	<div class="org-card org-card-l5" data-title="Deputy Director / Assistant Director (Planning)">
																		<div class="org-title">Deputy Director /<br>Asst. Dir. (Planning)</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</li>

												<!-- 8. CHIEF FINANCIAL OFFICER -->
												<li class="org-branch" data-division="finance">
													<div class="org-card org-card-l3" data-title="Chief Financial Officer">
														<div class="org-title">Chief Financial Officer</div>
													</div>
													<ul>
														<li>
															<div class="org-card org-card-l4" data-title="Chief Accountant">
																<div class="org-title">Chief Accountant</div>
															</div>
															<ul>
																<li>
																	<div class="org-card org-card-l5" data-title="Accountant">
																		<div class="org-title">Accountant</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>
																	<div class="org-card org-card-l5" data-title="Accountant">
																		<div class="org-title">Accountant</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>
																	<div class="org-card org-card-l5" data-title="Accountant">
																		<div class="org-title">Accountant</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li>
																	<div class="org-card org-card-l5" data-title="Accountant">
																		<div class="org-title">Accountant</div>
																	</div>
																	<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
																	<ul class="staff-subtree">
																		<li class="skip-to-do">
																			<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																			<ul>
																				<li class="skip-to-mso">
																					<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																					<ul>
																						<li class="skip-to-oes">
																							<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																						</li>
																					</ul>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</li>

												<!-- 9. CHIEF INTERNAL AUDITOR (Direct from Secretary, on Level 4 row) -->
												<li class="org-branch org-branch-direct" data-division="audit">
													<div class="org-card org-card-l4" data-title="Chief Internal Auditor">
														<div class="org-title">Chief Internal Auditor</div>
													</div>
													<ul>
														<li>
															<div class="org-card org-card-l5" data-title="Internal Auditor">
																<div class="org-title">Internal Auditor</div>
															</div>
															<button type="button" class="staff-toggle" onclick="toggleStaff(this)">+ Staff</button>
															<ul class="staff-subtree">
																<li class="skip-to-do">
																	<div class="org-card org-card-do" data-title="Development Officer"><span class="org-acronym">DO</span></div>
																	<ul>
																		<li class="skip-to-mso">
																			<div class="org-card org-card-mso" data-title="Management Service Officer"><span class="org-acronym">MSO</span></div>
																			<ul>
																				<li class="skip-to-oes">
																					<div class="org-card org-card-oes" data-title="Office Employees Service"><span class="org-acronym">OES</span></div>
																				</li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</li>

											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Acronyms Reference Bar -->
				<div class="bg-warm-white border-t border-primary-darker/10 px-4 sm:px-6 py-3">
					<div class="flex flex-col sm:flex-row items-center justify-between gap-2 text-[11px] text-slate-500">
						<div class="flex flex-wrap items-center gap-1.5">
							<span class="font-bold text-primary-darker mr-1"><i class="fas fa-info-circle text-secondary"></i> Acronyms:</span>
							<span><strong>DO:</strong> Development Officer</span> &bull;
							<span><strong>MSO:</strong> Management Service Officer</span> &bull;
							<span><strong>OES:</strong> Office Employees Service</span> &bull;
							<span><strong>ICTO:</strong> ICT Officer</span> &bull;
							<span><strong>ICTA:</strong> ICT Assistant</span> &bull;
							<span><strong>RAR:</strong> Regional Administration Reforms</span>
						</div>
						<div class="shrink-0 text-slate-400 hidden sm:block">
							<span>Home Affairs Division &bull; Organizational Chart</span>
						</div>
					</div>
				</div>
			</div>



		</div>

	</div>

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
	// Cross-branch connector line between AS Admin, AS Training and the single Administrative Officer flow
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

		// 1. Cross-branch connector line: AS Admin + AS Training -> Administrative Officer
		var cardAdmin = document.querySelector('[data-title="Assistant Secretary (Admin)"]');
		var cardTraining = document.querySelector('[data-title="Assistant Secretary (Training)"]');
		var cardAo = document.querySelector('.staff-subtree [data-title="Administrative Officer"]');

		if ( cardAdmin && cardTraining && cardAo ) {
			var subtreeAo = cardAo.closest('.staff-subtree');
			if ( subtreeAo && subtreeAo.classList.contains('is-expanded') ) {
				var rAdmin = cardAdmin.getBoundingClientRect();
				var rTraining = cardTraining.getBoundingClientRect();

				var xAdmin = Math.round( ( rAdmin.left + rAdmin.width / 2 - canvasRect.left ) / zoom );
				var yAdmin = Math.round( ( rAdmin.bottom - canvasRect.top ) / zoom );

				var xTraining = Math.round( ( rTraining.left + rTraining.width / 2 - canvasRect.left ) / zoom );
				var yTraining = Math.round( ( rTraining.bottom - canvasRect.top ) / zoom );

				var yBarAo = Math.max( yAdmin, yTraining ) + 24;
				var pathAo = 'M ' + xAdmin + ' ' + yAdmin + ' L ' + xAdmin + ' ' + yBarAo + ' L ' + xTraining + ' ' + yBarAo;

				paths.push('<path d="' + pathAo + '" fill="none" stroke="#94a3b8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />');
			}
		}

		// 2. Direct connector line: Secretary -> Chief Internal Auditor
		var cardSecretary = document.querySelector('.org-card-l2[data-title="Secretary"]');
		var cardAudit = document.querySelector('.org-branch-direct [data-title="Chief Internal Auditor"]');

		if ( cardSecretary && cardAudit ) {
			var branchAudit = cardAudit.closest('.org-branch');
			if ( branchAudit && ! branchAudit.classList.contains('is-hidden') ) {
				var rSec = cardSecretary.getBoundingClientRect();
				var rAudit = cardAudit.getBoundingClientRect();

				// Originates directly from bottom right quadrant of Secretary card
				var xSecRight = Math.round( ( rSec.left + rSec.width * 0.78 - canvasRect.left ) / zoom );
				var ySecBottom = Math.round( ( rSec.bottom - canvasRect.top ) / zoom );

				var xAudit = Math.round( ( rAudit.left + rAudit.width / 2 - canvasRect.left ) / zoom );
				var yAuditTop = Math.round( ( rAudit.top - canvasRect.top ) / zoom );

				// Horizontal bridge runs 12px below Secretary (above main L3 division crossbar)
				var yAuditBar = ySecBottom + 12;

				var pathAudit = 'M ' + xSecRight + ' ' + ySecBottom + ' L ' + xSecRight + ' ' + yAuditBar + ' L ' + xAudit + ' ' + yAuditBar + ' L ' + xAudit + ' ' + yAuditTop;

				paths.push('<path d="' + pathAudit + '" fill="none" stroke="#94a3b8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />');
			}
		}

		// 3. Connector lines from unfinished staff flows to the relevant root flow OES Level
		var unfinishedMappings = [
			// Videographer connects to Assistant Photographer in Media Officer flow
			{ title: 'Videographer', dest: 'Assistant Photographer' },
			// Translator and Driver connect to Assistant Circuit Keeper (OES Level) in AO flow
			{ title: 'Translator', dest: 'Assistant Circuit Keeper' },
			{ title: 'Driver', dest: 'Assistant Circuit Keeper' },
			// Remaining flows connect to root OES of their subtree
			{ title: 'ICT Assistant', dest: 'Office Employees Service' },
			{ title: 'Investigation Officer', dest: 'Office Employees Service' },
			{ title: 'Technical Assistant', dest: 'Office Employees Service' },
			{ title: 'Draftman', dest: 'Office Employees Service' }
		];

		unfinishedMappings.forEach(function( mapping ) {
			var allMatchingCards = document.querySelectorAll('.org-card');
			allMatchingCards.forEach(function( card ) {
				var t = ( card.getAttribute('data-title') || card.innerText.trim() ).replace(/\n/g, ' ');
				if ( t === mapping.title ) {
					var li = card.closest('li');
					if ( li && ! li.querySelector(':scope > ul') ) {
						var subtree = card.closest('.staff-subtree');
						var branch = card.closest('.org-branch');
						if ( subtree && subtree.classList.contains('is-expanded') && ( ! branch || ! branch.classList.contains('is-hidden') ) ) {
							var destCard = null;
							var candidateCards = subtree.querySelectorAll('.org-card');
							candidateCards.forEach(function( dc ) {
								var dt = ( dc.getAttribute('data-title') || dc.innerText.trim() ).replace(/\n/g, ' ');
								if ( ! destCard && dt === mapping.dest ) {
									destCard = dc;
								}
							});
							if ( destCard ) {
								var rCard = card.getBoundingClientRect();
								var rDest = destCard.getBoundingClientRect();

								var xCard = Math.round( ( rCard.left + rCard.width / 2 - canvasRect.left ) / zoom );
								var yCardBottom = Math.round( ( rCard.bottom - canvasRect.top ) / zoom );

								var xDest = Math.round( ( rDest.left + rDest.width / 2 - canvasRect.left ) / zoom );
								var yDestTop = Math.round( ( rDest.top - canvasRect.top ) / zoom );

								var yBar = yDestTop - 8;

								var pathD = 'M ' + xCard + ' ' + yCardBottom + ' L ' + xCard + ' ' + yBar + ' L ' + xDest + ' ' + yBar;
								paths.push('<path d="' + pathD + '" fill="none" stroke="#94a3b8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />');
							}
						}
					}
				}
			});
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

		// If toggling AS Admin, ensure AS Training staff is also open so the shared AO is visible
		var card = li.querySelector('.org-card');
		var title = card ? card.getAttribute('data-title') : '';
		if ( title === 'Assistant Secretary (Admin)' && isExpanded ) {
			var cardTraining = document.querySelector('[data-title="Assistant Secretary (Training)"]');
			if ( cardTraining ) {
				var liTraining = cardTraining.closest('li');
				var subtreeTraining = liTraining ? liTraining.querySelector('.staff-subtree') : null;
				var btnTraining = liTraining ? liTraining.querySelector('.staff-toggle') : null;
				if ( subtreeTraining && ! subtreeTraining.classList.contains('is-expanded') ) {
					subtreeTraining.classList.add('is-expanded');
					if ( btnTraining ) {
						btnTraining.classList.add('expanded');
						btnTraining.innerHTML = '− Staff';
					}
				}
			}
		}

		updateCrossConnectors();
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
	var filterPills = document.querySelectorAll('.org-filter-pill');
	var allBranches = document.querySelectorAll('.org-branch');

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
					
					// If branch is hidden, unhide it
					var parentBranch = card.closest('.org-branch');
					if ( parentBranch && parentBranch.classList.contains('is-hidden') ) {
						parentBranch.classList.remove('is-hidden');
					}
					
					// If card is inside staff-subtree, expand subtree
					var parentSubtree = card.closest('.staff-subtree');
					if ( parentSubtree && ! parentSubtree.classList.contains('is-expanded') ) {
						parentSubtree.classList.add('is-expanded');
						var parentLi = parentSubtree.closest('li');
						var toggleBtn = parentLi ? parentLi.querySelector('.staff-toggle') : null;
						if ( toggleBtn ) {
							toggleBtn.classList.add('expanded');
							toggleBtn.innerHTML = '− Staff';
						}
					}
				}
			});
		});
	}

	// Download Chart as Image (PNG)
	var downloadBtn = document.getElementById('downloadChartBtn');
	if ( downloadBtn && canvas ) {
		downloadBtn.addEventListener('click', function() {
			var origHtml = downloadBtn.innerHTML;
			downloadBtn.disabled = true;
			downloadBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> <span>Generating...</span>';

			// 1. Save original UI state to restore afterwards
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

			// 2. Expand all staff subtrees and unhide all division branches so exported chart is complete
			subtrees.forEach(function( s ) {
				s.classList.add('is-expanded');
			});
			branches.forEach(function( b ) {
				b.classList.remove('is-hidden');
			});

			// 3. Inject temporary style override to eliminate false pseudo borders on direct branch and finance
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

			// 4. Temporarily ignore interactive staff toggles during capture
			toggles.forEach(function( t ) {
				t.setAttribute('data-html2canvas-ignore', 'true');
			});

			// 5. Freeze transform/transition for clean 1:1 scale coordinate calculation
			canvas.style.transition = 'none';
			canvas.style.transform = 'none';
			void canvas.offsetWidth; // Force synchronous reflow

			// Calculate cross-connectors at 1:1 unscaled dimensions
			updateCrossConnectors();
			var svg = document.getElementById('orgCrossConnectors');
			var paths = svg ? Array.from(svg.querySelectorAll('path')).map(function( p ) { return p.getAttribute('d'); }) : [];

			// Hide SVG element so html2canvas doesn't produce broken SVG artifacts
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
						// 6. Draw clean SVG connectors on top of the rendered canvas using 2D context
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
						// 7. Cleanup & restore original UI state
						if ( svg ) svg.style.display = '';
						if ( overrideStyle && overrideStyle.parentNode ) {
							overrideStyle.parentNode.removeChild(overrideStyle);
						}
						toggles.forEach(function( t ) {
							t.removeAttribute('data-html2canvas-ignore');
						});

						// Restore subtrees & toggle buttons
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

						// Restore branches
						branches.forEach(function( b, idx ) {
							if ( branchStates[ idx ] ) {
								b.classList.add('is-hidden');
							} else {
								b.classList.remove('is-hidden');
							}
						});

						// Restore canvas scale & transition
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