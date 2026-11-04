<?php
/**
 * Template Name: National Symbols & Flag Protocol
 */

defined( 'ABSPATH' ) || exit;

get_header(); 
get_template_part( 'template-parts/page-banner' );
?>



<!-- ═══ MAIN CONTENT SECTION WITH TABS ═══ -->
<section class="py-12 bg-slate-50/70 border-b border-gray-200/60" x-data="{ activeTab: 'anthem' }">
  <main id="main-content" role="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
	<!-- ═══ INTRO ═══ -->
	<div class="text-center max-w-3xl mx-auto mb-8">
    <span class="text-[11px] font-bold tracking-[2px] uppercase px-3.5 py-1 rounded-full bg-secondary/10 text-secondary inline-block mb-3">
        <?php esc_html_e( 'NATIONAL SYMBOLS & PROTOCOL', 'homeaffairs' ); ?>
    </span>
    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-maroon mb-3">
        <?php esc_html_e( 'National Anthem & Flag Protocol', 'homeaffairs' ); ?>
    </h1>
    
</div>


    <!-- Navigation Tabs -->
    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2 mb-8 border-b border-gray-200 pb-4">
      <button type="button" @click="activeTab = 'anthem'" 
              :class="activeTab === 'anthem' ? 'bg-primary text-white border-primary shadow-md' : 'bg-white text-gray-700 hover:bg-gray-100 border-gray-200'"
              class="px-5 py-2.5 rounded-xl font-bold text-xs border transition-all duration-200 flex items-center gap-2 cursor-pointer">
        <i class="fas fa-music text-secondary"></i> <?php esc_html_e( 'National Anthem', 'homeaffairs' ); ?>
      </button>

      <button type="button" @click="activeTab = 'flag'" 
              :class="activeTab === 'flag' ? 'bg-primary text-white border-primary shadow-md' : 'bg-white text-gray-700 hover:bg-gray-100 border-gray-200'"
              class="px-5 py-2.5 rounded-xl font-bold text-xs border transition-all duration-200 flex items-center gap-2 cursor-pointer">
        <i class="fas fa-flag text-secondary"></i> <?php esc_html_e( 'National Flag', 'homeaffairs' ); ?>
      </button>

	  <button type="button" @click="activeTab = 'emblem'" 
              :class="activeTab === 'emblem' ? 'bg-primary text-white border-primary shadow-md' : 'bg-white text-gray-700 hover:bg-gray-100 border-gray-200'"
              class="px-5 py-2.5 rounded-xl font-bold text-xs border transition-all duration-200 flex items-center gap-2 cursor-pointer">
        <i class="fas fa-shield text-secondary"></i> <?php esc_html_e( 'emblem', 'homeaffairs' ); ?>
      </button>


      <button type="button" @click="activeTab = 'downloads'" 
              :class="activeTab === 'downloads' ? 'bg-primary text-white border-primary shadow-md' : 'bg-white text-gray-700 hover:bg-gray-100 border-gray-200'"
              class="px-5 py-2.5 rounded-xl font-bold text-xs border transition-all duration-200 flex items-center gap-2 cursor-pointer">
        <i class="fas fa-file-pdf text-secondary"></i> <?php esc_html_e( 'Downloads & Circulars', 'homeaffairs' ); ?>
      </button>
    </div>

    <!-- ─── TAB 1: NATIONAL ANTHEM ─── -->
    <div x-show="activeTab === 'anthem'" x-transition class="grid lg:grid-cols-12 gap-8 items-start">
      
      <!-- Anthem Lyrics Box -->
      <div class="lg:col-span-7 bg-white border border-gray-200/90 rounded-2xl p-6 lg:p-8 shadow-sm">
        <div class="flex items-center gap-3 mb-6 pb-4 border-b border-gray-100">
          <div class="w-10 h-10 bg-primary/10 border border-primary/20 rounded-xl flex items-center justify-center shrink-0">
            <i class="fas fa-scroll text-primary font-bold"></i>
          </div>
          <div>
            <h2 class="text-lg font-black text-primary-darker leading-tight">Sri Lanka Matha (ශ්‍රී ලංකා මාතා)</h2>
            <span class="text-xs text-gray-500 font-medium"><?php esc_html_e( 'Composed by Ananda Samarakoon', 'homeaffairs' ); ?></span>
          </div>
        </div>

        <!-- Lyrics Content Area with Language Switcher -->
        <div x-data="{ langTab: 'sin' }" class="space-y-4">
          
          <!-- Language Tabs -->
          <div class="flex items-center gap-2 border-b border-gray-100 pb-3">
            <button type="button" @click="langTab = 'sin'" 
                    :class="langTab === 'sin' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                    class="px-3.5 py-1.5 rounded-lg text-xs font-bold transition-all cursor-pointer">
              සිංහල
            </button>
            <button type="button" @click="langTab = 'tam'" 
                    :class="langTab === 'tam' ? 'bg-primary text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                    class="px-3.5 py-1.5 rounded-lg text-xs font-bold transition-all cursor-pointer">
              தமிழ் (Tamil)
            </button>
          </div>

          <!-- 1. Sinhala Lyrics -->
          <div x-show="langTab === 'sin'" x-transition class="bg-amber-50/50 p-4 rounded-xl border border-amber-200/50">
            <h4 class="font-sans font-bold text-primary text-xs uppercase tracking-wider mb-2">Sinhala Lyrics</h4>
            <div class="text-xs sm:text-sm font-medium leading-relaxed text-gray-800 whitespace-pre-line">
