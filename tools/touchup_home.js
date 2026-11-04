const fs = require('fs');
const path = require('path');

const filePath = path.resolve(__dirname, '../page-templates/template-home.php');
let raw = fs.readFileSync(filePath, 'utf8');
const hasCRLF = raw.includes('\r\n');
let content = raw.replace(/\r\n/g, '\n');

// 1. Hero Slide 1, 2, 3 CTA buttons & pagination dots
content = content.replace(
  `<div class="flex gap-2.5 justify-start flex-wrap">
              <a href="<?php echo $ha_services; ?>" class="bg-secondary hover:bg-secondary-dark text-primary-dark font-semibold px-3.5 py-1.5 rounded text-[11px] inline-flex items-center gap-1.5 transition-all shadow-sm">
                <i class="fas fa-users-cog text-[9px]"></i> <?php esc_html_e( 'About Us', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[9px]"></i>
              </a>
            </div>`,
  `<div class="flex gap-2.5 justify-start flex-wrap">
              <a href="<?php echo $ha_services; ?>" class="bg-secondary hover:bg-secondary-dark text-primary-dark font-bold px-4 py-2 rounded-lg text-xs inline-flex items-center gap-2 transition-all shadow-sm hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0">
                <i class="fas fa-users-cog text-[10px]"></i> <?php esc_html_e( 'About Us', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[9px]"></i>
              </a>
            </div>`
);

content = content.replace(
  `<div class="flex gap-2.5 justify-start flex-wrap">
              <a href="<?php echo $ha_eservices; ?>" class="bg-secondary hover:bg-secondary-dark text-primary-dark font-semibold px-3.5 py-1.5 rounded text-[11px] inline-flex items-center gap-1.5 transition-all shadow-sm">
                <i class="fas fa-map-marked-alt text-[9px]"></i> <?php esc_html_e( 'Explore Regional Network', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[9px]"></i>
              </a>
            </div>`,
  `<div class="flex gap-2.5 justify-start flex-wrap">
              <a href="<?php echo $ha_eservices; ?>" class="bg-secondary hover:bg-secondary-dark text-primary-dark font-bold px-4 py-2 rounded-lg text-xs inline-flex items-center gap-2 transition-all shadow-sm hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0">
                <i class="fas fa-map-marked-alt text-[10px]"></i> <?php esc_html_e( 'Explore Regional Network', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[9px]"></i>
              </a>
            </div>`
);

content = content.replace(
  `<div class="flex gap-2.5 justify-start flex-wrap">
              <a href="<?php echo $ha_institutions; ?>" class="bg-secondary hover:bg-secondary-dark text-primary-dark font-semibold px-3.5 py-1.5 rounded text-[11px] inline-flex items-center gap-1.5 transition-all shadow-sm">
                <i class="fas fa-location-dot text-[9px]"></i> <?php esc_html_e( 'Find Your GN Officer', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[9px]"></i>
              </a>
            </div>`,
  `<div class="flex gap-2.5 justify-start flex-wrap">
              <a href="<?php echo $ha_institutions; ?>" class="bg-secondary hover:bg-secondary-dark text-primary-dark font-bold px-4 py-2 rounded-lg text-xs inline-flex items-center gap-2 transition-all shadow-sm hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0">
                <i class="fas fa-location-dot text-[10px]"></i> <?php esc_html_e( 'Find Your GN Officer', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[9px]"></i>
              </a>
            </div>`
);

// Pagination dots
content = content.replace(
  `        <!-- Pagination Dots -->
        <div class="flex items-center gap-1.5 mt-4">
          <span class="hero-dot active w-2 h-2 rounded-full bg-secondary cursor-pointer transition-all"></span>
          <span class="hero-dot w-1.5 h-1.5 rounded-full bg-white/40 hover:bg-white/70 cursor-pointer transition-all"></span>
          <span class="hero-dot w-1.5 h-1.5 rounded-full bg-white/40 hover:bg-white/70 cursor-pointer transition-all"></span>
        </div>`,
  `        <!-- Pagination Dots -->
        <div class="flex items-center gap-2 mt-4" role="tablist" aria-label="<?php esc_attr_e( 'Slide pagination', 'homeaffairs' ); ?>">
          <button type="button" class="hero-dot active" aria-label="<?php esc_attr_e( 'Slide 1', 'homeaffairs' ); ?>"></button>
          <button type="button" class="hero-dot" aria-label="<?php esc_attr_e( 'Slide 2', 'homeaffairs' ); ?>"></button>
          <button type="button" class="hero-dot" aria-label="<?php esc_attr_e( 'Slide 3', 'homeaffairs' ); ?>"></button>
        </div>`
);

