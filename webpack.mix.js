const mix = require('laravel-mix');


mix.js('resources/js/app.js', 'js')
    .stylus('resources/stylus/main.styl', './style.css')
    .options({
        processCssUrls: false,
        
        
    })
    .setPublicPath('./');

if (mix.inProduction()) {
    mix.version();
}