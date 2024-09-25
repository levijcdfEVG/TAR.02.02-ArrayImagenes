
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
                        echo "<td><img src=".$arrayImagenes['alentejo']."></td>";
                        echo "<td><img src=".$arrayImagenes['montania']."></td>";
                        echo "<td><img src=".$arrayImagenes['playa']."></td>";
                    ?>
                </tr>
            </table>
        </main>
    </body>
</html>