// News View All link
content = content.replace(
  `<a href="<?php echo esc_url( $ha_news ); ?>" class="inline-flex items-center gap-2 bg-white text-secondary font-bold text-xs px-4 py-2.5 rounded-xl border border-gray-200/80 shadow-sm hover:border-secondary hover:bg-secondary hover:text-white transition-all group">`,
  `<a href="<?php echo esc_url( $ha_news ); ?>" class="inline-flex items-center gap-2 bg-white text-primary hover:text-secondary-dark font-bold text-xs px-4 py-2 rounded-xl border border-slate-200/90 shadow-2xs hover:border-secondary hover:bg-secondary/5 transition-all group">`
);

// News Featured Card
content = content.replace(
  `<div class="lg:col-span-5 bg-white border border-gray-200/90 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col justify-between h-full group">`,
  `<div class="lg:col-span-5 bg-white border border-slate-200/90 hover:border-secondary/40 rounded-2xl overflow-hidden shadow-2xs hover:shadow-md transition-all duration-300 flex flex-col justify-between h-full group">`
);

// Replace all 4 small news card containers
content = content.replace(
  /<div class="bg-white border border-gray-200\/90 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">/g,
  `<div class="bg-white border border-slate-200/90 hover:border-secondary/40 rounded-2xl overflow-hidden shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 flex flex-col justify-between group">`
);

// 2. Quick Access / Downloads Section
// Replace the entire grid container and 8 cards with modern minimalist cards
const oldQuickAccessRegex = /<!-- 4-Column Responsive Grid \(Tight Gap\) -->[\s\S]*?<\/div>\s*<\/div>\s*<\/section>\s*<!-- ═══ RTI BANNER/m;

const newQuickAccess = `<!-- 4-Column Responsive Grid (Tight Gap) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
      
      <!-- Card 1: Circulars -->
      <a href="<?php echo esc_url( $ha_circulars ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-file-alt"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Circulars', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Home Affairs directives', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 2: Exam Results -->
      <a href="<?php echo esc_url( home_url( '/exam-results/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-chart-simple"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Exam Results', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Verified departmental marks', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 3: Transfers -->
      <a href="<?php echo esc_url( home_url( '/transfer-procedures/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-arrows-rotate"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Transfers', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Schedules and guidelines', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 4: Procurement -->
      <a href="<?php echo esc_url( home_url( '/procurements-notices/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-receipt"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Procurement', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Active government tenders', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 5: eforms -->
      <a href="<?php echo esc_url( home_url( '/e-forms/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-laptop-file"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'E Forms', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Downloadable application templates', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 6: Circuit Bungalows -->
      <a href="<?php echo esc_url( home_url( '/circuit-bungalows/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-house-user"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Circuit Bungalows', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Reservations and guidelines', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 7: List of GN Division & Villages -->
      <a href="<?php echo esc_url( home_url( '/gn-divisions/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-map-location-dot"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'List of GN Division & Villages', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Regional administrative directory', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

      <!-- Card 8: Internal Affairs Unit -->
      <a href="<?php echo esc_url( home_url( '/internal-affairs-unit/' ) ); ?>" 
         class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-3.5 flex items-center justify-between gap-3 shadow-2xs hover:shadow-md hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200 overflow-hidden">
        
        <div class="flex items-center gap-3 min-w-0">
          <div class="w-10 h-10 bg-primary/[0.05] border border-primary/10 rounded-xl flex items-center justify-center text-sm shrink-0 text-primary group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:scale-105 transition-all duration-200">
            <i class="fas fa-shield-halved"></i>
          </div>
          <div class="truncate">
            <strong class="block text-sm font-bold text-primary group-hover:text-primary-dark transition-colors duration-200 truncate">
              <?php esc_html_e( 'Internal Affairs Unit', 'homeaffairs' ); ?>
            </strong>
            <span class="text-[11px] text-slate-500 font-normal truncate block mt-0.5">
              <?php esc_html_e( 'Integrity & anti-corruption oversight', 'homeaffairs' ); ?>
            </span>
          </div>
        </div>

        <div class="text-slate-300 group-hover:text-secondary group-hover:translate-x-0.5 transition-all duration-200 text-xs shrink-0">
          <i class="fas fa-chevron-right"></i>
        </div>
      </a>

    </div>
  </div>
</section>


<!-- ═══ RTI BANNER`;

