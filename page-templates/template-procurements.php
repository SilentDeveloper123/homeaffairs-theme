<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Procurement Portal Template
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$intro_title = "Procurement & Tender Notices";

/**
 * Procurement entries
 * Structure: [ref, title, category, opening_date, deadline_date, status, specs_url, bidding_url]
 */
$procurements = [
	[ 'ref' => 'MOHA/2026/SEC/04',    'title' => 'Procurement of Office Equipment & IT Hardware for District Secretariats',                    'category' => 'Hardware Supply',        'opening_date' => '2026-08-20', 'deadline_date' => '2026-09-15', 'status' => 'open',   'specs_url' => '/wp-content/uploads/procurement/2026/sec04-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/sec04-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/ADM/12',    'title' => 'Annual Maintenance of Ministry Fleet (Vehicles & Generators)',                            'category' => 'Vehicle Maintenance',    'opening_date' => '2026-08-25', 'deadline_date' => '2026-09-22', 'status' => 'open',   'specs_url' => '/wp-content/uploads/procurement/2026/adm12-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/adm12-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/DEV/07',    'title' => 'Construction of Divisional Secretariat Building — Monaragala District',                     'category' => 'Construction Works',     'opening_date' => '2026-09-01', 'deadline_date' => '2026-10-10', 'status' => 'open',   'specs_url' => '/wp-content/uploads/procurement/2026/dev07-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/dev07-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/FIN/03',    'title' => 'Consultancy Services for Financial Audit Automation System',                              'category' => 'Consultancy Services',   'opening_date' => '2026-08-15', 'deadline_date' => '2026-09-05', 'status' => 'urgent', 'specs_url' => '/wp-content/uploads/procurement/2026/fin03-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/fin03-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/HR/09',     'title' => 'Design & Printing of Official Gazette Supplements (2026-2027)',                           'category' => 'Printing Services',      'opening_date' => '2026-09-10', 'deadline_date' => '2026-10-01', 'status' => 'open',   'specs_url' => '/wp-content/uploads/procurement/2026/hr09-specs.pdf',     'bidding_url' => '/wp-content/uploads/procurement/2026/hr09-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/INF/05',    'title' => 'Supply & Installation of Network Infrastructure for Head Office',                         'category' => 'ICT Infrastructure',     'opening_date' => '2026-08-10', 'deadline_date' => '2026-09-10', 'status' => 'open',   'specs_url' => '/wp-content/uploads/procurement/2026/inf05-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/inf05-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/SEC/03',    'title' => 'Supply of Security Surveillance Systems for Provincial Offices',                          'category' => 'Security Systems',       'opening_date' => '2026-09-05', 'deadline_date' => '2026-10-05', 'status' => 'open',   'specs_url' => '/wp-content/uploads/procurement/2026/sec03-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/sec03-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/DEV/05',    'title' => 'Renovation of Grama Niladhari Division Offices — Northern Province',                      'category' => 'Construction Works',     'opening_date' => '2026-07-15', 'deadline_date' => '2026-08-05', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2026/dev05-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/dev05-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/ADM/10',    'title' => 'Furniture Supply for Divisional Secretariat — Gampaha District',                          'category' => 'Furniture Supply',       'opening_date' => '2026-07-10', 'deadline_date' => '2026-08-01', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2026/adm10-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/adm10-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/FIN/02',    'title' => 'Annual Insurance Coverage for Government Assets (2026-2027)',                             'category' => 'Insurance Services',     'opening_date' => '2026-06-20', 'deadline_date' => '2026-07-20', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2026/fin02-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/fin02-bidding.pdf' ],
	[ 'ref' => 'MOHA/2025/SEC/08',    'title' => 'Supply & Delivery of Stationery Items for Ministry Head Office (2025-2026)',              'category' => 'Stationery Supply',      'opening_date' => '2026-05-10', 'deadline_date' => '2026-06-10', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2025/sec08-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2025/sec08-bidding.pdf' ],
	[ 'ref' => 'MOHA/2025/DEV/11',    'title' => 'Rehabilitation of Rural Access Roads — Ratnapura District',                               'category' => 'Construction Works',     'opening_date' => '2026-04-15', 'deadline_date' => '2026-05-15', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2025/dev11-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2025/dev11-bidding.pdf' ],
	[ 'ref' => 'MOHA/2025/INF/03',    'title' => 'Development of Integrated Document Management System (IDMS)',                             'category' => 'Software Development',   'opening_date' => '2026-03-20', 'deadline_date' => '2026-04-20', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2025/inf03-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2025/inf03-bidding.pdf' ],
	[ 'ref' => 'MOHA/2025/ADM/09',    'title' => 'Janitorial & Cleaning Services for Ministry Premises (2025-2026)',                        'category' => 'Facility Services',      'opening_date' => '2026-02-10', 'deadline_date' => '2026-03-10', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2025/adm09-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2025/adm09-bidding.pdf' ],
	[ 'ref' => 'MOHA/2025/SEC/06',    'title' => 'Supply of Toners, Cartridges & Office Consumables (Annual Contract)',                     'category' => 'Stationery Supply',      'opening_date' => '2026-01-15', 'deadline_date' => '2026-02-15', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2025/sec06-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2025/sec06-bidding.pdf' ],
	[ 'ref' => 'MOHA/2025/DEV/14',    'title' => 'Construction of Public Library Complex — Trincomalee',                                    'category' => 'Construction Works',     'opening_date' => '2025-11-20', 'deadline_date' => '2025-12-20', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2025/dev14-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2025/dev14-bidding.pdf' ],
	[ 'ref' => 'MOHA/2025/INF/02',    'title' => 'Managed IT Support Services for Divisional Secretariats (Southern Province)',             'category' => 'ICT Services',           'opening_date' => '2025-10-05', 'deadline_date' => '2025-11-05', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2025/inf02-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2025/inf02-bidding.pdf' ],
	[ 'ref' => 'MOHA/2025/FIN/01',    'title' => 'External Audit Services for Ministry Accounts FY 2025/2026',                              'category' => 'Consultancy Services',   'opening_date' => '2025-09-01', 'deadline_date' => '2025-10-01', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2025/fin01-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2025/fin01-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/PUB/01',    'title' => 'Publication & Dissemination of Annual Ministry Performance Report',                       'category' => 'Printing Services',      'opening_date' => '2026-09-15', 'deadline_date' => '2026-10-20', 'status' => 'open',   'specs_url' => '/wp-content/uploads/procurement/2026/pub01-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/pub01-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/HR/11',     'title' => 'Training & Capacity Building Programme for Public Officers (Q4 2026)',                    'category' => 'Consultancy Services',   'opening_date' => '2026-10-01', 'deadline_date' => '2026-11-01', 'status' => 'open',   'specs_url' => '/wp-content/uploads/procurement/2026/hr11-specs.pdf',     'bidding_url' => '/wp-content/uploads/procurement/2026/hr11-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/ADM/14',    'title' => 'Procurement of Uniforms & Protective Gear for Security Staff',                            'category' => 'Uniform Supply',         'opening_date' => '2026-09-20', 'deadline_date' => '2026-10-15', 'status' => 'open',   'specs_url' => '/wp-content/uploads/procurement/2026/adm14-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/adm14-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/DEV/08',    'title' => 'Drinking Water Supply Project — Kilinochchi & Mullaitivu Districts',                      'category' => 'Construction Works',     'opening_date' => '2026-10-05', 'deadline_date' => '2026-11-15', 'status' => 'open',   'specs_url' => '/wp-content/uploads/procurement/2026/dev08-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/dev08-bidding.pdf' ],
	[ 'ref' => 'MOHA/2026/INF/06',    'title' => 'Cloud Migration & Data Centre Modernization Programme',                                   'category' => 'ICT Infrastructure',     'opening_date' => '2026-08-28', 'deadline_date' => '2026-07-28', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2026/inf06-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2026/inf06-bidding.pdf' ],
	[ 'ref' => 'MOHA/2025/SEC/05',    'title' => 'Annual Supply of Office Furniture — Phase II (Provincial Councils)',                      'category' => 'Furniture Supply',       'opening_date' => '2025-11-01', 'deadline_date' => '2025-12-01', 'status' => 'closed',   'specs_url' => '/wp-content/uploads/procurement/2025/sec05-specs.pdf',    'bidding_url' => '/wp-content/uploads/procurement/2025/sec05-bidding.pdf' ],
];

$procurements_json = json_encode( $procurements );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
	<!-- Section Header matching Services Hub -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'PROCUREMENT PORTAL', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker"><?php echo esc_html( $intro_title ); ?></h1>
	</div>

	<!-- Filter Hub Box -->
	<div id="proc-filter-hub" class="bg-white rounded-2xl shadow-sm hover:shadow-md border border-gray-100 p-5 lg:p-6 mb-8 transition-shadow duration-300 proc-filter-bar">
		<div class="flex flex-wrap items-center gap-2 mb-5">
			<button class="proc-type-btn active" data-type="all">All Tenders</button>
			<button class="proc-type-btn" data-type="open">Active Bidding</button>
			<button class="proc-type-btn" data-type="closed">Awarded / Closed Tenders</button>
		</div>
		<div class="flex flex-col sm:flex-row gap-3 items-start sm:items-end">
			<div class="w-full flex-1 relative">
				<label for="proc-search" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Search by Tender Ref, Subject or Category</label>
				<div class="relative">
					<i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-600 text-sm pointer-events-none"></i>
					<input type="text" id="proc-search" class="proc-search-input w-full rounded-lg border border-gray-200 bg-white pl-10 pr-4 py-2.5 text-sm text-gray-700 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary" placeholder="e.g. MOHA/2026/SEC/04, Hardware Supply, Construction...">
				</div>
			</div>
			<button type="button" id="proc-clear" class="proc-clear-btn flex items-center gap-1.5 px-4 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-primary-darker transition-all duration-200 whitespace-nowrap">
				<i class="fas fa-times text-xs"></i> Reset
			</button>
		</div>
	</div>

	<!-- Table Container -->
	<div class="overflow-x-auto -mx-4 sm:mx-0">
		<table id="proc-table" class="proc-table w-full text-left">
			<thead class="proc-thead">
				<tr>
					<th class="proc-th" style="min-width:220px;">Tender Identity & Reference</th>
					<th class="proc-th">Procurement Category & Status</th>
					<th class="proc-th" style="min-width:200px;">Bidding Timeline & Deadlines</th>
					<th class="proc-th" style="min-width:200px;">Resource Actions / Downloads</th>
				</tr>
			</thead>
			<tbody id="proc-body"></tbody>
		</table>
	</div>

	<!-- Empty State -->
	<div id="proc-empty" class="hidden flex flex-col items-center justify-center py-20 text-gray-600">
		<div class="w-20 h-20 bg-primary-darker/5 rounded-2xl flex items-center justify-center mb-5">
			<i class="fas fa-file-invoice text-3xl text-primary-darker"></i>
		</div>
		<p class="text-base font-medium text-gray-700">No procurement notices match your current criteria.</p>
		<p class="text-sm text-gray-500 mt-1">Please adjust your filters or check back for new tender notices.</p>
	</div>
</main>

<style>
/* Custom Deep SECONDARY (var(--color-primary-darker)) & SECONDARY (var(--color-secondary)) Theme Styles */
.proc-type-btn {
	padding: 0.5rem 1rem;
	font-size: 0.875rem;
	font-weight: 500;
	border-radius: 9999px;
	border: 1px solid #e5e7eb;
	background-color: #f9fafb;
	color: #4b5563;
	transition: all 0.2s ease;
}
.proc-type-btn:hover {
	border-color: var(--color-secondary);
	color: var(--color-primary-darker);
}
.proc-type-btn.active {
	background-color: var(--color-primary-darker);
	border-color: var(--color-primary-darker);
	color: #ffffff;
}

.proc-search-input:focus {
	border-color: var(--color-primary-darker) !important;
	box-shadow: 0 0 0 2px var(--color-primary-darker-tint-10);
}

.proc-thead {
	background-color: var(--color-primary-darker);
	color: #ffffff;
}
.proc-th {
	padding: 1rem 1.25rem;
	font-size: 0.8125rem;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 0.05em;
}
.proc-th:first-child {
	border-top-left-radius: 0.75rem;
}
.proc-th:last-child {
	border-top-right-radius: 0.75rem;
}

.proc-row {
	border-bottom: 1px solid #f3f4f6;
	transition: background-color 0.15s ease;
}
.proc-row-even {
	background-color: #ffffff;
}
.proc-row-odd {
	background-color: #fcfbf9;
}
.proc-row:hover {
	background-color: #fcf8f6;
}

.proc-td {
	padding: 1.25rem;
	font-size: 0.875rem;
	color: #374151;
	vertical-align: middle;
}

.proc-ref {
	display: inline-block;
	font-size: 0.7rem;
	font-weight: 600;
	background: var(--color-secondary-tint-strong);
	color: var(--color-gold-dark);
	padding: 0.1rem 0.5rem;
	border-radius: 4px;
	margin-bottom: 0.25rem;
}

.proc-subject {
	display: block;
	font-size: 0.95rem;
	font-weight: 700;
	color: #1f2937;
	margin-bottom: 0.25rem;
}

.proc-category-tag {
	display: block;
	font-size: 0.8125rem;
	color: #6b7280;
}

.proc-status-badge {
	display: inline-flex;
	align-items: center;
	gap: 0.375rem;
	padding: 0.35rem 0.75rem;
	border-radius: 9999px;
	font-size: 0.75rem;
	font-weight: 600;
	white-space: nowrap;
}
.proc-status-badge-open {
	background-color: var(--color-secondary-tint-strong);
	color: var(--color-gold-dark);
}
.proc-status-badge-closed {
	background-color: #f3f4f6;
	color: #4b5563;
}
.proc-status-badge-awarded {
	background-color: var(--color-primary-darker-tint-10);
	color: var(--color-primary-darker);
}

.proc-dates {
	display: flex;
	flex-direction: column;
	gap: 0.375rem;
}
.proc-date-row {
	display: flex;
	align-items: center;
	gap: 0.5rem;
	font-size: 0.8125rem;
	color: #4b5563;
}
.proc-date-row i {
	color: var(--color-secondary);
	font-size: 0.75rem;
}
.proc-date-row-text strong {
	color: #1f2937;
}

.proc-urgency-badge {
	display: inline-flex;
	align-items: center;
	gap: 0.25rem;
	font-size: 0.7rem;
	font-weight: 600;
	padding: 0.125rem 0.5rem;
	border-radius: 9999px;
	margin-top: 0.25rem;
	background-color: var(--color-primary-darker-tint-10);
	color: var(--color-primary-darker);
}

.proc-actions {
	display: flex;
	flex-wrap: wrap;
	gap: 0.5rem;
}

.proc-btn {
	display: inline-flex;
	align-items: center;
	gap: 0.375rem;
	padding: 0.5rem 0.875rem;
	font-size: 0.75rem;
	font-weight: 600;
	border-radius: 0.5rem;
	transition: all 0.2s ease;
	white-space: nowrap;
	text-decoration: none;
}
.proc-btn-outline {
	border: 1px solid #e5e7eb;
	color: #4b5563;
	background-color: #ffffff;
}
.proc-btn-outline:hover {
	border-color: var(--color-primary-darker);
	color: var(--color-primary-darker);
	background-color: #fcf8f6;
}
.proc-btn-primary {
	background-color: var(--color-primary-darker);
	color: #ffffff;
}
.proc-btn-primary:hover {
	background-color: var(--color-maroon-black);
	color: #ffffff;
}
</style>

<script>
(function() {
	var allData = <?php echo $procurements_json; ?>;
	var filtered = [];
	var activeType = 'all';

	var typeBtns = document.querySelectorAll('.proc-type-btn');
	var searchInput = document.getElementById('proc-search');
	var clearBtn = document.getElementById('proc-clear');
	var tbody = document.getElementById('proc-body');
	var emptyEl = document.getElementById('proc-empty');

	function formatDate( iso ) {
		var d = new Date( iso + 'T00:00:00' );
		var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
		var day = d.getDate();
		var suffix = 'th';
		if ( day === 1 || day === 21 || day === 31 ) { suffix = 'st'; }
		else if ( day === 2 || day === 22 ) { suffix = 'nd'; }
		else if ( day === 3 || day === 23 ) { suffix = 'rd'; }
		return day + suffix + ' ' + months[ d.getMonth() ] + ' ' + d.getFullYear();
	}

	function getDaysUntil( iso ) {
		var now = new Date();
		now.setHours(0,0,0,0);
		var target = new Date( iso + 'T00:00:00' );
		target.setHours(0,0,0,0);
		return Math.ceil( ( target - now ) / ( 1000 * 60 * 60 * 24 ) );
	}

	function filterData() {
		var q = searchInput.value.toLowerCase().trim();

		filtered = allData.filter( function( item ) {
			if ( activeType !== 'all' ) {
				if ( activeType === 'open' && item.status !== 'open' && item.status !== 'urgent' ) { return false; }
				if ( activeType === 'closed' && item.status !== 'closed' ) { return false; }
			}
			if ( q !== '' ) {
				var ref = item.ref.toLowerCase();
				var title = item.title.toLowerCase();
				var cat = item.category.toLowerCase();
				if ( ref.indexOf(q) === -1 && title.indexOf(q) === -1 && cat.indexOf(q) === -1 ) {
					return false;
				}
			}
			return true;
		});

		render();
	}

	function render() {
		if ( filtered.length === 0 ) {
			tbody.innerHTML = '';
			emptyEl.classList.remove('hidden');
			return;
		}
		emptyEl.classList.add('hidden');

		var html = '';
		for ( var i = 0; i < filtered.length; i++ ) {
			var p = filtered[i];
			var rowClass = ( i % 2 === 0 ) ? 'proc-row-even' : 'proc-row-odd';
			var daysLeft = getDaysUntil( p.deadline_date );

			var badgeClass = 'proc-status-badge-open';
			var badgeIcon = 'fa-bullhorn';
			var badgeText = 'Open for Bidding';
			if ( p.status === 'closed' ) {
				badgeClass = 'proc-status-badge-closed';
				badgeIcon = 'fa-check-circle';
				badgeText = 'Bidding Closed';
			} else if ( p.status === 'awarded' ) {
				badgeClass = 'proc-status-badge-awarded';
				badgeIcon = 'fa-trophy';
				badgeText = 'Tender Awarded';
			}

			var urgencyHtml = '';
			if ( p.status !== 'closed' && p.status !== 'awarded' ) {
				if ( daysLeft <= 0 ) {
					urgencyHtml = '<span class="proc-urgency-badge"><i class="fas fa-hourglass-end"></i> Deadline Passed</span>';
				} else if ( daysLeft <= 2 ) {
					urgencyHtml = '<span class="proc-urgency-badge"><i class="fas fa-exclamation-circle"></i> Deadline Critical</span>';
				} else if ( daysLeft <= 7 ) {
					urgencyHtml = '<span class="proc-urgency-badge"><i class="fas fa-clock"></i> Closing Soon</span>';
				}
			}

			html += '<tr class="proc-row ' + rowClass + '">';
			html += '<td class="proc-td" data-label="Tender Reference">';
			html += '<span class="proc-ref">' + p.ref + '</span>';
			html += '<strong class="proc-subject">' + p.title + '</strong>';
			html += '<span class="proc-category-tag">' + p.category + '</span>';
			html += '</td>';
			html += '<td class="proc-td" data-label="Status">';
			html += '<span class="proc-status-badge ' + badgeClass + '"><i class="fas ' + badgeIcon + '"></i> ' + badgeText + '</span>';
			html += '</td>';
			html += '<td class="proc-td" data-label="Bidding Timeline">';
			html += '<div class="proc-dates">';
			html += '<div class="proc-date-row">';
			html += '<i class="fas fa-calendar-check"></i>';
			html += '<span class="proc-date-row-text">Bid Opening: <strong>' + formatDate( p.opening_date ) + '</strong></span>';
			html += '</div>';
			html += '<div class="proc-date-row">';
			html += '<i class="fas fa-hourglass-half"></i>';
			html += '<span class="proc-date-row-text">Deadline: <strong>' + formatDate( p.deadline_date ) + '</strong></span>';
			html += '</div>';
			if ( urgencyHtml ) { html += urgencyHtml; }
			html += '</div></td>';
			html += '<td class="proc-td proc-td-last" data-label="Resources & Actions">';
			html += '<div class="proc-actions">';
			html += '<a href="' + p.specs_url + '" class="proc-btn proc-btn-outline" target="_blank"><i class="fas fa-file-invoice"></i> Specifications</a>';
			html += '<a href="' + p.bidding_url + '" class="proc-btn proc-btn-primary" target="_blank"><i class="fas fa-download"></i> Bidding Docs</a>';
			html += '</div></td>';
			html += '</tr>';
		}
		tbody.innerHTML = html;
	}

	typeBtns.forEach(function( btn ) {
		btn.addEventListener('click', function() {
			typeBtns.forEach(function( b ) { b.classList.remove('active'); });
			this.classList.add('active');
			activeType = this.getAttribute('data-type');
			filterData();
		});
	});

	searchInput.addEventListener('input', filterData );

	clearBtn.addEventListener('click', function() {
		typeBtns.forEach(function( b ) { b.classList.remove('active'); });
		document.querySelector('.proc-type-btn[data-type="all"]').classList.add('active');
		activeType = 'all';
		searchInput.value = '';
		filterData();
		searchInput.focus();
	});

	filterData();
})();
</script>

<?php get_footer(); ?>