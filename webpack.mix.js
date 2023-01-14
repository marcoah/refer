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

mix.copy('resources/js/sb-admin/sb-admin-2.min.js', 'public/js/sb-admin-2.min.js');
mix.copy('resources/js/sb-admin/demo/chart-area-demo.js', 'public/js/demo/chart-area-demo.js');
mix.copy('resources/js/sb-admin/demo/chart-pie-demo.js', 'public/js/demo/chart-pie-demo.js');

mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.copy('node_modules/jquery/dist/jquery.slim.min.js', 'public/js/jquery.slim.min.js');
mix.copy('node_modules/jquery.easing/jquery.easing.min.js', 'public/js/jquery.easing.min.js');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js');

//para graficos
mix.copy('node_modules/chart.js/dist/chart.min.js', 'public/js/chart.min.js');

//Para TinyMCE
mix.copyDirectory('vendor/tinymce/tinymce', 'public/js/tinymce');

//Para Datatables
mix.copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'public/js/datatables/jquery.dataTables.min.js');
mix.copy('node_modules/datatables.net-dt/css/jquery.dataTables.min.css', 'public/css/datatables/jquery.dataTables.min.css');
mix.copy('node_modules/datatables.net-dt/js/dataTables.dataTables.min.js', 'public/js/datatables/dataTables.dataTables.min.js');
mix.copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'public/css/datatables/dataTables.bootstrap4.min.css');
mix.copy('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'public/js/datatables/dataTables.bootstrap4.min.js');
mix.copy('node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css', 'public/css/datatables/buttons.bootstrap4.min.css');
mix.copy('node_modules/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js', 'public/js/datatables/buttons.bootstrap4.min.js');
mix.copy('node_modules/datatables.net-buttons/js/buttons.colVis.min.js', 'public/js/datatables/buttons.colVis.min.js');
mix.copy('node_modules/datatables.net-buttons/js/buttons.flash.min.js', 'public/js/datatables/buttons.flash.min.js');
mix.copy('node_modules/datatables.net-buttons/js/buttons.html5.min.js', 'public/js/datatables/buttons.html5.min.js');
mix.copy('node_modules/datatables.net-buttons/js/buttons.print.min.js', 'public/js/datatables/buttons.print.min.js');
mix.copy('node_modules/datatables.net-buttons/js/dataTables.buttons.min.js', 'public/js/datatables/dataTables.buttons.min.js');
mix.copy('node_modules/datatables.net-responsive/js/dataTables.responsive.min.js', 'public/js/datatables/dataTables.responsive.min.js');
mix.copy('node_modules/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css', 'public/css/datatables/responsive.bootstrap4.min.css');
mix.copy('node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js', 'public/js/datatables/responsive.bootstrap4.min.js');

//Para Select2
mix.copy('node_modules/select2/dist/js/select2.min.js', 'public/js/select2/select2.min.js');
mix.copy('node_modules/select2/dist/css/select2.min.css', 'public/css/select2/select2.min.css');
mix.copy('node_modules/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.min.css', 'public/css/select2/select2-bootstrap4.min.css');