if (oldQuickAccessRegex.test(content)) {
  content = content.replace(oldQuickAccessRegex, newQuickAccess);
  console.log('Replaced Quick Access section successfully.');
} else {
  console.error('FAILED to match Quick Access section regex.');
  process.exit(1);
}

// 3. RTI & 1905 Hotline Banners
content = content.replace(
  `<!-- Subtle Dark Overlay for better contrast -->
          <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>`,
  `<!-- Ambient Dark Gradient Overlay for optimal contrast -->
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/60 to-slate-950/40 pointer-events-none"></div>`
);

content = content.replace(
  `<!-- Subtle Dark Overlay for better contrast -->
          <div class="absolute inset-0 bg-black/40 pointer-events-none"></div>`,
  `<!-- Ambient Dark Gradient Overlay for optimal contrast -->
          <div class="absolute inset-0 bg-gradient-to-t from-slate-950/90 via-slate-950/60 to-slate-950/40 pointer-events-none"></div>`
);

// Fix typo "omplaints"
content = content.replace(
  `<?php esc_html_e( 'Report omplaints Grievances & Issues', 'homeaffairs' ); ?>`,
  `<?php esc_html_e( 'Report Complaints, Grievances & Issues', 'homeaffairs' ); ?>`
);

// View More uppercase
content = content.replace(
  `<i class="fas fa-info-circle"></i> <?php esc_html_e( 'view more', 'homeaffairs' ); ?>`,
  `<i class="fas fa-info-circle"></i> <?php esc_html_e( 'View More', 'homeaffairs' ); ?>`
);

// 4. What We Offer (6 Service Cards)
const oldServicesRegex = /<!-- Grid \(3 Columns\) -->[\s\S]*?<\/div>\s*<\/div>\s*<\/section>\s*<!-- ═══ CTA SECTION/m;

const newServices = `<!-- Grid (3 Columns) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

      <!-- Card 1: Publications & Downloads -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-file-arrow-down"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Resources</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'Publications & Downloads', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Access official administrative reports, acts, guidelines, and downloadable forms.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/publications/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Publications', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

      <!-- Card 2: Scholarships -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-user-graduate"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Education</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'Scholarships', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Explore local and international scholarship opportunities available for public officers.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/scholarships/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Scholarships', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

      <!-- Card 3: Services -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-handshake-angle"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Public Services</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'Services', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Explore citizen services, administrative assistance, permits, and support provided by Home Affairs.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Services', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

      <!-- Card 4: National Anthem & Flag -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-flag"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Symbols</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'National Anthem & Flag', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Official guidelines, protocols, downloads, and rules regarding the National Flag and Anthem.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/national-anthem-flag-protocol/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Details', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

      <!-- Card 5: Government Calendar -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-calendar-days"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Schedule</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'Government Calendar', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Official public holidays, mercantile holidays, and administrative schedule for the year.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/government-calendar/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Calendar', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

      <!-- Card 6: Vacancies -->
      <div class="group relative bg-white border border-slate-200/90 hover:border-secondary rounded-2xl p-5 shadow-2xs hover:shadow-md hover:-translate-y-1 active:scale-[0.99] transition-all duration-300 flex flex-col justify-between overflow-hidden">
        <div class="absolute top-0 left-0 w-1 h-full bg-gradient-to-b from-secondary to-primary opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div>
          <div class="flex items-center justify-between mb-3">
            <div class="relative z-10 w-11 h-11 bg-primary/[0.05] border border-primary/10 text-primary rounded-xl flex items-center justify-center text-lg group-hover:bg-primary group-hover:text-secondary group-hover:border-primary group-hover:shadow-sm group-hover:scale-105 transition-all duration-300 shrink-0">
              <i class="fas fa-briefcase"></i>
            </div>
            <span class="text-[10px] font-bold text-slate-400 group-hover:text-secondary-dark transition-colors uppercase tracking-wider">Careers</span>
          </div>
          <h3 class="text-base font-bold text-primary mb-1.5 group-hover:text-primary-dark transition-colors">
            <?php esc_html_e( 'Vacancies', 'homeaffairs' ); ?>
          </h3>
          <p class="text-xs text-slate-500 leading-relaxed mb-4">
            <?php esc_html_e( 'Find current job openings, public recruitment notices, and career opportunities.', 'homeaffairs' ); ?>
          </p>
        </div>
        <a href="<?php echo esc_url( home_url( '/vacancies/' ) ); ?>" class="text-primary group-hover:text-secondary-dark font-bold text-xs inline-flex items-center gap-1.5 group-hover:gap-2.5 transition-all mt-auto pt-3 border-t border-slate-100">
          <?php esc_html_e( 'View Vacancies', 'homeaffairs' ); ?> <i class="fas fa-arrow-right text-[10px]"></i>
        </a>
      </div>

    </div>
  </div>
</section>


<!-- ═══ CTA SECTION`;

