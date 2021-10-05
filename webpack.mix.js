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

 mix.sass("resources/scss/main.scss", "public/css").options({
    postCss: [
        require('postcss-custom-properties')({
            preserve: false
        })
    ],
    autoprefixer: {
        options: {
            browsers: [
                'last 6 versions',
            ]
        }
    },
});

mix.browserSync({
    proxy: "http://127.0.0.1:8000",
});

mix.ts('resources/ts/app.ts', 'public/js');
// mix.js('resources/js/app.js', 'public/js');
