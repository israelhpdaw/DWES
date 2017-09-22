<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej10, práctica 3, Tema 2</title>
    </head>
    <body>
        <h1>Comprobar expresiones de comparación</h1>
        <?php 

        $a = 8;
        $b = 3;
        $c = 3;


        $d = $a == $b;
        echo "<p>$a == $b: <b>".$d.'</b></p>';
        
        $d = $a != $b;
        echo "<p>$a != $b: <b>".$d.'</b></p>';
        
        $d = $a < $b;
        echo "<p>$a < $b: <b>".$d.'</b></p>';
        
        $d = $a > $b;
        echo "<p>$a > $b: <b>".$d.'</b></p>';
        
        $d = $a >= $c;
        echo "<p>$a >= $c: <b>".$d.'</b></p>';
        
        $d = $a <= $c;
        echo "<p>$a <= $c: <b>".$d.'</b></p>';
        
        echo "<p><b>Conclusión</b>: Cuando es <mark>true</mark> devuelve <b>1</b>, para <mark>false</mark> no imprime nada</p>";

            
        ?>
    </body>
</html>
