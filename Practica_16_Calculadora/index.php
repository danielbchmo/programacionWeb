<?php
/*
Realizar una calculadora mediante el uso de formularios, en la cual primeramente 
me deberá preguntar cuántos números voy a ingresar (de 2 a 10).
Una vez que seleccione los números a ingresar, me deberá aparecer un formulario,
con esa cantidad de INPUT TEXT (cuadros de texto).

Una vez que capture los números correspondientes, en la parte inferior aparecerá un RADIOBUTTON 
con 3 operaciones básicas. (Suma, Resta, Mult).
Selecciono la opción deseada, y al presionar el botón de aceptar (SUBMIT), 
me mandará en esa misma página PHP (ISSET y PHPSELF) el resultado de la operación de la siguiente forma:

EJ:
Si escribí 5 números. 5, 8, 3, 4, 5 y seleccioné la suma. Me deberá mostrar lo siguiente.
La suma de 5+8+3+4+5 es igual a 25

Auxiliarse de estructuras de control Switch, IF, FOR, Arreglos, ISSET, PHPSELF.

*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    
    <form action="inicio.php" method="post">
        <h3>Cuando valores vas a ingresar</h3>
        <input type="text" name="casillas" id="" placeholder="No más de 10 numeros">
        <br>
        <input type="submit" value="Aceptar" name="aceptar"><br><br>
    </form>
</body>
</html>