<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Scholarships Directory Template
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$intro_title = "Scholarships & Training Opportunities";

$scholarships = [
	[ 'title' => 'MEXT Research Scholarship 2027',              'level' => 'Doctoral / Postgraduate',     'type' => 'foreign', 'country' => 'Japan',         'university' => 'Tokyo Institute of Technology',  'subject' => 'Engineering & Technology',            'deadline' => '2026-08-31', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/japan-mext-circular.pdf',         'app_url' => '/wp-content/uploads/scholarships/japan-mext-application.pdf' ],
	[ 'title' => 'Chevening Scholarship 2027/28',               'level' => 'Master\'s Degree',            'type' => 'foreign', 'country' => 'United Kingdom', 'university' => 'Various UK Universities',          'subject' => 'Public Policy & Administration',      'deadline' => '2026-11-05', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/chevening-circular.pdf',          'app_url' => '/wp-content/uploads/scholarships/chevening-application.pdf' ],
	[ 'title' => 'Australia Awards Scholarship 2028',          'level' => 'Master\'s Degree',            'type' => 'foreign', 'country' => 'Australia',      'university' => 'Australian National University',   'subject' => 'Development Studies',                 'deadline' => '2026-09-30', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/australia-awards-circular.pdf',    'app_url' => '/wp-content/uploads/scholarships/australia-awards-application.pdf' ],
	[ 'title' => 'DAAD Scholarship for Developing Countries',  'level' => 'Master\'s / PhD',             'type' => 'foreign', 'country' => 'Germany',        'university' => 'University of Bonn',               'subject' => 'Sustainable Development',             'deadline' => '2026-07-15', 'status' => 'closing', 'circular_url' => '/wp-content/uploads/scholarships/daad-circular.pdf',               'app_url' => '/wp-content/uploads/scholarships/daad-application.pdf' ],
	[ 'title' => 'Korean Government Scholarship Program',      'level' => 'Master\'s / Doctoral',        'type' => 'foreign', 'country' => 'South Korea',    'university' => 'Seoul National University',        'subject' => 'Public Administration',               'deadline' => '2026-06-20', 'status' => 'closing', 'circular_url' => '/wp-content/uploads/scholarships/korea-gsp-circular.pdf',          'app_url' => '/wp-content/uploads/scholarships/korea-gsp-application.pdf' ],
	[ 'title' => 'Saudi Arabia Higher Education Scholarship',  'level' => 'Master\'s Degree',            'type' => 'foreign', 'country' => 'Saudi Arabia',   'university' => 'King Saud University',             'subject' => 'Islamic Studies & Law',               'deadline' => '2026-10-15', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/saudi-circular.pdf',              'app_url' => '/wp-content/uploads/scholarships/saudi-application.pdf' ],
	[ 'title' => 'Commonwealth Master\'s Scholarship 2027',    'level' => 'Master\'s Degree',            'type' => 'foreign', 'country' => 'United Kingdom', 'university' => 'University of Oxford',             'subject' => 'Education & Social Sciences',         'deadline' => '2026-12-01', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/commonwealth-circular.pdf',       'app_url' => '/wp-content/uploads/scholarships/commonwealth-application.pdf' ],
	[ 'title' => 'India ITEC Training Programme',              'level' => 'Short-term Training',         'type' => 'foreign', 'country' => 'India',          'university' => 'Various Indian Institutes',        'subject' => 'Information Technology & Management', 'deadline' => '2026-08-15', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/itec-circular.pdf',               'app_url' => '/wp-content/uploads/scholarships/itec-application.pdf' ],
	[ 'title' => 'Chinese Government Scholarship 2027',        'level' => 'Master\'s / Doctoral',        'type' => 'foreign', 'country' => 'China',          'university' => 'Tsinghua University',              'subject' => 'Engineering & International Relations','deadline' => '2026-09-01', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/china-circular.pdf',              'app_url' => '/wp-content/uploads/scholarships/china-application.pdf' ],
	[ 'title' => 'Netherlands Fellowship Programme',           'level' => 'Master\'s / Short Course',      'type' => 'foreign', 'country' => 'Netherlands',    'university' => 'University of Amsterdam',          'subject' => 'Water Management & Governance',       'deadline' => '2026-07-30', 'status' => 'closing', 'circular_url' => '/wp-content/uploads/scholarships/netherlands-fellowship-circular.pdf','app_url' => '/wp-content/uploads/scholarships/netherlands-fellowship-application.pdf' ],
	[ 'title' => 'Japanese Grant Aid for Human Resource Development', 'level' => 'Master\'s Degree',   'type' => 'foreign', 'country' => 'Japan',          'university' => 'Hiroshima University',             'subject' => 'Peace & Development Studies',         'deadline' => '2026-08-20', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/jica-circular.pdf',               'app_url' => '/wp-content/uploads/scholarships/jica-application.pdf' ],
	[ 'title' => 'ADB-JSP Scholarship 2027',                   'level' => 'Master\'s Degree',            'type' => 'foreign', 'country' => 'Philippines',    'university' => 'Asian Institute of Management',    'subject' => 'Economics & Business Administration', 'deadline' => '2026-10-01', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/adb-jsp-circular.pdf',            'app_url' => '/wp-content/uploads/scholarships/adb-jsp-application.pdf' ],
	[ 'title' => 'Local Government Service Training Programme','level' => 'Professional Training',        'type' => 'local',  'country' => 'Sri Lanka',      'university' => 'SLIDA',                            'subject' => 'Public Administration & Governance',  'deadline' => '2026-08-05', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/slida-training-circular.pdf',     'app_url' => '/wp-content/uploads/scholarships/slida-training-application.pdf' ],
	[ 'title' => 'Diploma in Public Administration (SLIDA)',   'level' => 'Diploma Programme',           'type' => 'local',  'country' => 'Sri Lanka',      'university' => 'Sri Lanka Institute of Development Administration','subject' => 'Public Administration',           'deadline' => '2026-09-15', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/slida-diploma-circular.pdf',      'app_url' => '/wp-content/uploads/scholarships/slida-diploma-application.pdf' ],
	[ 'title' => 'Certificate in Local Governance',            'level' => 'Certificate Course',          'type' => 'local',  'country' => 'Sri Lanka',      'university' => 'University of Colombo',            'subject' => 'Local Government Studies',            'deadline' => '2026-07-25', 'status' => 'closing', 'circular_url' => '/wp-content/uploads/scholarships/colombo-gov-circular.pdf',        'app_url' => '/wp-content/uploads/scholarships/colombo-gov-application.pdf' ],
	[ 'title' => 'National Youth Corps Leadership Training',   'level' => 'Short-term Training',         'type' => 'local',  'country' => 'Sri Lanka',      'university' => 'National Youth Corps',             'subject' => 'Youth Leadership & Development',      'deadline' => '2026-08-30', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/nyc-training-circular.pdf',       'app_url' => '/wp-content/uploads/scholarships/nyc-training-application.pdf' ],
	[ 'title' => 'English Language Proficiency Programme',     'level' => 'Short-term Training',         'type' => 'local',  'country' => 'Sri Lanka',      'university' => 'National Institute of Language Education','subject' => 'English Language & Communication','deadline' => '2026-09-01', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/nile-english-circular.pdf',       'app_url' => '/wp-content/uploads/scholarships/nile-english-application.pdf' ],
	[ 'title' => 'ICT Skills Development for Public Officers', 'level' => 'Professional Training',        'type' => 'local',  'country' => 'Sri Lanka',      'university' => 'National Institute of Business Management','subject' => 'Information Technology',      'deadline' => '2026-10-10', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/nibm-ict-circular.pdf',           'app_url' => '/wp-content/uploads/scholarships/nibm-ict-application.pdf' ],
	[ 'title' => 'Postgraduate Diploma in Humanitarian Action','level' => 'Postgraduate Diploma',        'type' => 'local',  'country' => 'Sri Lanka',      'university' => 'University of Peradeniya',         'subject' => 'Disaster Management & Humanitarian Aid','deadline' => '2026-09-30', 'status' => 'open', 'circular_url' => '/wp-content/uploads/scholarships/pera-diploma-circular.pdf',       'app_url' => '/wp-content/uploads/scholarships/pera-diploma-application.pdf' ],
	[ 'title' => 'District Administration Training Programme', 'level' => 'Professional Training',        'type' => 'local',  'country' => 'Sri Lanka',      'university' => 'Ministry of Home Affairs Training Academy','subject' => 'District Administration & Management', 'deadline' => '2026-11-01', 'status' => 'open', 'circular_url' => '/wp-content/uploads/scholarships/moha-district-training-circular.pdf','app_url' => '/wp-content/uploads/scholarships/moha-district-training-application.pdf' ],
	[ 'title' => 'Research Fellowship in Public Policy',       'level' => 'Research Fellowship',         'type' => 'foreign', 'country' => 'United States',  'university' => 'Harvard Kennedy School',           'subject' => 'Public Policy & Leadership',          'deadline' => '2026-12-15', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/harvard-fellowship-circular.pdf',   'app_url' => '/wp-content/uploads/scholarships/harvard-fellowship-application.pdf' ],
	[ 'title' => 'UNESCO Fellowship in Cultural Heritage',     'level' => 'Fellowship Programme',        'type' => 'foreign', 'country' => 'France',         'university' => 'UNESCO Paris',                     'subject' => 'Cultural Heritage Management',        'deadline' => '2026-07-01', 'status' => 'closing', 'circular_url' => '/wp-content/uploads/scholarships/unesco-fellowship-circular.pdf',     'app_url' => '/wp-content/uploads/scholarships/unesco-fellowship-application.pdf' ],
	[ 'title' => 'MOFCOM Scholarship 2027 (China)',            'level' => 'Master\'s Degree',            'type' => 'foreign', 'country' => 'China',          'university' => 'Renmin University',                'subject' => 'International Economics',             'deadline' => '2026-09-10', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/mofcom-circular.pdf',             'app_url' => '/wp-content/uploads/scholarships/mofcom-application.pdf' ],
	[ 'title' => 'Turkish Government Scholarship 2027',        'level' => 'Master\'s / Doctoral',        'type' => 'foreign', 'country' => 'Turkey',         'university' => 'Ankara University',                'subject' => 'International Relations',             'deadline' => '2026-08-25', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/turkey-circular.pdf',             'app_url' => '/wp-content/uploads/scholarships/turkey-application.pdf' ],
	[ 'title' => 'Cross-Cultural Understanding Programme',     'level' => 'Short-term Training',         'type' => 'local',  'country' => 'Sri Lanka',      'university' => 'Bandaranaike International Diplomatic Training Institute','subject' => 'Diplomacy & Cross-Cultural Relations','deadline' => '2026-10-20', 'status' => 'open','circular_url' => '/wp-content/uploads/scholarships/bidti-circular.pdf',              'app_url' => '/wp-content/uploads/scholarships/bidti-application.pdf' ],
	[ 'title' => 'E-Government Development Programme',         'level' => 'Professional Training',        'type' => 'local',  'country' => 'Sri Lanka',      'university' => 'ICT Agency of Sri Lanka',          'subject' => 'Digital Government & E-Services',     'deadline' => '2026-09-05', 'status' => 'open',   'circular_url' => '/wp-content/uploads/scholarships/icta-egov-circular.pdf',          'app_url' => '/wp-content/uploads/scholarships/icta-egov-application.pdf' ],
];
$scholarships_json = json_encode( $scholarships );
?>

<style>
	/* Custom SECONDARY & SECONDARY Branding Styles */
	.scholar-page-container {
		background-color: #fdfbf7;
	}

	/* Filter Hub */
	.scholar-filter-bar {
		background: #ffffff;
		border: 1px solid var(--color-maroon-tint-12);
		box-shadow: 0 4px 15px var(--color-primary-darker-tint-04);
	}

	/* Filter Type Buttons */
	.scholar-type-btn {
		font-size: 0.85rem;
		font-weight: 600;
		padding: 8px 16px;
		border-radius: 8px;
		background-color: #f8f4f0;
		color: var(--color-primary-darker);
		border: 1px solid var(--color-maroon-tint-15);
		transition: all 0.25s ease;
		cursor: pointer;
	}

	.scholar-type-btn:hover {
		background-color: var(--color-secondary-tint-strong);
		border-color: var(--color-secondary);
		color: var(--color-primary-darker);
	}

	.scholar-type-btn.active {
		background: linear-gradient(135deg, var(--color-primary-darker) 0%, var(--color-maroon) 100%) !important;
		color: var(--color-secondary-light) !important;
		border-color: var(--color-primary-darker) !important;
		box-shadow: 0 2px 8px var(--color-primary-darker-tint-20);
	}

	/* Search Input & Reset */
	.scholar-search-input:focus {
		border-color: var(--color-secondary) !important;
		box-shadow: 0 0 0 2px var(--color-secondary-tint-med) !important;
	}

	.scholar-clear-btn {
		background-color: #f8f4f0 !important;
		color: var(--color-maroon) !important;
		border: 1px solid var(--color-maroon-tint-15) !important;
	}

	.scholar-clear-btn:hover {
		background-color: var(--color-maroon) !important;
		color: var(--color-secondary-light) !important;
	}

	/* Table Styling */
	.sch-table {
		border-collapse: separate;
		border-spacing: 0;
	}

	.sch-thead {
		background: linear-gradient(135deg, var(--color-primary-darker) 0%, var(--color-maroon) 100%);
	}

	.sch-th {
		color: var(--color-secondary-light) !important;
		font-size: 0.8rem;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 0.05em;
		padding: 14px 16px;
		border-bottom: 2px solid var(--color-secondary);
		text-align: left;
	}

	.sch-row {
		transition: background-color 0.2s ease;
	}

	.sch-row-even { background-color: #ffffff; }
	.sch-row-odd { background-color: #fdfaf7; }

	.sch-row:hover {
		background-color: var(--color-secondary-tint) !important;
	}

	.sch-td {
		padding: 16px;
		border-bottom: 1px solid var(--color-maroon-tint-08);
		vertical-align: middle;
	}

	.sch-title {
		display: block;
		font-size: 0.95rem;
		font-weight: 700;
		color: var(--color-primary-darker);
		line-height: 1.4;
		margin-bottom: 4px;
	}

	.sch-level-tag {
		display: inline-flex;
		align-items: center;
		font-size: 0.72rem;
		font-weight: 600;
		background-color: var(--color-maroon-tint-06);
		color: var(--color-maroon);
		padding: 3px 8px;
		border-radius: 6px;
		border: 1px solid var(--color-maroon-tint-12);
	}

	.sch-country {
		display: flex;
		align-items: center;
		gap: 10px;
	}

	.sch-country-icon {
		width: 32px;
		height: 32px;
		border-radius: 8px;
		background-color: var(--color-secondary-tint-strong);
		color: var(--color-primary-darker);
		display: flex;
		align-items: center;
		justify-content: center;
		font-size: 0.85rem;
		border: 1px solid var(--color-secondary-tint-vivid);
		flex-shrink: 0;
	}

	.sch-country-name {
		display: block;
		font-size: 0.85rem;
		font-weight: 700;
		color: var(--color-primary-darker);
	}

	.sch-country-inst {
		display: block;
		font-size: 0.75rem;
		color: #666;
	}

	.sch-deadline {
		display: flex;
		align-items: center;
		gap: 10px;
	}

	.sch-deadline i {
		color: var(--color-secondary);
		font-size: 1rem;
	}

	.sch-deadline-label {
		display: block;
		font-size: 0.68rem;
		text-transform: uppercase;
		color: #777;
		font-weight: 600;
	}

	.sch-deadline-date {
		display: block;
		font-size: 0.85rem;
		font-weight: 700;
		color: var(--color-primary-darker);
	}

	.sch-closing-badge {
		display: inline-flex;
		align-items: center;
		gap: 4px;
		font-size: 0.65rem;
		font-weight: 700;
		background-color: var(--color-maroon);
		color: var(--color-secondary-light);
		padding: 2px 7px;
		border-radius: 4px;
		margin-top: 3px;
	}

	/* Action Buttons Styling */
	.sch-actions {
		display: flex;
		flex-direction: column;
		gap: 6px;
	}

	@media (min-width: 640px) {
		.sch-actions { flex-direction: row; }
	}

	.sch-btn {
		font-size: 0.78rem;
		font-weight: 600;
		padding: 7px 12px;
		border-radius: 6px;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		gap: 6px;
		transition: all 0.2s ease;
		text-decoration: none !important;
		white-space: nowrap;
	}

	.sch-btn-outline {
		background-color: #ffffff;
		color: var(--color-primary-darker) !important;
		border: 1px solid var(--color-maroon);
	}

	.sch-btn-outline i {
		color: var(--color-secondary) !important;
		transition: color 0.2s ease;
	}

	.sch-btn-outline:hover {
		background-color: var(--color-maroon);
		color: #ffffff !important;
		border-color: var(--color-maroon);
	}

	.sch-btn-outline:hover i {
		color: var(--color-secondary-light) !important;
	}

	.sch-btn-primary {
		background: linear-gradient(135deg, var(--color-primary-darker) 0%, var(--color-maroon) 100%);
		color: #ffffff !important;
		border: 1px solid var(--color-primary-darker);
		box-shadow: 0 2px 5px var(--color-primary-darker-tint-15);
	}

	.sch-btn-primary i {
		color: var(--color-secondary-light) !important;
		transition: color 0.2s ease;
	}

	.sch-btn-primary:hover {
		background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-gold-deep) 100%);
		color: var(--color-primary-darker) !important;
		border-color: var(--color-secondary);
	}

	.sch-btn-primary:hover i {
		color: var(--color-primary-darker) !important;
	}
</style>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16 scholar-page-container">

	<!-- Centered Header Section matching Services Hub -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'OPPORTUNITIES DIRECTORY', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon"><?php echo esc_html( $intro_title ); ?></h1>
	</div>

	<!-- Filter Bar Hub -->
	<div class="scholar-filter-bar rounded-xl p-4 sm:p-5 mb-8">
		<div class="flex flex-wrap items-center gap-2 mb-4">
			<button class="scholar-type-btn active" data-type="all">All Opportunities</button>
			<button class="scholar-type-btn" data-type="foreign">Foreign / International</button>
			<button class="scholar-type-btn" data-type="local">Local / Domestic</button>
		</div>
		<div class="flex flex-col sm:flex-row gap-3 items-start sm:items-center">
			<div class="w-full flex-1 relative">
				<i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-slate-600 text-sm pointer-events-none"></i>
				<input type="text" id="scholar-search" class="scholar-search-input w-full rounded-lg border border-slate-300 bg-white pl-9 pr-4 py-2.5 text-sm text-slate-700 placeholder:text-slate-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary transition-all" placeholder="Search by Country, University or Course Name...">
			</div>
			<button type="button" id="scholar-clear" class="scholar-clear-btn flex items-center gap-1.5 px-4 py-2.5 rounded-lg text-sm font-semibold border-0 cursor-pointer whitespace-nowrap transition-all">
				<i class="fas fa-redo-alt text-xs text-secondary"></i> Reset
			</button>
		</div>
		<div class="mt-3 text-xs sm:text-sm text-slate-500" id="results-count">
			Showing <strong class="text-primary-darker" id="visible-count">0</strong> of <strong class="text-primary-darker" id="total-count">0</strong> opportunities
		</div>
	</div>

	<!-- Table Hub -->
	<div class="overflow-x-auto rounded-xl border border-slate-200 bg-white shadow-sm">
		<table class="sch-table w-full">
			<thead class="sch-thead">
				<tr>
					<th class="sch-th">Opportunity Title &amp; Target</th>
					<th class="sch-th">Funding Agency / Country</th>
					<th class="sch-th">Application Timeline &amp; Deadline</th>
					<th class="sch-th">Resource Actions / Downloads</th>
				</tr>
			</thead>
			<tbody id="sch-tbody"></tbody>
		</table>

		<!-- Empty Search State -->
		<div id="scholar-empty" class="hidden text-center py-12 text-slate-500">
			<i class="fas fa-search text-3xl text-secondary mb-3"></i>
			<p class="text-base font-bold text-primary-darker">No scholarship opportunities match your current criteria.</p>
			<p class="text-sm text-slate-500 mt-1">Try adjusting the filters or search keyword.</p>
		</div>
	</div>

</main>

<script>
(function() {
	var allData = <?php echo $scholarships_json; ?>;
	var filtered = [];
	var activeType = 'all';

	var typeBtns = document.querySelectorAll('.scholar-type-btn');
	var searchInput = document.getElementById('scholar-search');
	var clearBtn = document.getElementById('scholar-clear');
	var tbody = document.getElementById('sch-tbody');
	var emptyEl = document.getElementById('scholar-empty');
	var visibleCnt = document.getElementById('visible-count');
	var totalCnt = document.getElementById('total-count');

	totalCnt.textContent = allData.length;

	function formatDate(iso) {
		var d = new Date(iso + 'T00:00:00');
		var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
		return d.getDate() + ' ' + months[d.getMonth()] + ' ' + d.getFullYear();
	}

	function isClosingSoon(iso) {
		var now = new Date();
		now.setHours(0, 0, 0, 0);
		var deadline = new Date(iso + 'T00:00:00');
		var diff = Math.ceil((deadline - now) / (1000 * 60 * 60 * 24));
		return diff >= 0 && diff <= 7;
	}

	function filterData() {
		var q = searchInput.value.toLowerCase().trim();

		filtered = allData.filter(function(item) {
			if (activeType !== 'all' && item.type !== activeType) return false;
			if (q !== '') {
				var country = item.country.toLowerCase();
				var university = item.university.toLowerCase();
				var subject = item.subject.toLowerCase();
				var title = item.title.toLowerCase();
				if (country.indexOf(q) === -1 && university.indexOf(q) === -1 && subject.indexOf(q) === -1 && title.indexOf(q) === -1) {
					return false;
				}
			}
			return true;
		});

		visibleCnt.textContent = filtered.length;
		render();
	}

	function render() {
		if (filtered.length === 0) {
			tbody.innerHTML = '';
			emptyEl.classList.remove('hidden');
			return;
		}
		emptyEl.classList.add('hidden');

		var fragment = document.createDocumentFragment();

		filtered.forEach(function(s, idx) {
			var rowClass = (idx % 2 === 0) ? 'sch-row-even' : 'sch-row-odd';
			var closingBadge = '';
			if (isClosingSoon(s.deadline) || s.status === 'closing') {
				closingBadge = '<span class="sch-closing-badge"><i class="fas fa-exclamation-circle"></i> Closing Soon</span>';
			}

			var tr = document.createElement('tr');
			tr.className = 'sch-row ' + rowClass;

			tr.innerHTML =
				'<td class="sch-td">' +
					'<span class="sch-title">' + escHtml(s.title) + '</span>' +
					'<span class="sch-level-tag"><i class="fas fa-graduation-cap mr-1" style="font-size:9px"></i>' + escHtml(s.level) + '</span>' +
				'</td>' +
				'<td class="sch-td">' +
					'<div class="sch-country">' +
						'<div class="sch-country-icon"><i class="fas fa-globe"></i></div>' +
						'<div>' +
							'<span class="sch-country-name">' + escHtml(s.country) + '</span>' +
							'<span class="sch-country-inst">' + escHtml(s.university) + '</span>' +
						'</div>' +
					'</div>' +
				'</td>' +
				'<td class="sch-td">' +
					'<div class="sch-deadline">' +
						'<i class="fas fa-calendar-alt"></i>' +
						'<div>' +
							'<span class="sch-deadline-label">Closing Date</span>' +
							'<span class="sch-deadline-date">' + formatDate(s.deadline) + '</span>' +
							closingBadge +
						'</div>' +
					'</div>' +
				'</td>' +
				'<td class="sch-td">' +
					'<div class="sch-actions">' +
						'<a href="' + escAttr(s.circular_url) + '" class="sch-btn sch-btn-outline" target="_blank" rel="noopener"><i class="fas fa-file-alt"></i> View Notice</a>' +
						'<a href="' + escAttr(s.app_url) + '" class="sch-btn sch-btn-primary" target="_blank" rel="noopener"><i class="fas fa-download"></i> Application</a>' +
					'</div>' +
				'</td>';

			fragment.appendChild(tr);
		});

		tbody.innerHTML = '';
		tbody.appendChild(fragment);
	}

	function escHtml(str) {
		var div = document.createElement('div');
		div.appendChild(document.createTextNode(str));
		return div.innerHTML;
	}

	function escAttr(str) {
		return String(str).replace(/"/g, '&quot;').replace(/'/g, '&#39;');
	}

	typeBtns.forEach(function(btn) {
		btn.addEventListener('click', function() {
			typeBtns.forEach(function(b) { b.classList.remove('active'); });
			this.classList.add('active');
			activeType = this.getAttribute('data-type');
			filterData();
		});
	});

	searchInput.addEventListener('input', filterData);

	clearBtn.addEventListener('click', function() {
		typeBtns.forEach(function(b) { b.classList.remove('active'); });
		document.querySelector('.scholar-type-btn[data-type="all"]').classList.add('active');
		activeType = 'all';
		searchInput.value = '';
		filterData();
		searchInput.focus();
	});

	filterData();
})();
</script>

<?php get_footer(); ?>