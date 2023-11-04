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
        'primaryOrange': '#ff6200',
        'secondaryOrange' : '#ff8000',

        'primaryIndigo' : '#6f009e',
        'secondaryIndigo' : '#470066',
        'softIndigo' : '#6366f1',
        'neutralIndigo' : '#c7d2fe',

        'neutralStone' : '#d6d3d1'
      },
    },
  },
  plugins: [],
}

