<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej4, práctica 3, Tema 2</title>
    </head>
    <body>
        <h1>Área lateral y volumen del cilindro</h1>
        <?php
            $radio = 3.5;
            $h = 20;
            $area_lateral = round(2 * M_PI * $radio * $h, 2); //longitud circunferencia por altura
            $vol = round(M_PI * pow($radio,2) * $h, 2); // área de la base por altura
            echo "<ul>";
            echo "<li>El área lateral de un cilindo de radio:$radio y altura:$h es: ".$area_lateral."</li>";
            echo "<li>El volumen sería " . $vol . "</li>";
            echo "</ul>";
        ?>
    </body>
</html>
