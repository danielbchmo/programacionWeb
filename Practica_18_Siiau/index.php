<?php
session_start();
/////////////////////////////////////////////////////////////////////////INICIO DE SESION
if($_POST){
    include("administrador/config/database.php");
    $usuario = ($_POST['usuario']);
    $contrasenia = ($_POST['contrasenia']);

    //contejar los datos una vez conectado a la base de datos
    $sentencia = $conexion->prepare("SELECT usuario, contrasenia FROM `alumnos` WHERE usuario=:usuario AND contrasenia=:contrasenia");
    //PARAM_STR: recibir datos en string
    $sentencia->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $sentencia->bindParam("contrasenia", $contrasenia, PDO::PARAM_STR);
    $sentencia->execute();

    //Contabiliza numero de registros, devuelve la información encontrada.
    $numeroRegistros = $sentencia->rowCount();

    if($numeroRegistros >= 1){
        $_SESSION['usuario'] = "ok";
        $_SESSION['nombreUsuario'] = $usuario;
        header('Location:inicio.php');
    } else {
        $mensaje = "<script>alert('Usuario o contraseña incorrectos');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>SIIAU 2.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    h4 {
        text-align: center;
    }
</style>

<body><br>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <h1 style="text-align: center;">SIIAU 2.0</h1>
                <br><br><br>
                <div class="card">
                    <div class="card-header">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">

                        <?php if (isset($mensaje)) { ?>
                            <!-- <div class="alert alert-danger" role="alert"> -->
                                <?php echo $mensaje; ?>
                            <!-- </div> -->
                        <?php } ?>

                        <form method="POST">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control" name="usuario" placeholder="Escribe tu usuario">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Constraseña:</label>
                                <input type="password" class="form-control" name="contrasenia" placeholder="Escribe tu contraseña">
                            </div>
                            <br>
                            <div class="d-grid gap-2 col-3 mx-auto">
                                <button type="submit" class="btn btn-dark">Entrar</button>
                                <a href="registro.php">Registrarse</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>



</body>

</html>