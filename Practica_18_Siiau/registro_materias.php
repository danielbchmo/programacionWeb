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

if($_POST){
    $mat1 = $_POST['mat1'];
    $mat2 = $_POST['mat2'];
    $mat3 = $_POST['mat3'];
    $mat4 = $_POST['mat4'];
    $mat5 = $_POST['mat5'];
    if($mat1){

    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Registro Materias</title>
</head>

<body>
    <!-- //////////////////////////////////////////////////////////// CABECERA -->
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
                <h1 class="display-3">Registro de Materias</h1>
                <div class="table-responsive">

                    <form action="registro_materias.php" method="post">
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
                                    <th>ACCION</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">

                                <tr class="table-light">
                                    <td scope="row">1234</td>
                                    <td>1000</td>
                                    <td>Programacion Web</td>
                                    <td>M - J</td>
                                    <td>16:00 - 18:00</td>
                                    <td>Francisco Roblez Cruz</td>
                                    <td>
                                        <input type="submit" value="Agendar" name="mat1">
                                    </td>
                                </tr>

                                <tr class="table-light">
                                    <td scope="row">1234</td>
                                    <td>1002</td>
                                    <td>Programacion Web</td>
                                    <td>M - J</td>
                                    <td>18:00 - 20:00</td>
                                    <td>Mario Alberto De la Cruz</td>
                                    <td>
                                        <input type="submit" value="Agendar" name="mat2">
                                    </td>
                                </tr>

                                <tr class="table-light">
                                    <td scope="row">1234</td>
                                    <td>1003</td>
                                    <td>Programacion Orientada a Objetos</td>
                                    <td>L - I</td>
                                    <td>16:00 - 18:00</td>
                                    <td>Daniel Gomez Gomez</td>
                                    <td>
                                        <input type="submit" value="Agendar" name="mat3">
                                    </td>
                                </tr>

                                <tr class="table-light">
                                    <td scope="row">1234</td>
                                    <td>1004</td>
                                    <td>Excel Avanzado</td>
                                    <td>L - I</td>
                                    <td>18:00 - 20:00</td>
                                    <td>Francisco Roblez Cruz</td>
                                    <td>
                                        <input type="submit" value="Agendar" name="mat4">
                                    </td>
                                </tr>

                                <tr class="table-light">
                                    <td scope="row">1234</td>
                                    <td>1005</td>
                                    <td>LoL</td>
                                    <td>V</td>
                                    <td>16:00 - 18:00</td>
                                    <td>Francisco Roblez Cruz</td>
                                    <td>
                                        <input type="submit" value="Agendar" name="mat5">
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </form>

                </div>

            </div>
        </div>
    </div>
</body>

</html>