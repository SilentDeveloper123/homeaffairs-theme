<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Exam Results Template
 */

get_header();

get_template_part( 'template-parts/page-banner' );

/**
 * Exam results data
 * Structure: [title, year, gazette, type, date, notice_url, results_url]
 */
$exam_results = [
	[ 'title' => 'Grama Niladhari Service — Competitive Examination 2025',            'year' => '2025', 'gazette' => 'GoSL-2412', 'type' => 'Grama Niladhari Service',          'date' => '2026-06-20', 'notice_url' => '/wp-content/uploads/exams/2025/gn-notice.pdf',             'results_url' => '/wp-content/uploads/exams/2025/gn-results.pdf' ],
	[ 'title' => 'Sri Lanka Technological Service — Open Competitive Exam 2025',     'year' => '2025', 'gazette' => 'GoSL-2408', 'type' => 'Technological Service',          'date' => '2026-06-10', 'notice_url' => '/wp-content/uploads/exams/2025/tech-notice.pdf',          'results_url' => '/wp-content/uploads/exams/2025/tech-results.pdf' ],
	[ 'title' => 'Sri Lanka Clerical Service — Limited Exam 2025',                   'year' => '2025', 'gazette' => 'GoSL-2405', 'type' => 'Clerical Service',               'date' => '2026-05-28', 'notice_url' => '/wp-content/uploads/exams/2025/clerk-notice.pdf',         'results_url' => '/wp-content/uploads/exams/2025/clerk-results.pdf' ],
	[ 'title' => 'Development Officer Service — Competitive Examination 2025',       'year' => '2025', 'gazette' => 'GoSL-2399', 'type' => 'Development Officer Service',    'date' => '2026-05-15', 'notice_url' => '/wp-content/uploads/exams/2025/do-notice.pdf',            'results_url' => '/wp-content/uploads/exams/2025/do-results.pdf' ],
	[ 'title' => 'Sri Lanka Accountants\' Service — Open Competitive Exam 2025',    'year' => '2025', 'gazette' => 'GoSL-2391', 'type' => 'Accountants\' Service',         'date' => '2026-04-22', 'notice_url' => '/wp-content/uploads/exams/2025/acct-notice.pdf',          'results_url' => '/wp-content/uploads/exams/2025/acct-results.pdf' ],
	[ 'title' => 'Public Management Assistants Service — Limited Exam 2025',         'year' => '2025', 'gazette' => 'GoSL-2385', 'type' => 'Clerical Service',               'date' => '2026-04-05', 'notice_url' => '/wp-content/uploads/exams/2025/pma-notice.pdf',          'results_url' => '/wp-content/uploads/exams/2025/pma-results.pdf' ],
	[ 'title' => 'Sri Lanka Planning Service — Competitive Examination 2024',        'year' => '2024', 'gazette' => 'GoSL-2370', 'type' => 'Planning Service',               'date' => '2026-03-18', 'notice_url' => '/wp-content/uploads/exams/2024/plan-notice.pdf',        'results_url' => '/wp-content/uploads/exams/2024/plan-results.pdf' ],
	[ 'title' => 'Samurdhi Development Officer Service — Open Competitive Exam 2024','year' => '2024', 'gazette' => 'GoSL-2362', 'type' => 'Development Officer Service',    'date' => '2026-03-01', 'notice_url' => '/wp-content/uploads/exams/2024/sdo-notice.pdf',         'results_url' => '/wp-content/uploads/exams/2024/sdo-results.pdf' ],
	[ 'title' => 'Grama Niladhari Service — Limited Examination 2024',               'year' => '2024', 'gazette' => 'GoSL-2355', 'type' => 'Grama Niladhari Service',          'date' => '2026-02-10', 'notice_url' => '/wp-content/uploads/exams/2024/gn-limited-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2024/gn-limited-results.pdf' ],
	[ 'title' => 'Sri Lanka Engineering Service — Open Competitive Exam 2024',       'year' => '2024', 'gazette' => 'GoSL-2348', 'type' => 'Engineering Service',          'date' => '2026-01-25', 'notice_url' => '/wp-content/uploads/exams/2024/eng-notice.pdf',          'results_url' => '/wp-content/uploads/exams/2024/eng-results.pdf' ],
	[ 'title' => 'Sri Lanka Clerical Service — Open Competitive Exam 2024',          'year' => '2024', 'gazette' => 'GoSL-2340', 'type' => 'Clerical Service',               'date' => '2026-01-05', 'notice_url' => '/wp-content/uploads/exams/2024/clerk-oc-notice.pdf',    'results_url' => '/wp-content/uploads/exams/2024/clerk-oc-results.pdf' ],
	[ 'title' => 'Development Officer Service — Limited Examination 2024',           'year' => '2024', 'gazette' => 'GoSL-2332', 'type' => 'Development Officer Service',    'date' => '2025-12-15', 'notice_url' => '/wp-content/uploads/exams/2024/do-limited-notice.pdf',  'results_url' => '/wp-content/uploads/exams/2024/do-limited-results.pdf' ],
	[ 'title' => 'Sri Lanka Administrative Service — Competitive Exam 2024',         'year' => '2024', 'gazette' => 'GoSL-2325', 'type' => 'Administrative Service',       'date' => '2025-11-28', 'notice_url' => '/wp-content/uploads/exams/2024/admin-notice.pdf',      'results_url' => '/wp-content/uploads/exams/2024/admin-results.pdf' ],
	[ 'title' => 'Sri Lanka Accountants\' Service — Limited Examination 2023',      'year' => '2023', 'gazette' => 'GoSL-2310', 'type' => 'Accountants\' Service',         'date' => '2025-10-30', 'notice_url' => '/wp-content/uploads/exams/2023/acct-limited-notice.pdf', 'results_url' => '/wp-content/uploads/exams/2023/acct-limited-results.pdf' ],
	[ 'title' => 'Grama Niladhari Service — Competitive Examination 2023',           'year' => '2023', 'gazette' => 'GoSL-2302', 'type' => 'Grama Niladhari Service',          'date' => '2025-10-05', 'notice_url' => '/wp-content/uploads/exams/2023/gn-2023-notice.pdf',     'results_url' => '/wp-content/uploads/exams/2023/gn-2023-results.pdf' ],
	[ 'title' => 'Sri Lanka Technological Service — Open Competitive Exam 2023',     'year' => '2023', 'gazette' => 'GoSL-2295', 'type' => 'Technological Service',          'date' => '2025-09-12', 'notice_url' => '/wp-content/uploads/exams/2023/tech-2023-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2023/tech-2023-results.pdf' ],
	[ 'title' => 'Public Management Assistants Service — Competitive Exam 2023',     'year' => '2023', 'gazette' => 'GoSL-2288', 'type' => 'Clerical Service',               'date' => '2025-08-20', 'notice_url' => '/wp-content/uploads/exams/2023/pma-2023-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2023/pma-2023-results.pdf' ],
	[ 'title' => 'Sri Lanka Clerical Service — Limited Examination 2023',            'year' => '2023', 'gazette' => 'GoSL-2280', 'type' => 'Clerical Service',               'date' => '2025-07-28', 'notice_url' => '/wp-content/uploads/exams/2023/clerk-2023-notice.pdf',  'results_url' => '/wp-content/uploads/exams/2023/clerk-2023-results.pdf' ],
	[ 'title' => 'Sri Lanka Planning Service — Competitive Examination 2023',        'year' => '2023', 'gazette' => 'GoSL-2272', 'type' => 'Planning Service',               'date' => '2025-07-01', 'notice_url' => '/wp-content/uploads/exams/2023/plan-2023-notice.pdf',  'results_url' => '/wp-content/uploads/exams/2023/plan-2023-results.pdf' ],
	[ 'title' => 'Samurdhi Development Officer Service — Open Competitive Exam 2023','year' => '2023', 'gazette' => 'GoSL-2265', 'type' => 'Development Officer Service',    'date' => '2025-06-10', 'notice_url' => '/wp-content/uploads/exams/2023/sdo-2023-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2023/sdo-2023-results.pdf' ],
	[ 'title' => 'Development Officer Service — Competitive Examination 2023',       'year' => '2023', 'gazette' => 'GoSL-2258', 'type' => 'Development Officer Service',    'date' => '2025-05-18', 'notice_url' => '/wp-content/uploads/exams/2023/do-2023-notice.pdf',     'results_url' => '/wp-content/uploads/exams/2023/do-2023-results.pdf' ],
	[ 'title' => 'Sri Lanka Administrative Service — Limited Examination 2023',      'year' => '2023', 'gazette' => 'GoSL-2250', 'type' => 'Administrative Service',       'date' => '2025-04-25', 'notice_url' => '/wp-content/uploads/exams/2023/admin-2023-notice.pdf', 'results_url' => '/wp-content/uploads/exams/2023/admin-2023-results.pdf' ],
	[ 'title' => 'Sri Lanka Engineering Service — Open Competitive Exam 2023',       'year' => '2023', 'gazette' => 'GoSL-2242', 'type' => 'Engineering Service',          'date' => '2025-04-01', 'notice_url' => '/wp-content/uploads/exams/2023/eng-2023-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2023/eng-2023-results.pdf' ],
	[ 'title' => 'Grama Niladhari Service — Competitive Examination 2022',           'year' => '2022', 'gazette' => 'GoSL-2225', 'type' => 'Grama Niladhari Service',          'date' => '2025-03-05', 'notice_url' => '/wp-content/uploads/exams/2022/gn-2022-notice.pdf',     'results_url' => '/wp-content/uploads/exams/2022/gn-2022-results.pdf' ],
	[ 'title' => 'Sri Lanka Clerical Service — Open Competitive Exam 2022',          'year' => '2022', 'gazette' => 'GoSL-2218', 'type' => 'Clerical Service',               'date' => '2025-02-10', 'notice_url' => '/wp-content/uploads/exams/2022/clerk-2022-notice.pdf',  'results_url' => '/wp-content/uploads/exams/2022/clerk-2022-results.pdf' ],
	[ 'title' => 'Sri Lanka Technological Service — Open Competitive Exam 2022',     'year' => '2022', 'gazette' => 'GoSL-2210', 'type' => 'Technological Service',          'date' => '2025-01-15', 'notice_url' => '/wp-content/uploads/exams/2022/tech-2022-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2022/tech-2022-results.pdf' ],
	[ 'title' => 'Public Management Assistants Service — Limited Examination 2022',  'year' => '2022', 'gazette' => 'GoSL-2202', 'type' => 'Clerical Service',               'date' => '2024-12-20', 'notice_url' => '/wp-content/uploads/exams/2022/pma-2022-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2022/pma-2022-results.pdf' ],
	[ 'title' => 'Development Officer Service — Competitive Examination 2022',       'year' => '2022', 'gazette' => 'GoSL-2195', 'type' => 'Development Officer Service',    'date' => '2024-11-25', 'notice_url' => '/wp-content/uploads/exams/2022/do-2022-notice.pdf',     'results_url' => '/wp-content/uploads/exams/2022/do-2022-results.pdf' ],
	[ 'title' => 'Sri Lanka Accountants\' Service — Open Competitive Exam 2022',     'year' => '2022', 'gazette' => 'GoSL-2188', 'type' => 'Accountants\' Service',         'date' => '2024-10-30', 'notice_url' => '/wp-content/uploads/exams/2022/acct-2022-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2022/acct-2022-results.pdf' ],
	[ 'title' => 'Samurdhi Development Officer Service — Open Competitive Exam 2022','year' => '2022', 'gazette' => 'GoSL-2180', 'type' => 'Development Officer Service',    'date' => '2024-10-05', 'notice_url' => '/wp-content/uploads/exams/2022/sdo-2022-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2022/sdo-2022-results.pdf' ],
	[ 'title' => 'Sri Lanka Administrative Service — Competitive Examination 2022',  'year' => '2022', 'gazette' => 'GoSL-2172', 'type' => 'Administrative Service',       'date' => '2024-09-10', 'notice_url' => '/wp-content/uploads/exams/2022/admin-2022-notice.pdf', 'results_url' => '/wp-content/uploads/exams/2022/admin-2022-results.pdf' ],
	[ 'title' => 'Sri Lanka Planning Service — Competitive Examination 2022',        'year' => '2022', 'gazette' => 'GoSL-2165', 'type' => 'Planning Service',               'date' => '2024-08-15', 'notice_url' => '/wp-content/uploads/exams/2022/plan-2022-notice.pdf',  'results_url' => '/wp-content/uploads/exams/2022/plan-2022-results.pdf' ],
	[ 'title' => 'Grama Niladhari Service — Competitive Examination 2021',           'year' => '2021', 'gazette' => 'GoSL-2148', 'type' => 'Grama Niladhari Service',          'date' => '2024-07-20', 'notice_url' => '/wp-content/uploads/exams/2021/gn-2021-notice.pdf',     'results_url' => '/wp-content/uploads/exams/2021/gn-2021-results.pdf' ],
	[ 'title' => 'Sri Lanka Clerical Service — Open Competitive Exam 2021',          'year' => '2021', 'gazette' => 'GoSL-2140', 'type' => 'Clerical Service',               'date' => '2024-06-25', 'notice_url' => '/wp-content/uploads/exams/2021/clerk-2021-notice.pdf',  'results_url' => '/wp-content/uploads/exams/2021/clerk-2021-results.pdf' ],
	[ 'title' => 'Sri Lanka Technological Service — Competitive Examination 2021',   'year' => '2021', 'gazette' => 'GoSL-2132', 'type' => 'Technological Service',          'date' => '2024-05-30', 'notice_url' => '/wp-content/uploads/exams/2021/tech-2021-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2021/tech-2021-results.pdf' ],
	[ 'title' => 'Development Officer Service — Limited Examination 2021',           'year' => '2021', 'gazette' => 'GoSL-2125', 'type' => 'Development Officer Service',    'date' => '2024-05-05', 'notice_url' => '/wp-content/uploads/exams/2021/do-2021-notice.pdf',     'results_url' => '/wp-content/uploads/exams/2021/do-2021-results.pdf' ],
	[ 'title' => 'Public Management Assistants Service — Competitive Exam 2021',     'year' => '2021', 'gazette' => 'GoSL-2118', 'type' => 'Clerical Service',               'date' => '2024-04-10', 'notice_url' => '/wp-content/uploads/exams/2021/pma-2021-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2021/pma-2021-results.pdf' ],
	[ 'title' => 'Sri Lanka Engineering Service — Open Competitive Exam 2021',       'year' => '2021', 'gazette' => 'GoSL-2110', 'type' => 'Engineering Service',          'date' => '2024-03-15', 'notice_url' => '/wp-content/uploads/exams/2021/eng-2021-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2021/eng-2021-results.pdf' ],
	[ 'title' => 'Sri Lanka Accountants\' Service — Limited Examination 2021',      'year' => '2021', 'gazette' => 'GoSL-2102', 'type' => 'Accountants\' Service',         'date' => '2024-02-18', 'notice_url' => '/wp-content/uploads/exams/2021/acct-2021-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2021/acct-2021-results.pdf' ],
	[ 'title' => 'Samurdhi Development Officer Service — Open Competitive Exam 2021','year' => '2021', 'gazette' => 'GoSL-2095', 'type' => 'Development Officer Service',    'date' => '2024-01-25', 'notice_url' => '/wp-content/uploads/exams/2021/sdo-2021-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2021/sdo-2021-results.pdf' ],
	[ 'title' => 'Sri Lanka Administrative Service — Limited Examination 2021',      'year' => '2021', 'gazette' => 'GoSL-2088', 'type' => 'Administrative Service',       'date' => '2024-01-02', 'notice_url' => '/wp-content/uploads/exams/2021/admin-2021-notice.pdf', 'results_url' => '/wp-content/uploads/exams/2021/admin-2021-results.pdf' ],
	[ 'title' => 'Grama Niladhari Service — Competitive Examination 2020',           'year' => '2020', 'gazette' => 'GoSL-2070', 'type' => 'Grama Niladhari Service',          'date' => '2023-12-05', 'notice_url' => '/wp-content/uploads/exams/2020/gn-2020-notice.pdf',     'results_url' => '/wp-content/uploads/exams/2020/gn-2020-results.pdf' ],
	[ 'title' => 'Sri Lanka Clerical Service — Open Competitive Exam 2020',          'year' => '2020', 'gazette' => 'GoSL-2062', 'type' => 'Clerical Service',               'date' => '2023-11-10', 'notice_url' => '/wp-content/uploads/exams/2020/clerk-2020-notice.pdf',  'results_url' => '/wp-content/uploads/exams/2020/clerk-2020-results.pdf' ],
	[ 'title' => 'Development Officer Service — Competitive Examination 2020',       'year' => '2020', 'gazette' => 'GoSL-2055', 'type' => 'Development Officer Service',    'date' => '2023-10-15', 'notice_url' => '/wp-content/uploads/exams/2020/do-2020-notice.pdf',     'results_url' => '/wp-content/uploads/exams/2020/do-2020-results.pdf' ],
	[ 'title' => 'Sri Lanka Technological Service — Open Competitive Exam 2020',     'year' => '2020', 'gazette' => 'GoSL-2048', 'type' => 'Technological Service',          'date' => '2023-09-20', 'notice_url' => '/wp-content/uploads/exams/2020/tech-2020-notice.pdf',   'results_url' => '/wp-content/uploads/exams/2020/tech-2020-results.pdf' ],
];

