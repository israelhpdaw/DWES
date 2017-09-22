<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej7, práctica 3, Tema 2</title>
    </head>
    <body>
        <h1>Validación de fechas:</h1>
        <?php
         
         $month = 12;
         $day = 31;
         $year = 2025;
         
         //bool checkdate ( int $month , int $day , int $year )
         if(checkdate($month, $day, $year)){
            echo "$day/$month/$year es una fecha válida";
         } else {
            echo "$day/$month/$year <mark>No</mark> es un fecha válida";
         }
     
                
        ?>
    </body>
</html>

