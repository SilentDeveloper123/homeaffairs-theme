<?php
defined( 'ABSPATH' ) || exit;
/**
 * Template Name: Divisional Secretariats Template
 */
get_header();
get_template_part( 'template-parts/page-banner' );

$intro_title = "Divisional Secretariats of Sri Lanka";
$intro_text  = "The districts of Sri Lanka are divided into administrative sub-units known as divisional secretariats. These were originally based on the feudal counties, the korales and ratas. They were formerly known as 'D.R.O. Divisions' after the 'Divisional Revenue Officer'. Later the D.R.O.s became 'Assistant Government Agents' and the Divisions were known as 'A.G.A. Divisions'. Currently, the Divisions are administered by a 'Divisional Secretary', and are known as 'D.S. Divisions'.";

$ds_data = array(
    // Western Province — Colombo (13)
    array( 'name' => 'Colombo', 'district' => 'Colombo', 'officer' => 'Mr. W. P. S. de Alwis', 'designation' => 'Divisional Secretary', 'address' => 'Divisional Secretariat, Colombo 01', 'tel' => '011-2345678', 'fax' => '011-2345679', 'email' => 'ds.colombo@ds.gov.lk', 'website' => 'http://www.colombo.ds.gov.lk' ),
    
    // Western Province — Gampaha (13)
    array( 'name' => 'Attanagalla', 'district' => 'Gampaha', 'officer' => 'Mr. E. M. S. B. Ekanayake', 'designation' => 'Divisional Secretary', 'address' => 'Divisional Secretariat, Attanagalla', 'tel' => '033-2223456', 'fax' => '033-2223457', 'email' => 'ds.attanagalla@ds.gov.lk', 'website' => 'http://www.gampaha.ds.gov.lk' ),
    
    // Western Province — Kalutara (14)
    array( 'name' => 'Agalawatta', 'district' => 'Kalutara', 'officer' => 'Mr. S. M. K. L. Senanayake', 'designation' => 'Divisional Secretary', 'address' => 'Divisional Secretariat, Agalawatta', 'tel' => '034-2256789', 'fax' => '034-2256790', 'email' => 'ds.agalawatta@ds.gov.lk', 'website' => 'http://www.kalutara.ds.gov.lk' ),
    
    // Central Province — Kandy (20)
    array( 'name' => 'Akurana', 'district' => 'Kandy', 'officer' => 'Mr. K. M. N. S. Kulatilleke', 'designation' => 'Divisional Secretary', 'address' => 'Divisional Secretariat, Akurana', 'tel' => '081-2345678', 'fax' => '081-2345679', 'email' => 'ds.akurana@ds.gov.lk', 'website' => 'http://www.kandy.ds.gov.lk' ),
    
    // Central Province — Matale (11)
    array( 'name' => 'Ambanganga Korale', 'district' => 'Matale', 'officer' => 'Mr. H. M. G. S. B. Herath', 'designation' => 'Divisional Secretary', 'address' => 'Divisional Secretariat, Ambanganga Korale', 'tel' => '066-2234567', 'fax' => '066-2234568', 'email' => 'ds.ambanganga@ds.gov.lk', 'website' => 'http://www.matale.ds.gov.lk' ),
    

);
$districts = array_values( array_unique( array_column( $ds_data, 'district' ) ) );
?>
<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 py-12">
   <div class="lg:col-span-2 space-y-6"> 
    <!-- Intro Card -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 lg:p-8">
                <div class="flex items-center gap-3 mb-5">
                    <span class="p-2.5 rounded-xl bg-maroon/5 text-secondary"><i class="fas fa-building-columns text-lg"></i></span>
                    <h2 class="text-xl lg:text-2xl font-bold text-maroon m-0"><?php echo esc_html( $intro_title ); ?></h2>
                </div>
                <div class="text-gray-500 text-justify text-sm leading-relaxed space-y-4">
                    <p><?php echo esc_html( $intro_text ); ?></p>
                    
                </div>
            </div>

    <!-- E-Forms Quick Access Banner / Button -->
    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 p-5 rounded-2xl bg-gradient-to-r from-maroon via-maroon/90 to-maroon text-white shadow-md border border-maroon/20">
        <div class="flex items-center gap-3.5">
            <div class="w-12 h-12 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center text-secondary text-xl shrink-0 shadow-inner">
                <i class="fas fa-file-signature"></i>
            </div>
            <div>
                <h3 class="text-base font-extrabold text-white leading-snug m-0">
                    <?php esc_html_e( 'Divisional Secretariat E-Forms & Services', 'homeaffairs' ); ?>
                </h3>
                <p class="text-xs text-white/80 font-medium m-0 mt-0.5">
                    <?php esc_html_e( 'Download official applications, certificates, and public service guidelines.', 'homeaffairs' ); ?>
                </p>
            </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/e-forms/' ) ); ?>" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-xl bg-secondary hover:bg-secondary-dark text-maroon font-black text-xs shadow-lg transition-all duration-200 hover:-translate-y-0.5 shrink-0 whitespace-nowrap">
            <i class="fas fa-download text-xs"></i>
            <span><?php esc_html_e( 'Access E-Forms', 'homeaffairs' ); ?></span>
            <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
    </div>

    <div class="ds-filter-bar flex flex-col sm:flex-row gap-4 mb-8 p-4 bg-white rounded-xl shadow-sm border border-slate-200">
        <select id="district-filter" class="ds-select w-full sm:w-72 px-4 py-2.5 text-sm border border-slate-300 rounded-lg bg-white text-slate-700 appearance-none cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
            <option value="">All Districts</option>
            <?php foreach ( $districts as $d ): ?>
            <option value="<?php echo esc_attr( $d ); ?>"><?php echo esc_html( $d ); ?></option>
            <?php endforeach; ?>
        </select>
        <input type="text" id="ds-search" placeholder="Search by name, officer, address..." class="w-full sm:w-80 px-4 py-2.5 text-sm border border-slate-300 rounded-lg bg-white text-slate-700 placeholder:text-slate-500 focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
        <div class="text-sm text-slate-500 self-center ml-auto" id="result-count">Showing all <span id="count-num"><?php echo count( $ds_data ); ?></span> divisions</div>
    </div>
                
    <div class="overflow-x-auto rounded-xl border border-slate-200 bg-white shadow-sm">
        <table class="ds-table w-full">
            <thead class="ds-thead">
                <tr>
                    <th class="ds-th">Secretariat</th>
                    <th class="ds-th">Officer</th>
                    <th class="ds-th">Contact</th>
                    <th class="ds-th">Website</th>
                </tr>
            </thead>
            <tbody id="ds-tbody">
                <?php $i = 0; foreach ( $ds_data as $ds ): $row_class = ( $i % 2 === 0 ) ? 'ds-row-even' : 'ds-row-odd'; $i++; ?>
                <tr class="ds-row <?php echo $row_class; ?>" data-district="<?php echo esc_attr( $ds['district'] ); ?>">
                    <td class="ds-td">
                        <span class="ds-name"><?php echo esc_html( $ds['name'] ); ?></span>
                        <span class="ds-dist-badge"><i class="fas fa-map-marker-alt mr-1"></i><?php echo esc_html( $ds['district'] ); ?></span>
                    </td>
                    <td class="ds-td">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-user-tie text-primary-light text-sm w-4"></i>
                            <span class="font-medium text-slate-800"><?php echo esc_html( $ds['officer'] ); ?></span>
                        </div>
                        <span class="text-xs text-slate-500 ml-6"><?php echo esc_html( $ds['designation'] ); ?></span>
                    </td>
                    <td class="ds-td">
                        <div class="text-xs space-y-1">
                            <div><i class="fas fa-map-pin text-secondary w-4 mr-1"></i><?php echo esc_html( $ds['address'] ); ?></div>
                            <div><i class="fas fa-phone text-secondary w-4 mr-1"></i><?php echo esc_html( $ds['tel'] ); ?></div>
                            <div><i class="fas fa-fax text-secondary w-4 mr-1"></i><?php echo esc_html( $ds['fax'] ); ?></div>
                            <div><i class="fas fa-envelope text-secondary w-4 mr-1"></i><?php echo esc_html( $ds['email'] ); ?></div>
                        </div>
                    </td>
                    <td class="ds-td">
                        <a href="<?php echo esc_url( $ds['website'] ); ?>" target="_blank" rel="noopener noreferrer" class="ds-visit-btn">
                            <i class="fas fa-external-link-alt"></i> Visit Site
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div id="empty-state" class="hidden text-center py-12 text-slate-500">
            <i class="fas fa-search text-3xl text-slate-300 mb-3"></i>
            <p class="text-lg font-medium">No divisions match your filters</p>
            <p class="text-sm mt-1">Try adjusting your search or district selection</p>
        </div>
    </div>
    </div>
</main>

<script>
(function() {
    var districtFilter = document.getElementById('district-filter');
    var searchInput = document.getElementById('ds-search');
    var tbody = document.getElementById('ds-tbody');
    var rows = tbody.querySelectorAll('tr');
    var countNum = document.getElementById('count-num');
    var emptyState = document.getElementById('empty-state');

    function filterRows() {
        var district = districtFilter.value.toLowerCase();
        var query = searchInput.value.toLowerCase();
        var visible = 0;
        rows.forEach(function(row) {
            var rowDistrict = row.getAttribute('data-district').toLowerCase();
            var rowText = row.textContent.toLowerCase();
            var matchDistrict = !district || rowDistrict === district;
            var matchSearch = !query || rowText.indexOf(query) !== -1;
            var show = matchDistrict && matchSearch;
            row.style.display = show ? '' : 'none';
            if (show) visible++;
        });
        countNum.textContent = visible;
        emptyState.classList.toggle('hidden', visible > 0);
    }

    districtFilter.addEventListener('change', filterRows);
    searchInput.addEventListener('keyup', filterRows);
})();
</script>

<?php
get_footer();