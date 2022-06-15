<?php
    require 'includes/funciones.php';

    $ocultarBanner = true;
    incluirTemplate('header', false);
    
?>


    <main class="contenedor contenedor-galeria">

        <h2>Ofertas</h2>

        <div class="contenedor-productos">            

            <div class="galeria-ofertas" id="productos">
                
                <div class="contenedor-producto" data-id="1">
                    <a href="productos.html">
                        <picture class="contenedor-imagen">
                                <img src="img/taza_magica.jpg" alt="Imagen Oferta">
                        </picture>
                    </a>

                    <div class="oferta-info" >
                        <h3>Taza Magica</h3>
                        <p class="oferta"><span>$600</span></p>
                        <p class="precio"><samp>$855</samp></p>
                        <a class="agregar-carrito" href="#">Agregar al carrito</a>
                    </div>
                </div>

                <div class="contenedor-producto" data-id="2">
                    <a href="#">
                        <picture class="contenedor-imagen">
                                <img src="img/gorra_azul.jpg" alt="Imagen Oferta">
                        </picture>
                    </a>

                    <div class="oferta-info">
                        <h3>Gorra Azul</h3>
                        <p class="oferta"><span>$600</span></p>
                        <p class="precio"><samp>$855</samp></p>
                        <a class="agregar-carrito" href="#">Agregar al carrito</a>
                    </div>
                </div>
            
                <div class="contenedor-producto" data-id="3">
                    <a href="#">
                        <picture class="contenedor-imagen">
                                <img src="img/playera_roja.jpg" alt="Imagen Oferta">
                        </picture>
                    </a>

                    <div class="oferta-info">
                        <h3>Playera</h3>
                        <p class="oferta"><span>$600</span></p>
                        <p class="precio"><samp>$855</samp></p>
                        <a class="agregar-carrito" href="#">Agregar al carrito</a>
                    </div>
                </div>
            
                <div class="contenedor-producto" data-id="4">
                    <a href="#">
                        <picture class="contenedor-imagen">
                                <img src="img/gorra_magenta.jpg" alt="Imagen Oferta">
                        </picture>
                    </a>
                    <div class="oferta-info">
                        <h3>Gorra Magenta</h3>
                        <p class="oferta"><span>$600</span></p>
                        <p class="precio"><samp>$855</samp></p>
                        <a class="agregar-carrito" href="#">Agregar al carrito</a>
                    </div>
                </div>


            
                <div class="contenedor-producto" data-id="5">
                    <a href="#">
                        <picture class="contenedor-imagen">
                                <img src="img/taza_blanca.2.png" alt="Imagen Oferta">
                        </picture>
                    </a>

                    <div class="oferta-info">
                        <h3>Taza Blanca</h3>
                        <p class="oferta"><span>$600</span></p>
                        <p class="precio"><samp>$855</samp></p>
                        <a class="agregar-carrito" href="#">Agregar al carrito</a>
                    </div>
                </div>
                
            </div>
        </div>

        <h2 class="galeria-titulo">Productos</h2>

        <div class="contenedor-productos" id="galeria">

            <div class="galeria">
                <a class="producto-grande" href="#">
                    <picture class="contenedor-imagen">
                        <img src="img/playera_roja.jpg" alt="Imagen playera">
                    </picture>
                </a>
                <a href="#">
                    <picture class="contenedor-imagen">
                        <img src="img/gorra_azul.jpg" alt="Imagen playera">
                    </picture>
                </a>
                <a href="#">
                    <picture class="contenedor-imagen">
                        <img src="img/taza_magica.jpg" alt="Imagen playera">
                    </picture>
                </a>
                <a href="">
                    <picture class="contenedor-imagen">
                        <img src="img/taza_blanca.2.png" alt="Imagen playera">
                    </picture>
                </a>
                <a href="#">
                    <picture class="contenedor-imagen">
                        <img src="img/gorra_magenta.jpg" alt="Imagen playera">
                    </picture>
                </a>
            </div>
        </div>
    </main>

    <section>
        <div class="pago-seguro contenedor">
            <div class="pago-seguro-contenido">
                <img src="https://img.icons8.com/ios/100/000000/bank-card-front-side--v1.png"/>
                <h3>Elige como pagar</h3>
                <p>Inventore doloremque unde ut rerum dolore, magnam fuga ea harum corrupti adipisci.</p>
            </div>
   
            <div class="pago-seguro-contenido">
                <img src="https://img.icons8.com/wired/100/000000/box--v1.png"/>
                <h3>Envio Gratis desde $599</h3>
                <p>Inventore doloremque unde ut rerum dolore, magnam fuga ea harum corrupti adipisci.</p>
            </div>

            <div class="pago-seguro-contenido">
                <img src="https://img.icons8.com/ios/100/000000/security-checked.png"/>
                <h3>Seguridad</h3>
                <p>Inventore doloremque unde ut rerum dolore, magnam fuga ea harum corrupti adipisci.</p>
            </div>
        </div>
    </section>

    <div class="contenedor formulario" id="contacto">
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

            <input type="text" placeholder="Ingresa tu nombre">
            <input type="email" placeholder="Ingresa tu correo">
            <input type="number" placeholder="Numero de telefono">
            <textarea id="mensaje" placeholder="Escribe tu mensaje"></textarea>

            <input class="formulario-boton" type="submit" value="Enviar">
        </form>
    </div>


<?php 
    incluirTemplate('footer');
?>