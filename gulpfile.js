
// Dependencias Gulp
const {src, dest, watch, parallel} = require("gulp");


// Dependencias css
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");

const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');


// Dependencias imagenes
const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');

const webp = require('gulp-webp');
const avif = require('gulp-avif');


/** Funciones **/
function css(done){
    
    src('src/scss/**/*.scss') // Paso 1. Identificar el archivo de SASS
        .pipe(plumber()) // Para no detener la ejecucion
        .pipe( sass() ) // Paso 2. Compilarlo
        // .pipe( postcss([ autoprefixer(), cssnano() ]))
        .pipe( dest('build/css') ); // Paso 3. Almacenarla en el disco duro


    done(); // Callback que avisa gulp cuando llegamos al final de la funcion
}

function imagenes(done) {
    // Calidad de la imagen jpg
    const opciones = {
        optimizationLevel: 3
    };

    src('src/img/**/*.{png,jpg}')
        .pipe(cache(imagemin(opciones)))
        .pipe(dest('build/img'))

    done();
}

function versionWebp(done){
    // Calidad de la imagen webp
    const opciones = {
        quality: 50
    };

    src('src/img/**/*.{png,jpg}')
        .pipe(webp(opciones))
        .pipe(dest('build/img'))

    done();
}


function versionAvif(done){
    // Calidad de la imagen webp
    const opciones = {
        quality: 50
    };

    src('src/img/**/*.{png,jpg}')
        .pipe(avif(opciones))
        .pipe(dest('build/img'))

    done();
}


// Escucha por los cambioes en los archivos .sass
function dev(done){
    
    watch("src/scss/**/*.scss", css);

    done();
}


exports.css = css;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;


// exports.dev = parallel (imagenes, versionWebp, versionAvif, dev);
exports.dev = parallel (dev);