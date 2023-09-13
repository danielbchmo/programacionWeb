<?php

$host="localhost";
$db="id19465532_mini_siiau";
$usuario="id19465532_oscar";
$contrasenia="Musica_mosso1976";

try {
    $conexion=new PDO ("mysql:host=$host;dbname=$db",$usuario,$contrasenia);
    //echo "si se armo";
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>