<?php
    require 'includes/funciones.php';

    $ocultarBanner = true;
    incluirTemplate('header', false);
    
?>
    <section class="contenedo-banner">
        <div class="contenedor-slider">
            <div class="slider" id="slider">
                <div class="slider-section">
                    <a href="">
                        <img src="img/banner1.jpg" alt="" class="slider-img">
                    </a>
                </div>
                <div class="slider-section">
                    <a href="">
                        <img src="img/banner2.jpg" alt="" class="slider-img">
                    </a>
                </div>
                <div class="slider-section">
                    <a href="">
                        <img src="img/banner3.jpg" alt="" class="slider-img">
                    </a>
                </div>
                <div class="slider-section">
                    <a href="">
                        <img src="img/banner4.jpg" alt="" class="slider-img">
                    </a>
                </div>
                <div class="slider-section">
                    <a href="">
                        <img src="img/banner5.jpg" alt="" class="slider-img">
                    </a>
                </div>
                <div class="slider-section">
                    <a href="">
                        <img src="img/banner6.jpg" alt="" class="slider-img">
                    </a>
                </div>
            </div>

            <div class="slider-btn slider-btn-left" id="btn-left">
                <img src="/img/izquierda.svg" alt="Icono izquierda">
            </div>
            <div class="slider-btn slider-btn-right" id="btn-right">
                <img src="/img/derecha.svg" alt="Icono derecha">
            </div>
        </div>   
    </section>


    <section class="contenedor seccion ofertas">

        <h2>Ofertas</h2>

        <div class="contenedor-ofertas" >            

            <div class="galeria-ofertas" id="ofertas">
                
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
                        <h3>Playera</h3>
                        <p class="oferta"><span>$600</span></p>
                        <p class="precio"><samp>$855</samp></p>
                        <a class="agregar-carrito" href="#">Agregar al carrito</a>
                    </div>
                </div>

                <div class="contenedor-producto" data-id="5">
                    <a href="#">
                        <picture class="contenedor-imagen">
                                <img src="img/gorra_vino.jpg" alt="Imagen Oferta">
                        </picture>
                    </a>

                    <div class="oferta-info">
                        <h3>Playera</h3>
                        <p class="oferta"><span>$600</span></p>
                        <p class="precio"><samp>$855</samp></p>
                        <a class="agregar-carrito" href="#">Agregar al carrito</a>
                    </div>
                </div>

                <div class="contenedor-producto" data-id="6">
                    <a href="#">
                        <picture class="contenedor-imagen">
                                <img src="img/playera_negra.jpg" alt="Imagen Oferta">
                        </picture>
                    </a>

                    <div class="oferta-info">
                        <h3>Playera</h3>
                        <p class="oferta"><span>$600</span></p>
                        <p class="precio"><samp>$855</samp></p>
                        <a class="agregar-carrito" href="#">Agregar al carrito</a>
                    </div>
                </div>

                <div class="contenedor-producto" data-id="7">
                    <a href="#">
                        <picture class="contenedor-imagen">
                                <img src="img/gorra_negra.jpg" alt="Imagen Oferta">
                        </picture>
                    </a>

                    <div class="oferta-info">
                        <h3>Playera</h3>
                        <p class="oferta"><span>$600</span></p>
                        <p class="precio"><samp>$855</samp></p>
                        <a class="agregar-carrito" href="#">Agregar al carrito</a>
                    </div>
                </div>

                <div class="contenedor-producto" data-id="8">
                    <a href="#">
                        <picture class="contenedor-imagen">
                                <img src="img/gorra_magenta.jpg" alt="Imagen Oferta">
                        </picture>
                    </a>

                    <div class="oferta-info">
                        <h3>Playera</h3>
                        <p class="oferta"><span>$600</span></p>
                        <p class="precio"><samp>$855</samp></p>
                        <a class="agregar-carrito" href="#">Agregar al carrito</a>
                    </div>
                </div>
            </div>

            <div class="carrucel-btn btn-left" id="left-ofertas">
                <img src="/img/izquierda.svg" alt="Icono izquierda">
            </div>
            <div class="carrucel-btn btn-right" id="right-ofertas">
                <img src="/img/derecha.svg" alt="Icono derecha">
            </div>
        </div>
    </section>

    <section class="contenedor seccion">
        <h3>Donde desea plasmar su idea...</h3>
        <div class="contenedor-categorias">
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="img/gorra.svg" alt="Imagen Categoria">
                </div>
                <h4>Gorras</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                   <img src="img/playera.svg" alt="Imagen Categoria"> 
                </div>
                <h4>Playeras</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="img/cubrebocas.svg" alt="Imagen Categoria">
                </div>
                <h4>Cubrebocas</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="img/taza.svg" alt="Imagen Categoria">
                </div>
                <h4>Tazas</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="img/tarro.svg" alt="Imagen Categoria">
                </div>
                <h4>Tarron</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="img/sudadera.svg" alt="Imagen Categoria">
                </div>
                <h4>Sudaderas</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="img/rompecabezas.svg" alt="Imagen Categoria">
                </div>
                <h4>Rompecabezas</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="img/idea_usuario.svg" alt="Imagen Categoria">
                </div>
                <h4>Envianos tu idea</h4>
            </div>
        </div>
    </section>

    <section class="seccion">
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

    <section class="seccion fondo-contacto">
        <div class="contenedor contenedor-contacto">
            <p>Si requieres una cotización, tienes alguna duda o pregunta, puedes llamar o mandar un correo y con gusto te atenderemos</p>
            <a href="contacto.php">Contacto</a>
        </div>
    </section>

<?php 
    incluirTemplate('footer');
?>