$results_json = json_encode( $exam_results );
$years = [];
$types = [];
foreach ( $exam_results as $e ) {
	$y = $e['year'];
	if ( ! in_array( $y, $years ) ) { $years[] = $y; }
	$t = $e['type'];
	if ( ! in_array( $t, $types ) ) { $types[] = $t; }
}
rsort( $years );
sort( $types );
?>

<style>
	/* Date Badge Base Styles */
	.exam-date-badge {
		background: linear-gradient(135deg, var(--color-maroon) 0%, var(--color-maroon-deep) 100%);
		color: #ffffff;
		border: 1px solid var(--color-secondary);
		box-shadow: 0 4px 10px var(--color-maroon-tint-15);
		border-radius: 12px;
		padding: 8px 14px;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		min-width: 72px;
	}
	.exam-date-day { font-size: 1.25rem; font-weight: 800; line-height: 1; color: var(--color-secondary-light); }

	/* Override external theme styles for month span */
	.exam-date-month {
		font-size: 0.7rem;
		font-weight: 700;
		text-transform: uppercase;
		letter-spacing: 0.05em;
		color: #ffffff !important;
		background: transparent !important;
		padding: 0 !important;
		width: auto !important;
		display: inline-block !important;
	}

	.exam-date-year { font-size: 0.65rem; color: rgba(255, 255, 255, 0.75); }

	.exam-new-badge {
		background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-gold-bright) 100%);
		color: var(--color-maroon);
		font-size: 0.65rem;
		font-weight: 800;
		text-transform: uppercase;
		letter-spacing: 0.05em;
		padding: 2px 8px;
		border-radius: 9999px;
		box-shadow: 0 2px 6px var(--color-secondary-tint-vivid);
	}

	.exam-card {
		transition: all 0.3s ease;
		border-left: 4px solid transparent;
	}
	.exam-card:hover {
		border-left-color: var(--color-secondary);
		transform: translateY(-2px);
		box-shadow: 0 10px 25px -5px var(--color-maroon-tint-08);
	}

	.exam-title {
		font-size: 1.1rem;
		font-weight: 700;
		color: var(--color-maroon);
		line-height: 1.4;
		margin-bottom: 0.5rem;
	}

	.exam-meta {
		display: flex;
		flex-wrap: wrap;
		gap: 0.5rem;
		align-items: center;
	}

	.exam-meta-chip {
		font-size: 0.75rem;
		background-color: var(--color-secondary-tint);
		color: #555;
		padding: 4px 10px;
		border-radius: 6px;
		border: 1px solid var(--color-secondary-tint-med);
		display: inline-flex;
		align-items: center;
		gap: 5px;
	}
	.exam-meta-chip i { color: var(--color-secondary); }

	.exam-type-chip {
		background-color: var(--color-maroon-tint-05);
		color: var(--color-maroon);
		font-weight: 600;
		border-color: var(--color-maroon-tint-15);
	}

	.exam-action-btn {
		font-size: 0.8rem;
		font-weight: 600;
		padding: 8px 14px;
		border-radius: 8px;
		display: inline-flex;
		align-items: center;
		gap: 6px;
		transition: all 0.2s ease;
		width: 100%;
		justify-content: center;
	}
	@media (min-width: 1024px) {
		.exam-action-btn { width: auto; }
	}

	.exam-view-btn {
		background-color: #ffffff;
		color: var(--color-maroon);
		border: 1px solid var(--color-maroon);
	}
	.exam-view-btn i {
		color: var(--color-secondary) !important;
		transition: color 0.2s ease;
	}
	.exam-view-btn:hover {
		background-color: var(--color-maroon);
		color: #ffffff;
	}
	.exam-view-btn:hover i {
		color: var(--color-secondary-light) !important;
	}

	/* Download Results Button Custom Styling */
