/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#0ea5e9',
      }
    },
  },
  plugins: [],
}
