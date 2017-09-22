<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>ej8</title>
    </head>
    <body>
     8.- Realizar el ordinograma de un programa que desglose una cantidad de euros <br>
     en billetes de 10 y 5 y monedas de 1 euro.
                
        
       <?php
       
       $cant_ini = 105.33; 
       //separar la parte entera de la decimal
       $cant = explode(".", $cant_ini); 
       //$cant[0] parte entera y $cant[1] decimal
       
       //floor() redondea hacia abajo para coger sólo la parte entera
       $bill_10 = floor($cant[0]/10); 
       $rest_10 = $cant[0]%10;
       
       $bill_5 = floor($rest_10/5);
       $rest_5 = $rest_10%5;
       
       $eur_1 = floor($rest_5/1);
   
       
       echo '<p>';
       echo "<b>$cant_ini</b> euros son: <br>" . $bill_10 . " billetes de 10, " . $bill_5 . " billetes de 5, " . $eur_1 . " Monedas de 1 euro y ". $cant[1] . " céntimos.";        
       echo '</p>';
       
	 		 
       ?>
    </body>
</html>
