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
                primaryOrange: "#DC965A",
                secondaryOrange: "#731963",

                primaryIndigo: "#BBB891",
                secondaryIndigo: "#B3B3B3",
                softIndigo: "#731963",
                neutralIndigo: "#0B3C49",

                neutralStone: "#d6d3d1",

                lightGrey: "#D6D6D6",
                raisinBlack: "#242325",
            },
        },
    },
    plugins: [],
};
