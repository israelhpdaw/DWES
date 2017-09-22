<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej8, práctica 3, Tema 2</title>
    </head>
    <body>
        <h1>Dias entre fechas</h1>
        <?php 
        
        //http://php.net/manual/es/datetime.formats.date.php
        
        $fecha1 = "08/31/2015";
        $fecha2 = "08/21/2015";
        
        $timestamp_1 = strtotime($fecha1);
        $timestamp_2 = strtotime($fecha2);
        $seg = 0;
        
        //Se debería validar con checkdate() cada fecha capturada antes de procesar
       
        //alt1: Validar fecha mayor para restar a la menor 
        if ($timestamp_1 >= $timestamp_2){ 
            $seg = $timestamp_1-$timestamp_2;
        }else{
            $seg = $timestamp_2-$timestamp_1;
        }
        $dias = round($seg/86400, 2); //24*60*60=86400 seg en un día  
                
        //alt2: valor absoluto del resultado abs($seg);
        // $seg = $timestamp_1-$timestamp_2;
        // $dias = round(abs($seg)/86400, 2);       
    
        echo "Han pasado $dias días entre el " . date('d/M/Y', strtotime($fecha1)) . " y " . date('d/M/Y', strtotime($fecha2));
                
        ?>
    </body>
</html>