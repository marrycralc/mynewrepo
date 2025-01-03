const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ])
   .sass('resources/css/app.scss', 'public/css') // Optional if using SCSS
   .sourceMaps();
