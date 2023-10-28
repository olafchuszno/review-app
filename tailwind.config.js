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
        'secondaryOrange' : '#ea580c',

        'primaryIndigo' : '#4f46e5',
        'secondaryIndigo' : '#312e81',
        'softIndigo' : '#6366f1',
        'neutralIndigo' : '#c7d2fe',

        'neutralStone' : '#d6d3d1'
      },
    },
  },
  plugins: [],
}

