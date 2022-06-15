<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larey</title>

    

    <!-- Preload - Ayuda a cargar archivosmas rapido-->

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Montserrat:ital,wght@0,400;1,600&display=swap" crossorigin="crossorigin" as="font" >
    <link rel="preload" href="build/css/app.css" as="style">


    <!--Despues se agrega la los archivos normalmente-->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Montserrat:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">

    <!-- Prefetch - Carga la siguiente pagina que esperas el usuario visite-->
    <link rel="Prefetch" href="#">

</head>
<body>

    <header class="header">
        <div class="contenedor">
            <div class="contenido-header">
                <a href="index.html==">
                    <img class="logo" src="img/Logo.png" alt="Imagen Logo">
                </a>
      
                <div class="barra-nav">
                    <nav class="navegacion-principal">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>   
            </div>
            <nav >
                <ul class="categorias">
                    <a href="#"><span>Playeras</span></a>
                    <a href="#"><span>Sudaderas</span></a>
                    <a href="#"><span>Tazas</span></a>
                    <a href="#"><span>Cubrebocas</span></a>
                    <a href="#"><span>Gorras</span></a>
                    <a href="#"><span>Mousepad</span></a>
                    <a href="#"><span>Vinil</span></a>
                </ul>
            </nav>
        </div>

        <div class="banner <?php echo $ocultarBanner ? 'ocultar' : '' ;?>">
            <div class="contenedor header-texto">
                <h1>Sublimación y Diseño</h1>
                <p>Soluciónes en Sublimación y Vinil</p>
                <form class="busqueda" action="/buscador" method="POST" id="buscador">
                    <input type="text" name="busqueda" placeholder="Busca cualquier cosa...">
                    <input class="bt-busqueda" type="submit" value="Buscar" id="btn-submit">
                </form>
            </div>
                
        </div>     
    </header>