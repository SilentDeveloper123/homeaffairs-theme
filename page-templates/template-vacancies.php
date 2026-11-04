<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Vacancies Hub Template
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$intro_title = "Vacancies & Career Opportunities";

/**
 * Vacancy entries
 * Structure: [title, grade, type, department, category, deadline, status, circular_url, app_url]
 */
$vacancies = [
	[ 'title' => 'Grama Niladhari Officer Recruitment 2026',                                 'grade' => 'Grade III',                     'type' => 'open',     'department' => 'Grama Niladhari Service',                        'category' => 'General Administration', 'deadline' => '2026-08-15', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/gn-recruitment-circular.pdf',    'app_url' => '/wp-content/uploads/vacancies/2026/gn-recruitment-application.pdf' ],
	[ 'title' => 'Public Management Assistant Recruitment 2026',                           'grade' => 'Grade II / III',                'type' => 'open',     'department' => 'Clerical Service',                                       'category' => 'General Administration', 'deadline' => '2026-09-01', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/pma-recruitment-circular.pdf',  'app_url' => '/wp-content/uploads/vacancies/2026/pma-recruitment-application.pdf' ],
	[ 'title' => 'Development Officer Recruitment 2026',                                   'grade' => 'Grade III',                     'type' => 'open',     'department' => 'Development Officer Service',                    'category' => 'Development & Planning', 'deadline' => '2026-07-30', 'status' => 'urgent','circular_url' => '/wp-content/uploads/vacancies/2026/do-recruitment-circular.pdf',    'app_url' => '/wp-content/uploads/vacancies/2026/do-recruitment-application.pdf' ],
	[ 'title' => 'Technical Assistant Officer Recruitment 2026',                         'grade' => 'Grade III',                     'type' => 'open',     'department' => 'Technological Service',                                  'category' => 'Technical Services',     'deadline' => '2026-09-15', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/tao-recruitment-circular.pdf',   'app_url' => '/wp-content/uploads/vacancies/2026/tao-recruitment-application.pdf' ],
	[ 'title' => 'Samurdhi Development Officer Recruitment 2026',                          'grade' => 'Grade III',                     'type' => 'open',     'department' => 'Samurdhi Development Service',                   'category' => 'Social Services',        'deadline' => '2026-08-30', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/sdo-recruitment-circular.pdf',   'app_url' => '/wp-content/uploads/vacancies/2026/sdo-recruitment-application.pdf' ],
	[ 'title' => 'Office Management Assistant (Sinhala Medium)',                           'grade' => 'Grade III',                     'type' => 'open',     'department' => 'Clerical Service',                                       'category' => 'General Administration', 'deadline' => '2026-07-25', 'status' => 'urgent','circular_url' => '/wp-content/uploads/vacancies/2026/oma-recruitment-circular.pdf',    'app_url' => '/wp-content/uploads/vacancies/2026/oma-recruitment-application.pdf' ],
	[ 'title' => 'Internal Promotion — Grama Niladhari Grade II',                          'grade' => 'Grade II (Promotion)',          'type' => 'internal', 'department' => 'Grama Niladhari Service',                        'category' => 'General Administration', 'deadline' => '2026-08-10', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/gn-promotion-circular.pdf',      'app_url' => '/wp-content/uploads/vacancies/2026/gn-promotion-application.pdf' ],
	[ 'title' => 'EB Exam — Public Management Assistant Grade I',                          'grade' => 'Grade I (EB Exam)',             'type' => 'internal', 'department' => 'Clerical Service',                                       'category' => 'General Administration', 'deadline' => '2026-09-20', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/pma-eb-exam-circular.pdf',       'app_url' => '/wp-content/uploads/vacancies/2026/pma-eb-exam-application.pdf' ],
	[ 'title' => 'Internal Promotion — Development Officer Grade II',                      'grade' => 'Grade II (Promotion)',          'type' => 'internal', 'department' => 'Development Officer Service',                    'category' => 'Development & Planning', 'deadline' => '2026-07-28', 'status' => 'urgent','circular_url' => '/wp-content/uploads/vacancies/2026/do-promotion-circular.pdf',        'app_url' => '/wp-content/uploads/vacancies/2026/do-promotion-application.pdf' ],
	[ 'title' => 'EB Exam — Technical Assistant Grade II',                                 'grade' => 'Grade II (EB Exam)',            'type' => 'internal', 'department' => 'Technological Service',                                  'category' => 'Technical Services',     'deadline' => '2026-10-01', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/tao-eb-exam-circular.pdf',        'app_url' => '/wp-content/uploads/vacancies/2026/tao-eb-exam-application.pdf' ],
	[ 'title' => 'Internal Promotion — Accountant Grade II',                               'grade' => 'Grade II (Promotion)',          'type' => 'internal', 'department' => 'Accountants\' Service',                          'category' => 'Finance & Accounts',     'deadline' => '2026-09-05', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/acct-promotion-circular.pdf',    'app_url' => '/wp-content/uploads/vacancies/2026/acct-promotion-application.pdf' ],
	[ 'title' => 'EB Exam — Development Officer Grade II',                                 'grade' => 'Grade II (EB Exam)',            'type' => 'internal', 'department' => 'Development Officer Service',                    'category' => 'Development & Planning', 'deadline' => '2026-08-20', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/do-eb-exam-circular.pdf',         'app_url' => '/wp-content/uploads/vacancies/2026/do-eb-exam-application.pdf' ],
	[ 'title' => 'Internal Promotion — Samurdhi Development Officer Grade II', 'grade' => 'Grade II (Promotion)',          'type' => 'internal', 'department' => 'Samurdhi Development Service',                   'category' => 'Social Services',        'deadline' => '2026-10-15', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/sdo-promotion-circular.pdf',     'app_url' => '/wp-content/uploads/vacancies/2026/sdo-promotion-application.pdf' ],
	[ 'title' => 'EB Exam — Grama Niladhari Grade I',                                       'grade' => 'Grade I (EB Exam)',             'type' => 'internal', 'department' => 'Grama Niladhari Service',                        'category' => 'General Administration', 'deadline' => '2026-11-01', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/gn-eb-exam-circular.pdf',         'app_url' => '/wp-content/uploads/vacancies/2026/gn-eb-exam-application.pdf' ],
	[ 'title' => 'Assistant Divisional Secretary Recruitment 2026',                        'grade' => 'Grade II / III',                'type' => 'open',     'department' => 'Sri Lanka Administrative Service',               'category' => 'General Administration', 'deadline' => '2026-10-30', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/ads-recruitment-circular.pdf',    'app_url' => '/wp-content/uploads/vacancies/2026/ads-recruitment-application.pdf' ],
	[ 'title' => 'Planning Officer Recruitment 2026',                                      'grade' => 'Grade III',                     'type' => 'open',     'department' => 'Sri Lanka Planning Service',                     'category' => 'Development & Planning', 'deadline' => '2026-11-15', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/plan-recruitment-circular.pdf',   'app_url' => '/wp-content/uploads/vacancies/2026/plan-recruitment-application.pdf' ],
	[ 'title' => 'Accountant Recruitment 2026',                                            'grade' => 'Grade III',                     'type' => 'open',     'department' => 'Accountants\' Service',                          'category' => 'Finance & Accounts',     'deadline' => '2026-09-30', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/acct-recruitment-circular.pdf',   'app_url' => '/wp-content/uploads/vacancies/2026/acct-recruitment-application.pdf' ],
	[ 'title' => 'Internal Promotion — Planning Officer Grade II',                         'grade' => 'Grade II (Promotion)',          'type' => 'internal', 'department' => 'Sri Lanka Planning Service',                     'category' => 'Development & Planning', 'deadline' => '2026-10-05', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/plan-promotion-circular.pdf',    'app_url' => '/wp-content/uploads/vacancies/2026/plan-promotion-application.pdf' ],
	[ 'title' => 'EB Exam — Assistant Divisional Secretary Grade I',                       'grade' => 'Grade I (EB Exam)',             'type' => 'internal', 'department' => 'Sri Lanka Administrative Service',               'category' => 'General Administration', 'deadline' => '2026-12-01', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/ads-eb-exam-circular.pdf',        'app_url' => '/wp-content/uploads/vacancies/2026/ads-eb-exam-application.pdf' ],
	[ 'title' => 'Management Assistant (Tamil Medium) Recruitment 2026',                   'grade' => 'Grade III',                     'type' => 'open',     'department' => 'Clerical Service',                                       'category' => 'General Administration', 'deadline' => '2026-08-01', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/ma-tamil-recruitment-circular.pdf','app_url' => '/wp-content/uploads/vacancies/2026/ma-tamil-recruitment-application.pdf' ],
	[ 'title' => 'Internal Promotion — Technical Assistant Grade I',                       'grade' => 'Grade I (Promotion)',           'type' => 'internal', 'department' => 'Technological Service',                                  'category' => 'Technical Services',     'deadline' => '2026-11-20', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/tao-promotion-circular.pdf',     'app_url' => '/wp-content/uploads/vacancies/2026/tao-promotion-application.pdf' ],
	[ 'title' => 'Computer Application Assistant Recruitment 2026',                        'grade' => 'Grade III',                     'type' => 'open',     'department' => 'Information Technology Service',                 'category' => 'Technical Services',     'deadline' => '2026-09-10', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/ita-recruitment-circular.pdf',    'app_url' => '/wp-content/uploads/vacancies/2026/ita-recruitment-application.pdf' ],
	[ 'title' => 'Internal Promotion — Samurdhi Development Officer Grade I','grade' => 'Grade I (Promotion)',            'type' => 'internal', 'department' => 'Samurdhi Development Service',                   'category' => 'Social Services',        'deadline' => '2026-12-15', 'status' => 'open',  'circular_url' => '/wp-content/uploads/vacancies/2026/sdo-promotion-g1-circular.pdf',   'app_url' => '/wp-content/uploads/vacancies/2026/sdo-promotion-g1-application.pdf' ],
	[ 'title' => 'EB Exam — Management Assistant Grade I',                                 'grade' => 'Grade I (EB Exam)',             'type' => 'internal', 'department' => 'Clerical Service',                                       'category' => 'General Administration', 'deadline' => '2026-07-22', 'status' => 'urgent','circular_url' => '/wp-content/uploads/vacancies/2026/ma-eb-exam-circular.pdf',         'app_url' => '/wp-content/uploads/vacancies/2026/ma-eb-exam-application.pdf' ],
];

$vacancies_json = json_encode( $vacancies );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
	<!-- Section Header matching Services Hub -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'CAREER HUB', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon"><?php echo esc_html( $intro_title ); ?></h1>
	</div>

	<!-- Filter Hub Box -->
	<div id="vac-filter-hub" class="bg-white rounded-2xl shadow-sm hover:shadow-md border border-gray-100 p-5 lg:p-6 mb-8 transition-shadow duration-300 vac-filter-bar">
		<div class="flex flex-wrap items-center gap-2 mb-5">
			<button class="vac-type-btn active" data-type="all">All Opportunities</button>
			<button class="vac-type-btn" data-type="open">Open Recruitments</button>
			<button class="vac-type-btn" data-type="internal">Internal Promotions / EB Exams</button>
		</div>
		<div class="flex flex-col sm:flex-row gap-3 items-start sm:items-end">
			<div class="w-full flex-1 relative">
				<label for="vac-search" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Search by Job Title, Department or Category</label>
				<div class="relative">
					<i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-600 text-sm pointer-events-none"></i>
					<input type="text" id="vac-search" class="vac-search-input w-full rounded-lg border border-gray-200 bg-white pl-10 pr-4 py-2.5 text-sm text-gray-700 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary" placeholder="e.g. Grama Niladhari, Management Assistant, Accountant...">
				</div>
			</div>
			<button type="button" id="vac-clear" class="vac-clear-btn flex items-center gap-1.5 px-4 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-maroon transition-all duration-200 whitespace-nowrap">
				<i class="fas fa-times text-xs"></i> Reset
			</button>
		</div>
	</div>

	<!-- Table Container -->
	<div class="overflow-x-auto -mx-4 sm:mx-0">
		<table id="vac-table" class="vac-table w-full text-left">
			<thead class="vac-thead">
				<tr>
					<th class="vac-th" style="min-width:200px;">Vacancy Title & Designation</th>
					<th class="vac-th">Recruitment Type</th>
					<th class="vac-th" style="min-width:180px;">Application Timeline</th>
					<th class="vac-th" style="min-width:190px;">Resources & Actions</th>
				</tr>
			</thead>
			<tbody id="vac-body"></tbody>
		</table>
	</div>

	<!-- Empty State -->
	<div id="vac-empty" class="hidden flex flex-col items-center justify-center py-20 text-gray-600">
		<div class="w-20 h-20 bg-maroon/5 rounded-2xl flex items-center justify-center mb-5">
			<i class="fas fa-briefcase text-3xl text-maroon"></i>
		</div>
		<p class="text-base font-medium text-gray-700">There are no active vacancies matching this criteria at the moment.</p>
		<p class="text-sm text-gray-500 mt-1">Please check back later or adjust your search filters.</p>
	</div>
</main>

<style>
/* Custom SECONDARY (var(--color-maroon)) & SECONDARY (var(--color-secondary)) Theme Styles */
.vac-type-btn {
	padding: 0.5rem 1rem;
	font-size: 0.875rem;
	font-weight: 500;
	border-radius: 9999px;
	border: 1px solid #e5e7eb;
	background-color: #f9fafb;
	color: #4b5563;
	transition: all 0.2s ease;
}
.vac-type-btn:hover {
	border-color: var(--color-secondary);
	color: var(--color-maroon);
}
.vac-type-btn.active {
	background-color: var(--color-maroon);
	border-color: var(--color-maroon);
	color: #ffffff;
}

.vac-search-input:focus {
	border-color: var(--color-maroon) !important;
	box-shadow: 0 0 0 2px var(--color-maroon-tint-10);
}

.vac-thead {
	background-color: var(--color-maroon);
	color: #ffffff;
}
.vac-th {
	padding: 1rem 1.25rem;
	font-size: 0.8125rem;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 0.05em;
}
.vac-th:first-child {
	border-top-left-radius: 0.75rem;
}
.vac-th:last-child {
	border-top-right-radius: 0.75rem;
}

.vac-row {
	border-bottom: 1px solid #f3f4f6;
	transition: background-color 0.15s ease;
}
.vac-row-even {
	background-color: #ffffff;
}
.vac-row-odd {
	background-color: #fcfbf9;
}
.vac-row:hover {
	background-color: #fdf8f6;
}

.vac-td {
	padding: 1.25rem;
	font-size: 0.875rem;
	color: #374151;
	vertical-align: middle;
}

.vac-title {
	display: block;
	font-size: 0.95rem;
	font-weight: 700;
	color: #1f2937;
	margin-bottom: 0.25rem;
}

.vac-grade-tag {
	display: inline-block;
	font-size: 0.7rem;
	font-weight: 600;
	background: var(--color-secondary-tint-strong);
	color: var(--color-gold-dark);
	padding: 0.1rem 0.5rem;
	border-radius: 4px;
	margin-right: 0.5rem;
}

.vac-dept {
	display: block;
	font-size: 0.8125rem;
	color: #6b7280;
	margin-top: 0.25rem;
}

.vac-type-badge {
	display: inline-flex;
	align-items: center;
	gap: 0.375rem;
	padding: 0.35rem 0.75rem;
	border-radius: 9999px;
	font-size: 0.75rem;
	font-weight: 600;
	white-space: nowrap;
}
.vac-type-badge-open {
	background-color: var(--color-secondary-tint-strong);
	color: var(--color-gold-dark);
}
.vac-type-badge-internal {
	background-color: #f3f4f6;
	color: #4b5563;
}

.vac-deadline {
	display: flex;
	align-items: flex-start;
	gap: 0.625rem;
}
.vac-deadline i {
	color: var(--color-secondary);
	margin-top: 0.15rem;
}
.vac-deadline-date {
	display: block;
	font-weight: 600;
	color: #1f2937;
}
.vac-deadline-label {
	display: block;
	font-size: 0.75rem;
	color: #9ca3af;
}

.vac-urgent-badge {
	display: inline-flex;
	align-items: center;
	gap: 0.25rem;
	font-size: 0.7rem;
	font-weight: 600;
	padding: 0.125rem 0.5rem;
	border-radius: 9999px;
	margin-top: 0.35rem;
}
.vac-urgent-badge-today, .vac-urgent-badge-soon {
	background-color: var(--color-maroon-tint-10);
	color: var(--color-maroon);
}

.vac-actions {
	display: flex;
	flex-wrap: wrap;
	gap: 0.5rem;
}

.vac-btn {
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
.vac-btn-outline {
	border: 1px solid #e5e7eb;
	color: #4b5563;
	background-color: #ffffff;
}
.vac-btn-outline:hover {
	border-color: var(--color-maroon);
	color: var(--color-maroon);
	background-color: #fdf8f6;
}
.vac-btn-primary {
	background-color: var(--color-maroon);
	color: #ffffff;
}
.vac-btn-primary:hover {
	background-color: var(--color-maroon-deep);
	color: #ffffff;
}
</style>

<script>
(function() {
	var allData = <?php echo $vacancies_json; ?>;
	var filtered = [];
	var activeType = 'all';

	var typeBtns = document.querySelectorAll('.vac-type-btn');
	var searchInput = document.getElementById('vac-search');
	var clearBtn = document.getElementById('vac-clear');
	var tbody = document.getElementById('vac-body');
	var emptyEl = document.getElementById('vac-empty');

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
			if ( activeType !== 'all' && item.type !== activeType ) { return false; }
			if ( q !== '' ) {
				var title = item.title.toLowerCase();
				var dept = item.department.toLowerCase();
				var cat = item.category.toLowerCase();
				if ( title.indexOf(q) === -1 && dept.indexOf(q) === -1 && cat.indexOf(q) === -1 ) {
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
			var v = filtered[i];
			var rowClass = ( i % 2 === 0 ) ? 'vac-row-even' : 'vac-row-odd';
			var daysLeft = getDaysUntil( v.deadline );

			var typeBadge = v.type === 'open'
				? '<span class="vac-type-badge vac-type-badge-open"><i class="fas fa-bullhorn"></i> Open Recruitment</span>'
				: '<span class="vac-type-badge vac-type-badge-internal"><i class="fas fa-sync-alt"></i> Internal / EB Exam</span>';

			var urgencyHtml = '';
			if ( daysLeft <= 2 ) {
				urgencyHtml = '<span class="vac-urgent-badge vac-urgent-badge-today"><i class="fas fa-exclamation-circle"></i> Closing ' + ( daysLeft <= 0 ? 'Today' : 'Soon' ) + '</span>';
			} else if ( daysLeft <= 7 ) {
				urgencyHtml = '<span class="vac-urgent-badge vac-urgent-badge-soon"><i class="fas fa-clock"></i> Closing Soon</span>';
			}

			html += '<tr class="vac-row ' + rowClass + '">';
			html += '<td class="vac-td" data-label="Vacancy Title">';
			html += '<strong class="vac-title">' + v.title + '</strong>';
			html += '<span class="vac-grade-tag">' + v.grade + '</span>';
			html += '<span class="vac-dept">' + v.department + ' &middot; ' + v.category + '</span>';
			html += '</td>';
			html += '<td class="vac-td" data-label="Recruitment Type">' + typeBadge + '</td>';
			html += '<td class="vac-td" data-label="Application Timeline">';
			html += '<div class="vac-deadline">';
			html += '<i class="far fa-calendar-alt"></i>';
			html += '<div>';
			html += '<span class="vac-deadline-date">' + formatDate( v.deadline ) + '</span>';
			html += '<span class="vac-deadline-label">Deadline</span>';
			if ( urgencyHtml ) { html += urgencyHtml; }
			html += '</div></div></td>';
			html += '<td class="vac-td vac-td-last" data-label="Resources & Actions">';
			html += '<div class="vac-actions">';
			html += '<a href="' + v.circular_url + '" class="vac-btn vac-btn-outline" target="_blank"><i class="fas fa-file-alt"></i> View Circular</a>';
			html += '<a href="' + v.app_url + '" class="vac-btn vac-btn-primary" target="_blank"><i class="fas fa-download"></i> Application</a>';
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
		document.querySelector('.vac-type-btn[data-type="all"]').classList.add('active');
		activeType = 'all';
		searchInput.value = '';
		filterData();
		searchInput.focus();
	});

	filterData();
})();
</script>

<?php get_footer(); ?>