ශ්‍රී ලංකා මාතා අප ශ්‍රී ලංකා
නමෝ නමෝ නමෝ නමෝ මාතා
සුන්දර සිරිබරිනී
සුරැඳි අති ශෝභමාන ලංකා
ධාන්‍ය ධනය නෙක
මල් පලතුරු පිරි ජය භූමිය රම්‍යා
අප හට සැප සිරි සෙත සදනා
ජීවනයේ මාතා
පිළිගනු මැන අප භක්ති පූජා
නමෝ නමෝ මාතා අප ශ්‍රී ලංකා
නමෝ නමෝ නමෝ නමෝ මාතා

ඔබ වේ අප විද්‍යා
ඔබ මය අප සත්‍යා
ඔබ වේ අප ශක්ති
අප හද තුළ භක්ති
ඔබ අප ආලෝකේ
අපගේ අනුප්‍රාණේ
ඔබ අප ජීවන වේ
අප මුක්තිය ඔබ වේ

නව ජීවන දෙමිනේ
නිතින අප පුබුදු කරන් මාතා
ඥාන වීර්ය වඩවමින රැගෙන
යනු මැන ජය භූමි කරා
එක මවකගෙ දරු කැල බැවිනා
යමු යමු වී නොපමා
ප්‍රේම වඩා සැම භේද දුරැර දා
නමෝ නමෝ මාතා අප ශ්‍රී ලංකා
නමෝ නමෝ නමෝ නමෝ මාතා
            </div>
          </div>

          <!-- 2. Tamil Lyrics -->
          <div x-show="langTab === 'tam'" x-transition class="bg-amber-50/50 p-4 rounded-xl border border-amber-200/50">
            <h4 class="font-sans font-bold text-primary text-xs uppercase tracking-wider mb-2">Tamil Lyrics (ஸ்ரீ லங்கா தாயே)</h4>
            <div class="text-xs sm:text-sm font-medium leading-relaxed text-gray-800 whitespace-pre-line">
ஸ்ரீ லங்கா தாயே - நம் ஸ்ரீ லங்கா
நமோ நமோ நமோ நமோ தாயே 
நல்லெழில் பொலி சீரணி
நலங்கள் யாவும் நிறை வான்மணி லங்கா
ஞாலம் புகழ் வள வயல் நதி மலை மலர்
நறுஞ்சோலை கொள் லங்கா
நமதுறு புகலிடம் என ஒளிர்வாய்
நமதுதி ஏல் தாயே
நமதலை நினதடி மேல் வைத்தோமே
நமதுயிரே தாயே - நம் ஸ்ரீ லங்கா
நமோ நமோ நமோ நமோ தாயே

நமதாரருள் ஆனாய்
நவை தவிர் உணர்வானாய்
நமதோர் வலியானாய்
நவில் சுதந்திரம் ஆனாய்
நமதிளமையை நாட்டே
நகு மடி தனையோட்டே
அமைவுறும் அறிவுடனே
அடல்செறி துணிவருளே - நம் ஸ்ரீ லங்கா
நமோ நமோ நமோ நமோ தாயே

