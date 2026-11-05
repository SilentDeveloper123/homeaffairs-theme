<?php
defined( 'ABSPATH' ) || exit;

/**  
 * Template Name: Overview Template
 */

get_header(); 
get_template_part( 'template-parts/page-banner' );

// English Content Variables
$banner_title    = "Overview test";
$banner_subtitle = "Home Affairs Division";
$breadcrumb_home = "Home";

$tag_text    = "ABOUT THE DIVISION";
$title       = "Overview";
$subtitle    = "The heart of civil administration, coordination, and public service excellence within the Home Affairs Division.";

// Overview / History Box Style Content Variables
$overview_title = "Introduction of the Home Affairs Division";
$p1             = "Operating as the backbone of Sri Lanka’s civil administration, the Home Affairs Division functions under the Ministry of Public Administration, Provincial Councils and Local Government. The Division plays a pivotal role in strengthening regional governance by coordinating and facilitating the island-wide administrative network of District Secretariats, Divisional Secretariats, and Grama Niladhari divisions.";
$p2             = "Driven by national priorities, the Division is committed to transforming traditional public service into a modern, transparent, and technology-driven framework. By fostering administrative efficiency and seamless service delivery at the grassroots level, it continuously supports the nation’s sustainable social and economic development.";

// Objectives / History Box Style Content Variables
$Objectives_title = "Objectives";
$p3             = "Establishment of a district, divisional and rural administration mechanism, with a participatory development approach which is closer to general public.";
$p4             = "Establishment of collective and participatory approach for rural, divisional and overall economic development.";
$p5             = "Establishment and keeping of integrated approach and a public service, closer to general public.";
$p6             = "Strengthening of district, divisional and rural administration through novel Information Technology link.";
$p7             = "Motivation of human resource in a way that it would develop efficiency, productivity and quality.";

// strategies / History Box Style Content Variables
$Strategiess_title = "Strategies";
$p8             = "Simplification and reorganizing of organizational structure of district secretariats and divisional secretariats, ensuring public responsibility and satisfaction.";
$p9             = "Networking of all District Secretaries, Divisional Secretaries, Grama Niladhari offices and Registrar General Department under one roof.";
$p10            = "Development of office structure in a favorable manner allowing clients/users to respond.";
$p11            = "Empowerment and motivation of employees of all District Secretariats and Divisional Secretariats via, creating an attractive paying procedure in a healthy and progressive working environment.";

// Main function / History Box Style Content Variables
$Main_Functions_title = "Main Functions";
$p12            = "Formulation, following up and evaluation of policies, programmes and projects, related to the subject of Home Affairs and the subjects of Registrar General Department, in all District Secretariats and Divisional Secretariats.";
$p13            = "Organizing of public ceremonies.";
$p14            = "Delimitation of Grama Rajya centers.";
$p15            = "Establishment of Grama Rajya Center Boards.";
$p16           = "Establishment of District Development and Coordination Boards.";
$p17           = "Implementing activities related to registration of births, marriages and deaths.";
$p18           = "Implementation of activities related to all subjects assigned on Registrar General Department, all district and divisional secretariats.";
$p19           = "Supervision of Registrar General Department, all District Secretariats, Divisional Secretariats and Grama Niladhari Offices.";



// Vision & Mission Texts
$vision_title = "Vision";
$vision_desc  = "Providing exceptional service towards the Nation’s progress";

$mission_title = "Mission";
$mission_desc  = "Assuring an excellent service through an optimum administrative system at national and divisional level with the utilization of human resources endowed with required skills.";

$sidebar_title = "On This Page";
$link_about    = "Introduction of the Home Affairs Division";
$link_mv       = "Mission &amp; Vision";
$link_lead     = "Objectives";
$link_funcs    = "Strategies";
$link_current  = "Main function";

$contact_title = "Quick Contacts";
$contact_btn   = "Contact";
?>

