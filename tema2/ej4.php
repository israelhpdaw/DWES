<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ej4</title>
    </head>
    <body>
       <?php
        
            $nombre = "juan";
            echo "<p>" . var_dump($nombre) . "</p>";
            echo "<p>" . var_dump($nombre, $_ = null) . "</p>";
            
            $nombre = null;
            echo "<p>" . var_dump($nombre) . "</p>";          
       
       ?>
    </body>
</html>