நமதோர் ஒளி வளமே
நறிய மலர் என நிலவும் தாயே
யாமெல்லாம் ஒரு கருணை அனைபயந்த
எழில்கொள் சேய்கள் எனவே
இயலுறு பிளவுகள் தமை அறவே
இழிவென நீக்கிடுவோம்
ஈழ சிரோமணி வாழ்வுறு பூமணி
நமோ நமோ தாயே
            </div>
          </div>

        </div>
      </div>

      <!-- Anthem Audio Player & Specs Side Banner -->
      <div class="lg:col-span-5 space-y-6">
        
        <!-- Audio Player Card -->
        <div class="bg-gradient-to-br from-primary-darker to-primary rounded-2xl p-6 text-white shadow-lg relative overflow-hidden">
          <div class="relative z-10">
            <span class="bg-secondary/20 text-secondary-light border border-secondary/30 text-[9px] font-bold uppercase tracking-widest px-2.5 py-1 rounded-md inline-block mb-3">
              Official Audio
            </span>
            <h3 class="text-base font-bold text-white mb-1"><?php esc_html_e( 'Listen to National Anthem', 'homeaffairs' ); ?></h3>
            <p class="text-xs text-gray-200/80 mb-4"><?php esc_html_e( 'Official orchestral instrumental & vocal rendition.', 'homeaffairs' ); ?></p>
            
            <audio controls class="w-full h-10 rounded-lg shadow-inner bg-white/10">
              <source src="<?php echo esc_url( content_url( '/uploads/national-anthem.mp3' ) ); ?>" type="audio/mpeg">
              Your browser does not support the audio element.
            </audio>
          </div>
        </div>

        <!-- Protocol Highlights -->
        <div class="bg-white border border-gray-200/90 rounded-2xl p-5 shadow-sm space-y-3">
          <h4 class="text-xs font-bold text-primary-darker uppercase tracking-wider flex items-center gap-2">
            <i class="fas fa-exclamation-circle text-secondary-dark"></i> <?php esc_html_e( 'Respect Protocol', 'homeaffairs' ); ?>
          </h4>
          <ul class="text-xs text-gray-600 space-y-2 list-disc list-inside">
            <li><?php esc_html_e( 'All present must stand at attention during the anthem play.', 'homeaffairs' ); ?></li>
            <li><?php esc_html_e( 'No applause or speaking allowed until the anthem concludes.', 'homeaffairs' ); ?></li>
            <li><?php esc_html_e( 'The anthem shall be performed only in official Sinhala & Tamil versions.', 'homeaffairs' ); ?></li>
          </ul>
        </div>

      </div>

    </div>


