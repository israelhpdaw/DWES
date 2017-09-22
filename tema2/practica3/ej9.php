<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej9, práctica 3, Tema 2</title>
    </head>
    <body>
        <h1>Sumar horas a una fecha</h1>
        <?php 

            $fecha = "06/23/1979";
            $horas = 45;
            
            $seg_horas = $horas * 3600;
            $seg_fecha = strtotime($fecha);
            $nuevo_timestamp = $seg_horas + $seg_fecha;
                        
            echo '<p>' . date('d/M/Y', $seg_fecha). " + $horas horas resulta: " . date('d/M/Y', $nuevo_timestamp) . '</p>';
            
        ?>
    </body>
</html>

