const mix = require('laravel-mix');

mix.setResourceRoot('../');

mix.sourceMaps()

mix.webpackConfig({
    stats: {
        children: true,
    },
});

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

mix.copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js');

mix.copy('resources/js/sb-admin/sb-admin-2.min.js', 'public/js/sb-admin-2.min.js');
mix.copy('resources/js/sb-admin/demo/chart-area-demo.js', 'public/js/demo/chart-area-demo.js');
mix.copy('resources/js/sb-admin/demo/chart-pie-demo.js', 'public/js/demo/chart-pie-demo.js');

mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.copy('node_modules/jquery/dist/jquery.slim.min.js', 'public/js/jquery.slim.min.js');
mix.copy('node_modules/jquery.easing/jquery.easing.min.js', 'public/js/jquery.easing.min.js');

mix.copy('node_modules/chart.js/dist/chart.min.js', 'public/js/chart.min.js');

//Para Datatables
mix.copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'public/js/jquery.dataTables.min.js');
mix.copy('node_modules/datatables.net-dt/css/jquery.dataTables.min.css', 'public/css/jquery.dataTables.min.css');
mix.copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'public/css/dataTables.bootstrap4.min.css');
