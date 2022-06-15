<?php 

require 'app.php';

function incluirTemplate(string $nombre, bool $ocultarBanner = true){
    include TEMPLATES_URL . "/${nombre}.php";
}