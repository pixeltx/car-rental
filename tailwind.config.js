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
                newGreen: "#3e8e41",
                newGold: "#ffc403",
                putih: "#fffdf9",
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
