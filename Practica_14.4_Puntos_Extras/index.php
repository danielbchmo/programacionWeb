<?php 
 //phpinfo();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Puntos Extras</title>
</head>
<body>
    <h1>Lineas y Columnas</h1>
    <form action="" method="post">
        <h3>Ingresa el numeros de Columnas</h3>
        <input type="text" name="row" id="" placeholder="<?php echo $_POST['row']?>">
        <h3>Ingresa el numero de Filas</h3>
        <input type="text" name="col" id="" placeholder="<?php echo $_POST['col']?>">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <?php
    if($_POST){
        $col = $_POST['col'];
        $row = $_POST['row'];
        for($i=0;$i<=$col-1;$i++){
                echo '*';
            }
            echo '<br>';
    
            //CENTRO 
            for($i=0;$i<=$row-3;$i++){
                echo '*';
                for($j=1;$j<=$col-2;$j++){
                    //echo str_repeat('&nbsp;',$row-5);
                    echo '&nbsp ';
                }
                echo '*<br>';   
                // echo '*';
            }
            
            //LINEA INFERIOR
             for($i=0;$i<=$col-1;$i++){
                 echo '*';
            }
    }

    ?>
</body>
</html>
