<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Special Notices Portal
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$intro_title = "Special Notices & Announcements";

/**
 * Special notice entries
 * Structure: [title, ref, category, publish_date, has_attachment, notice_url, attachment_url]
 */
$notices = [
	[ 'title' => 'Revision of Grama Niladhari Service Conditions — 2026',                 'ref' => 'MOHA/2026/SN/01', 'category' => 'policy',  'publish_date' => '2026-07-18', 'notice_url' => '/wp-content/uploads/notices/2026/sn01-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn01-schedule.pdf' ],
	[ 'title' => 'Application Call for Development Officer Recruitment 2026',            'ref' => 'MOHA/2026/SN/02', 'category' => 'urgent', 'publish_date' => '2026-07-15', 'notice_url' => '/wp-content/uploads/notices/2026/sn02-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn02-application.pdf' ],
	[ 'title' => 'Closure of Ministry Offices for Public Holiday — July 2026',           'ref' => 'MOHA/2026/SN/03', 'category' => 'general', 'publish_date' => '2026-07-12', 'notice_url' => '/wp-content/uploads/notices/2026/sn03-notice.pdf',   'attachment_url' => '' ],
	[ 'title' => 'Establishment Circular 05/2026 — Revised Leave Code Implementation',   'ref' => 'MOHA/2026/SN/04', 'category' => 'policy',  'publish_date' => '2026-07-10', 'notice_url' => '/wp-content/uploads/notices/2026/sn04-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn04-circular.pdf' ],
	[ 'title' => 'Press Release — National Anti-Drug Campaign Progress Report',          'ref' => 'MOHA/2026/SN/05', 'category' => 'press',   'publish_date' => '2026-07-08', 'notice_url' => '/wp-content/uploads/notices/2026/sn05-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn05-report.pdf' ],
	[ 'title' => 'Urgent — Temporary Transfer of Divisional Secretaries (Western Province)', 'ref' => 'MOHA/2026/SN/06', 'category' => 'urgent', 'publish_date' => '2026-07-05', 'notice_url' => '/wp-content/uploads/notices/2026/sn06-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn06-order.pdf' ],
	[ 'title' => 'New Guidelines for Circuit Bungalow Booking Procedure',                'ref' => 'MOHA/2026/SN/07', 'category' => 'policy',  'publish_date' => '2026-07-01', 'notice_url' => '/wp-content/uploads/notices/2026/sn07-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn07-guidelines.pdf' ],
	[ 'title' => 'General Notice — Maintenance of Service Records for Pension Eligibility','ref' => 'MOHA/2026/SN/08', 'category' => 'general', 'publish_date' => '2026-06-28', 'notice_url' => '/wp-content/uploads/notices/2026/sn08-notice.pdf',   'attachment_url' => '' ],
	[ 'title' => 'Press Release — Digital Signature Rollout Completion',                 'ref' => 'MOHA/2026/SN/09', 'category' => 'press',   'publish_date' => '2026-06-25', 'notice_url' => '/wp-content/uploads/notices/2026/sn09-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn09-media.pdf' ],
	[ 'title' => 'Urgent — Extension of Application Deadline for Management Assistant Recruitment','ref' => 'MOHA/2026/SN/10', 'category' => 'urgent', 'publish_date' => '2026-06-22', 'notice_url' => '/wp-content/uploads/notices/2026/sn10-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn10-addendum.pdf' ],
	[ 'title' => 'Policy Update — Revised Procurement Thresholds for Divisional Secretariats', 'ref' => 'MOHA/2026/SN/11', 'category' => 'policy',  'publish_date' => '2026-06-20', 'notice_url' => '/wp-content/uploads/notices/2026/sn11-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn11-procurement-guide.pdf' ],
	[ 'title' => 'General Notice — Annual Stock Verification Schedule 2026',             'ref' => 'MOHA/2026/SN/12', 'category' => 'general', 'publish_date' => '2026-06-18', 'notice_url' => '/wp-content/uploads/notices/2026/sn12-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn12-stock-form.pdf' ],
	[ 'title' => 'Press Release — Ministry Wins eGovernance Excellence Award 2026',      'ref' => 'MOHA/2026/SN/13', 'category' => 'press',   'publish_date' => '2026-06-15', 'notice_url' => '/wp-content/uploads/notices/2026/sn13-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn13-award.pdf' ],
	[ 'title' => 'Urgent — Flood Relief Coordination Centres Activation Notice',          'ref' => 'MOHA/2026/SN/14', 'category' => 'urgent', 'publish_date' => '2026-06-12', 'notice_url' => '/wp-content/uploads/notices/2026/sn14-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn14-relief-plan.pdf' ],
	[ 'title' => 'General Notice — Office Timings During Ramadan 2026',                  'ref' => 'MOHA/2026/SN/15', 'category' => 'general', 'publish_date' => '2026-06-10', 'notice_url' => '/wp-content/uploads/notices/2026/sn15-notice.pdf',   'attachment_url' => '' ],
	[ 'title' => 'Policy Update — Revised Code of Conduct for Public Officers',          'ref' => 'MOHA/2026/SN/16', 'category' => 'policy',  'publish_date' => '2026-06-08', 'notice_url' => '/wp-content/uploads/notices/2026/sn16-notice.pdf',   'attachment_url' => '/wp-content/uploads/notices/2026/sn16-conduct.pdf' ],
];

