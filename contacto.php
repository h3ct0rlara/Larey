<?php
    require 'includes/funciones.php';

    $ocultarBanner = true;
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion formulario" id="contacto">
        <div class="redes-sociales">
            <div>
                <h3>Telefono</h3>
                <p>55-00-55-55-00</p>
                <p>55-00-55-55-00</p>
            </div>

            <div> 
                <h3>Síguenos</h3>

                <div>
                    <a href="#">
                        <img src="https://img.icons8.com/ios-filled/30/000000/facebook-new.png"/>
                    </a>
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/instagram-new.png"/>
                    </a>
                    <a href="#">
                        <img src="https://img.icons8.com/material-rounded/30/000000/whatsapp--v1.png"/>
                    </a>
                    <a href="#">
                        <img src="https://img.icons8.com/ios-glyphs/30/000000/new-post.png"/>
                    </a> 
                </div>
            </div>
            
             
        </div>
        <form class="campos">

            <h2>Contactanos</h2>
            <p>Si requieres de una cotización o tienes alguna duda o pregunta, también nos puedes llamar o mandar un correo, con gusto te atenderemos. </p>

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