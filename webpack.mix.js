const config = {
    sourcePath: 'resources',
    publicPath: 'public',
  };

let mix = require('laravel-mix');

mix.setPublicPath(config.publicPath);

const sourcePath = path => `${config.sourcePath}/${path}`;
const publicPath = path => `${config.publicPath}/${path}`;


mix.sass(sourcePath('css/main.scss'), publicPath('styles'));
mix.js(sourcePath('js/app.js'), publicPath('scripts'));
