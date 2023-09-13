<?php

$host="localhost";
$db="mini_siiau";
$usuario="";
$contrasenia="";

try {
    $conexion=new PDO ("mysql:host=$host;dbname=$db",$usuario,$contrasenia);
    //echo "si se armo";
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>
