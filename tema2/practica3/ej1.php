<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej1, práctica 3, Tema 2</title>
    </head>
    <body>
        <h1>Euros / pesetas</h1>
        <?php
            $cant = 123.5;

            $pesetas = round($cant*166.386, 2);
            $euros = round($cant/166.386, 2);
            echo "<p>$cant pesetas son: " . round($euros, 2) . " euros</p>";
            echo "<p>$cant euros son: ". round($pesetas, 2) . " pesetas</p>";          
        ?>
    </body>
</html>
