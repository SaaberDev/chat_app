const mix = require('laravel-mix');
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

/**
 * Web Assets
 */
mix.styles([
    'resources/css/app.css',
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/bootstrap/dist/css/bootstrap-grid.min.css',
    'node_modules/bootstrap/dist/css/bootstrap-reboot.min.css',
], 'public/css/app.css');

mix.js([
    'resources/js/app.js',
    'node_modules/@fortawesome/fontawesome-free/js/all.js',
], 'public/js/app.js');

mix.sass('resources/sass/app.scss', 'public/css');

/**
 * Plugin Assets
 */
mix.styles([
    'node_modules/chart.js/dist/Chart.min.css'
], 'public/css/all-plugin.css');

mix.scripts([
    'node_modules/chart.js/dist/Chart.min.js',
    ], 'public/js/all-plugin.js');

/**
 * Custom JS
 */
mix.scripts('resources/js/custom/ctm-chart.js', 'public/js/custom/ctm-chart.js')
    .scripts('resources/js/custom/ctm-chat.js', 'public/js/custom/ctm-chat.js');

/*if (mix.inProduction()) {
    mix.version();
}*/