.exam-dl-btn {
	background: linear-gradient(135deg, var(--color-maroon) 0%, var(--color-maroon-deep) 100%) !important;
	color: #ffffff !important;
	border: 1px solid var(--color-maroon) !important;
	box-shadow: 0 2px 6px var(--color-maroon-tint-15);
}

/* Normal state: Icon color light SECONDARY */
.exam-dl-btn i,
.exam-dl-btn i::before {
	color: var(--color-secondary-light) !important;
	fill: var(--color-secondary-light) !important; 
	transition: all 0.2s ease !important;
}

/* Hover state: Background SECONDARY */
.exam-dl-btn:hover {
	background: linear-gradient(135deg, var(--color-secondary) 0%, var(--color-gold-deep) 100%) !important;
	color: var(--color-maroon) !important;
	border-color: var(--color-secondary) !important;
}

/* Hover state: Icon & pseudo-elements SECONDARY color */
.exam-dl-btn:hover i,
.exam-dl-btn:hover i::before {
	color: var(--color-maroon) !important;
	fill: var(--color-maroon) !important; 
}

	.exam-page-btn {
		width: 36px;
		height: 36px;
		display: inline-flex;
		align-items: center;
		justify-content: center;
		border-radius: 8px;
		border: 1px solid #e5e7eb;
		background-color: #ffffff;
		color: var(--color-maroon);
		font-size: 0.85rem;
		font-weight: 600;
		transition: all 0.2s ease;
	}
	.exam-page-btn:hover {
		border-color: var(--color-secondary);
		color: var(--color-secondary);
	}
	.exam-page-active {
		background-color: var(--color-maroon) !important;
		color: var(--color-secondary-light) !important;
		border-color: var(--color-maroon) !important;
	}
