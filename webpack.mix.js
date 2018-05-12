const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/build/v2/js')
    .sass('resources/assets/sass/app.scss', 'public/build/v2/css')
    .copy('resources/assets/fonts', 'public/fonts')
    .copy('resources/assets/images_v2', 'public/images_v2')
    .version();
