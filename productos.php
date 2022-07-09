<?php
    require 'includes/funciones.php';
    incluirTemplate('header');

?>

    <main class="contenedor seccion">
        <h1>Productos</h1>

        <section class="seccion-productos">
            <div class="contenedor seccion">
                <div class="contenedor-producto">
                    <div class="producto-imagen">
                        <a href="">
                            <picture>
                                <source srcset="build/img/playera_roja.avif" type="image/avif">
                                <source srcset="build/img/playera_roja.webp" type="image/webp">
                                <img loading="lazy" width="200" height="300" src="build/img/playera_roja.jpg" alt="">
                            </picture>
                        </a>
                    </div>

                    <div class="producto-info">
                        <h3></h3>
                        <span></span>
                        <p><?php ?></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php 
    incluirTemplate('footer');
?>