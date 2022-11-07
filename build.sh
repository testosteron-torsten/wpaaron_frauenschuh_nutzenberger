#!/bin/sh
npx sass ./src/sass/style.scss ./public/wp-content/themes/aron/style.css
cp ./src/index.html ./public/wp-content/themes/aron/
cp ./src/favicons/*.* ./public/wp-content/themes/aron/
cp -R ./src/images ./public/wp-content/themes/aron/
cp -R ./src/fonts ./public/wp-content/themes/aron/fonts
npx esbuild ./src/js/main.js --bundle --outfile=./public/wp-content/themes/aron/main.js  --minify



