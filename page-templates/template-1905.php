<?php
defined( 'ABSPATH' ) || exit;

/**
 * Template Name: 1905 Public Complaints & Media Services
 * Description: Public Complaints, Media Services, and Public Grievance Management System (Hotline 1905) for Home Affairs Division.
 */

get_header();

get_template_part( 'template-parts/page-banner' );



// Covered Institutions List under Home Affairs Division
$covered_institutions = [
    [
        'title' => 'Ministry Headquarters & Divisions',
        'desc'  => 'Public administration, home affairs, policy implementation, and administrative services.',
        'icon'  => 'fas fa-building-columns'
    ],
    [
        'title' => 'District Secretariats (25 Districts)',
        'desc'  => 'District level administration, regional coordination, public services, and issuance of permits.',
        'icon'  => 'fas fa-landmark'
    ],
    [
        'title' => 'Divisional Secretariats (332 Divisions)',
        'desc'  => 'Grassroots administrative services, certificates, welfare services, and local governance.',
        'icon'  => 'fas fa-sitemap'
    ],
    [
        'title' => 'Affiliated Departments & Agencies',
        'desc'  => 'Registrar General\'s Department, Pension Department, and other statutory bodies under the Ministry.',
        'icon'  => 'fas fa-layer-group'
    ]
];

// Step-by-Step Process Items
$process_steps = [
    [
        'step'  => '01',
        'title' => 'Complaint Submission',
        'desc'  => 'Complaints received via 1905 hotline or submitted official requests are systematically recorded by our dedicated officers. Complaints can also be submitted via Email or written notices.',
        'icon'  => 'fas fa-headset'
    ],
    [
        'step'  => '02',
        'title' => 'Routing & Investigation',
        'desc'  => 'Based on the nature of the issue, direct telephone coordination is initiated, reports are called from relevant institutions, office inquiries are conducted, or preliminary investigations commence.',
        'icon'  => 'fas fa-magnifying-glass-chart'
    ],
    [
        'step'  => '03',
        'title' => 'Resolution & Response',
        'desc'  => 'The complainant is officially informed of the actions taken, resolution progress, or final decision made regarding the submitted complaint.',
        'icon'  => 'fas fa-circle-check'
    ]
];

// Frequently Asked Questions (FAQs)
$faqs = [
    [
        'q' => 'What institutions can I complain about?',
        'a' => 'You can lodge complaints regarding all services provided by the institutions coming under the Ministry of Public Administration, Provincial Councils and Local Government (including District & Divisional Secretariats).'
    ],
    [
        'q' => 'How do I submit a complaint?',
        'a' => 'You can easily submit your complaint by dialing the 1905 Toll-Free Hotline or via direct Email / official submission.'
    ],
    [
        'q' => 'What is the response time for a complaint?',
        'a' => 'Depending on the nature and complexity of the complaint, it will be forwarded to the relevant department immediately and resolved as swiftly as possible.'
    ],
    [
        'q' => 'Are there any fees involved?',
        'a' => 'No. The 1905 Public Complaint and Inquiry Management service is completely free of charge.'
    ],
    [
        'q' => 'Is my privacy and confidentiality protected?',
        'a' => 'Yes. All personal information and identity details provided will be kept strictly confidential upon your request, and anonymous complaints are also accepted.'
    ]
];
?>