$notices_json = json_encode( $notices );
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
	<!-- Section Header matching Services Hub Layout -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'PUBLICATIONS & ANNOUNCEMENTS', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker"><?php echo esc_html( $intro_title ); ?></h1>
	</div>

	<!-- Filter Hub Box matching Bid Documents Style -->
	<div id="sn-filter-hub" class="bg-white rounded-2xl shadow-sm hover:shadow-md border border-gray-100 p-5 lg:p-6 mb-8 transition-shadow duration-300 sn-filter-bar">
		<div class="flex flex-wrap items-center gap-2 mb-5">
			<button type="button" class="sn-type-btn active" data-category="all">All Notices</button>
			<button type="button" class="sn-type-btn" data-category="urgent">Urgent Announcements</button>
			<button type="button" class="sn-type-btn" data-category="general">General Notices</button>
			<button type="button" class="sn-type-btn" data-category="policy">Policy Updates</button>
			<button type="button" class="sn-type-btn" data-category="press">Press Releases</button>
		</div>
		<div class="flex flex-col sm:flex-row gap-3 items-start sm:items-end">
			<div class="w-full flex-1 relative">
				<label for="sn-search" class="block text-xs font-semibold text-gray-500 uppercase tracking-wider mb-1.5">Search by Notice Title or Reference</label>
				<div class="relative">
					<i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-600 text-sm pointer-events-none"></i>
					<input type="text" id="sn-search" class="sn-search-input w-full rounded-lg border border-gray-200 bg-white pl-10 pr-4 py-2.5 text-sm text-gray-700 placeholder:text-gray-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary" placeholder="e.g. MOHA/2026/SN/01, policy, urgent...">
				</div>
			</div>
			<button type="button" id="sn-clear" class="sn-clear-btn flex items-center gap-1.5 px-4 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-primary-darker transition-all duration-200 whitespace-nowrap">
				<i class="fas fa-times text-xs"></i> Reset
			</button>
		</div>
	</div>

	<!-- Table Container -->
	<div class="overflow-x-auto -mx-4 sm:mx-0">
		<table id="sn-table" class="sn-table w-full text-left">
			<thead class="sn-thead">
				<tr>
					<th class="sn-th" style="min-width:260px;">Notice Title & Reference</th>
					<th class="sn-th">Category</th>
					<th class="sn-th" style="min-width:170px;">Publication Date & Status</th>
					<th class="sn-th" style="min-width:220px;">Resource Actions / Downloads</th>
				</tr>
			</thead>
			<tbody id="sn-body"></tbody>
		</table>
	</div>

	<!-- Empty State -->
	<div id="sn-empty" class="hidden flex flex-col items-center justify-center py-20 text-gray-600">
		<div class="w-20 h-20 bg-primary-darker/5 rounded-2xl flex items-center justify-center mb-5">
			<i class="fas fa-bullhorn text-3xl text-primary-darker"></i>
		</div>
		<p class="text-base font-medium text-gray-700">No notices match your current criteria.</p>
		<p class="text-sm text-gray-500 mt-1">Please adjust the category or search term above.</p>
	</div>
</main>

<style>
/* Custom Deep SECONDARY (var(--color-primary-darker)) & SECONDARY (var(--color-secondary)) Theme Styles */
.sn-type-btn {
	padding: 0.5rem 1rem;
	font-size: 0.875rem;
	font-weight: 500;
	border-radius: 9999px;
	border: 1px solid #e5e7eb;
	background-color: #f9fafb;
	color: #4b5563;
	transition: all 0.2s ease;
}
.sn-type-btn:hover {
	border-color: var(--color-secondary);
	color: var(--color-primary-darker);
}
.sn-type-btn.active {
	background-color: var(--color-primary-darker);
	border-color: var(--color-primary-darker);
	color: #ffffff;
}

