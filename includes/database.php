<?php

function coneccionDB() {
    $db = mysqli_connect('localhost', 'root', '1234', 'larey');

    if(!$db){
    echo "Error en la coneccion";

    exit;
    }
    
    // echo "Coneccion correcta";
}

coneccionDB();