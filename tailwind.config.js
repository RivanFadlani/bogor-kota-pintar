import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
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
            screens: {
                xs: "480px", // Menambahkan breakpoint xs
            },
        },
    },

    plugins: [forms],
};
