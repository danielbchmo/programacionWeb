<?php
    if($_POST){
        $numbers = array();
        $num1 = $_POST['num1'];
        array_push($numbers,$num1);
        $num2 = $_POST['num2'];
        array_push($numbers,$num2);
        $num3 = $_POST['num3'];
        array_push($numbers,$num3);
        $num4 = $_POST['num4'];
        array_push($numbers,$num4);
        $num5 = $_POST['num5'];
        array_push($numbers,$num5);      
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
        <!-- <input type="text" name="numbers"> -->
        Num 1 <input type="text" name="num1" id=""><br>
        Num 2 <input type="text" name="num2" id=""><br>
        Num 3 <input type="text" name="num3" id=""><br>
        Num 4 <input type="text" name="num4" id=""><br>
        Num 5 <input type="text" name="num5" id=""><br><br>
        <button type="submit" name="add">Agregar</button>
    </form>

    <?php 
    if($_POST){
        echo '<h3>Numeros ingresados: </h3>';
        foreach($numbers as $value){
            echo $value.', ';
        }?>
        <h3><?php echo 'Numero mayor es: '; ?></h3><?php echo max($numbers);?>
        <h3><?php echo 'Numero menor es: '; ?></h3><?php echo min($numbers);?>
    <?php } ?>
</body>
</html>
