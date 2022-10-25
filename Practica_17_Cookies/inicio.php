<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location:index.php');
} else {
    if($_SESSION['usuario'] == "ok"){
        $nombreUsuario = $_SESSION['nombreUsuario'];
    }
}

$usuario = $_SESSION['nombreUsuario'];
$color = "Sin Color";

if($_POST){
    $usuario = $_SESSION['nombreUsuario'];
    $color = $_POST['colors'];
    if(isset($_POST['submit'])){
        setcookie("colores",$color,time() + (86400 * 30), "/");
    }
}
//////////////////////////////////////////////////Visitas Admin
$nombreArchivo = "contador.txt";
# Si no existe, lo creamos
if (!file_exists($nombreArchivo)) {
    touch($nombreArchivo);
}
# Obtenemos su contenido
$contenido = trim(file_get_contents($nombreArchivo));
# Si está vacío, lo igualamos a cero
if ($contenido == "") {
    $visitas = 0;
} else {
    # Si no, las visitas son lo que tenga el archivo
    $visitas = intval($contenido);
}
# Ya sea que las visitas son 0 o las que hayamos leído, las aumentamos
$visitas++;
# Y volvemos a escribir el valor en el archivo
file_put_contents($nombreArchivo, $visitas);

$visitas = file_get_contents("contador.txt");


/////////////////////////////////////////////////////Visitas Pag

$visitas2 = file_get_contents("contadorPage.txt");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css" />
    <title>Layout</title>
</head>

<body>
    <!-- ////////////////////////////////////////////////// cabecera -->
    <div class="header">
        <h1>Logotipo</h1>
        <h3>Bienvenido <?php echo $nombreUsuario; ?></h3>
        <h3>Tu color: <?php echo $color?></h3> 
        <h3>Visitas Admin: <?php printf($visitas); ?></h3>
        <h3>Visitas Page: <?php printf($visitas2); ?></h3>   
    </div>
    <!-- ////////////////////////////////////////////////// nav -->
    <div class="nav">
        <a href="#">Lorem |</a>
        <a href="#">Ipsum |</a>
        <a href="#">Dolor |</a>
        <a href="#">Sit |</a>
        <a href="#">Amet |</a>
        <a href="cerrar.php"><b>Cerrar Sesion</b></a>
    </div>
    <!-- ////////////////////////////////////////////////// noticiasIzq -->
    <div class="row">
        <div class="column1">
            <a href="#"><b>Noticias</b></a>
            <p>dd/mm/aaaa <a href="#">Lorem ipsum dolor sit amet.</a></p>
            <p>dd/mm/aaaa <a href="#">Lorem ipsum dolor sit amet.</a></p>
            <p>dd/mm/aaaa <a href="#">Lorem ipsum dolor sit amet.</a></p>
            <p>dd/mm/aaaa <a href="#">Lorem ipsum dolor sit amet.</a></p>
            <p>dd/mm/aaaa <a href="#">Lorem ipsum dolor sit amet.</a></p>
            <a href="#">
                <h4>Enlaces relacionados</h4>
            </a>
            <a href="#">Consectetur adipisicing elit.</a><br />
            <a href="#">Consectetur adipisicing elit.</a><br />
            <a href="#">Consectetur adipisicing elit.</a>
            <!-- ////////////////////////////////////////////////// noticiasIzqInf -->
            <h4><a href="#">Lorem ipsum</a></h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid
                    minus vitae, quibusdam quasi eligendi incidunt? Velit dolore esse id
                    asperiores sit! Facilis animi recusandae eligendi autem ut, illo
                    itaque nobis?
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid
                    minus vitae, quibusdam quasi eligendi incidunt? Velit dolore esse id
                    asperiores sit! Facilis animi recusandae eligendi autem ut, illo
                    itaque nobis?
                </p>
                <a href="#">Seguir leyendo...</a>
        </div>
        <!-- ////////////////////////////////////////////////// principal -->
        <div class="column2">
            <!--///////////////////////////////////// COLOR-->
        <form action="inicio.php" method="post">
            <h2 class="color">Selecciona tu color</h2>
            <input type="color" name="colors" id=""><br>
            <input type="submit" value="Guardar">
        </form>
            <section>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <img src="../../img/udg.png" alt="" />
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa earum
                    rem, perferendis iure repellat libero rerum nesciunt commodi
                    tempore, odit reprehenderit ipsam incidunt deserunt maxime officiis
                    dolorem in quo? Eius! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Repudiandae quae amet cupiditate nisi facere
                    doloribus incidunt, vero a corporis eveniet veniam sunt totam
                    molestias magnam ducimus perspiciatis! Magni, distinctio expedita!
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa earum
                    rem, perferendis iure repellat libero rerum nesciunt commodi
                    tempore, odit reprehenderit ipsam incidunt deserunt maxime officiis
                    dolorem in quo? Eius! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Repudiandae quae amet cupiditate nisi facere
                    doloribus incidunt, vero a corporis eveniet veniam sunt totam
                    molestias magnam ducimus perspiciatis! Magni, distinctio expedita!
                </p>
                <a href="#">Seguir leyendo...</a>
            </section>
            <section>
                <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <img src="../../img/udg.png" alt="" />
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa earum
                    rem, perferendis iure repellat libero rerum nesciunt commodi
                    tempore, odit reprehenderit ipsam incidunt deserunt maxime officiis
                    dolorem in quo? Eius! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Repudiandae quae amet cupiditate nisi facere
                    doloribus incidunt, vero a corporis eveniet veniam sunt totam
                    molestias magnam ducimus perspiciatis! Magni, distinctio expedita!
                </p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa earum
                    rem, perferendis iure repellat libero rerum nesciunt commodi
                    tempore, odit reprehenderit ipsam incidunt deserunt maxime officiis
                    dolorem in quo? Eius! Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Repudiandae quae amet cupiditate nisi facere
                    doloribus incidunt, vero a corporis eveniet veniam sunt totam
                    molestias magnam ducimus perspiciatis! Magni, distinctio expedita!
                </p>
                <a href="#">Seguir leyendo...</a>
            </section>
        </div>
        <!-- ////////////////////////////////////////////////// noticiasDer -->
        <div class="column3">
            <section>
                <h3>Lorem ipsum</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid
                    minus vitae, quibusdam quasi eligendi incidunt? Velit dolore esse id
                    asperiores sit! Facilis animi recusandae eligendi autem ut, illo
                    itaque nobis?
                </p>
                <a href="#">Seguir leyendo...</a>
            </section>
            <section>
                <h3>Lorem ipsum</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid
                    minus vitae, quibusdam quasi eligendi incidunt? Velit dolore esse id
                    asperiores sit! Facilis animi recusandae eligendi autem ut, illo
                    itaque nobis?
                </p>
                <a href="#">Seguir leyendo...</a>
            </section>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////// pie -->
    <div class="footer">
        <a href="#">One</a> |
        <a href="#">Two</a> |
        <a href="#">Three</a> |
        <a href="#">Four</a> |
    </div>
</body>

</html>