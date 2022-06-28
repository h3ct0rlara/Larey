<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larey</title>

    <!-- Preload - Ayuda a cargar archivosmas rapido-->
    <link rel="stylesheet preload" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Montserrat:ital,wght@0,400;1,600&display=swap" crossorigin="crossorigin" as="style">
    <link rel="preload" href="/build/css/app.css" as="style">


    <!--Despues se agrega la los archivos normalmente-->
    <link rel="shortcut icon" href="/build/img/logo.svg">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Montserrat:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
    <link href="/build/css/app.css" rel="stylesheet">

    <!-- Prefetch - Carga la siguiente pagina que esperas el usuario visite-->
    <link rel="Prefetch" href="#">

</head>
<body>

    <header class="header">
        <div class="contenedor">
            <div class="contenido-header">
                <a href="index.php">
                    <img class="logo" src="/build/img/logo.svg" alt="Imagen Logo">
                </a>
      
                <div class="barra-nav">
                    <div class="menu" >
                        <span>Categorias</span>
                        <img src="/build/img/icono_abajo.svg" alt="Icono abajo">

                        <ul id="submenu">
                            <a href="/productos.php">
                                <li>Paquetes</li>
                            </a>
                            <a href="/productos.php">
                                <li>Combos sublimacion</li>
                            </a>
                            <a href="/productos.php">
                                <li>Blancos</li>
                            </a>
                            <a href="/productos.php">
                                <li>Planchas</li>
                            </a>
                            <a href="/productos.php">
                                <li>Plotters e Impresoras</li>
                            </a>
                            <a href="/productos.php">
                                <li>Camero</li>
                            </a>
                            <a href="/productos.php">
                                <li>DTF</li>
                            </a>
                            <a href="/productos.php">
                                <li>Combustibles</li>
                            </a>
                            <a href="/productos.php">
                                <li>Transfer 360</li>
                            </a>
                        </ul>
                    </div>

                    <div class="busqueda">
                        <input type="text" placeholder="Busca lo que quieras">

                        <button type="submit">
                            <img src="/build/img/busqueda.svg" alt="Icono busqueda">
                        </button>
                    </div>

                    <nav class="navegacion-principal">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="contacto.php">Contacto</a>

                        <a href="/carrito.php">
                            <img src="/build/img/carrito.svg" alt="Icono Carrito">
                        </a>
                    </nav>

                    <div>
                        <img class="menu-hamburgesa" src="/build/img/menu_hamburgesa.svg" alt="Menu Hamburgesa" id="menu-activo">

                        <!-- <ul class="lista-hamburgesa" id="menu-hamburgesa">
                            <a href="/nosotros.php"><li>Nosotros</li></a>
                            <a href="/contacto.php"><li>Contacto</li></a>
                            <a href="/contacto.php"><li>Productos</li></a>
                        </ul> -->
                    </div>
                </div>   
            </div>
        </div>    
    </header>
    </div>