<!-- ─── TAB 2: FLAG CODE RULES ─── -->
<div x-show="activeTab === 'flag'" x-transition id="flag-code" class="space-y-8">
  
  <!-- Centered Rectangular Flag Image (Enlarged) -->
  <div class="flex flex-col items-center justify-center text-center">
    <!-- Flag  Card -->
    <div class="bg-white border border-gray-200/90 border-l-4 border-l-secondary rounded-2xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col items-center">
      
      <!-- Centered Square Flag  Image (Enlarged 4x) -->
      <div class="w-56 h-56 bg-primary/5 rounded-2xl flex items-center justify-center p-4 mb-5 shadow-sm">
        <img loading="lazy" decoding="async" 
          src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flag-sri-lanka.png' ); ?>" 
          alt="<?php esc_attr_e( 'Flag of Sri Lanka', 'homeaffairs' ); ?>" 
          class="w-full h-full object-contain"
          loading="lazy"
        />
      </div>

      <!-- Title -->
      <h3 class="text-base font-bold text-primary-darker text-center mb-3">
        <?php esc_html_e( 'Flag of Sri Lanka', 'homeaffairs' ); ?>
      </h3>

      <!-- Description -->
      <div class="text-xs text-gray-600 leading-relaxed space-y-2 text-left w-full">
        <p>
          <?php esc_html_e( 'The national flag of Sri Lanka, also called the Singha Flag or Lion Flag (Sinhala: සිංහ කොඩිය, romanised: singha kodiya, Tamil: சிங்கக் கொடி, romanised: ciṅkak koṭi), consists of a golden lion holding a kastane sword in its right fore-paw in a maroon background with four gold bo leaves, one in each corner. This is bordered by gold, and to its left are two vertical stripes of equal size in teal and orange, with the orange stripe closest to the lion', 'homeaffairs' ); ?>
        </p>
        
        <p>
          <?php esc_html_e( 'The lion and the maroon background represent the Sinhalese race, while the saffron border and four bo leaves represent the concepts of meththa, karuṇā, muditā and upecka respectively. ', 'homeaffairs' ); ?>
        </p>

        <p>
          <?php esc_html_e( '', 'homeaffairs' ); ?>
        </p>

        <p class="italic text-[10px] text-gray-600 pt-1">
          <?php esc_html_e( 'Source: Wikipedia', 'homeaffairs' ); ?>
        </p>
      </div>
    </div>
  </div>

  <!-- Rules Grid -->
  <div class="grid md:grid-cols-3 gap-6">
    
    <!-- Rule 1 -->
    <div class="bg-white border border-gray-200/90 border-l-4 border-l-secondary rounded-2xl p-5 shadow-sm hover:shadow-md transition-all">
      <div class="w-9 h-9 bg-primary/10 text-primary rounded-lg flex items-center justify-center font-bold text-sm mb-3">01</div>
      <h3 class="text-sm font-bold text-primary-darker mb-2"><?php esc_html_e( 'Hoisting & Lowering', 'homeaffairs' ); ?></h3>
      <p class="text-xs text-gray-600 leading-relaxed">
        <?php esc_html_e( 'The National Flag shall be hoisted at sunrise and lowered at sunset on all government institutions.', 'homeaffairs' ); ?>
      </p>
    </div>

    <!-- Rule 2 -->
    <div class="bg-white border border-gray-200/90 border-l-4 border-l-secondary rounded-2xl p-5 shadow-sm hover:shadow-md transition-all">
      <div class="w-9 h-9 bg-primary/10 text-primary rounded-lg flex items-center justify-center font-bold text-sm mb-3">02</div>
      <h3 class="text-sm font-bold text-primary-darker mb-2"><?php esc_html_e( 'Position of Honor', 'homeaffairs' ); ?></h3>
      <p class="text-xs text-gray-600 leading-relaxed">
        <?php esc_html_e( 'When displayed with other flags, the National Flag must occupy the position of honor (far right/center elevated).', 'homeaffairs' ); ?>
      </p>
    </div>

    <!-- Rule 3 -->
    <div class="bg-white border border-gray-200/90 border-l-4 border-l-secondary rounded-2xl p-5 shadow-sm hover:shadow-md transition-all">
      <div class="w-9 h-9 bg-primary/10 text-primary rounded-lg flex items-center justify-center font-bold text-sm mb-3">03</div>
      <h3 class="text-sm font-bold text-primary-darker mb-2"><?php esc_html_e( 'Condition & Care', 'homeaffairs' ); ?></h3>
      <p class="text-xs text-gray-600 leading-relaxed">
        <?php esc_html_e( 'The flag must never touch the ground or floor, nor be used as a drapery, tablecloth, or covering of any kind.', 'homeaffairs' ); ?>
      </p>
    </div>

  </div>

  <!-- Prohibitions Alert Box -->
  <div class="bg-red-50 border border-red-200 rounded-2xl p-6">
    <h3 class="text-sm font-bold text-red-800 flex items-center gap-2 mb-2">
      <i class="fas fa-ban text-red-600"></i> <?php esc_html_e( 'Strict Prohibitions & Offences', 'homeaffairs' ); ?>
    </h3>
    <p class="text-xs text-red-700 leading-relaxed">
      <?php esc_html_e( 'It is illegal to use damaged, faded, or torn flags. Using the National Flag for commercial advertisements, trademarks, or printing on disposable paper/clothing items is strictly prohibited under national protocol law.', 'homeaffairs' ); ?>
    </p>
  </div>

</div>

