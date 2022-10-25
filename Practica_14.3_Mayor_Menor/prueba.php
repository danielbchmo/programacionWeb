<?php

session_start();

if($_POST){   
    $numbers = $_POST['numbers'];
    $array = array();
    array_push($array,$numbers);
    print_r($array);
    // foreach($array){

    // }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor y Menor</title>
</head>
<body>
    <h1>Mayor y Menor</h1>

    <form action="" method="post">
        <h2>Coloca tus numeros</h2>
        <input type="text" name="numbers">
        <button type="submit" name="agregar">Agregar</button>
    </form>
</body>
</html>