// webpack.mix.js

let mix = require('laravel-mix');

mix.js('resources/js/pages/home.js', 'public/js')
mix.sass('resources/scss/pages/home.scss', 'public/css')
