<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ej1 - Tema 2</title>
    </head>
    <body>
        <h1>Ej21 - Tema2</h1>
        <pre>
        2.- Cree un fichero PHP que muestre por pantalla el mensaje “Segundo ejercicio: 
        visualización del contenido de variables”. A continuación, defina dos variables 
        $nombre y $edad y asígnele un valor correcto. Después, cree una sentencia que 
        muestre un mensaje que contenga dichas variables similar a “Mi nombre es 
        valor_de_la_ variable_$nombre y mi edad es valor_de_la_variable_$edad”. 
        inserte un comentario encima de cada variable explicando el significado 
        del valor que almacenará cada variable.
        correctamente y que la sentencia que ha escrito termina en “;”.            
        </pre>
        <?php 
            echo "Segundo ej: visualización del contenido de variables";
            // nombre del sujeto
            $nombre = 'Juanito';
            // Edad del sujeto
            $edad = '97';
            echo "<br>Mi nombre es $nombre y mi edad es $edad";         
        ?>
        
    </body>
</html>
