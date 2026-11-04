/** @type {import('tailwindcss').Config} */
module.exports = {
  // Scan all PHP and JS files so Tailwind can purge unused classes
  content: [
    './**/*.php',
    '!./vendor/**/*.php',
    '!./node_modules/**',
    './assets/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        // Brand palette — matches _variables.scss
        'primary':         '#591521',
        'primary-dark':    '#4b121c',
        'primary-darker':  '#3b0e16',
        'primary-light':   '#801e2f',
        'secondary':       '#dfa21f',
        'secondary-light': '#e7b750',
        'secondary-dark':  '#b78519',
        'bg-dark':         '#441019',
        'steel':           '#801e2f',
        'warm-white':      '#fff5f0',
        'maroon':          '#54141f',
        'maroon-bright':   '#731b2b',
        'maroon-deep':     '#3e0f17',
        'maroon-black':    '#300b12',
        'gold-deep':       '#c9921c',
        'gold-bright':     '#e5b347',
        'gold-dark':       '#986e15',
      },
      fontFamily: {
        sans: ['Inter', 'Noto Sans Sinhala', 'Noto Sans Tamil', 'Segoe UI', 'system-ui', 'sans-serif'],
      },
      fontSize: {
        // Fluid typography using clamp
        'xs':   ['clamp(0.75rem, 0.7rem + 0.25vw, 0.875rem)', { lineHeight: '1.5' }],
        'sm':   ['clamp(0.875rem, 0.8rem + 0.35vw, 1rem)',     { lineHeight: '1.5' }],
        'base': ['clamp(1rem, 0.9rem + 0.5vw, 1.125rem)',      { lineHeight: '1.6' }],
        'lg':   ['clamp(1.125rem, 1rem + 0.65vw, 1.25rem)',    { lineHeight: '1.5' }],
        'xl':   ['clamp(1.25rem, 1.1rem + 0.8vw, 1.5rem)',     { lineHeight: '1.4' }],
        '2xl':  ['clamp(1.5rem, 1.3rem + 1vw, 2rem)',          { lineHeight: '1.3' }],
        '3xl':  ['clamp(1.875rem, 1.5rem + 1.5vw, 2.5rem)',    { lineHeight: '1.25' }],
        'hero': ['clamp(2.5rem, 2rem + 2.5vw, 4rem)',          { lineHeight: '1.15' }],
      },
      spacing: {
        // 8pt grid additions
        '18': '4.5rem',
        '22': '5.5rem',
      },
      borderRadius: {
        'sm': '6px',
        'md': '10px',
        'lg': '16px',
        'xl': '24px',
      },
      transitionTimingFunction: {
        'out-expo':  'cubic-bezier(0.16, 1, 0.3, 1)',
        'in-out-quad': 'cubic-bezier(0.4, 0, 0.2, 1)',
        'spring':    'cubic-bezier(0.34, 1.56, 0.64, 1)',
      },
      transitionDuration: {
        '150': '150ms',
        '250': '250ms',
        '400': '400ms',
      },
      boxShadow: {
        'card':    '0 2px 8px rgba(89,21,33,0.06), 0 1px 2px rgba(89,21,33,0.04)',
        'card-md': '0 8px 32px rgba(89,21,33,0.10)',
        'card-lg': '0 16px 48px rgba(89,21,33,0.14)',
        'gold':    '0 4px 16px rgba(223,162,31,0.35)',
        'gold-lg': '0 8px 32px rgba(223,162,31,0.45)',
      },
      animation: {
        'fade-in': 'fadeIn 0.4s ease forwards',
        'slide-up': 'slideUp 0.4s cubic-bezier(0.16, 1, 0.3, 1) forwards',
      },
      keyframes: {
        fadeIn: {
          from: { opacity: '0', transform: 'translateY(10px)' },
          to:   { opacity: '1', transform: 'translateY(0)' },
        },
        slideUp: {
          from: { opacity: '0', transform: 'translateY(20px)' },
          to:   { opacity: '1', transform: 'translateY(0)' },
        },
      },
    },
  },
  plugins: [],
  darkMode: 'class',
};
