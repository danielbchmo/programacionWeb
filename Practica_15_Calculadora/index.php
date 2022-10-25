<?php
 
if($_POST){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    if(isset($_POST['suma'])){
        $resultSuma = $num1 + $num2;
    }
    if(isset($_POST['resta'])){
        $resultResta = $num1 - $num2;
    }
    if(isset($_POST['multi'])){
        $resultMulti = $num1 * $num2;
    }
    if(isset($_POST['div'])){
        if($num2 == 0){
            $error =  'Error, division con 0';
        }else{
            $resultDiv = $num1 / $num2;
        }
    }
}


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
    <h1>CALCULADORA</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="num1" id="" placeholder="Ingresa un valor">
        <input type="text" name="num2" id="" placeholder="Ingresa un valor">
    
        <br><br>
        <input type="checkbox" name="suma" id="">Suma
        <input type="checkbox" name="resta" id="">Resta
        <input type="checkbox" name="multi" id="">Multiplicacion
        <input type="checkbox" name="div" id="">Division
        <br><br>

        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <?php
        if(isset($resultSuma)){
            echo 'SUMA: '.$resultSuma;
        }elseif(isset($resultResta)){
            echo 'RESTA: '.$resultResta;
        }elseif(isset($resultMulti)){
            echo 'RESTA: '.$resultMulti;
        }elseif(isset($resultDiv)){
            echo 'RESTA: '.$resultDiv;
        }
    ?>
</body>
</html>