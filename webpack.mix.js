const mix = require("laravel-mix");

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

mix.js("resources/js/index.js", "public/js")
    .sass("resources/scss/app.scss", "public/css")
    .browserSync({
        proxy: process.env.MIX_APP_URL,
        host: process.env.MIX_APP_URL,
        open: "external",
    });

mix.webpackConfig((webpack) => {
    return {
        plugins: [
            new webpack.ProvidePlugin({
                $: "jquery",
                jQuery: "jquery",
                "window.$": "jquery",
                "window.jQuery": "jquery",
            }),
        ],
    };
});
