const mix = require('laravel-mix');

mix.setResourceRoot('../');

mix.sourceMaps()

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

 mix.js('resources/js/app.js', 'public/js').vue()
 .sass('resources/sass/app.scss', 'public/css');

mix.js('node_modules/popper.js/dist/popper.js', 'public/js').sourceMaps()

mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.copy('node_modules/jquery/dist/jquery.slim.min.js', 'public/js/jquery.slim.min.js');
mix.copy('node_modules/jquery.easing/jquery.easing.min.js', 'public/js/jquery.easing.min.js');

//Para Datatables
mix.copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'public/js/jquery.dataTables.min.js');
mix.copy('node_modules/datatables.net-dt/css/jquery.dataTables.min.css', 'public/css/jquery.dataTables.min.css');
mix.copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'public/css/dataTables.bootstrap4.min.css');
