<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: Transfer Procedures Template
 */

get_header();

get_template_part( 'template-parts/page-banner' );

$current_year = date( 'Y' );

/**
 * Transfer procedure records grouped by year
 */
$transfer_data = [
	$current_year => [
		'label' => sprintf( __( 'Current Year — Annual Transfers (%s)', 'homeaffairs' ), $current_year ),
		'items' => [
			[
				'title' => 'Annual Transfers of Grama Niladhari Officers',
				'date'  => "$current_year-06-01",
				'notice_url' => "/wp-content/uploads/transfers/{$current_year}/gn-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/{$current_year}/gn-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — District Allocation Schedule', 'url' => "/wp-content/uploads/transfers/{$current_year}/gn-annex-i.pdf" ],
					[ 'name' => 'Annex II — Eligibility Criteria',         'url' => "/wp-content/uploads/transfers/{$current_year}/gn-annex-ii.pdf" ],
					[ 'name' => 'Annex III — Preference Form',            'url' => "/wp-content/uploads/transfers/{$current_year}/gn-annex-iii.pdf" ],
				],
			],
			[
				'title' => 'Annual Transfers of Divisional Secretaries',
				'date'  => "$current_year-05-15",
				'notice_url' => "/wp-content/uploads/transfers/{$current_year}/ds-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/{$current_year}/ds-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Posting Schedule',      'url' => "/wp-content/uploads/transfers/{$current_year}/ds-annex-i.pdf" ],
					[ 'name' => 'Annex II — Seniority List',        'url' => "/wp-content/uploads/transfers/{$current_year}/ds-annex-ii.pdf" ],
				],
			],
			[
				'title' => 'Annual Transfers of Public Management Assistants',
				'date'  => "$current_year-04-20",
				'notice_url' => "/wp-content/uploads/transfers/{$current_year}/pma-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/{$current_year}/pma-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Vacancy Summary',              'url' => "/wp-content/uploads/transfers/{$current_year}/pma-annex-i.pdf" ],
					[ 'name' => 'Annex II — Service Record Extract',       'url' => "/wp-content/uploads/transfers/{$current_year}/pma-annex-ii.pdf" ],
					[ 'name' => 'Annex III — Zonal Preference Matrix',     'url' => "/wp-content/uploads/transfers/{$current_year}/pma-annex-iii.pdf" ],
				],
			],
			[
				'title' => 'Annual Transfers of Development Officers',
				'date'  => "$current_year-04-01",
				'notice_url' => "/wp-content/uploads/transfers/{$current_year}/do-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/{$current_year}/do-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Project Allocation',    'url' => "/wp-content/uploads/transfers/{$current_year}/do-annex-i.pdf" ],
				],
			],
			[
				'title' => 'Annual Transfers of Technical Assistant Officers',
				'date'  => "$current_year-03-15",
				'notice_url' => "/wp-content/uploads/transfers/{$current_year}/tao-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/{$current_year}/tao-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Divisional Requirement Plan',   'url' => "/wp-content/uploads/transfers/{$current_year}/tao-annex-i.pdf" ],
					[ 'name' => 'Annex II — Qualification Matrix',          'url' => "/wp-content/uploads/transfers/{$current_year}/tao-annex-ii.pdf" ],
				],
			],
			[
				'title' => 'Annual Transfers of Samurdhi Development Officers',
				'date'  => "$current_year-02-28",
				'notice_url' => "/wp-content/uploads/transfers/{$current_year}/sdo-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/{$current_year}/sdo-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Divisional Allocation',  'url' => "/wp-content/uploads/transfers/{$current_year}/sdo-annex-i.pdf" ],
					[ 'name' => 'Annex II — Beneficiary Data',       'url' => "/wp-content/uploads/transfers/{$current_year}/sdo-annex-ii.pdf" ],
				],
			],
		],
	],
	( $current_year - 1 ) => [
		'label' => sprintf( __( 'Past Transfer Records — %s', 'homeaffairs' ), ( $current_year - 1 ) ),
		'items' => [
			[
				'title' => 'Annual Transfers of Grama Niladhari Officers',
				'date'  => ( $current_year - 1 ) . "-06-10",
				'notice_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/gn-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/gn-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — District Allocation', 'url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/gn-annex-i.pdf" ],
					[ 'name' => 'Annex II — Seniority List',     'url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/gn-annex-ii.pdf" ],
					[ 'name' => 'Annex III — Relief Order',      'url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/gn-annex-iii.pdf" ],
				],
			],
			[
				'title' => 'Annual Transfers of Divisional Secretaries',
				'date'  => ( $current_year - 1 ) . "-05-20",
				'notice_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/ds-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/ds-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Posting Order',   'url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/ds-annex-i.pdf" ],
				],
			],
			[
				'title' => 'Annual Transfers of Public Management Assistants',
				'date'  => ( $current_year - 1 ) . "-04-25",
				'notice_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/pma-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/pma-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Vacancy Report',              'url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/pma-annex-i.pdf" ],
					[ 'name' => 'Annex II — District Requirement',        'url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/pma-annex-ii.pdf" ],
				],
			],
			[
				'title' => 'Annual Transfers of Development Officers',
				'date'  => ( $current_year - 1 ) . "-04-05",
				'notice_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/do-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/do-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Divisional Posting Plan', 'url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/do-annex-i.pdf" ],
				],
			],
			[
				'title' => 'Annual Transfers of Technical Assistant Officers',
				'date'  => ( $current_year - 1 ) . "-03-20",
				'notice_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/tao-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/tao-transfer-application.pdf",
				'attachments' => [],
			],
			[
				'title' => 'Special Transfers — Administrative Officers (Limited Basis)',
				'date'  => ( $current_year - 1 ) . "-02-10",
				'notice_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/ao-special-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/ao-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Eligibility Criteria',                    'url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/ao-annex-i.pdf" ],
					[ 'name' => 'Annex II — Service Record Format',                   'url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/ao-annex-ii.pdf" ],
					[ 'name' => 'Annex III — Interview Schedule',                     'url' => "/wp-content/uploads/transfers/" . ( $current_year - 1 ) . "/ao-annex-iii.pdf" ],
				],
			],
		],
	],
	( $current_year - 2 ) => [
		'label' => sprintf( __( 'Archive — %s', 'homeaffairs' ), ( $current_year - 2 ) ),
		'items' => [
			[
				'title' => 'Annual Transfers of Grama Niladhari Officers',
				'date'  => ( $current_year - 2 ) . "-06-12",
				'notice_url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/gn-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/gn-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Final Allocation',      'url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/gn-annex-i.pdf" ],
				],
			],
			[
				'title' => 'Annual Transfers of Public Management Assistants',
				'date'  => ( $current_year - 2 ) . "-04-28",
				'notice_url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/pma-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/pma-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Zonal Posting List',  'url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/pma-annex-i.pdf" ],
					[ 'name' => 'Annex II — Seniority Ranking',   'url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/pma-annex-ii.pdf" ],
				],
			],
			[
				'title' => 'Annual Transfers of Development Officers',
				'date'  => ( $current_year - 2 ) . "-04-08",
				'notice_url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/do-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/do-transfer-application.pdf",
				'attachments' => [],
			],
			[
				'title' => 'Annual Transfers of Samurdhi Development Officers',
				'date'  => ( $current_year - 2 ) . "-03-01",
				'notice_url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/sdo-annual-transfer-notice.pdf",
				'application_url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/sdo-transfer-application.pdf",
				'attachments' => [
					[ 'name' => 'Annex I — Divisional Allocation',  'url' => "/wp-content/uploads/transfers/" . ( $current_year - 2 ) . "/sdo-annex-i.pdf" ],
				],
			],
		],
	],
];
?>

