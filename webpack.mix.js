const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .react()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .webpackConfig(require('./webpack.config'));

if (mix.inProduction()) {
    mix.version();
}



mix.copy( 'resources/images', 'public/images' );



mix.js('resources/js/frontend/app.js', 'public/js/frontend')
    // .postCss('resources/css/app.css', 'public/css');

mix.browserSync({
    proxy: '127.0.0.1:8000',
});


mix.sass('resources/css/frontend/app.scss', 'public/css/frontend')