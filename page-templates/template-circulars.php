<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Circulars Template
 */

get_header();

get_template_part( 'template-parts/page-banner' );

/**
 * All circulars dataset
 * Structure: [number, title, date, url]
 */
$circulars = [
	[ 'number' => '03/2026',   'title' => 'Implementation of Digital Workflow Management System for District Secretariats',                        'date' => '2026-06-15', 'url' => '/wp-content/uploads/circulars/03-2026.pdf' ],
	[ 'number' => '02/2026',   'title' => 'Revised Guidelines for Public Service Recruitment and Transfers',                                     'date' => '2026-04-22', 'url' => '/wp-content/uploads/circulars/02-2026.pdf' ],
	[ 'number' => '01/2026',   'title' => 'Annual Performance Appraisal Framework for Administrative Officers',                                  'date' => '2026-02-10', 'url' => '/wp-content/uploads/circulars/01-2026.pdf' ],
	[ 'number' => '15/2025',   'title' => 'Standard Operating Procedures for Disaster Relief Coordination',                                     'date' => '2025-12-05', 'url' => '/wp-content/uploads/circulars/15-2025.pdf' ],
	[ 'number' => '14/2025',   'title' => 'Implementation of Citizen Charter in All Divisional Secretariats',                                  'date' => '2025-11-18', 'url' => '/wp-content/uploads/circulars/14-2025.pdf' ],
	[ 'number' => '13/2025',   'title' => 'Revised Allowances for Grama Niladhari Officers',                                                     'date' => '2025-10-30', 'url' => '/wp-content/uploads/circulars/13-2025.pdf' ],
	[ 'number' => '12/2025',   'title' => 'Guidelines for Public Complaints Management and Redress Mechanism',                                  'date' => '2025-10-12', 'url' => '/wp-content/uploads/circulars/12-2025.pdf' ],
	[ 'number' => '11/2025',   'title' => 'Digital Transformation Roadmap for Local Government Authorities',                                     'date' => '2025-09-08', 'url' => '/wp-content/uploads/circulars/11-2025.pdf' ],
	[ 'number' => '10/2025',   'title' => 'Procurement Guidelines for Infrastructure Development Projects',                                      'date' => '2025-08-25', 'url' => '/wp-content/uploads/circulars/10-2025.pdf' ],
	[ 'number' => '09/2025',   'title' => 'Establishment of Divisional Level Grievance Redress Committees',                                     'date' => '2025-07-14', 'url' => '/wp-content/uploads/circulars/09-2025.pdf' ],
	[ 'number' => '08/2025(1)','title' => 'Amendment to Circular 08/2025 — Extension of Reporting Deadlines',                                   'date' => '2025-06-30', 'url' => '/wp-content/uploads/circulars/08-2025-1.pdf' ],
	[ 'number' => '08/2025',   'title' => 'Annual Budget Allocation and Financial Management Instructions for District Secretariats',            'date' => '2025-06-20', 'url' => '/wp-content/uploads/circulars/08-2025.pdf' ],
	[ 'number' => '07/2025',   'title' => 'Policy on Land Use Planning and Administration for Urban Councils',                                   'date' => '2025-05-15', 'url' => '/wp-content/uploads/circulars/07-2025.pdf' ],
	[ 'number' => '06/2025',   'title' => 'Guidelines for Conducting Grama Sabha Meetings and Public Consultations',                             'date' => '2025-04-28', 'url' => '/wp-content/uploads/circulars/06-2025.pdf' ],
	[ 'number' => '05/2025',   'title' => 'Data Protection and Privacy Framework for Public Sector Information Systems',                         'date' => '2025-04-02', 'url' => '/wp-content/uploads/circulars/05-2025.pdf' ],
	[ 'number' => '04/2025',   'title' => 'National Policy on Senior Citizens Welfare and Social Protection',                                    'date' => '2025-03-10', 'url' => '/wp-content/uploads/circulars/04-2025.pdf' ],
	[ 'number' => '03/2025',   'title' => 'Standardization of Office Procedures and Records Management',                                         'date' => '2025-02-20', 'url' => '/wp-content/uploads/circulars/03-2025.pdf' ],
	[ 'number' => '02/2025',   'title' => 'Implementation of E-Services Platform for Public Service Delivery',                                   'date' => '2025-01-25', 'url' => '/wp-content/uploads/circulars/02-2025.pdf' ],
	[ 'number' => '01/2025',   'title' => 'New Year Administrative Directives for Public Sector Efficiency',                                     'date' => '2025-01-05', 'url' => '/wp-content/uploads/circulars/01-2025.pdf' ],
	[ 'number' => '18/2024',   'title' => 'Year-End Financial Reconciliation and Reporting Procedures',                                          'date' => '2024-12-15', 'url' => '/wp-content/uploads/circulars/18-2024.pdf' ],
	[ 'number' => '17/2024',   'title' => 'National Climate Resilience and Adaptation Action Plan',                                              'date' => '2024-11-30', 'url' => '/wp-content/uploads/circulars/17-2024.pdf' ],
	[ 'number' => '16/2024',   'title' => 'Revised Scheme of Recruitment for Public Management Assistants',                                      'date' => '2024-11-05', 'url' => '/wp-content/uploads/circulars/16-2024.pdf' ],
	[ 'number' => '15/2024',   'title' => 'Guidelines for Public Private Partnership Projects in Provincial Administration',                      'date' => '2024-10-18', 'url' => '/wp-content/uploads/circulars/15-2024.pdf' ],
	[ 'number' => '14/2024',   'title' => 'Integrated Water Resources Management Policy for Dry Zone Districts',                                  'date' => '2024-09-22', 'url' => '/wp-content/uploads/circulars/14-2024.pdf' ],
	[ 'number' => '13/2024',   'title' => 'Capacity Building Program for Grama Niladhari Officers',                                             'date' => '2024-08-30', 'url' => '/wp-content/uploads/circulars/13-2024.pdf' ],
	[ 'number' => '12/2024',   'title' => 'Election Preparedness Guidelines for District and Divisional Secretariats',                           'date' => '2024-08-05', 'url' => '/wp-content/uploads/circulars/12-2024.pdf' ],
	[ 'number' => '11/2024',   'title' => 'National Policy on Disability Inclusion and Accessible Public Services',                              'date' => '2024-07-15', 'url' => '/wp-content/uploads/circulars/11-2024.pdf' ],
	[ 'number' => '10/2024',   'title' => 'Implementation of Asset Management System for Government Properties',                                 'date' => '2024-06-28', 'url' => '/wp-content/uploads/circulars/10-2024.pdf' ],
	[ 'number' => '09/2024',   'title' => 'Mid-Year Budget Review and Reallocation Procedures',                                                  'date' => '2024-06-10', 'url' => '/wp-content/uploads/circulars/09-2024.pdf' ],
	[ 'number' => '08/2024',   'title' => 'Framework for Monitoring and Evaluation of Development Programs',                                     'date' => '2024-05-20', 'url' => '/wp-content/uploads/circulars/08-2024.pdf' ],
	[ 'number' => '07/2024',   'title' => 'Guidelines for Disaster Preparedness and Early Warning Systems',                                     'date' => '2024-04-25', 'url' => '/wp-content/uploads/circulars/07-2024.pdf' ],
	[ 'number' => '06/2024',   'title' => 'Digital Literacy Program for Public Sector Employees',                                                'date' => '2024-04-01', 'url' => '/wp-content/uploads/circulars/06-2024.pdf' ],
	[ 'number' => '05/2024',   'title' => 'Standardization of Public Service Delivery Timelines',                                                'date' => '2024-03-10', 'url' => '/wp-content/uploads/circulars/05-2024.pdf' ],
	[ 'number' => '04/2024',   'title' => 'Revised Housing Loan Scheme for Government Officers',                                                'date' => '2024-02-15', 'url' => '/wp-content/uploads/circulars/04-2024.pdf' ],
	[ 'number' => '03/2024',   'title' => 'Policy on Gender Equality and Women Empowerment in Public Administration',                              'date' => '2024-01-28', 'url' => '/wp-content/uploads/circulars/03-2024.pdf' ],
	[ 'number' => '02/2024',   'title' => 'Annual Performance Targets and Key Result Areas for 2024',                                            'date' => '2024-01-12', 'url' => '/wp-content/uploads/circulars/02-2024.pdf' ],
	[ 'number' => '01/2024',   'title' => 'New Year Directives on Public Service Conduct and Discipline',                                         'date' => '2024-01-02', 'url' => '/wp-content/uploads/circulars/01-2024.pdf' ],
];

