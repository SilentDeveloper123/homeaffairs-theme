<?php
defined( 'ABSPATH' ) || exit;
/*
Template Name: Landing Page
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo esc_html__( 'Ministry of Home Affairs — Sri Lanka', 'homeaffairs' ); ?></title>
<meta name="description" content="<?php esc_attr_e( 'Official website of the Ministry of Home Affairs, Public Administration &amp; Disaster Management — Sri Lanka', 'homeaffairs' ); ?>">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&family=Noto+Serif+Tamil:ital,wght@0,100..900;1,100..900&family=Noto+Sans+Sinhala:wght@400;500;600;700&family=Noto+Sans+Tamil:wght@400;500;600;700&family=Noto+Color+Emoji&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Tailwind CSS: compiled build loaded via wp_head() -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/fontawesome-all.min.css' ); ?>">
<?php wp_head(); ?>
<style>
*{margin:0;padding:0;box-sizing:border-box}
html,body{height:100%}
body{font-family:'Inter','Noto Sans Sinhala','Noto Sans Tamil','Segoe UI',system-ui,'Noto Color Emoji',sans-serif}
.landing-cover{position:fixed;inset:0;background:linear-gradient(135deg,var(--color-bg-dark-tint-strong) 0%,var(--color-primary-dark-tint-78) 50%,var(--color-primary-tint-72) 100%),url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/landing-bg.jpg' ); ?>);background-size:cover;background-position:right top}
.landing-content{position:relative;z-index:2;min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:1.5rem}
.govt-emblem{width:70px;height:auto;margin-bottom:.75rem;filter:drop-shadow(0 4px 12px rgba(0,0,0,.4))}
.lang-btn{display:inline-flex;align-items:center;justify-content:center;gap:.6rem;padding:.75rem 1.5rem;border-radius:.75rem;font-weight:700;font-size:clamp(.75rem,.625rem+.5vw,1rem);transition:all .3s ease;text-decoration:none;min-width:180px;border:2px solid transparent}
.lang-btn:hover{transform:translateY(-3px);box-shadow:0 10px 30px rgba(0,0,0,.35)}
.lang-btn-sinhala{background:var(--color-secondary);color:var(--color-bg-dark);border-color:var(--color-secondary)}
.lang-btn-sinhala:hover{background:var(--color-secondary-dark);border-color:var(--color-secondary-dark);color:#fff}
.lang-btn-tamil{background:#fff;color:var(--color-bg-dark);border-color:#fff}
.lang-btn-tamil:hover{background:#e5e7eb;border-color:#e5e7eb}
.lang-btn-english{background:transparent;color:var(--color-secondary);border-color:var(--color-secondary)}
.lang-btn-english:hover{background:var(--color-secondary);color:var(--color-bg-dark)}
@media(min-width:640px){
.landing-content{padding:2.5rem}
.govt-emblem{width:100px;margin-bottom:1.25rem}
.lang-btn{font-size:1.125rem;padding:1rem 2.5rem;min-width:220px;gap:.75rem;border-radius:1rem}
}
.had-si{font-family: "Abhaya Libre", serif;font-size: clamp(1.5rem, 2.2500vw, 2.25rem);}
.had-ta{font-family: "Noto Serif Tamil", serif;font-size: clamp(1.125rem, 1.8125vw, 1.813rem);}
.had-en{font-family: inherit;font-size: clamp(1.25rem, 1.8750vw, 1.875rem);}
@media(min-width:1024px){
.govt-emblem{width:120px}
.lang-btn{font-size:1.25rem;padding:1.125rem 3rem;min-width:250px}
}
</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Skip to main content (accessibility) -->
<a href="#main-content" class="skip-link">
  <?php esc_html_e( 'Skip to main content', 'homeaffairs' ); ?>
</a>

<div class="landing-cover"></div>

<main id="main-content" tabindex="-1" class="landing-content focus:outline-none focus-visible:ring-2 focus-visible:ring-secondary" role="main">
  <div class="text-center max-w-2xl">
    <img loading="lazy" decoding="async" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/emblem-sri-lanka.png' ); ?>" alt="<?php esc_attr_e( 'National Emblem of Sri Lanka', 'homeaffairs' ); ?>" width="70" height="99" class="govt-emblem mx-auto" loading="eager" decoding="async">

    <h1 class="text-white/70 font-medium leading-snug mb-3 text-[10px] sm:text-sm lg:text-base">
      රාජ්‍ය පරිපාලන, පළාත් සභා සහ පළාත් පාලන අමාත්‍යාංශය<br>
      பொது நிருவாக, மாகாண சபைகள் மற்றும் உள்ளூராட்சி அமைச்சு<br>
      <?php esc_html_e( 'Ministry of Public Administration, Provincial Councils and Local Government', 'homeaffairs' ); ?>
    </h1>
    <p class="text-secondary font-extrabold mb-10 text-sm sm:text-2xl lg:text-4xl leading-relaxed">
      <span class="had-si font-medium">ස්වදේශ කටයුතු අංශය</span><br>
      <span class="had-ta font-medium">உள்நாட்டலுவல்கள் பிரிவு</span><br>
      <span class="had-en font-medium">Home Affairs Division</span>
    </p>

    <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
      <a href="<?php echo esc_url( home_url( '/si/' ) ); ?>" class="lang-btn lang-btn-sinhala" hreflang="si" lang="si">
        <i class="fas fa-language text-lg" aria-hidden="true"></i> සිංහල
      </a>
      <a href="<?php echo esc_url( home_url( '/ta/' ) ); ?>" class="lang-btn lang-btn-tamil" hreflang="ta" lang="ta">
        <i class="fas fa-language text-lg" aria-hidden="true"></i> தமிழ்
      </a>
      <a href="<?php echo esc_url( home_url( '/en/' ) ); ?>" class="lang-btn lang-btn-english" hreflang="en" lang="en">
        <i class="fas fa-globe text-lg" aria-hidden="true"></i> <?php esc_html_e( 'English', 'homeaffairs' ); ?>
      </a>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
