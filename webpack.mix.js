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

mix.combine([
    'node_modules/jquery/dist/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'node_modules/owl.carousel/dist/owl.carousel.js',
    'node_modules/magnific-popup/dist/jquery.magnific-popup.min.js',
    'node_modules/isotope-layout/dist/isotope.pkgd.min.js',
    'resources/js/animated.headline.js',
    'node_modules/jquery.counterup/jquery.counterup.js',
    'node_modules/wowjs/dist/wow.min.js',
    'resources/js/main.js',
], 'public/js/all.js');

mix.combine([
    'node_modules/bootstrap/dist/css/bootstrap.min.css',
    'node_modules/bootstrap/dist/css/bootstrap.min.css.map',
    'node_modules/font-awesome/css/font-awesome.min.css',
    'node_modules/owl.carousel/dist/assets/owl.carousel.min.css',
    'node_modules/magnific-popup/dist/magnific-popup.css',
    'node_modules/animate.css/animate.min.css',
    'resources/css/style.css',
    'resources/css/responsive.css',
], 'public/css/all.css');
