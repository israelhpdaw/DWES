<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej6, práctica 3, Tema 2</title>
    </head>
    <body>
        <h1>Restar días a una fecha:</h1>
        <?php
            $dias = -3; //negativo para restar
            $fecha = date('d-M-Y H:i:s');
            
            $nuevafecha = strtotime ( "$dias day" , strtotime ( $fecha ) ) ; //num segundos a sumar/restar (+/-) del num de seg de fecha actual

            $nuevafecha = date( 'd-M-Y H:i:s', $nuevafecha ); //volver a formatear el num de segundos para ver a que fecha corresponde
           
            echo "<p>Fecha actual $fecha con $dias días:</p>";
            echo "<p>" . $nuevafecha . "</p>";          
                
        ?>
    </body>
</html>

