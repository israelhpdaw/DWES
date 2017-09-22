<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ej5</title>
    </head>
    <body>
5.- Cree un fichero PHP en el que se asignen los siguientes valores a una variable $temporal: 
“Juan”; 3,14; false; 3; null. Muestre por pantalla el tipo que se le asigna a la variable utilizando la función gettype().
                
        
       <?php
        $tmp = array ("Juan",3.14,false,3,null);
        $cad = array ("Juan","3.14","false","3","null"); //para mostrar valores literales
        for ($i=0 ; $i < count($tmp) ; $i++ ){
           echo "<p> <b>$cad[$i]</b> es de tipo:<mark> " . gettype($tmp[$i]) . '</mark></p>';
           //echo "<p> <b>" . (string)$tmp[$i] . "</b> es de tipo:<mark> " . gettype($tmp[$i]) . '</mark></p>'; //false y null no los conv a litera                  
        }
       
       ?>
    </body>
</html>

