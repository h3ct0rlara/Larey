
// src es una funcion  que sirve para identificar 1 o varios archvos
// dest permite almacenar algo en una carpeta destino
// El Paso 2 vine de las dependencias
const {src, dest, watch} = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");

function css(done){
    
    src('src/scss/**/*.scss') // Paso 1. Identificar el archivo de SASS
        .pipe(plumber())
        .pipe( sass() ) // Paso 2. Compilarlo
        .pipe( dest("build/css") ); // Paso 3. Almacenarla en el disco duro


    done(); // Callback que avisa gulp cuando llegamos al final de la funcion
}

function dev(done){

    watch("src/scss/**/*.scss", css);

    done();
}


exports.css = css;
exports.dev = dev;