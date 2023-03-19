<?php
if(!isset($_GET["id"])){
    exit();
}

$id = $_GET["id"];
include_once "../conexion_botica.php";
// echo "SELECT codigoLibro, nombreLibro, tipoLibro, empresa FROM co.libros WHERE libros = $id";
$sentencia = $conexion_botica->prepare("SELECT * FROM Dim_Tiempo
WHERE Tiempo_SKey = ? ");
$sentencia->execute([$id]);
$fecha = $sentencia->fetchObject();

if(!$fecha){
    // ! NO EXISTE
    echo("¡no existe una fecha con ese ID");
    exit();
}
// ?SI fecha EXISTE, SE EJECUTA ESTE HMTL
?>

<?php //include_once "listar_clientes.php" ?>
<!Doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="LUIS CABRERA">
    <title>BOTICA FISI-UNAP</title>
    <!-- Cargar el CSS de Boostrap-->
    <link href="../ingcss/bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
    <link href="../ingcss/style.css" rel="stylesheet">
    <link href="../micss/listar.css" rel="stylesheet">
</head>

<body>
    <!-- Definición del menú -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <h1><a href="#"><img src="../images/fisiunap1.jpg" alt=""></a></h1>
        <a class="navbar-brand" target="_blank" href="#">BOTICA-FISI</a>
        <div class="collapse navbar-collapse" id="miNavbar">
        </div>
    </nav>
    <!-- Termina la definición del menú -->
    <main role="main" class="container">
</body>
<div class="row">
    <div class="col-12">
        <h1> Editar</h1>
            <form action="../guardar/guardaredit_tiempo.php" method="POST">
       
                <input type="text" name="idtiempo" id="idtiempo" value=" <?php echo $fecha->Tiempo_SKey;?>">
                <div class="form-group">
                    <label for="nombre">Año</label>
                    <input value="<?php echo $fecha->Tiempo_Año ?>" required name="anio" type="text" id="anio"
                     placeholder="Año" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nombreempresa">Mes</label>
                    <input value ="<?php echo $fecha->Tiempo_Mes; ?>" required name="mes" type="text" id="mes"
                     placeholder="Mes" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="../listar/listar_tiempo.php" class="btn btn-warning"> Ver Todos</a>
            </form>
    </div>
</div>