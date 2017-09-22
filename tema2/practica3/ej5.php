<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej5, práctica 3, Tema 2</title>
    </head>
    <body>
        <h1>Fecha actual como día-mes-año</h1>
        <?php
        
            //Alt1
            $fecha = explode(' ',date('d M Y'));
            $fecha_format = implode('-', $fecha);
            echo "<p>La fecha actual es: " . $fecha_format. '</p>';           
            
            //Alt2
            $fecha_format2 = str_replace( ' ', '-', date('d M Y') );
            echo "<p>La fecha actual es: " . $fecha_format2. '</p>';
            
            //Alt3
            $fecha_format3 = date('d-M-Y');
            echo "<p>La fecha actual es: $fecha_format3</p>";
            
                    
        ?>
    </body>
</html>
