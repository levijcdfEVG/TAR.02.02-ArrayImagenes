<?php 
    require 'imagenes.php'; //Se requiere el archivo imagenes.php
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Array de Imagens</title>
        <meta charset="utf-8" />
        <link href="css/main.css" rel="stylesheet" />
    </head>
    <body>
        <main>
            <table>
                <tr>
                    <?php 
                        //var_dump($arrayImagenes);
                        // Se utiliza un foreach para poder recorrer el array asociativo de las urls y los nombres de la imagen
                        foreach ($arrayImagenes as $descripcion => $imagen) { // Se ha separado cada elemento del array en dos variables distintas: indice (descripcion) y contenido (imagen)
                            echo "<td><figure><img src='img/" . $imagen . "' alt='" . $descripcion . "'/><figcaption>" . $descripcion . "</figcaption></figure></td>"; // Se muestra el nombre y el contenido dentro de una tabla
                        }
                    ?>
                </tr>
            </table>
        </main>
    </body>
</html>
