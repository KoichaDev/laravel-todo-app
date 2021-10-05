const mix = require('laravel-mix');

mix.
 sass("resources/scss/main.scss", "public/css").options({
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
}).ts('resources/ts/app.ts', 'public/js').version();

mix.browserSync({
    proxy: "http://127.0.0.1:8000",
});

