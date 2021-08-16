const defaultTheme = require("tailwindcss");
const colors = require('tailwindcss/colors')


module.exports = {
    mode: "jit",
    purge: [
        "./app/**/*.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./src/**/*.php",
        "./resources/**/*.php",
    ],
    darkMode: 'class',
    theme: {
        fontFamily: {
            serif: ["Hunter River", "Georgia"],
            sans: ["Inter", "system-ui"],
            body: ["Inter"],
        },
        extend: {
            colors: {
                primary: {
                    DEFAULT: "#060629",
                },
                secondary: {
                    DEFAULT: "#EA2550",
                },
                gray: colors.warmGray,
            },
            boxShadow: {
                1: "7px 7px rgba(0, 0, 0, 0.1)",
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require("postcss-import"),
        require("tailwindcss"),
        require("autoprefixer"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/line-clamp"),
        require('tailwind-scroll-behavior')(),
        require('tailwindcss-multi-column')(),
    ],
};
