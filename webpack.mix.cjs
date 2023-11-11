// webpack.mix.js

let mix = require('laravel-mix');

mix.js('resources/js/pages/home.js', 'public/js')
mix.js('resources/js/pages/employer.js', 'public/js')
mix.sass('resources/scss/pages/home.scss', 'public/css')
mix.sass('resources/scss/pages/job_detail.scss', 'public/css')
mix.sass('resources/scss/pages/employer.scss', 'public/css')
