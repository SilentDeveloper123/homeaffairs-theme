<?php
/**
 * Template Name:E-Services
 */

defined( 'ABSPATH' ) || exit;

get_header(); 
get_template_part( 'template-parts/page-banner' );
?>

<!-- ═══ MAIN SECTION WITH ALPINE.JS INTERACTS ═══ -->
<main id="main-content" role="main" class="py-12 bg-slate-50/70 border-b border-gray-200/60" x-data="{ 
  

    <!-- ─── TAB 2: E-FORMS & ONLINE SERVICES ─── -->
    <div x-show="activeTab === 'eforms'" x-transition class="space-y-6">
      
      <div class="text-center max-w-3xl mx-auto mb-8">
    <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
        <?php esc_html_e( 'PUBLIC SERVICES & E-PORTAL', 'homeaffairs' ); ?>
    </span>
    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon mb-3">
        <?php esc_html_e( 'Public e-Services & Official Forms', 'homeaffairs' ); ?>
    </h1>
    
</div>

      <!-- e-Forms Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- Form Item 1 -->
        <div class="bg-white border border-gray-200/90 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="bg-secondary/15 text-secondary-dark text-[10px] font-bold px-2.5 py-0.5 rounded-full">Certificates</span>
              <span class="text-[10px] text-gray-600 font-semibold">PDF • 450 KB</span>
            </div>
            <h4 class="text-sm font-bold text-primary-darker mb-2"><?php esc_html_e( 'Application for Character/Residency Certificate', 'homeaffairs' ); ?></h4>
            <p class="text-xs text-gray-600 leading-relaxed mb-4">
              <?php esc_html_e( 'Standard application form required for obtaining Grama Niladhari residence endorsement.', 'homeaffairs' ); ?>
            </p>
          </div>
          <div class="flex items-center gap-2 pt-3 border-t border-gray-100">
            <a href="#" class="flex-1 bg-primary/10 hover:bg-primary text-primary hover:text-white text-center py-2 rounded-xl text-xs font-bold transition-all">
              <i class="fas fa-download"></i> Sinhala
            </a>
            <a href="#" class="flex-1 bg-slate-100 hover:bg-gray-200 text-gray-700 text-center py-2 rounded-xl text-xs font-bold transition-all">
              <i class="fas fa-download"></i> Tamil
            </a>
          </div>
        </div>

        <!-- Form Item 2 -->
        <div class="bg-white border border-gray-200/90 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="bg-primary/10 text-primary text-[10px] font-bold px-2.5 py-0.5 rounded-full">Land Matters</span>
              <span class="text-[10px] text-gray-600 font-semibold">PDF • 620 KB</span>
            </div>
            <h4 class="text-sm font-bold text-primary-darker mb-2"><?php esc_html_e( 'Application for State Land Alienation', 'homeaffairs' ); ?></h4>
            <p class="text-xs text-gray-600 leading-relaxed mb-4">
              <?php esc_html_e( 'Permit and grant application forms under the Land Development Ordinance.', 'homeaffairs' ); ?>
            </p>
          </div>
          <div class="flex items-center gap-2 pt-3 border-t border-gray-100">
            <a href="#" class="flex-1 bg-primary/10 hover:bg-primary text-primary hover:text-white text-center py-2 rounded-xl text-xs font-bold transition-all">
              <i class="fas fa-download"></i> Sinhala
            </a>
            <a href="#" class="flex-1 bg-slate-100 hover:bg-gray-200 text-gray-700 text-center py-2 rounded-xl text-xs font-bold transition-all">
              <i class="fas fa-download"></i> Tamil
            </a>
          </div>
        </div>

        <!-- Form Item 3 -->
        <div class="bg-white border border-gray-200/90 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
          <div>
            <div class="flex items-center justify-between mb-3">
              <span class="bg-primary-light/10 text-primary-light text-[10px] font-bold px-2.5 py-0.5 rounded-full">Business & Revenue</span>
              <span class="text-[10px] text-gray-600 font-semibold">PDF • 380 KB</span>
            </div>
            <h4 class="text-sm font-bold text-primary-darker mb-2"><?php esc_html_e( 'Business Name Registration Form', 'homeaffairs' ); ?></h4>
            <p class="text-xs text-gray-600 leading-relaxed mb-4">
              <?php esc_html_e( 'Registration of individual/sole proprietorship business names under provincial statutes.', 'homeaffairs' ); ?>
            </p>
          </div>
          <div class="flex items-center gap-2 pt-3 border-t border-gray-100">
            <a href="#" class="flex-1 bg-primary/10 hover:bg-primary text-primary hover:text-white text-center py-2 rounded-xl text-xs font-bold transition-all">
              <i class="fas fa-download"></i> Sinhala
            </a>
            <a href="#" class="flex-1 bg-slate-100 hover:bg-gray-200 text-gray-700 text-center py-2 rounded-xl text-xs font-bold transition-all">
              <i class="fas fa-download"></i> Tamil
            </a>
          </div>
        </div>

      </div>

    </div>

  </div>
</main>

<!-- Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<?php get_footer(); ?>