<?php

    // Base de datos
    require 'includes/database.php';
    $db = coneccionDB();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";


        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];


        //Insertar en la base de datos
        $query = "INSERT INTO contacto (nombre, telefono, correo, mensaje)";
    }

    require 'includes/funciones.php';
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion formulario" id="formulario">
        <form class="contenedor-formulario" method="POST" action="/contacto.php">

            <h2>Contactanos</h2>
            <p>Si tienes alguna duda, pregunta, o requieres de una cotización puedes llamar o mandar un correo, con gusto te atenderemos. </p>

            <fieldset class="campos">
                <div class="seccion-campo">
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                    <input type="tel" id="telefono" name="telefono" placeholder="Telefono">
                </div>
                
                <input type="email" id="correo" name="correo" placeholder="Correo">
                <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje"></textarea>

                <input class="formulario-boton" type="submit" value="Enviar">
            </fieldset>
            
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>