/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"],
  theme: {
    extend: {
      boxShadow: {
        'orange': '0 4px 15px rgba(255, 165, 0, 0.5)',
      },
    },
  },
  plugins: [],
}