<!-- ─── TAB 3: EMBLEM ─── -->
<div x-show="activeTab === 'emblem'" x-transition id="emblem-code" class="space-y-8">
  
  <div class="grid grid-cols-1 gap-6">
    
    <!-- Emblem Card -->
    <div class="bg-white border border-gray-200/90 border-l-4 border-l-secondary rounded-2xl p-6 shadow-sm hover:shadow-md transition-all flex flex-col items-center">
      
      <!-- Centered Square Emblem Image (Enlarged 4x) -->
      <div class="w-56 h-56 bg-primary/5 rounded-2xl flex items-center justify-center p-4 mb-5 shadow-sm">
        <img loading="lazy" decoding="async" 
          src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/emblem-sri-lanka.png' ); ?>" 
          alt="<?php esc_attr_e( 'Emblem of Sri Lanka', 'homeaffairs' ); ?>" 
          class="w-full h-full object-contain"
          loading="lazy"
        />
      </div>

      <!-- Title -->
      <h3 class="text-base font-bold text-primary-darker text-center mb-3">
        <?php esc_html_e( 'Emblem of Sri Lanka', 'homeaffairs' ); ?>
      </h3>

      <!-- Description -->
      <div class="text-xs text-gray-600 leading-relaxed space-y-2 text-left w-full">
        <p>
          <?php esc_html_e( 'The national emblem of Sri Lanka is used by the State of Sri Lanka and the Sri Lankan government in connection with the administration and government of the country. The current emblem has been in use since 1972 and created under the ideas and guidance of Nissanka Wijeyeratne. At the time, he was Permanent Secretary to the Ministry of Cultural Affairs and Chairman of the National Emblem and Flag Design Committee. The designer of the emblem was Venerable Mapalagama Wipulasara Maha Thera and Art Work by S. M Seneviratne.', 'homeaffairs' ); ?>
        </p>
        
        <p>
          <?php esc_html_e( 'The emblem features a gold lion passant, holding a sword in its right fore paw in the centre on a maroon background surrounded by golden petals of a Blue Lotus the national flower of the country. This is placed on top of a traditional grain vase that sprouts sheaves of rice grains that circle the border reflecting prosperity.', 'homeaffairs' ); ?>
        </p>

        <p>
          <?php esc_html_e( 'The crest is the Dharmachakra, symbolizing the country\'s foremost place for Buddhism and just rule. Traditional Sinhalese heraldic symbols for the sun and the moon form the supporters.', 'homeaffairs' ); ?>
        </p>

        <p class="italic text-[10px] text-gray-600 pt-1">
          <?php esc_html_e( 'Source: Wikipedia', 'homeaffairs' ); ?>
        </p>
      </div>

    </div>

  </div>

</div>




    <!-- ─── TAB 3: DOWNLOADS ─── -->
    <div x-show="activeTab === 'downloads'" x-transition class="grid md:grid-cols-2 gap-4">
      
      <!-- Download Item 1 -->
      <div class="bg-white border border-gray-200/90 rounded-xl p-4 flex items-center justify-between hover:shadow-md transition-all">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 bg-red-100 text-red-600 rounded-lg flex items-center justify-center shrink-0">
            <i class="fas fa-file-pdf text-lg"></i>
          </div>
          <div>
            <h4 class="text-xs font-bold text-primary-darker"><?php esc_html_e( 'National Flag Code Gazette (Sinhala)', 'homeaffairs' ); ?></h4>
            <span class="text-[10px] text-gray-600">PDF • 1.2 MB</span>
          </div>
        </div>
        <a href="#" class="bg-secondary/20 hover:bg-secondary text-primary-darker px-3 py-1.5 rounded-lg text-xs font-bold transition-all">
          <i class="fas fa-download"></i>
        </a>
      </div>

      <!-- Download Item 2 -->
      <div class="bg-white border border-gray-200/90 rounded-xl p-4 flex items-center justify-between hover:shadow-md transition-all">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 bg-red-100 text-red-600 rounded-lg flex items-center justify-center shrink-0">
            <i class="fas fa-file-pdf text-lg"></i>
          </div>
          <div>
            <h4 class="text-xs font-bold text-primary-darker"><?php esc_html_e( 'National Flag Code Guidelines (English)', 'homeaffairs' ); ?></h4>
            <span class="text-[10px] text-gray-600">PDF • 980 KB</span>
          </div>
        </div>
        <a href="#" class="bg-secondary/20 hover:bg-secondary text-primary-darker px-3 py-1.5 rounded-lg text-xs font-bold transition-all">
          <i class="fas fa-download"></i>
        </a>
      </div>

    </div>

  </main>
</section>

<!-- Alpine.js for Tabs Toggle -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<?php get_footer(); ?>