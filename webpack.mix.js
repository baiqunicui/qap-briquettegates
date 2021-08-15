const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
mix.disableSuccessNotifications();
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js").postCss(
    "resources/css/app.css",
    "public/css",
    [tailwindcss("./tailwind.config.js")]
);

mix.js("resources/fejs/app.js", "public/fejs/app.js").postCss(
    "resources/fecss/app.css",
    "public/fecss/app.css",
    [tailwindcss("./tailwindfe.config.js")]
);