if (oldServicesRegex.test(content)) {
  content = content.replace(oldServicesRegex, newServices);
  console.log('Replaced Services section successfully.');
} else {
  console.error('FAILED to match Services section regex.');
  process.exit(1);
}

// 5. CTA Section button polish
content = content.replace(
  `<a href="<?php echo esc_url( $ha_contact ); ?>" class="cta-btn bg-primary-darker text-white font-bold px-5 py-2.5 rounded-lg text-xs sm:text-sm inline-flex items-center gap-2 hover:bg-primary-darker transition-all border border-white/20 shadow-md">
  <i class="fas fa-phone text-white" style="color: #ffffff !important; opacity: 1 !important;"></i> <?php esc_html_e( 'Contact Us', 'homeaffairs' ); ?>
</a>`,
  `<a href="<?php echo esc_url( $ha_contact ); ?>" class="cta-btn inline-flex items-center gap-2 bg-secondary hover:bg-secondary-dark text-primary-dark font-bold px-6 py-2.5 rounded-full text-xs sm:text-sm shadow-md hover:shadow-gold hover:-translate-y-0.5 active:translate-y-0 transition-all border border-secondary-light/30">
  <i class="fas fa-phone-alt text-xs"></i> <?php esc_html_e( 'Contact Us', 'homeaffairs' ); ?>
</a>`
);

// 6. Related Organizations - Fix broken unclosed <a> tags and modernize
const oldOrgsRegex = /<!-- ═══ RELATED ORGANIZATIONS \/ INSTITUTIONS ═══ -->[\s\S]*?<\?php get_footer\(\); \?>/m;

