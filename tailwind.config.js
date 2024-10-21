import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            gridTemplateColumns: {
                "custom-grid": "repeat(3, minmax(100px, 1fr))",
            },
            fontFamily: {
                sans: ["Manrope", defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#242F9B",
                gradient: "#646FD4",
                dark: "#111827",
            },
        },
    },
    plugins: [],
};
