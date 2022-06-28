<?php
    require 'includes/funciones.php';

    $ocultarBanner = true;
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion formulario" id="formulario">
        <form class="campos">

            <h2>Contactanos</h2>
            <p>Si tienes alguna duda, pregunta, o requieres de una cotización puedes llamar o mandar un correo, con gusto te atenderemos. </p>

            <div class="seccion-campo">
                <input type="text" placeholder="Ingresa tu nombre">
                <input type="tel" placeholder="Numero de telefono">
            </div>
            
            <input type="email" placeholder="Ingresa tu correo">
            <textarea id="mensaje" placeholder="Escribe tu mensaje"></textarea>

            <input class="formulario-boton" type="submit" value="Enviar">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>