$circulars_json = json_encode( $circulars );
$years = [];
foreach ( $circulars as $c ) {
	$y = substr( $c['date'], 0, 4 );
	if ( ! in_array( $y, $years ) ) { $years[] = $y; }
}
rsort( $years );
$current_year = date( 'Y' );
?>

<style>
	:root {
		--theme-primary-darker: var(--color-primary-darker);
		--theme-secondary: var(--color-secondary);
		--theme-secondary-light: #fef9e7;
		--theme-secondary-dark: var(--color-gold-deep);
	}

	/* Table Header Override */
	html body .circ-table th.circ-th,
	.circ-th {
		background: var(--color-primary-darker) !important;
		background-color: var(--color-primary-darker) !important;
		color: #ffffff !important;
		padding: 0.75rem 1rem;
		font-weight: 600;
		font-size: 0.875rem;
		border-bottom: 2px solid var(--theme-secondary) !important;
	}

	.circ-td {
		padding: 0.875rem 1rem;
		font-size: 0.875rem;
		border-bottom: 1px solid #f3f4f6;
	}

	.circ-row-even {
		background-color: #ffffff;
	}

	.circ-row-odd {
		background-color: #fdfbf7;
	}

	.circ-row-even:hover, .circ-row-odd:hover {
		background-color: #f7f1e5;
	}

	.circ-number {
		font-weight: 700;
		color: var(--theme-primary-darker);
	}

	.circ-title-text {
		color: #2d3748;
		font-weight: 500;
	}

	.circ-new-badge {
		background-color: var(--theme-secondary);
		color: #ffffff;
		font-size: 0.65rem;
		font-weight: 700;
		text-transform: uppercase;
		padding: 0.15rem 0.5rem;
		border-radius: 9999px;
		margin-right: 0.35rem;
		display: inline-block;
	}

	.circ-dl-btn {
		display: inline-flex;
		align-items: center;
		color: var(--theme-primary-darker);
		font-weight: 600;
		font-size: 0.8125rem;
		transition: color 0.2s;
	}

	.circ-dl-btn:hover {
		color: var(--theme-secondary-dark);
	}

	.circ-select:focus, .circ-search-input:focus {
		border-color: var(--theme-secondary) !important;
		box-shadow: 0 0 0 3px var(--color-secondary-tint-med) !important;
	}

	.circ-page-btn {
		display: inline-flex;
		align-items: center;
		justify-content: center;
		width: 32px;
		height: 32px;
		border-radius: 0.375rem;
		font-size: 0.875rem;
		font-weight: 500;
		color: #4b5563;
		border: 1px solid #e5e7eb;
		background-color: #ffffff;
		transition: all 0.2s;
	}

	.circ-page-btn:hover {
		border-color: var(--theme-secondary);
		color: var(--theme-primary-darker);
	}

	.circ-page-active {
		background-color: var(--theme-primary-darker) !important;
		color: #ffffff !important;
		border-color: var(--theme-primary-darker) !important;
	}