const newOrgs = `<!-- ═══ RELATED ORGANIZATIONS / INSTITUTIONS ═══ -->
<section class="py-12 lg:py-16 bg-white border-t border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

    <!-- Section Header with Line Divider -->
    <div class="relative flex items-center justify-center mb-8">
      <div class="flex-grow border-t border-slate-200"></div>
      <h2 class="text-base sm:text-lg font-black text-primary px-6 bg-white uppercase tracking-wider">
        <?php esc_html_e( 'Related Organizations', 'homeaffairs' ); ?>
      </h2>
      <div class="flex-grow border-t border-slate-200"></div>
    </div>

    <!-- Horizontal Cards Grid (2 columns on mobile, 4 columns on large screens) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

      <!-- Card 1: Ministry of Public Administration -->
      <a href="https://moha.gov.lk/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3.5 bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-4 shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 text-left group">
        <img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/emblem-sri-lanka.png' ); ?>" alt="<?php esc_attr_e( 'Sri Lanka Emblem', 'homeaffairs' ); ?>" class="w-10 h-10 object-contain shrink-0 group-hover:scale-105 transition-transform duration-300">
        <span class="text-xs sm:text-sm font-bold text-primary group-hover:text-secondary-dark transition-colors leading-snug">
          <?php esc_html_e( 'Ministry of Public Administration, Provincial Councils and Local Government', 'homeaffairs' ); ?>
        </span>
      </a>

      <!-- Card 2: Public Service Commission -->
      <a href="https://psc.gov.lk/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3.5 bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-4 shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 text-left group">
        <img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/emblem-sri-lanka.png' ); ?>" alt="<?php esc_attr_e( 'Sri Lanka Emblem', 'homeaffairs' ); ?>" class="w-10 h-10 object-contain shrink-0 group-hover:scale-105 transition-transform duration-300">
        <span class="text-xs sm:text-sm font-bold text-primary group-hover:text-secondary-dark transition-colors leading-snug">
          <?php esc_html_e( 'Public Service Commission', 'homeaffairs' ); ?>
        </span>
      </a>

      <!-- Card 3: Registrar General's Department -->
      <a href="https://www.rgd.gov.lk/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3.5 bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-4 shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 text-left group">
        <img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/emblem-sri-lanka.png' ); ?>" alt="<?php esc_attr_e( 'Sri Lanka Emblem', 'homeaffairs' ); ?>" class="w-10 h-10 object-contain shrink-0 group-hover:scale-105 transition-transform duration-300">
        <span class="text-xs sm:text-sm font-bold text-primary group-hover:text-secondary-dark transition-colors leading-snug">
          <?php esc_html_e( "Registrar General's Department", 'homeaffairs' ); ?>
        </span>
      </a>

      <!-- Card 4: SLIDA -->
      <a href="https://slida.lk/" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3.5 bg-white border border-slate-200/90 hover:border-secondary rounded-xl p-4 shadow-2xs hover:shadow-md hover:-translate-y-0.5 transition-all duration-300 text-left group">
        <img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/emblem-sri-lanka.png' ); ?>" alt="<?php esc_attr_e( 'Sri Lanka Emblem', 'homeaffairs' ); ?>" class="w-10 h-10 object-contain shrink-0 group-hover:scale-105 transition-transform duration-300">
        <span class="text-xs sm:text-sm font-bold text-primary group-hover:text-secondary-dark transition-colors leading-snug">
          <?php esc_html_e( 'Sri Lanka Institute of Development Administration', 'homeaffairs' ); ?>
        </span>
      </a>

    </div>

    <!-- Indicator Dots at the bottom -->
    <div class="flex items-center justify-center gap-1.5 mt-6">
      <span class="w-4 h-1.5 rounded-full bg-secondary inline-block"></span>
      <span class="w-1.5 h-1.5 rounded-full bg-slate-300 inline-block"></span>
      <span class="w-1.5 h-1.5 rounded-full bg-slate-300 inline-block"></span>
    </div>

  </div>
</section>

<?php get_footer(); ?>`;

if (oldOrgsRegex.test(content)) {
  content = content.replace(oldOrgsRegex, newOrgs);
  console.log('Replaced Related Organizations successfully.');
} else {
  console.error('FAILED to match Related Organizations regex.');
  process.exit(1);
}

// 7. Deduplicate switchTab scripts
const duplicateSwitchTab = `<script>
function switchTab(evt, tabName) {
    // 1. Hide all content tabs
    const tabContents = document.getElementsByClassName("tab-content");
    for (let i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.add("hidden");
    }

    // 2. Reset button styles
    const tabBtns = document.getElementsByClassName("tab-btn");
    for (let i = 0; i < tabBtns.length; i++) {
        tabBtns[i].classList.remove("bg-primary-dark", "text-white", "shadow-sm", "active-tab");
        tabBtns[i].classList.add("bg-slate-100", "text-slate-700");
    }

    // 3. Show active content
    const activeContent = document.getElementById(tabName);
    if (activeContent) {
        activeContent.classList.remove("hidden");
    }

    // 4. Highlight clicked button
    const clickedBtn = evt.currentTarget;
    clickedBtn.classList.remove("bg-slate-100", "text-slate-700");
    clickedBtn.classList.add("bg-primary-dark", "text-white", "shadow-md");

    // 5. Update View All Button Link Dynamically
    const newUrl = clickedBtn.getAttribute("data-url");
    const viewAllBtn = document.getElementById("mainViewAllBtn");

    if (viewAllBtn && newUrl) {
        viewAllBtn.setAttribute("href", newUrl);
    }
}
</script>

`;

if (content.includes(duplicateSwitchTab)) {
  content = content.replace(duplicateSwitchTab, '');
  console.log('Removed duplicate switchTab script successfully.');
}

if (hasCRLF) {
  content = content.replace(/\n/g, '\r\n');
}

fs.writeFileSync(filePath, content, 'utf8');
console.log('template-home.php updated successfully!');
