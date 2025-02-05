import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            keyframes: {
                fadeInUp: {
                    "0%": { opacity: "0", transform: "translateY(40px)" },
                    "100%": { opacity: "1", transform: "translateY(0)" },
                },
                smoothPopUp: {
                    "0%": { opacity: "0", transform: "scale(0.8)" },
                    "50%": { opacity: "1", transform: "scale(1.05)" }, // Setengah jalan mulai muncul lebih perlahan
                    "100%": { opacity: "1", transform: "scale(1)" }, // Puncak animasi pada skala 1
                },
            },
            animation: {
                smoothPopUp:
                    "smoothPopUp 1.5s cubic-bezier(0.25, 1, 0.5, 1) forwards",
                fadeInUp: "fadeInUp 1s ease-out forwards",
            },

            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                customGreen: "#2B391F",
                baseBackground: "#F6F1EB",
                navbarTitle: "#494D2D",
                gold: "#D5BA8F",
                bigTitle: "#deaf37",
                textGreen: "#4b5320",
                newGreen: "#004225",
                newGold: "#FFB000",
                putih: "#F5F5F5",
                hitam:"#0C0404"
            },
            spacing: {
                100: "75rem",
                101: "35rem",
                102: "26rem",
                68: "17rem",
                103: "40rem",
                104: "75rem",
                105: "50rem",
                106: "33rem",
            },
            backgroundImage: {},
        },
    },
    plugins: [require("flowbite/plugin")],
};