.sn-search-input:focus {
	border-color: var(--color-primary-darker) !important;
	box-shadow: 0 0 0 2px var(--color-primary-darker-tint-10);
}

.sn-thead {
	background-color: var(--color-primary-darker);
	color: #ffffff;
}
.sn-th {
	padding: 1rem 1.25rem;
	font-size: 0.8125rem;
	font-weight: 600;
	text-transform: uppercase;
	letter-spacing: 0.05em;
}
.sn-th:first-child {
	border-top-left-radius: 0.75rem;
}
.sn-th:last-child {
	border-top-right-radius: 0.75rem;
}

.sn-row {
	border-bottom: 1px solid #f3f4f6;
	transition: background-color 0.15s ease;
}
.sn-row-even {
	background-color: #ffffff;
}
.sn-row-odd {
	background-color: #fcfbf9;
}
.sn-row:hover {
	background-color: #fcf8f6;
}

.sn-td {
	padding: 1.25rem;
	font-size: 0.875rem;
	color: #374151;
	vertical-align: middle;
}

.sn-title {
	display: block;
	font-size: 0.95rem;
	font-weight: 700;
	color: #1f2937;
	margin-bottom: 0.25rem;
}

.sn-cat-badge {
	display: inline-flex;
	align-items: center;
	gap: 0.375rem;
	padding: 0.35rem 0.75rem;
	border-radius: 9999px;
	font-size: 0.75rem;
	font-weight: 600;
	white-space: nowrap;
}
.sn-cat-badge-urgent { background-color: rgba(239, 68, 68, 0.1); color: #dc2626; }
.sn-cat-badge-general { background-color: rgba(59, 130, 246, 0.1); color: #1d4ed8; }
.sn-cat-badge-policy { background-color: var(--color-secondary-tint-strong); color: var(--color-gold-dark); }
.sn-cat-badge-press { background-color: rgba(16, 185, 129, 0.1); color: #047857; }

.sn-date {
	display: flex;
	flex-direction: column;
	gap: 0.375rem;
}
.sn-date-row {
	display: flex;
	align-items: center;
	gap: 0.5rem;
	font-size: 0.8125rem;
	color: #4b5563;
}
.sn-date-row i {
	color: var(--color-secondary);
	font-size: 0.75rem;
}
.sn-date-text {
	font-size: 0.85rem;
	font-weight: 600;
	color: #1f2937;
}

.sn-new-badge {
	display: inline-flex;
	align-items: center;
	gap: 0.25rem;
	font-size: 0.65rem;
	font-weight: 700;
	background-color: #ef4444;
	color: #ffffff;
	padding: 0.1rem 0.4rem;
	border-radius: 4px;
	width: fit-content;
	text-transform: uppercase;
}

/* Action Button Styles */
.sn-actions {
	display: flex;
	flex-wrap: wrap;
	gap: 6px;
}

.sn-btn {
	display: inline-flex !important;
	flex-direction: row !important;
	align-items: center !important;
	justify-content: center !important;
	flex-wrap: nowrap !important;
	gap: 6px !important;
	padding: 7px 12px !important;
	font-size: 12px !important;
	font-weight: 600 !important;
	border-radius: 6px !important;
	transition: all 0.2s ease !important;
	text-decoration: none !important;
	white-space: nowrap !important;
	line-height: 1.2 !important;
}

.sn-btn-primary {
	background: linear-gradient(135deg, var(--color-primary-darker) 0%, var(--color-maroon-black)) !important;
	color: #ffffff !important;
	border: 1px solid var(--color-primary-darker) !important;
	box-shadow: 0 2px 4px var(--color-primary-darker-tint-15);
}
.sn-btn-primary i,
.sn-btn-primary i::before {
	color: var(--color-secondary) !important;
	font-size: 11px !important;
}
.sn-btn-primary:hover {
	background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-gold-deep)) !important;
	color: var(--color-primary-darker) !important;
	border-color: var(--color-secondary) !important;
}
.sn-btn-primary:hover i,
.sn-btn-primary:hover i::before {
	color: var(--color-primary-darker) !important;
}

.sn-btn-outline {
	background-color: #f9fafb !important;
	color: #374151 !important;
	border: 1px solid #e5e7eb !important;
}
.sn-btn-outline i,
.sn-btn-outline i::before {
	color: var(--color-primary-darker) !important;
	font-size: 11px !important;
}
.sn-btn-outline:hover {
	background-color: var(--color-primary-darker) !important;
	color: #ffffff !important;
	border-color: var(--color-primary-darker) !important;
}
.sn-btn-outline:hover i,
.sn-btn-outline:hover i::before {
	color: var(--color-secondary) !important;
}
</style>

<script>
(function() {
	var allData = <?php echo $notices_json; ?>;
	var filtered = [];
	var activeCategory = 'all';

	var typeBtns = document.querySelectorAll('.sn-type-btn');
	var searchInput = document.getElementById('sn-search');
	var clearBtn = document.getElementById('sn-clear');
	var tbody = document.getElementById('sn-body');
	var emptyEl = document.getElementById('sn-empty');

	var catIcons = {
		urgent: 'fa-exclamation-triangle',
		general: 'fa-bullhorn',
		policy: 'fa-file-lines',
		press: 'fa-newspaper'
	};

	var catLabels = {
		urgent: 'Urgent',
		general: 'General',
		policy: 'Policy',
		press: 'Press'
	};

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

	function daysSince( iso ) {
		var now = new Date();
		now.setHours(0,0,0,0);
		var target = new Date( iso + 'T00:00:00' );
		target.setHours(0,0,0,0);
		return Math.floor( ( now - target ) / ( 1000 * 60 * 60 * 24 ) );
	}

	function filterData() {
		var q = searchInput.value.toLowerCase().trim();

		filtered = allData.filter( function( item ) {
			if ( activeCategory !== 'all' && item.category !== activeCategory ) { return false; }
			if ( q !== '' ) {
				var title = item.title.toLowerCase();
				var ref = item.ref.toLowerCase();
				var cat = item.category.toLowerCase();
				if ( title.indexOf(q) === -1 && ref.indexOf(q) === -1 && cat.indexOf(q) === -1 ) {
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
			var n = filtered[i];
			var rowClass = ( i % 2 === 0 ) ? 'sn-row-even' : 'sn-row-odd';

			var badgeClass = 'sn-cat-badge-' + n.category;
			var catIcon = catIcons[ n.category ] || 'fa-tag';
			var catLabel = catLabels[ n.category ] || n.category;

			var days = daysSince( n.publish_date );
			var newBadge = ( days <= 7 )
				? '<span class="sn-new-badge"><i class="fas fa-bolt"></i> New</span>'
				: '';

			var attachBtn = n.attachment_url
				? '<a href="' + n.attachment_url + '" class="sn-btn sn-btn-primary" target="_blank"><i class="fas fa-download"></i> Attachment</a>'
				: '<span class="sn-btn sn-btn-outline" style="opacity:0.4;cursor:default"><i class="fas fa-ban"></i> No File</span>';

			html += '<tr class="sn-row ' + rowClass + '">';
			html += '<td class="sn-td" data-label="Notice Title">';
			html += '<span class="sn-title">' + n.title + '</span>';
			
			html += '</td>';
			html += '<td class="sn-td" data-label="Category">';
			html += '<span class="sn-cat-badge ' + badgeClass + '"><i class="fas ' + catIcon + '"></i> ' + catLabel + '</span>';
			html += '</td>';
			html += '<td class="sn-td" data-label="Published Date">';
			html += '<div class="sn-date">';
			html += '<span class="sn-date-text">' + formatDate( n.publish_date ) + '</span>';
			if ( newBadge ) { html += newBadge; }
			html += '</div></td>';
			html += '<td class="sn-td sn-td-last" data-label="Actions">';
			html += '<div class="sn-actions">';
			html += '<a href="' + n.notice_url + '" class="sn-btn sn-btn-outline" target="_blank"><i class="fas fa-file-alt"></i> Notice</a>';
			html += attachBtn;
			html += '</div></td>';
			html += '</tr>';
		}
		tbody.innerHTML = html;
	}

	typeBtns.forEach(function( btn ) {
		btn.addEventListener('click', function() {
			typeBtns.forEach(function( b ) { b.classList.remove('active'); });
			this.classList.add('active');
			activeCategory = this.getAttribute('data-category');
			filterData();
		});
	});

	searchInput.addEventListener('input', filterData );

	clearBtn.addEventListener('click', function() {
		typeBtns.forEach(function( b ) { b.classList.remove('active'); });
		document.querySelector('.sn-type-btn[data-category="all"]').classList.add('active');
		activeCategory = 'all';
		searchInput.value = '';
		filterData();
		searchInput.focus();
	});

	filterData();
})();
</script>

<?php get_footer(); ?>