let mix = require('laravel-mix');

mix.js('resources/js/admin.js', 'public/js').postCss('resources/css/admin.css', 'public/css');