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
    <a href="index.php">Regresar</a>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <?php
        if(isset($_POST['aceptar'])){
            $casillas = $_POST['casillas'];
            if($casillas > 10){
                $message = '<script>alert("Error: No más de 10 numeros");</script>';
                echo $message;
            } elseif($casillas <= 1){
                $message = '<script>alert("Error: No se acepta solo un numero");</script>';
                echo $message;
            } else{      
                echo "<h3>Ingresaste ".$casillas." valores</h3>";
                for($i=1;$i<=$casillas;$i++){
                ?>
                    Ingresa el valor <?php echo $i;?>:
                    <input type="text" name="valor[]"><br>
            <?php
               }}
            ?>
        <br>
        <input type="checkbox" name="suma" id="">Suma
        <input type="checkbox" name="resta" id="">Resta
        <input type="checkbox" name="multi" id="">Multiplicacion
        <br><br>
        <input type="submit" value="Enviar" name="valores">
        <?php
        }
        ?>
    </form>

    <?php
    if(isset($_POST['valores'])){
    $array = $_POST['valor'];
    if(isset($array)){
        echo "<h3>Numeros ingresados: </h3>";
        foreach($array as $a){
            echo $a.", ";
        }
        echo "<br><br>";
        //////////////////////////////////////SUMA
        if(isset($_POST['suma'])){
            $resultSuma = array_sum($array);
            echo 'Resultado de suma: '.$resultSuma."<br>";
        }
        
        //////////////////////////////////////RESTA
        if(isset($_POST['resta'])){
            $resultResta = $array[0];
            for($i=1;$i<sizeof($array);$i++){
                $resultResta -= $array[$i];
            }echo 'Resultado de la resta: '.$resultResta."<br>";
        }
        
        //////////////////////////////////////PRODUCTO
        if(isset($_POST['multi'])){
            $resultMulti = $array[0];
            for($i=1;$i<count($array);$i++){
                $resultMulti *= $array[$i];
            }echo 'Resultado del producto: '.$resultMulti;
        }
    }}
    ?>

</body>
</html>

