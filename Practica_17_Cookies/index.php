<?php
session_start();
/////////////////////////////////////////////////////////////////////////INICIO DE SESION
if ($_POST) {
    if(($_POST['usuario'] == "oscar" && $_POST['contrasenia'] == "1234")){
        $_SESSION['usuario'] = "ok";
        $_SESSION['nombreUsuario'] = "Oscar";
        header('Location:inicio.php');
    } else {
        echo "<script>alert('Usuario o contraseña incorrecto');</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <br>
                <div class="card">

                    <div class="card-header">
                        Iniciar sesión
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="post">
                            Usuario: <input class="form-control" type="text" name="usuario" placeholder="Usuario = oscar">
                            <br>
                            Contraseña: <input class="form-control" type="password" name="contrasenia" placeholder="Contraseña = 1234">
                            <br>
                            <button class="btn btn-success" type="submit">Entrar al Portafolio</button>
                            <br><br>
                            <a href="inicio2.php">Entrar como invitado</a>
                        </form>
                    </div>
                    <div class="card-footer text-muted"> 

                    </div>
                </div>


            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>

</body>

</html>