<style>
	:root {
		--theme-primary-darker: var(--color-primary-darker);
		--theme-heading: var(--color-maroon);
		--theme-secondary: var(--color-secondary);
	}

	.tran-tab.active-tab {
		border-color: var(--theme-secondary) !important;
		color: var(--theme-heading) !important;
	}

	.tran-action-btn {
		display: inline-flex;
		align-items: center;
		gap: 0.5rem;
		padding: 0.5rem 0.875rem;
		border-radius: 0.5rem;
		font-size: 0.8125rem;
		font-weight: 600;
		border: 1px solid #e5e7eb;
		background-color: #ffffff;
		color: #374151;
		transition: all 0.2s ease;
	}

	.tran-action-btn:hover {
		border-color: var(--theme-secondary);
		color: var(--theme-heading);
		background-color: #fdfbf7;
	}

	.tran-chip {
		display: inline-flex;
		align-items: center;
		gap: 0.375rem;
		padding: 0.25rem 0.625rem;
		border-radius: 0.375rem;
		font-size: 0.75rem;
		font-weight: 500;
		background-color: #f3f4f6;
		color: #4b5563;
		transition: all 0.2s ease;
	}

	.tran-chip:hover {
		background-color: #fef9e7;
		color: var(--theme-heading);
	}
</style>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">

	<!-- Standardized Main Topic Header -->
	<div class="text-center max-w-3xl mx-auto mb-8">
		<span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
			<?php esc_html_e( 'MINISTRY TRANSFERS', 'homeaffairs' ); ?>
		</span>
		<h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon">
			<?php esc_html_e( 'Transfer Procedures', 'homeaffairs' ); ?>
		</h1>
		</div>

	<!-- Year Tabs -->
	<div class="tab-group flex gap-0 border-b-2 border-gray-200 mb-8 overflow-x-auto">
		<?php $first = true; foreach ( $transfer_data as $year => $group ) : ?>
			<button type="button" class="tran-tab text-left whitespace-nowrap pb-3 px-5 text-sm font-semibold border-b-2 cursor-pointer -mb-[2px] transition-all <?php echo $first ? 'active-tab border-secondary text-maroon' : 'border-transparent text-gray-600 hover:text-maroon'; ?>" data-tab="tran-<?php echo esc_attr( $year ); ?>">
				<?php echo esc_html( $group['label'] ); ?>
			</button>
		<?php $first = false; endforeach; ?>
	</div>

	<!-- Transfer Content Panels -->
	<?php $first = true; foreach ( $transfer_data as $year => $group ) : ?>
		<div id="tran-<?php echo esc_attr( $year ); ?>" class="tran-panel <?php echo $first ? '' : 'hidden'; ?>">
			<?php if ( empty( $group['items'] ) ) : ?>
				<div class="flex flex-col items-center justify-center py-16 text-gray-600">
					<i class="fas fa-inbox text-5xl mb-4 text-amber-200"></i>
					<p class="text-base font-medium text-gray-600"><?php esc_html_e( 'No transfer records available for this year.', 'homeaffairs' ); ?></p>
				</div>
			<?php else : ?>
				<div class="grid gap-5">
					<?php foreach ( $group['items'] as $item ) :
						$ts = strtotime( $item['date'] );
						$formatted_date = date( 'j F Y', $ts );
					?>
						<div class="tran-card bg-white rounded-xl border border-amber-100/60 shadow-[0_2px_16px_rgba(0,0,0,0.04)] p-5 lg:p-6 hover:border-amber-200 transition-all duration-200">
							<div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
								<div class="flex-1 min-w-0">
									<h3 class="text-base lg:text-lg font-bold text-maroon leading-snug mb-2"><?php echo esc_html( $item['title'] ); ?></h3>
									<div class="flex items-center gap-1.5 text-xs text-gray-600 mb-4">
										<i class="far fa-calendar-alt text-amber-600"></i>
										<span><?php esc_html_e( 'Published:', 'homeaffairs' ); ?> <?php echo esc_html( $formatted_date ); ?></span>
									</div>
									<div class="flex flex-wrap items-center gap-2">
										<a href="<?php echo esc_url( $item['notice_url'] ); ?>" class="tran-action-btn" target="_blank">
											<i class="fas fa-file-pdf text-red-500"></i> <?php esc_html_e( 'Download Notice', 'homeaffairs' ); ?>
										</a>
										<a href="<?php echo esc_url( $item['application_url'] ); ?>" class="tran-action-btn" target="_blank">
											<i class="fas fa-file-alt text-secondary-dark"></i> <?php esc_html_e( 'Download Application', 'homeaffairs' ); ?>
										</a>
									</div>
								</div>
								<?php if ( ! empty( $item['attachments'] ) ) : ?>
									<div class="flex-shrink-0">
										<p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2 lg:text-right"><?php esc_html_e( 'Attachments', 'homeaffairs' ); ?></p>
										<div class="flex flex-wrap gap-1.5 lg:justify-end">
											<?php foreach ( $item['attachments'] as $i => $att ) : ?>
												<a href="<?php echo esc_url( $att['url'] ); ?>" class="tran-chip" target="_blank">
													<i class="fas fa-paperclip text-amber-600/70"></i> <?php echo esc_html( $att['name'] ); ?>
												</a>
											<?php endforeach; ?>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	<?php $first = false; endforeach; ?>
</main>

<script>
(function() {
	var tabs = document.querySelectorAll('.tran-tab');
	var panels = {};

	document.querySelectorAll('.tran-panel').forEach(function( p ) {
		panels[ p.id ] = p;
	});

	tabs.forEach(function( tab ) {
		tab.addEventListener('click', function() {
			tabs.forEach(function( t ) {
				t.classList.remove('active-tab', 'border-secondary', 'text-maroon');
				t.classList.add('border-transparent', 'text-gray-600');
			});
			this.classList.remove('border-transparent', 'text-gray-600');
			this.classList.add('active-tab', 'border-secondary', 'text-maroon');

			var target = this.getAttribute('data-tab');
			Object.keys( panels ).forEach(function( id ) {
				panels[ id ].classList.toggle('hidden', id !== target);
			});
		});
	});
})();
</script>

<?php get_footer(); ?>