</style>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">

	<!-- Standardized Main Topic Header -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'MINISTRY CIRCULARS', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon">
			<?php esc_html_e( 'Official Circulars Archive', 'homeaffairs' ); ?>
		</h1>
		</div>

	<!-- Controls Section (Filter & Search) -->
	<div id="circular-controls" class="bg-white rounded-xl shadow-[0_2px_20px_rgba(0,0,0,0.05)] border border-amber-100 p-5 mb-8 circular-filter-bar">
		<div class="flex flex-col lg:flex-row gap-4 items-start lg:items-end">
			<div class="w-full lg:w-48">
				<label for="circ-year" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5"><?php esc_html_e( 'Filter by Year', 'homeaffairs' ); ?></label>
				<select id="circ-year" class="circ-select w-full rounded-lg border border-gray-200 bg-white px-3.5 py-2.5 text-sm text-gray-700 appearance-none cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
					<option value="all"><?php esc_html_e( 'All Years', 'homeaffairs' ); ?></option>
					<?php foreach ( $years as $y ) : ?>
						<option value="<?php echo esc_attr($y); ?>" <?php selected( $y, $current_year ); ?>><?php echo esc_html($y); ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="w-full flex-1 relative">
				<label for="circ-search" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5"><?php esc_html_e( 'Search Keyword / Number', 'homeaffairs' ); ?></label>
				<div class="relative">
					<i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-amber-600/50 text-sm pointer-events-none"></i>
					<input type="text" id="circ-search" class="circ-search-input w-full rounded-lg border border-gray-200 bg-white pl-10 pr-4 py-2.5 text-sm text-gray-700 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary" placeholder="<?php esc_attr_e( 'Search circulars...', 'homeaffairs' ); ?>">
				</div>
			</div>
			<button type="button" id="circ-clear" class="circ-clear-btn flex items-center gap-1.5 px-4 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-[var(--theme-primary-darker)] transition-all duration-200 whitespace-nowrap">
				<i class="fas fa-times text-xs"></i> <?php esc_html_e( 'Clear Filters', 'homeaffairs' ); ?>
			</button>
		</div>
	</div>

	<!-- Stats Info Bar -->
	<div id="circular-stats" class="flex items-center justify-between mb-4 text-sm text-gray-500">
		<span id="circ-count">Showing <strong class="text-[var(--theme-primary-darker)]">0</strong> to <strong class="text-[var(--theme-primary-darker)]">0</strong> of <strong class="text-[var(--theme-primary-darker)]">0</strong> entries</span>
	</div>

	<!-- Table Container -->
	<div class="bg-white rounded-xl shadow-[0_2px_20px_rgba(0,0,0,0.05)] border border-amber-100 overflow-hidden">
		<table class="circ-table w-full">
			<thead>
				<tr>
					<th class="circ-th circ-th-num text-left" style="background-color: var(--color-primary-darker) !important; background: var(--color-primary-darker) !important; color: #ffffff !important;"><?php esc_html_e( 'Circular No.', 'homeaffairs' ); ?></th>
					<th class="circ-th circ-th-title text-left" style="background-color: var(--color-primary-darker) !important; background: var(--color-primary-darker) !important; color: #ffffff !important;"><?php esc_html_e( 'Subject / Title', 'homeaffairs' ); ?></th>
					<th class="circ-th circ-th-date text-left" style="background-color: var(--color-primary-darker) !important; background: var(--color-primary-darker) !important; color: #ffffff !important;"><?php esc_html_e( 'Date', 'homeaffairs' ); ?></th>
					<th class="circ-th circ-th-dl text-right" style="background-color: var(--color-primary-darker) !important; background: var(--color-primary-darker) !important; color: #ffffff !important;"><?php esc_html_e( 'Download', 'homeaffairs' ); ?></th>
				</tr>
			</thead>
			<tbody id="circ-tbody"></tbody>
		</table>
		<div id="circ-empty" class="hidden flex flex-col items-center justify-center py-20 text-gray-600">
			<i class="fas fa-inbox text-5xl mb-4 text-amber-200"></i>
			<p class="text-base font-medium text-gray-600"><?php esc_html_e( 'No circulars found', 'homeaffairs' ); ?></p>
			<p class="text-sm mt-1"><?php esc_html_e( 'Try adjusting your search or filter criteria.', 'homeaffairs' ); ?></p>
		</div>
	</div>

	<!-- Pagination -->
	<div id="circ-pagination" class="flex items-center justify-center gap-1.5 pt-8 mt-6 border-t border-gray-100"></div>
