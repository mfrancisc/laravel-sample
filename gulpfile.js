var elixir = require('laravel-elixir');

/*
  |--------------------------------------------------------------------------
    | Elixir Asset Management
      |--------------------------------------------------------------------------
        |
          | Elixir provides a clean, fluent API for defining some basic Gulp tasks
            | for your Laravel application. By default, we are compiling the Sass
              | file for our application, as well as publishing vendor resources.
                |
                */

elixir(function(mix) {

  mix.sass('app.scss', 'resources/css/libs');

  mix.styles([
    'bootstrap.min.css',
    'app.css',
    'select2.min.css'
  ], 'public/css', 'resources/css/libs');

  mix.scripts([
    'jquery.js',
    'bootstrap.min.js',
    'select2.min.js'
  ], 'public/js', 'resources/js/libs');

  mix.version('css/all.css');

});
