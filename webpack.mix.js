const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

/*mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');*/

mix.styles([
    'public/css/reset.css',
    'public/css/plugins.css',
    'public/css/style.css',
    'public/css/color.css'
], 'public/css/all.css')
.scripts([
    'public/js/jquery.min.js',
    'public/js/plugins.js',
    'public/js/scripts.js',
    'public/js/map-plugins.js',
    'public/js/map-listing.js',
], 'public/js/all.js');
