/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#4f46e5',
        secondary: '#4338ca',
        link: '#6366f1',
        'dark-primary': '#111827',
        'dark-secondary': '#1f2937',
        'dark-tersier': '#374151',
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
