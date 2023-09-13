<?php
// session_start();

    include("administrador/config/database.php");

    $codigo = (isset($_POST['codigo'])) ? $_POST['codigo'] : "";
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : "";
    $apeP = (isset($_POST['apeP'])) ? $_POST['apeP'] : "";
    $apeM = (isset($_POST['apeM'])) ? $_POST['apeM'] : "";
    $edad = (isset($_POST['edad'])) ? $_POST['edad'] : "";
    $carrera = (isset($_POST['carrera'])) ? $_POST['carrera'] : "";
    // $mat1 = $_POST['mat1'];
    // $mat2 = $_POST['mat2'];
    // $mat3 = $_POST['mat3'];
    // $mat4 = $_POST['mat4'];
    // $mat5 = $_POST['mat5'];
    $color = (isset($_POST['color'])) ? $_POST['color'] : "";
    $usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "";
    $contrasenia = (isset($_POST['contrasenia'])) ? $_POST['contrasenia'] : "";
if($_POST){
    $agregar = $conexion->prepare("INSERT INTO alumnos(codigo, nombre, apeP, apeM, edad, carrera, color, usuario, contrasenia) 
    VALUES (:codigo,:nombre,:apeP,:apeM,:edad,:carrera,:color,:usuario,:contrasenia);");
    $agregar->bindParam(':codigo',$codigo);
    $agregar->bindParam(':nombre',$nombre);
    $agregar->bindParam(':apeP',$apeP);
    $agregar->bindParam(':apeM',$apeM);
    $agregar->bindParam(':edad',$edad);
    $agregar->bindParam(':carrera',$carrera);
    $agregar->bindParam(':color',$color);
    $agregar->bindParam(':usuario',$usuario);
    $agregar->bindParam(':contrasenia',$contrasenia);
    $agregar->execute();
    echo "<script>alert('Registro realizado satisfactoriamente');   </script>";
    // header('Location:registro.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>SIIAU 2.0</title>
</head>

<body>
    <!-- //////////////////////////////////////////////////////////// CABECERA -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="registro.php">SIIAU - Registro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Iniciar Sesion</a>
                </li>
            </ul>
        </div>
    </nav><br>
    <!-- //////////////////////////////////////////////////////////////// CUERPO -->
    <div class="container">
        <div class="row">

            <div class="col-md-4">
            </div>
            <!-- //////////////////////////////////////////////////////FORMULARIO -->
            <div class="col-md-4">
                <form action="registro.php" method="post">
                    <h2>Registro de Datos</h2>
                    <div class="mb-3">
                        <label for="" class="form-label">Codigo</label>
                        <input type="text" class="form-control" name="codigo" id="" aria-describedby="helpId" value="<?php echo $codigo; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId" value="<?php echo $nombre; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Apellido Paterno</label>
                        <input type="text" class="form-control" name="apeP" id="" aria-describedby="helpId" value="<?php echo $apeP; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Apellido Materno</label>
                        <input type="text" class="form-control" name="apeM" id="" aria-describedby="helpId" value="<?php echo $apeM; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Edad</label>
                        <input type="text" class="form-control" name="edad" id="" aria-describedby="helpId" value="<?php echo $edad; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Carrera</label>
                        <input type="text" class="form-control" name="carrera" id="" aria-describedby="helpId" value="<?php echo $carrera; ?>" required>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="" class="form-label">Materias</label>
                        <input type="text" class="form-control" name="mat1" id="" aria-describedby="helpId" placeholder="Materia 1">
                        <input type="text" class="form-control" name="mat2" id="" aria-describedby="helpId" placeholder="Materia 2">
                        <input type="text" class="form-control" name="mat3" id="" aria-describedby="helpId" placeholder="Materia 3">
                        <input type="text" class="form-control" name="mat4" id="" aria-describedby="helpId" placeholder="Materia 4">
                        <input type="text" class="form-control" name="mat5" id="" aria-describedby="helpId" placeholder="Materia 5">
                    </div> -->
                    <div class="mb-3">
                        <label for="" class="form-label">Color de Fondo</label><br>
                        <input type="color" name="color">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="usuario" id="" aria-describedby="helpId" value="<?php echo $usuario; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="contrasenia" id="" aria-describedby="helpId" placeholder="" required>
                    </div>
                    <button type="submit" class="btn btn-outline-success">Enviar</button>
                </form>
            </div>
            
            <div class="col-md-4">
            </div>
        </div>
    </div>

</body>

</html>