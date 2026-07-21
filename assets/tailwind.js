/* Single source of truth for the Tailwind runtime config.
   Loaded once in includes/head.php, after the Tailwind CDN script. */
tailwind.config = {
  theme: {
    extend: {
      colors: {
        rich: '#050505',
        navy: '#0B1F2A',
        ink: '#1F2933',
        gold: '#C49A5A',
        'gold-dark': '#A8752A',
        'gold-soft': '#F4D58D',
        ivory: '#F8F4EA',
        line: '#E7DCC6'
      },
      boxShadow: { soft: '0 18px 50px -20px rgba(11,31,42,.28)' },
      fontFamily: {
        display: ['Fraunces', 'Georgia', 'serif'],
        sans: ['Inter', 'system-ui', 'sans-serif']
      }
    }
  }
};
