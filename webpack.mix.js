const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts')
   .copy('node_modules/admin-lte/dist/img', 'public/img')
   .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css')
   .copy('node_modules/admin-lte/dist/css/adminlte.min.css', 'public/css')
   .copy('node_modules/admin-lte/dist/js/adminlte.min.js', 'public/js')
   .copy('node_modules/jquery/dist/jquery.min.js', 'public/js')
   .copy('node_modules/popper.js/dist/umd/popper.min.js', 'public/js');
