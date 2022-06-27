<?php
    require 'includes/funciones.php';

    $ocultarBanner = true;
    incluirTemplate('header');
    
?>

    <main class="contenedor seccion formulario" id="formulario">
        <div class="redes-sociales">
            <div>
                <h3>Telefono</h3>
                <p>55-00-55-55-00</p>
                <p>55-00-55-55-00</p>
            </div>

            <div> 
                <h3>Síguenos</h3>

                <div>
                    <a href="https://bit.ly/3b0jDGk">
                        <img src="/img/facebook.svg" alt="Icono Facebook">
                    </a>
                    <a href="https://bit.ly/3HBhux6">
                        <img src="/img/instagram.svg" alt="Icono Instagram">
                    </a>
                    <a href="https://bit.ly/3O9ouE2">
                        <img src="/img/whatsapp.svg" alt="Icono Whatsapp">
                    </a>
                    <a href="mailto:h3ct0r.l4r4@gmail.com?Subject=Informes%20cotizacion%20producto">
                        <img src="/img/correo.svg" alt="Icono Correo">
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