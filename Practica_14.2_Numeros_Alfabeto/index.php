<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros y Alfabeto</title>
</head>
<body>
    <?php
    /* 
    Realiza un programa que con base en un ciclo while,  
    muestre los números del 1 al 10 y con otro ciclo, el alfabeto completo.
    */
    $num=1;
    echo '<h1>NUMEROS</h1>';
    while($num<=10){
        echo $num.', ';
        $num++;
    }

    $letter=65;
    echo '<h1>ALFABETO</h1>';
    while($letter<=90){
        echo chr($letter);
        $letter++;
    }
    ?>
</body>
</html>
