<?php 
    require 'imagenes.php';
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
                        foreach ($arrayImagenes as $descripcion => $imagen) {
                            echo "<td><figure><img src=".$imagen." alt=".$descripcion."/><figcaption>".$descripcion."</figcaption></figure></td>";
                        }
                    ?>
                </tr>
            </table>
        </main>
    </body>
</html>