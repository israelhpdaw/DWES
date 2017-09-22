<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej12, práctica 3, Tema 2</title>
    </head>
    <body>
        <center><h1><mark>phpinfo()</mark></h1></center>
        <?php
        
            echo phpinfo(); 
            
            //info centrada por defecto
            // si no: entre etiquetas deprecated de html 
            // echo '<center>' . phpinfo() . '</center>'; 
            // o con CSS margin-left auto y margin-right:auto
            // o text-align: center;
            
        ?>
    </body>
</html>