<main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 lg:py-10 space-y-10">

    <!-- ═══ HERO / INTRO HEADER ═══ -->
    <div class="text-center max-w-3xl mx-auto mb-6">
        <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
            <?php esc_html_e( 'MEDIA & PUBLIC COMPLAINTS MANAGEMENT SYSTEM', 'homeaffairs' ); ?>
        </span>
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-dark">
            <?php esc_html_e( 'Public Complaints, Inquiries & Suggestions ', 'homeaffairs' ); ?>
        </h1>
    </div>


    <!-- 1. Main Hero Banner Section -->
    <div class="relative bg-gradient-to-br from-primary-dark via-primary-dark to-slate-900 rounded-3xl overflow-hidden shadow-2xl p-6 sm:p-10 text-white">
        <!-- Background Decorative Glows -->
        <div class="absolute -right-12 -top-12 w-64 h-64 bg-secondary/15 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute -left-12 -bottom-12 w-64 h-64 bg-secondary/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="relative z-10 max-w-4xl mx-auto text-center space-y-5">
            
            <h2 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
               <span class="text-secondary">Hotline: 1905</span>
            </h2>

            <p class="text-xs sm:text-base text-slate-300 max-w-2xl mx-auto leading-relaxed">
                Let your voice be heard to ensure efficiency, transparency, and high quality in public service delivery across all government institutions.
            </p>

           
        </div>
    </div>

    <!-- Main Container Grid (Left Main Content + Right Sticky Sidebar) -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
        
        <!-- Left & Center Content (2 Columns) -->
        <div class="lg:col-span-2 space-y-8">
            
            <!-- 2. Covered Institutions Section -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm p-6 space-y-5">
                <div class="border-b border-slate-100 pb-4">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-secondary">COVERED SCOPE</span>
                    <h3 class="text-base sm:text-lg font-bold text-primary-dark flex items-center gap-2 mt-1">
                        <i class="fas fa-building-shield text-secondary"></i> Covered Institutions & Services
                    </h3>
                    <p class="text-xs text-slate-500 mt-1">
                        If you have experienced any issues or difficulties regarding services provided by institutions under the Ministry of Public Administration, Provincial Councils and Local Government, you can forward them via 1905:
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <?php foreach ( $covered_institutions as $inst ) : ?>
                        <div class="bg-slate-50 rounded-xl p-4 border border-slate-200/60 hover:border-secondary/40 transition-all duration-300 space-y-2 group">
                            <div class="w-10 h-10 rounded-xl bg-secondary/10 text-secondary flex items-center justify-center text-base group-hover:bg-secondary group-hover:text-primary-dark transition-colors">
                                <i class="<?php echo esc_attr( $inst['icon'] ); ?>"></i>
                            </div>
                            <h4 class="text-xs font-bold text-primary-dark group-hover:text-secondary transition-colors">
                                <?php echo esc_html( $inst['title'] ); ?>
                            </h4>
                            <p class="text-[11px] text-slate-500 leading-relaxed">
                                <?php echo esc_html( $inst['desc'] ); ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- 3. Step-by-Step Complaint Process Section -->
            <div id="complaint-process" class="bg-white rounded-2xl border border-slate-200/80 shadow-sm p-6 space-y-6">
                <div class="border-b border-slate-100 pb-4">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-secondary">WORKFLOW</span>
                    <h3 class="text-base sm:text-lg font-bold text-primary-dark flex items-center gap-2 mt-1">
                        <i class="fas fa-route text-secondary"></i> Complaint Handling Process
                    </h3>
                    <p class="text-xs text-slate-500 mt-1">
                        A systematic 3-step procedure ensures every complaint is received, investigated, and addressed efficiently.
                    </p>
                </div>

                <div class="space-y-4">
                    <?php foreach ( $process_steps as $step ) : ?>
                        <div class="flex gap-4 items-start p-4 bg-slate-50 rounded-xl border border-slate-200/60 hover:border-secondary/30 transition-all">
                            <div class="w-11 h-11 shrink-0 rounded-2xl bg-primary-dark text-secondary font-black text-xs flex items-center justify-center shadow-md">
                                <?php echo esc_html( $step['step'] ); ?>
                            </div>
                            <div class="space-y-1">
                                <h4 class="text-xs font-bold text-primary-dark flex items-center gap-2">
                                    <i class="<?php echo esc_attr( $step['icon'] ); ?> text-secondary text-[11px]"></i>
                                    <?php echo esc_html( $step['title'] ); ?>
                                </h4>
                                <p class="text-[11px] text-slate-600 leading-relaxed">
                                    <?php echo esc_html( $step['desc'] ); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- 4. Important Information for Public Section -->
            <div class="bg-gradient-to-r from-slate-900 to-primary-dark text-white rounded-2xl p-6 shadow-md relative overflow-hidden space-y-4">
                <div class="absolute right-0 top-0 w-32 h-32 bg-secondary/10 rounded-full blur-2xl pointer-events-none"></div>
                
                <h3 class="font-bold text-sm sm:text-base text-white flex items-center gap-2 border-b border-white/10 pb-3">
                    <i class="fas fa-circle-info text-secondary"></i> Important Guidelines for the Public
                </h3>

                <ul class="space-y-3 text-xs text-slate-300">
                    <li class="flex items-start gap-2.5">
                        <i class="fas fa-check-circle text-secondary text-xs mt-0.5 shrink-0"></i>
                        <span>Providing accurate details such as correct name, address, telephone number, and relevant evidence helps expedite the resolution process. However, <strong>anonymous complaints are also accepted</strong>.</span>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <i class="fas fa-lock text-secondary text-xs mt-0.5 shrink-0"></i>
                        <span>Facilities are available to lodge complaints while ensuring total <strong>confidentiality and protection of personal identity</strong> upon request.</span>
                    </li>
                </ul>
            </div>

            <!-- 5. Frequently Asked Questions (FAQ) Accordion -->
            <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm p-6 space-y-5">
                <div class="border-b border-slate-100 pb-4">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-secondary">KNOWLEDGE BASE</span>
                    <h3 class="text-base sm:text-lg font-bold text-primary-dark flex items-center gap-2 mt-1">
                        <i class="fas fa-circle-question text-secondary"></i> Frequently Asked Questions (FAQ)
                    </h3>
                </div>

                <div class="space-y-3">
                    <?php foreach ( $faqs as $index => $faq ) : ?>
                        <div class="border border-slate-200/80 rounded-xl overflow-hidden transition-all duration-200">
                            <button type="button" id="faq-btn-<?php echo $index; ?>" onclick="toggleFaq(<?php echo $index; ?>)" aria-expanded="false" aria-controls="faq-ans-<?php echo $index; ?>" class="w-full text-left p-4 bg-slate-50 hover:bg-slate-100/80 font-bold text-xs text-primary-dark flex justify-between items-center gap-3 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
                                <span class="flex items-center gap-2">
                                    <i class="fas fa-question-circle text-secondary text-xs"></i>
                                    <?php echo esc_html( $faq['q'] ); ?>
                                </span>
                                <i id="faq-icon-<?php echo $index; ?>" class="fas fa-chevron-down text-slate-600 text-[10px] transition-transform duration-200"></i>
                            </button>
                            <div id="faq-ans-<?php echo $index; ?>" class="hidden p-4 bg-white text-xs text-slate-600 border-t border-slate-100 leading-relaxed">
                                <?php echo esc_html( $faq['a'] ); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <!-- Right Side: Sticky Action Sidebar -->
        <div class="space-y-5 lg:sticky lg:top-6">
            
            <!-- Quick Connect Box -->
            <div class="bg-gradient-to-br from-primary-dark via-primary-dark to-slate-900 text-white rounded-3xl shadow-xl p-6 relative overflow-hidden space-y-5">
                <div class="absolute -right-6 -bottom-6 w-32 h-32 bg-secondary/10 rounded-full blur-2xl pointer-events-none"></div>

                <h3 class="font-bold text-sm sm:text-base flex items-center gap-2.5 text-white border-b border-white/10 pb-3">
                    <i class="fas fa-headset text-secondary text-base"></i> Direct Contact Info
                </h3>

                <div class="space-y-3.5 text-xs text-slate-300">
                    <div class="p-3 rounded-xl bg-white/5 border border-white/10 space-y-1">
                        <span class="text-[10px] uppercase font-bold text-secondary tracking-wider block">Hotline Number</span>
                        <a href="tel:1905" class="text-base font-black text-white hover:text-secondary transition-colors block no-underline">
                            <i class="fas fa-phone-alt text-secondary text-xs mr-1"></i> 1905 (Toll-Free)
                        </a>
                    </div>

                    <div class="p-3 rounded-xl bg-white/5 border border-white/10 space-y-1">
                        <span class="text-[10px] uppercase font-bold text-secondary tracking-wider block">Email Complaints</span>
                        <a href="mailto:info@moha.gov.lk" class="text-xs font-bold text-white hover:text-secondary transition-colors block no-underline">
                            <i class="fas fa-envelope text-secondary text-xs mr-1"></i> info@moha.gov.lk
                        </a>
                    </div>

                    <div class="p-3 rounded-xl bg-white/5 border border-white/10 space-y-1">
                        <span class="text-[10px] uppercase font-bold text-secondary tracking-wider block">Whatsapp Complaints</span>
                        <a href="https://wa.me/94710000000" target="_blank" rel="noopener noreferrer" class="text-xs font-bold text-white hover:text-secondary transition-colors block no-underline focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary">
                            <i class="fab fa-whatsapp text-secondary text-xs mr-1"></i> 071-000000
                        </a>
                    </div>

                    <div class="p-3 rounded-xl bg-white/5 border border-white/10 space-y-1">
                        <span class="text-[10px] uppercase font-bold text-secondary tracking-wider block">Operating Hours</span>
                        <p class="text-xs font-bold text-white">
                            <i class="fas fa-clock text-secondary text-xs mr-1"></i> Working Days: 8:30 AM - 4:15 PM
                        </p>
                    </div>
                </div>

                <div class="pt-2">
                    <a href="tel:1905" class="w-full py-3 px-4 rounded-xl bg-secondary text-primary-dark font-black text-xs hover:bg-secondary-light transition-all shadow-md flex items-center justify-center gap-2 no-underline">
                        <i class="fas fa-phone-volume text-xs"></i> Dial 1905 Now
                    </a>
                </div>
            </div>

            <!-- Submit Written Notice Box -->
            <div class="bg-white rounded-2xl border border-slate-200/80 p-5 text-xs text-slate-600 space-y-3 shadow-sm">
                <h4 class="font-bold text-primary-dark flex items-center gap-2 text-sm border-b border-slate-100 pb-2">
                    <i class="fas fa-envelope-open-text text-secondary"></i> Postal Submissions
                </h4>
                <p class="text-[11px] text-slate-500 leading-relaxed">
                    Written complaints or formal documentation can be addressed directly to:
                </p>
                <div class="p-3 bg-slate-50 rounded-xl border border-slate-200/60 text-[11px] font-semibold text-slate-700 space-y-1">
                    <p class="font-bold text-primary-dark">Public Complaints Unit,</p>
                    <p>Home Affairs Division,</p>
                    <p>Independence Square, Colombo 07.</p>
                </div>
            </div>

        </div>
    </div>
</main>

<script>
// Accordion Toggle for FAQ Section
function toggleFaq(index) {
    var ans = document.getElementById('faq-ans-' + index);
    var icon = document.getElementById('faq-icon-' + index);
    
    if (ans.classList.contains('hidden')) {
        ans.classList.remove('hidden');
        icon.classList.add('rotate-180');
    } else {
        ans.classList.add('hidden');
        icon.classList.remove('rotate-180');
    }
}
</script>

<?php get_footer(); ?>