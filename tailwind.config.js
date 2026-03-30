import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Cabin", "sans-serif"],
            },
            fontSize: {
                base: ["16px", { lineHeight: "24px", fontWeight: "400" }],
            },
            letterSpacing: {
                DEFAULT: "0%",
            },
        },
    },

    plugins: [forms],
};
