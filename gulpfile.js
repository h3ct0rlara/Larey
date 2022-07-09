
// Dependencias Gulp
const {src, dest, watch, parallel} = require("gulp");

// Dependencias css
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");

// Dependecias JavaScrip
const uglify = require('gulp-uglify');
const sourceMaps = require('gulp-sourcemaps');
const concat = require('gulp-concat');


// Dependencias imagenes
const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

// Rutas
const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*'
}

/** Funciones **/
function css(){
    
    return src(paths.scss)
        .pipe(plumber()) // Para no detener la ejecucion
        .pipe( sass() ) // Paso 2. Compilarlo
        .pipe( dest('./build/css') );
}

function javascript() {
    return src(paths.js)
        // .pipe(sourceMaps.init())
        .pipe(uglify())
        // .pipe(concat('bundle.js'))
        // .pipe(sourceMaps.write())
        .pipe(dest('./build/js'))
}

function imagenes() {

    return src('./src/img/**/*.{png,jpg}')
        .pipe(cache(imagemin({ optimizationLevel: 3 })))
        .pipe(dest('build/img'))
}

function versionWebp(){

    return src('./src/img/**/*.{png,jpg}')
        .pipe(webp({ quality: 50 }))
        .pipe(dest('build/img'))
}


function versionAvif(){

    return src('./src/img/**/*.{png,jpg}')
        .pipe(avif({quality: 50}))
        .pipe(dest('build/img'))
}


// Escucha por los cambioes en los archivos .sass
function dev(){
    
    watch(paths.scss, css);
    watch(paths.js, javascript);
}


exports.css = css;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.javascript = javascript;


exports.dev = parallel (imagenes, versionWebp, versionAvif, dev);
// exports.dev = parallel (dev);