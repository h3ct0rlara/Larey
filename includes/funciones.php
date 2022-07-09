<?php 

require 'app.php';


    function incluirTemplate(string $nombre){
    include TEMPLATES_URL . "/${nombre}.php";

    }

    // Obtener Servicios
    function obtenerProductos() {
        try {
    
            require 'database.php';
    
            $sql = "SELECT * FROM productos";
            $consulta = mysqli_query($db, $sql);
            
    
            $productos = [];
            $i = 0;
    
    
            while($row = mysqli_fetch_assoc($consulta)) {
                $productos[$i]['id'] = $row ['id'];
                $productos[$i]['nombre'] = $row ['nombre'];
                $productos[$i]['precio'] = $row ['precio'];
                $productos[$i]['descripcion'] = $row ['descripcion'];
    
                $i++;
    
    
                // echo "<pre>";
                // var_dump($productos);
                // echo "</pre>";
                
                return $productos;
            }
    
    
        } catch (\Throwable $th) {
            //throw $th;
            var_dump($th);
        }
    }
    
    // obtenerProductos();