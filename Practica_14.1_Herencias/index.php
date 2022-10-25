<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herencia</title>
</head>
<body>
    <h1>HERENCIA</h1>
<?php
/*
    Se va a repartir una herencia entre los familiares de la siguiente manera.
    
    -Si el cónyuge no tiene hijos, se quedará con la totalidad de la herencia menos el 5% de 
    comisión al notario
    -Si el cónyuge tiene hijos, éste tendrá la mitad de la herencia y los hijos se dividirán el 
    resto en partes iguales, otorgando un 3% de comisión de la herencia total al notario.
    
    Mostrar la herencia total y cuánto se debe repartir al cónyuge, hijos (si los hay) y al notario.
*/

$cant=$_POST['cant'];
$hijos=$_POST['si'];
$cantHijos=$_POST['cantHijos'];

switch($hijos){
    case 'si':
    case 'Si':
    case 'SI':
        if($hijos=='si'){
            $result1=$_POST['cant'];
            $result1*=.03;
            echo '<h2>Cantidad para notario es</h2> $'.$result1.'<br>';
            $result1=$cant/2;
            echo '<h2>Cantidad para padre es</h2> $'.$result1.'<br>';
            $result=$cant/2;
            $result/=$cantHijos;
            echo '<h2>Cantidad para cada hijo es</h2> $'.$result;
        }
    break;
    case 'no':
    case 'No':
    case 'NO':
        if(isset($cant)){
            $result=$cant*.05;
            $result+=$cant;
            echo '<h2>Cantidad para Conyugue es</h2> $'.$result.'<br>';
        }
    break;
}
?>
    <br><br>
    <a href="inicio.html">Regresar a Formulario</a>
</body>
</html>