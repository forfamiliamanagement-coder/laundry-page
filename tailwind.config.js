export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
     "./app/**/*.php",
],
  theme: {
    extend: {
      colors: {
        brand: {
          green: '#22c55e',
          orange: '#f97316',
          dark: '#1f2937',
          light: '#f9fafb'
        }
      }
    },
  },
  plugins: [],
}