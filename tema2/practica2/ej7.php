<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ej7</title>
    </head>
    <body>
        7.- Realizar un programa que intercambie el valor de dos variables.
                
        
       <?php

	 $v1 = 'a';
	 $v2 = 'b';
 	 echo '<p>$v1 es: '. $v1 .' y $v2 es: '. $v2 .'</p>';
         
         $v = $v1;  
	 $v1 = $v2;
	 $v2 = $v;
                 
	 echo '<p>Ahora $v1 es: '.$v1.' y $v2 es: '.$v2.'</p>';	
         
       ?>
    </body>
</html>
