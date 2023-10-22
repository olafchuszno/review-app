/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primaryOrange': '#f97316',

        'primaryIndigo' : '#4f46e5',
        'secondaryIndigo' : '#312e81',
        'softIndigo' : '#6366f1',
        'neutralIndigo' : '#e0e7ff',

        'neutralStone' : '#e7e5e4'
      },
    },
  },
  plugins: [],
}

