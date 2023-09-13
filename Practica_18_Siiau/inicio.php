<?php
//ACCESO DE USUARIO
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location:index.php");
} else {
    if ($_SESSION['usuario'] == "ok") {
        $nombreUsuario = $_SESSION["nombreUsuario"];
    }
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="inicio.php">SIIAU</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="inicio.php">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cerrar.php">Cerrar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="col-md-12">
        <div class="p-5 bg-light">
            <div class="container">
                <h1 class="display-3">Hola <?php echo $nombreUsuario; ?></h1>
                <a href="registro_materias.php">Registrar Materias</a>
                <div class="table-responsive">
                    <table class="table table-striped
                    table-hover	
                    table-light
                    align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>NRC</th>
                                <th>CLAVE</th>
                                <th>MATERIA</th>
                                <th>HORARIO</th>
                                <th>DIA</th>
                                <th>PROFESOR</th>
                            </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php //foreach(){?>
                                <tr class="table-light" >
                                    <td scope="row"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <?php //} ?>
                            </tbody>
                            <tfoot>
                                
                            </tfoot>
                    </table>
                </div>
                
            </div>
        </div>
    </div>


</body>

</html>