import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            animation: {
                shake: "shake 0.5s infinite",
            },
            keyframes: {
                shake: {
                    "0%, 100%": { scale: "1" },
                    "25%": { scale: "1.2" },
                    "75%": { scale: "1.5" },
                },
            },
        },
    },

    plugins: [forms],
};
