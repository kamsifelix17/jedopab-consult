/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/Http/Controllers/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        'brand-navy': '#0A1F44',
        'brand-gold': '#D4AF37',
        'brand-deep': '#05122b', /* A darker navy for hover states */
        'brand-light': '#f4f7f6', /* Off-white for section backgrounds */
      }
    },
  },
  plugins: [],
}