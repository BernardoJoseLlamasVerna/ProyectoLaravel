let mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts([
     'node_modules/jquery/dist/jquery.js',
     'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
     'resources/assets/js/app.js'
], 'public/js/all.js', './');

mix.browserSync({
  proxy:'http://127.0.0.1:8000'
});

/*mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js'
], 'public/js/all.js');*/

/*mix.scripts([
  'jquery/dist/jquery.js',
  'bootstrap-sass/assets/javascripts/bootstrap.js'
], 'public/js/all.js', 'node_modules');*/

/*let mix = require('laravel-mix');

//tareas de laravel-mix:
//
//0.-tarea por defecto:sass
mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.scripts([
  'node_modules/jquery/dist/jquery.js',
  'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
  'resources/assets/js/app.js'
], 'public/js/all.js', './');

mix.browserSync({
  proxy:'http://127.0.0.1:8000'
});*/
