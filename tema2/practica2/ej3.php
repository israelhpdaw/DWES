<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej1 - Tema 2</title>
    </head>
    <body>
        <h1>Ej21 - Tema2</h1>
        <pre>
        3.- Cree un fichero PHP que permita comprobar las capacidades aritméticas de PHP. 
        Para ello, cree dos variables $operador1 y $operador2. Asígnele los valores 13 y 4, respectivamente. 
        Defina una tercera variable $resultado y escriba un código que permita hacer las siguientes operaciones:
        13 – 4
        13 + 4
        13 * 4
        13 / 4
        13 % 4            
        </pre>
        <?php 
        $n1 = 13; 
        $n2 = 4;    
        
        // $resultado sustituida por variables más descriptiva
        $suma = $n1 + $n2;
        $resta = $n1 - $n2;
        $producto = $n1 * $n2;
        $cociente = $n1 / $n2;
        $resto = $n1 % $n2;        
        
        echo "<p>$n1 + $n2 = " . $suma . "</p>";   
        echo "<p>$n1 - $n2 = " . $resta . "</p>";          
        echo "<p>$n1 * $n2 = " . $producto . "</p>";           
        echo "<p>$n1 / $n2 = " . $cociente . "</p>";     
        echo "<p>$n1 % $n2 = " . $resto . "</p>"; 
        ?>
        
    </body>
</html>
