<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej3, práctica 3, Tema 2</title>
    </head>
    <body>
        <h1>IVA</h1>
        <?php
            $precio = 62.5;
            echo "<p>Si el PVP fuera " . round($precio, 2) . "</p>";
            echo "<ul><li>El precio sin IVA es " . round($precio/1.16, 2) . "</li>";
            echo "<li>El precio con IVA es " . round($precio , 2) . "</li>";
            echo "<li>El precio con 10% de descuento es " . round($precio*0.9, 2) . "</li>";
        ?>
    </body>
</html>
