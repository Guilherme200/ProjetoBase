let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Copy images and fonts from 'resources/' to 'public/'
mix.copyDirectory('resources/assets/img', 'public/assets/img');

// Compiling assets
mix
  .js('resources/assets/js/app.js', 'public/assets/js')
  .sass('resources/assets/scss/app.scss', 'public/assets/css')
  .options({
    processCssUrls: false
  })
  .copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/fonts');

// Third party libraries in vendor.js
mix.extract([
  'vue',
  'axios',
  'lodash',
  'jquery',
  'popper.js',
  'bootstrap',
  'vue-snotify',
  'jquery-mask-plugin'
]);

mix.scripts(
  [
    'public/assets/js/manifest.js',
    'public/assets/js/vendor.js',
    'public/assets/js/app.js'
  ],
  'public/assets/js/main.js'
);

// Versioning assets when production
if (mix.inProduction()) {
  mix.version();
}