</style>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">

	<!-- Header Section -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'EXAMINATION RESULTS', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon">
			<?php esc_html_e( 'Public Service Examination Results', 'homeaffairs' ); ?>
		</h1>
		
	</div>

	<!-- Filter Bar Hub -->
	<div id="exam-filter-hub" class="bg-white rounded-2xl shadow-sm hover:shadow-md border border-gray-100 p-5 lg:p-6 mb-8 transition-all duration-300">
		<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
			<div>
				<label for="exam-year" class="block text-xs font-bold text-maroon uppercase tracking-wider mb-1.5">Year</label>
				<select id="exam-year" class="exam-select w-full rounded-xl border border-gray-200 bg-white px-3.5 py-2.5 text-sm text-gray-700 appearance-none cursor-pointer focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-all">
					<option value="all">All Years</option>
					<?php foreach ( $years as $y ) : ?>
						<option value="<?php echo $y; ?>"><?php echo $y; ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div>
				<label for="exam-type" class="block text-xs font-bold text-maroon uppercase tracking-wider mb-1.5">Service Category</label>
				<select id="exam-type" class="exam-select w-full rounded-xl border border-gray-200 bg-white px-3.5 py-2.5 text-sm text-gray-700 appearance-none cursor-pointer focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-all">
					<option value="all">All Categories</option>
					<?php foreach ( $types as $t ) : ?>
						<option value="<?php echo esc_attr( $t ); ?>"><?php echo esc_html( $t ); ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div>
				<label for="exam-search" class="block text-xs font-bold text-maroon uppercase tracking-wider mb-1.5">Search Exam / Gazette</label>
				<div class="relative">
					<i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-600 text-sm pointer-events-none"></i>
					<input type="text" id="exam-search" class="exam-search-input w-full rounded-xl border border-gray-200 bg-white pl-10 pr-4 py-2.5 text-sm text-gray-700 placeholder:text-gray-500 focus:outline-none focus:border-secondary focus:ring-1 focus:ring-secondary transition-all" placeholder="Search by exam name or gazette ref...">
				</div>
			</div>
		</div>
		
		<div class="flex items-center justify-between mt-5 pt-4 border-t border-gray-100">
			<button type="button" id="exam-clear" class="exam-clear-btn flex items-center gap-1.5 px-4 py-2 rounded-lg text-sm font-semibold text-gray-500 hover:text-maroon hover:bg-gray-50 transition-all duration-200">
				<i class="fas fa-redo-alt text-xs text-secondary"></i> Reset Filters
			</button>
			<span id="exam-count" class="text-xs text-gray-500">Showing <strong class="text-maroon">0</strong> to <strong class="text-maroon">0</strong> of <strong class="text-maroon">0</strong> results</span>
		</div>
	</div>

	<!-- Exam Cards Container -->
	<div id="exam-list" class="space-y-4"></div>

	<!-- Empty State -->
	<div id="exam-empty" class="hidden flex flex-col items-center justify-center py-20 bg-white rounded-2xl border border-gray-100 text-center shadow-sm">
		<div class="w-16 h-16 bg-secondary/10 border border-secondary/20 rounded-2xl flex items-center justify-center mb-4">
			<i class="fas fa-search text-2xl text-secondary"></i>
		</div>
		<p class="text-base font-bold text-maroon">No examinations match your current filter criteria.</p>
		<p class="text-sm text-gray-500 mt-1">Please adjust your filters or reset to view all available results.</p>
	</div>

	<!-- Pagination -->
	<div id="exam-pagination" class="flex items-center justify-center gap-2 pt-8 mt-6 border-t border-gray-100"></div>
