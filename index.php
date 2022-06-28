<?php
    require 'includes/funciones.php';
    incluirTemplate('header', false);
?>

    <section class="contenedo-banner">
        <div class="contenedor-slider">
            <div class="slider" id="slider">
                <div class="slider-section">
                    <a href="">
                        <picture>
                            <source srcset="/build/img/banner1.avif" type="image/avif">
                            <source srcset="/build/img/banner1.webp" type="image/webp">
                            <img loading="lazy" width="200" height="300" src="/build/img/banner1.jpg" alt="Banner 1" class="slider-img">
                        </picture>
                    </a>
                </div>
                <div class="slider-section">
                    <a href="">
                        <picture>
                            <source srcset="/build/img/banner2.avif" type="image/avif">
                            <source srcset="/build/img/banner2.webp" type="image/webp">
                            <img loading="lazy" width="200" height="300" src="/build/img/banner2.jpg" alt="Banner 2" class="slider-img">
                        </picture>
                    </a>
                </div>
                <div class="slider-section">
                    <a href="">
                        <picture>
                            <source srcset="/build/img/banner3.avif" type="image/avif">
                            <source srcset="/build/img/banner3.webp" type="image/webp">
                            <img loading="lazy" width="200" height="300" src="/build/img/banner3.jpg" alt="Banner 3" class="slider-img">
                        </picture>
                    </a>
                </div>
                <div class="slider-section">
                    <a href="">
                        <picture>
                            <source srcset="/build/img/banner4.avif" type="image/avif">
                            <source srcset="/build/img/banner4.webp" type="image/webp">
                            <img loading="lazy" width="200" height="300" src="/build/img/banner4.jpg" alt="Banner 4" class="slider-img">
                        </picture>
                    </a>
                </div>
                <div class="slider-section">
                    <a href="">
                        <picture>
                            <source srcset="/build/img/banner5.avif" type="image/avif">
                            <source srcset="/build/img/banner5.webp" type="image/webp">
                            <img loading="lazy" width="200" height="300" src="/build/img/banner5.jpg" alt="Banner 5" class="slider-img">
                        </picture>
                    </a>
                </div>
                <div class="slider-section">
                    <a href="">
                        <picture>
                            <source srcset="/build/img/banner6.avif" type="image/avif">
                            <source srcset="/build/img/banner6.webp" type="image/webp">
                            <img loading="lazy" width="200" height="300" src="/build/img/banner6.jpg" alt="Banner 6" class="slider-img">
                        </picture>
                    </a>
                </div>
            </div>

            <div class="slider-btn slider-btn-left" id="btn-left">
                <img src="/build/img/izquierda.svg" alt="Icono izquierda">
            </div>
            <div class="slider-btn slider-btn-right" id="btn-right">
                <img src="/build/img/derecha.svg" alt="Icono derecha">
            </div>
        </div>   
    </section>

    <section class="contenedor seccion ofertas">

        <h2>Ofertas</h2>

        <div class="contenedor-ofertas" >       
            
            <button class="ofertas-btn oferta-prev">
                <img src="/build/img/izquierda.svg" alt="Icono izquierda">
            </button>

                <div class="lista-ofertas" id="ofertas">
                    
                    <div class="contenedor-producto" data-id="1">
                        <a href="productos.html">
                            <picture>
                                <source srcset="/build/img/gorra_azul.avif" type="image/avif">
                                <source srcset="/build/img/gorra_azul.webp" type="image/webp">
                                <img loading="lazy" width="200" height="300" src="/build/img/gorra_azul.jpg" alt="Imagen">
                            </picture>
                        </a>

                        <div class="oferta-info" >
                            <h3>Taza Magica</h3>
                            <p class="oferta"><span>$600</span></p>
                            <p class="precio"><samp>$855</samp></p>
                        </div>
                    </div>

                    <div class="contenedor-producto" data-id="2">
                        <a href="#">
                            <picture>
                                <source srcset="/build/img/playera_roja.avif" type="image/avif">
                                <source srcset="/build/img/playera_roja.webp" type="image/webp">
                                <img loading="lazy" width="200" height="300" src="/build/img/playera_roja.jpg" alt="Imagen Oferta">
                            </picture>
                        </a>

                        <div class="oferta-info">
                            <h3>Gorra Azul</h3>
                            <p class="oferta"><span>$600</span></p>
                            <p class="precio"><samp>$855</samp></p>
                        </div>
                    </div>
                
                    <div class="contenedor-producto" data-id="3">
                        <a href="#">
                            <picture>
                                <source srcset="/build/img/gorra_magenta.avif" type="image/avif">
                                <source srcset="/build/img/gorra_magenta.webp" type="image/webp">
                                <img loading="lazy" width="200" height="300" src="/build/img/gorra_magenta.jpg" alt="Imagen Oferta">
                            </picture>
                        </a>

                        <div class="oferta-info">
                            <h3>Playera</h3>
                            <p class="oferta"><span>$600</span></p>
                            <p class="precio"><samp>$855</samp></p>
                        </div>
                    </div>

                    <div class="contenedor-producto" data-id="4">
                        <a href="#">
                            <picture>
                                <source srcset="/build/img/gorra_vino.avif" type="image/avif">
                                <source srcset="/build/img/gorra_vino.webp" type="image/webp">
                                <img loading="lazy" width="200" height="300" src="/build/img/gorra_vino.jpg" alt="Imagen Oferta">
                            </picture>
                        </a>

                        <div class="oferta-info">
                            <h3>Playera</h3>
                            <p class="oferta"><span>$600</span></p>
                            <p class="precio"><samp>$855</samp></p>
                        </div>
                    </div>

                    <div class="contenedor-producto" data-id="5">
                        <a href="#">
                            <picture>
                                <source srcset="/build/img/playera_negra.avif" type="image/avif">
                                <source srcset="/build/img/playera_negra.webp" type="image/webp">
                                <img loading="lazy" width="200" height="300" src="/build/img/playera_negra.jpg" alt="Imagen Oferta">
                            </picture>
                        </a>

                        <div class="oferta-info">
                            <h3>Playera</h3>
                            <p class="oferta"><span>$600</span></p>
                            <p class="precio"><samp>$855</samp></p>
                        </div>
                    </div>

                    <div class="contenedor-producto" data-id="6">
                        <a href="#">
                            <picture>
                                <source srcset="/build/img/playera_verde.avif" type="image/avif">
                                <source srcset="/build/img/playera_verde.webp" type="image/webp">
                                <img loading="lazy" width="200" height="300" src="/build/img/playera_verde.jpg" alt="Imagen Oferta">
                            </picture>
                        </a>

                        <div class="oferta-info">
                            <h3>Playera</h3>
                            <p class="oferta"><span>$600</span></p>
                            <p class="precio"><samp>$855</samp></p>
                        </div>
                    </div>

                    <div class="contenedor-producto" data-id="7">
                        <a href="#">
                            <picture>
                                <source srcset="/build/img/playera_negra.avif" type="image/avif">
                                <source srcset="/build/img/playera_negra.webp" type="image/webp">
                                <img loading="lazy" width="200" height="300" src="/build/img/playera_negra.jpg" alt="Imagen Oferta">
                            </picture>
                        </a>

                        <div class="oferta-info">
                            <h3>Playera</h3>
                            <p class="oferta"><span>$600</span></p>
                            <p class="precio"><samp>$855</samp></p>
                        </div>
                    </div>

                    <div class="contenedor-producto" data-id="8">
                        <a href="#">
                            <picture>
                                <source srcset="/build/img/playera_roja.avif" type="image/avif">
                                <source srcset="/build/img/playera_roja.webp" type="image/webp">
                                <img loading="lazy" width="200" height="300" src="/build/img/playera_roja.jpg" alt="Imagen Oferta">
                            </picture>
                        </a>

                        <div class="oferta-info">
                            <h3>Playera</h3>
                            <p class="oferta"><span>$600</span></p>
                            <p class="precio"><samp>$855</samp></p>
                        </div>
                    </div>
                    
                    <div class="contenedor-producto" data-id="9">
                        <a href="#">
                            <picture>
                                <source srcset="/build/img/gorra_magenta.avif" type="image/avif">
                                <source srcset="/build/img/gorra_magenta.webp" type="image/webp">
                                <img loading="lazy" width="200" height="300" src="/build/img/gorra_magenta.jpg" alt="Imagen Oferta">
                            </picture>
                        </a>

                        <div class="oferta-info">
                            <h3>Playera</h3>
                            <p class="oferta"><span>$600</span></p>
                            <p class="precio"><samp>$855</samp></p>
                        </div>
                    </div>

                    <div class="contenedor-producto" data-id="10">
                        <a href="#">
                            <picture>
                                <source srcset="/build/img/playera_roja.avif" type="image/avif">
                                <source srcset="/build/img/playera_roja.webp" type="image/webp">
                                <img loading="lazy" width="200" height="300" src="/build/img/playera_roja.jpg" alt="Imagen Oferta">
                            </picture>
                        </a>

                        <div class="oferta-info">
                            <h3>Playera</h3>
                            <p class="oferta"><span>$600</span></p>
                            <p class="precio"><samp>$855</samp></p>
                        </div>
                    </div>
                </div>

                <div role="tablist" class="carousel-indicadores"></div>
            
            <button class="ofertas-btn oferta-next">
                <img src="/build/img/derecha.svg" alt="Icono derecha">
            </button>
        </div>
    </section>

    <section class="contenedor seccion">
        <h3>Donde desea plasmar su idea...</h3>
        <div class="contenedor-categorias">
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="/build/img/gorra.svg" alt="Imagen Categoria">
                </div>
                <h4>Gorras</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                   <img src="/build/img/playera.svg" alt="Imagen Categoria"> 
                </div>
                <h4>Playeras</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="/build/img/cubrebocas.svg" alt="Imagen Categoria">
                </div>
                <h4>Cubrebocas</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="/build/img/taza.svg" alt="Imagen Categoria">
                </div>
                <h4>Tazas</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="/build/img/tarro.svg" alt="Imagen Categoria">
                </div>
                <h4>Tarron</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="/build/img/sudadera.svg" alt="Imagen Categoria">
                </div>
                <h4>Sudaderas</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="/build/img/rompecabezas.svg" alt="Imagen Categoria">
                </div>
                <h4>Rompecabezas</h4>
            </div>
            <div class="categoria">
                <div class="contenedor-imagen-categoria">
                    <img src="/build/img/idea_usuario.svg" alt="Imagen Categoria">
                </div>
                <h4>Envianos tu idea</h4>
            </div>
        </div>
    </section>

    <section class="contenedor seccion alianzas-contenedor">

        <h2>Socios comerciales</h2>

        <div class="alianzas-contenido">
            <video loading="lazy" class="video" autoplay muted loop>
                <source src="/video/video.mp4" type="video/mp4">
                <source src="/video/video.ogg" type="video/ogg">
                <source src="/video/video.webm" type="video/webm">
            </video>

            <div class="alianzas">
                <picture>
                    <source srcset="" type="image/avif">
                    <source srcset="" type="image/webp">
                    <img loading="lazy" src="/build/img/silhouette.png" alt="Logo silhouette">
                </picture>
                <picture>
                    <source srcset="" type="image/avif">
                    <source srcset="" type="image/webp">
                    <img loading="lazy" src="/build/img/DTF.png" alt="Logo DTF">
                </picture>
                <picture>
                    <source srcset="" type="image/avif">
                    <source srcset="" type="image/webp">
                    <img loading="lazy" src="/build/img/Epson.png" alt="Logo Epson">
                </picture>
            </div>
        </div>
        
    </section>

    <section class="seccion">
        <div class="pago-seguro contenedor">
            <div class="pago-seguro-contenido">
                <img src="/build/img/tarjeta_pago.svg"/>
                <h3>Elige como pagar</h3>
                <p>Inventore doloremque unde ut rerum dolore, magnam fuga ea harum corrupti adipisci.</p>
            </div>
   
            <div class="pago-seguro-contenido">
                <img src="/build/img/envio_paqueteria.svg"/>
                <h3>Envio Gratis desde $599</h3>
                <p>Inventore doloremque unde ut rerum dolore, magnam fuga ea harum corrupti adipisci.</p>
            </div>

            <div class="pago-seguro-contenido">
                <img src="/build/img/seguridad.svg"/>
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