<!-- ═══ MAIN BODY CONTENT SECTION ═══ -->
<main id="main-content" role="main" class="w-full bg-warm-white py-10 lg:py-16 font-sans text-gray-800 antialiased block clear-both">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Service Page Style Header -->
    <div class="text-center max-w-3xl mx-auto mb-10 lg:mb-12">
      <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
        <?php echo esc_html( $tag_text ); ?>
      </span>
      <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-primary-darker tracking-tight"><?php echo esc_html( $title ); ?></h1>
    </div>

    <!-- Grid System: 3 Columns Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
      
      <!-- 🔲 LEFT COLUMN: MAIN CONTENT BOX -->
      <div class="lg:col-span-2 space-y-8">
        
        <!-- Overview / History Styled Box -->
        <div class="bg-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 lg:p-8 relative overflow-hidden">
          <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
          <h2 class="text-xl lg:text-2xl font-extrabold text-primary-darker mb-4 flex items-center gap-2">
            <i class="fas fa-landmark text-secondary text-lg"></i>
            <?php echo esc_html( $overview_title ); ?>
          </h2>
          <div class="text-slate-600 text-sm text-justify leading-relaxed space-y-4">
            <p><?php echo esc_html( $p1 ); ?></p>
            <p><?php echo esc_html( $p2 ); ?></p>
          </div>
        </div>

        <!-- 🌟 ELEGANT MISSION & VISION CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          
          <!-- Vision Card -->
          <div class="bg-white rounded-2xl p-6 border-t-4 border-secondary shadow-sm border-x border-b border-secondary/30 flex flex-col justify-between">
            <div>
              <div class="flex items-center gap-3 mb-3">
                <span class="w-10 h-10 rounded-full bg-secondary/10 text-secondary flex items-center justify-center text-base border border-secondary/20">
                  <i class="fas fa-eye"></i>
                </span>
                <h3 class="text-lg font-bold text-primary-darker tracking-wide"><?php echo esc_html( $vision_title ); ?></h3>
              </div>
              <p class="text-gray-600 text-xs sm:text-[13px] leading-relaxed m-0">
                <?php echo esc_html( $vision_desc ); ?>
              </p>
            </div>
          </div>

          <!-- Mission Card -->
          <div class="bg-white rounded-2xl p-6 border-t-4 border-primary-darker shadow-sm border-x border-b border-secondary/30 flex flex-col justify-between">
            <div>
              <div class="flex items-center gap-3 mb-3">
                <span class="w-10 h-10 rounded-full bg-primary-darker/10 text-primary-darker flex items-center justify-center text-base border border-primary-darker/20">
                  <i class="fas fa-bullseye"></i>
                </span>
                <h3 class="text-lg font-bold text-primary-darker tracking-wide"><?php echo esc_html( $mission_title ); ?></h3>
              </div>
              <p class="text-gray-600 text-xs sm:text-[13px] leading-relaxed m-0">
                <?php echo esc_html( $mission_desc ); ?>
              </p>
            </div>
          </div>

        </div>
       
      <!-- Overview / oBJECTIVES -->
        <div class="bg-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 lg:p-8 relative overflow-hidden">
          <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
          <h2 class="text-xl lg:text-2xl font-extrabold text-primary-darker mb-4 flex items-center gap-2">
            <i class="fas fa-landmark text-secondary text-lg"></i>
            <?php echo esc_html( $Objectives_title ); ?>
          </h2>
          <div class="text-slate-600 text-sm text-justify leading-relaxed space-y-4">
            <ul class="text-slate-600 text-sm leading-relaxed space-y-3 list-disc list-outside pl-5">
            <li><?php echo esc_html( $p3 ); ?></li>
            <li><?php echo esc_html( $p4 ); ?></li>
            <li><?php echo esc_html( $p5 ); ?></li>
            <li><?php echo esc_html( $p6 ); ?></li>
            <li><?php echo esc_html( $p7 ); ?></li>
          </ul>
          
          </div>
        </div>

      <!-- Overview / strategies -->
        <div class="bg-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 lg:p-8 relative overflow-hidden">
          <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
          <h2 class="text-xl lg:text-2xl font-extrabold text-primary-darker mb-4 flex items-center gap-2">
            <i class="fas fa-landmark text-secondary text-lg"></i>
            <?php echo esc_html( $Strategiess_title ); ?>
          </h2>
          <div class="text-slate-600 text-sm text-justify leading-relaxed space-y-4">
            <ul class="text-slate-600 text-sm leading-relaxed space-y-3 list-disc list-outside pl-5">
            <li><?php echo esc_html( $p8 ); ?></li>
            <li><?php echo esc_html( $p9 ); ?></li>
            <li><?php echo esc_html( $p10 ); ?></li>
            <li><?php echo esc_html( $p11 ); ?></li>
          </ul>
            
          </div>
        </div>

      <!-- Overview / Main Functions -->
        <div class="bg-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 lg:p-8 relative overflow-hidden">
          <div class="absolute top-0 left-0 w-1.5 h-full bg-gradient-to-b from-secondary to-primary-darker"></div>
          <h2 class="text-xl lg:text-2xl font-extrabold text-primary-darker mb-4 flex items-center gap-2">
            <i class="fas fa-landmark text-secondary text-lg"></i>
            <?php echo esc_html( $Main_Functions_title ); ?>
          </h2>
          <div class="text-slate-600 text-sm text-justify leading-relaxed space-y-4">
            
          <ul class="text-slate-600 text-sm leading-relaxed space-y-3 list-disc list-outside pl-5">
            <li><?php echo esc_html( $p12 ); ?></li>
            <li><?php echo esc_html( $p13 ); ?></li>
            <li><?php echo esc_html( $p14  ); ?></li>
            <li><?php echo esc_html( $p15 ); ?></li>
            <li><?php echo esc_html( $p16 ); ?></li>
            <li><?php echo esc_html( $p17 ); ?></li>
            <li><?php echo esc_html( $p18 ); ?></li>
            <li><?php echo esc_html( $p19 ); ?></li>

          </ul>

          </div>
        </div>

      </div>

      <!-- 🔲 RIGHT COLUMN: SIDEBAR -->
      <div class="space-y-6 block">
        
        <!-- On This Page Widget -->
        <div class="bg-warm-white rounded-2xl shadow-sm border border-primary-darker/15 p-6 block">
          <h3 class="font-bold text-primary-darker text-base mb-4 flex items-center gap-2 border-b border-primary-darker/10 pb-3">
            <i class="fas fa-list-ul text-secondary text-sm"></i> <?php echo esc_html( $sidebar_title ); ?>
          </h3>
          <ul class="space-y-3.5 text-xs font-medium text-gray-600 p-0 m-0 list-none">
            <li class="flex items-center gap-2">
              <i class="fas fa-chevron-right text-[8px] text-secondary"></i>
              <a href="#" class="hover:text-primary-darker transition-colors no-underline text-gray-600"><?php echo esc_html( $link_about ); ?></a>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-chevron-right text-[8px] text-secondary"></i>
              <a href="#" class="hover:text-primary-darker transition-colors no-underline text-gray-600"><?php echo wp_kses_post( $link_mv ); ?></a>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-chevron-right text-[8px] text-secondary"></i>
              <a href="#" class="hover:text-primary-darker transition-colors no-underline text-gray-600"><?php echo esc_html( $link_lead ); ?></a>
            </li>
            <li class="flex items-center gap-2">
              <i class="fas fa-chevron-right text-[8px] text-secondary"></i>
              <a href="#" class="hover:text-primary-darker transition-colors no-underline text-gray-600"><?php echo esc_html( $link_funcs ); ?></a>
            </li>
            <li class="flex items-center gap-2 text-primary-darker font-bold">
              <i class="fas fa-chevron-right text-[8px] text-secondary"></i>
              <a href="#" class="text-primary-darker transition-colors no-underline font-bold"><?php echo esc_html( $link_current ); ?></a>
            </li>
          </ul>
        </div>

        <!-- Quick Contacts Widget (primary-darker & secondary-light theme) -->
        <div class="bg-primary-darker text-white rounded-2xl shadow-md p-6 border border-secondary/30 block">
          <h3 class="font-bold text-sm mb-5 flex items-center gap-2 text-secondary-light border-b border-secondary/20 pb-3">
            <i class="fas fa-headset text-secondary-light"></i> <span style="color: var(--color-secondary-light);"><?php echo esc_html( $contact_title ); ?></span>
          </h3>
          <div class="space-y-3.5 text-xs text-white/90">
            <div class="flex items-center gap-3">
              <i class="fas fa-phone-alt text-secondary w-4 text-left shrink-0"></i> 
              <span class="text-white/90">+94 112 050 450</span>
            </div>
            <div class="flex items-center gap-3">
              <i class="fas fa-envelope text-secondary w-4 text-left shrink-0"></i> 
              <span class="text-white/90">info@moha.gov.lk</span>
            </div>
            <div class="flex items-start gap-3">
              <i class="fas fa-map-marker-alt text-secondary w-4 text-left mt-0.5 shrink-0"></i> 
              <span class="text-white/90 leading-normal">Nila Madura, Independence Sq, Colombo 07</span>
            </div>
          </div>
          <a href="#" class="mt-6 w-full bg-secondary text-primary-darker font-bold py-2.5 px-4 rounded-xl text-xs hover:bg-gold-deep transition-colors inline-flex items-center justify-center gap-1.5 shadow-sm no-underline">
            <?php echo esc_html( $contact_btn ); ?> <i class="fas fa-arrow-right text-[9px]"></i>
          </a>
        </div>

      </div>

    </div>
  </div>
</main>

<?php get_footer(); ?>