</main>

<script>
(function() {
	var NEW_THRESHOLD = new Date();
	NEW_THRESHOLD.setDate( NEW_THRESHOLD.getDate() - 30 );

	var allData = <?php echo $results_json; ?>;
	var filtered = [];
	var page = 1;
	var perPage = 10;

	var yearSelect = document.getElementById('exam-year');
	var typeSelect = document.getElementById('exam-type');
	var searchInput = document.getElementById('exam-search');
	var clearBtn = document.getElementById('exam-clear');
	var listEl = document.getElementById('exam-list');
	var emptyEl = document.getElementById('exam-empty');
	var countEl = document.getElementById('exam-count');
	var pagEl = document.getElementById('exam-pagination');

	function pad( n ) { return n < 10 ? '0' + n : n; }

	function isNew( iso ) {
		var d = new Date( iso + 'T00:00:00' );
		return d >= NEW_THRESHOLD;
	}

	function getDay( iso ) {
		return pad( new Date( iso + 'T00:00:00' ).getDate() );
	}

	function getMonth( iso ) {
		var months = ['JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC'];
		return months[ new Date( iso + 'T00:00:00' ).getMonth() ];
	}

	function getYear( iso ) {
		return new Date( iso + 'T00:00:00' ).getFullYear();
	}

	function filterData() {
		var year = yearSelect.value;
		var type = typeSelect.value;
		var q = searchInput.value.toLowerCase().trim();

		filtered = allData.filter( function( item ) {
			if ( year !== 'all' && item.year !== year ) { return false; }
			if ( type !== 'all' && item.type !== type ) { return false; }
			if ( q !== '' ) {
				var title = item.title.toLowerCase();
				var gazette = item.gazette.toLowerCase();
				if ( title.indexOf(q) === -1 && gazette.indexOf(q) === -1 ) { return false; }
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
			listEl.innerHTML = '';
			emptyEl.classList.remove('hidden');
			countEl.innerHTML = 'Showing <strong class="text-maroon">0</strong> to <strong class="text-maroon">0</strong> of <strong class="text-maroon">0</strong> results';
			pagEl.innerHTML = '';
			return;
		}
		emptyEl.classList.add('hidden');

		var html = '';
		for ( var i = 0; i < pageData.length; i++ ) {
			var e = pageData[i];
			var newBadge = isNew( e.date ) ? '<span class="exam-new-badge mt-1">New Result</span>' : '';
			var d = getDay( e.date );
			var m = getMonth( e.date );
			var y = getYear( e.date );

			html += '<div class="exam-card bg-white rounded-xl border border-gray-100 p-5 lg:p-6 flex flex-col lg:flex-row gap-5 items-start lg:items-center justify-between shadow-sm">';

			html += '<div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 flex-1 min-w-0">';
			html += '<div class="exam-date-col flex flex-col items-center shrink-0">';
			html += '<div class="exam-date-badge"><span class="exam-date-day">' + d + '</span><span class="exam-date-month">' + m + '</span><span class="exam-date-year">' + y + '</span></div>';
			html += newBadge;
			html += '</div>';

			html += '<div class="flex-1 min-w-0">';
			html += '<h3 class="exam-title">' + e.title + '</h3>';
			html += '<div class="exam-meta">';
			html += '<span class="exam-meta-chip"><i class="far fa-calendar-alt"></i> Year: ' + e.year + '</span>';
			html += '<span class="exam-meta-chip"><i class="fas fa-bookmark"></i> Gazette Ref: ' + e.gazette + '</span>';
			html += '<span class="exam-meta-chip exam-type-chip"><i class="fas fa-briefcase"></i> ' + e.type + '</span>';
			html += '</div></div>';
			html += '</div>';

			html += '<div class="exam-action-col flex flex-col sm:flex-row lg:flex-col gap-2 shrink-0 w-full lg:w-auto mt-2 lg:mt-0">';
			html += '<a href="' + e.notice_url + '" class="exam-action-btn exam-view-btn" target="_blank"><i class="fas fa-eye"></i> View Notice</a>';
			html += '<a href="' + e.results_url + '" class="exam-action-btn exam-dl-btn" target="_blank"><i class="fas fa-file-pdf"></i> Download Results</a>';
			html += '</div>';

			html += '</div>';
		}
		listEl.innerHTML = html;

		countEl.innerHTML = 'Showing <strong class="text-maroon">' + ( total > 0 ? start + 1 : 0 ) + '</strong> to <strong class="text-maroon">' + end + '</strong> of <strong class="text-maroon">' + total + '</strong> results';

		var phtml = '';
		var prevDisabled = page <= 1 ? ' opacity-40 pointer-events-none' : '';
		phtml += '<a href="#" class="exam-page-btn' + prevDisabled + '" data-page="' + ( page - 1 ) + '"><i class="fas fa-chevron-left" style="font-size:10px"></i></a>';

		for ( var p = 1; p <= totalPages; p++ ) {
			var active = p === page ? ' exam-page-active' : '';
			phtml += '<a href="#" class="exam-page-btn' + active + '" data-page="' + p + '">' + p + '</a>';
		}

		var nextDisabled = page >= totalPages ? ' opacity-40 pointer-events-none' : '';
		phtml += '<a href="#" class="exam-page-btn' + nextDisabled + '" data-page="' + ( page + 1 ) + '"><i class="fas fa-chevron-right" style="font-size:10px"></i></a>';

		pagEl.innerHTML = phtml;

		[].forEach.call( pagEl.querySelectorAll('.exam-page-btn'), function( btn ) {
			btn.addEventListener('click', function( e ) {
				e.preventDefault();
				var p = parseInt( this.getAttribute('data-page'), 10 );
				if ( p >= 1 && p <= totalPages ) {
					page = p;
					render();
					document.getElementById('exam-filter-hub').scrollIntoView({ behavior: 'smooth', block: 'start' });
				}
			});
		});
	}

	yearSelect.addEventListener('change', filterData );
	typeSelect.addEventListener('change', filterData );
	searchInput.addEventListener('input', filterData );

	clearBtn.addEventListener('click', function() {
		yearSelect.value = 'all';
		typeSelect.value = 'all';
		searchInput.value = '';
		filterData();
		searchInput.focus();
	});

	filterData();
})();
</script>

<?php get_footer(); ?>