</main>

<script>
(function() {
	var NEW_THRESHOLD = new Date();
	NEW_THRESHOLD.setDate( NEW_THRESHOLD.getDate() - 90 );

	var allData = <?php echo $circulars_json; ?>;
	var filtered = [];
	var page = 1;
	var perPage = 10;

	var yearSelect = document.getElementById('circ-year');
	var searchInput = document.getElementById('circ-search');
	var clearBtn = document.getElementById('circ-clear');
	var tbody = document.getElementById('circ-tbody');
	var emptyEl = document.getElementById('circ-empty');
	var countEl = document.getElementById('circ-count');
	var pagEl = document.getElementById('circ-pagination');

	function pad( n ) { return n < 10 ? '0' + n : n; }

	function formatDate( iso ) {
		var d = new Date( iso + 'T00:00:00' );
		var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
		return pad( d.getDate() ) + ' ' + months[ d.getMonth() ] + ' ' + d.getFullYear();
	}

	function isNew( iso ) {
		var d = new Date( iso + 'T00:00:00' );
		return d >= NEW_THRESHOLD;
	}

	function filterData() {
		var year = yearSelect.value;
		var q = searchInput.value.toLowerCase().trim();

		filtered = allData.filter( function( item ) {
			if ( year !== 'all' && item.date.substr(0,4) !== year ) { return false; }
			if ( q !== '' ) {
				var num = item.number.toLowerCase();
				var title = item.title.toLowerCase();
				if ( num.indexOf(q) === -1 && title.indexOf(q) === -1 ) { return false; }
			}
			return true;
		});

		page = 1;
		render();
	}

	function render() {
		var total = filtered.length;
		var totalPages = Math.ceil( total / perPage ) || 1;
		if ( page > totalPages ) { page = totalPages; }

		var start = ( page - 1 ) * perPage;
		var end = Math.min( start + perPage, total );
		var pageData = filtered.slice( start, end );

		if ( total === 0 ) {
			tbody.innerHTML = '';
			emptyEl.classList.remove('hidden');
			countEl.innerHTML = 'Showing <strong class="text-[var(--theme-primary-darker)]">0</strong> to <strong class="text-[var(--theme-primary-darker)]">0</strong> of <strong class="text-[var(--theme-primary-darker)]">0</strong> entries';
			pagEl.innerHTML = '';
			return;
		}
		emptyEl.classList.add('hidden');

		var html = '';
		for ( var i = 0; i < pageData.length; i++ ) {
			var c = pageData[i];
			var rowClass = ( start + i ) % 2 === 0 ? 'circ-row-even' : 'circ-row-odd';
			var badge = isNew( c.date ) ? '<span class="circ-new-badge">New</span>' : '';
			html += '<tr class="' + rowClass + '">';
			html += '<td class="circ-td circ-td-num"><span class="circ-number">' + c.number + '</span></td>';
			html += '<td class="circ-td circ-td-title">' + badge + ' <span class="circ-title-text">' + c.title + '</span></td>';
			html += '<td class="circ-td circ-td-date"><i class="far fa-calendar-alt text-amber-600 mr-1.5"></i>' + formatDate( c.date ) + '</td>';
			html += '<td class="circ-td circ-td-dl text-right"><a href="' + c.url + '" class="circ-dl-btn" target="_blank"><i class="fas fa-file-pdf text-[var(--theme-primary-darker)] mr-2"></i>PDF Download</a></td>';
			html += '</tr>';
		}
		tbody.innerHTML = html;

		countEl.innerHTML = 'Showing <strong class="text-[var(--theme-primary-darker)]">' + ( total > 0 ? start + 1 : 0 ) + '</strong> to <strong class="text-[var(--theme-primary-darker)]">' + end + '</strong> of <strong class="text-[var(--theme-primary-darker)]">' + total + '</strong> entries';

		var phtml = '';
		var prevDisabled = page <= 1 ? ' opacity-40 pointer-events-none' : '';
		phtml += '<a href="#" class="circ-page-btn' + prevDisabled + '" data-page="' + ( page - 1 ) + '"><i class="fas fa-chevron-left" style="font-size:10px"></i></a>';

		for ( var p = 1; p <= totalPages; p++ ) {
			var active = p === page ? ' circ-page-active' : '';
			phtml += '<a href="#" class="circ-page-btn' + active + '" data-page="' + p + '">' + p + '</a>';
		}

		var nextDisabled = page >= totalPages ? ' opacity-40 pointer-events-none' : '';
		phtml += '<a href="#" class="circ-page-btn' + nextDisabled + '" data-page="' + ( page + 1 ) + '"><i class="fas fa-chevron-right" style="font-size:10px"></i></a>';

		pagEl.innerHTML = phtml;

		[].forEach.call( pagEl.querySelectorAll('.circ-page-btn'), function( btn ) {
			btn.addEventListener('click', function( e ) {
				e.preventDefault();
				var p = parseInt( this.getAttribute('data-page'), 10 );
				if ( p >= 1 && p <= totalPages ) {
					page = p;
					render();
					document.getElementById('circular-controls').scrollIntoView({ behavior: 'smooth', block: 'start' });
				}
			});
		});
	}

	yearSelect.addEventListener('change', filterData );
	searchInput.addEventListener('input', filterData );

	clearBtn.addEventListener('click', function() {
		yearSelect.value = 'all';
		searchInput.value = '';
		filterData();
		searchInput.focus();
	});

	filterData();
})();
</script>

<?php get_footer(); ?>