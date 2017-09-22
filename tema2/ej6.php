<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ej6</title>
    </head>
    <body>
6.- Realiza un programa que calcule la media de tres números.
                
        
       <?php
       
        function calc_media(array $list){
            
            $suma = 0;
            for ($i=0 ; $i < count($list) ; $i++){
                $suma += $list[$i];
            }
            
            return $suma / count($list); //retorna la media
        }
        
        $lista = array (1,2,3,6);
        $n = implode("+", $lista);
        echo "<p>La media de <b>" . $n . '</b> es<b> ' . calc_media($lista) . '</b></p>';
       ?>
    </body>
</html>
