<?php 
include_once "conexion_botica.php";
$sentencia = $conexion_botica->query("select Producto_Skey,IdProducto,Producto_Nombre,Estado from Dim_Producto");
$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!Doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="LUIS CABRERA">
    <title>BOTICA FISI-UNAP</title>
    <!-- Cargar el CSS de Boostrap-->
    <link href="ingcss/bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
    <link href="ingcss/style.css" rel="stylesheet">
    <link href="micss/listar.css" rel="stylesheet">
    <link rel="stylesheet" href="css/boton2.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <!-- Definición del menú -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <h1><a href="#"><img src="images/fisiunap1.jpg" alt=""></a></h1>
        <a class="navbar-brand" target="_blank" href="#">BOTICA-FISI</a>
        <div class="collapse navbar-collapse" id="miNavbar">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="venta_empleado/encabezado_index.php">Volver</a>
                </li>
            </ul>
        </div>
        <form action="buscar_producto.php" method="get">
            <input type="text" name="search" placeholder="Buscar Producto...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </nav>
    <!-- Termina la definición del menú -->
    <main role="main" class="container">
</body>
<div class="row">
    <div class="col-12">
        <h1>Venta de Productos</h1>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre Producto</th>
                        <th>Estado</th>
                        <th class="text-center">Stock</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">X/√</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($productos as $productos){ ?>
                        <tr>
                            <td><?php echo $productos-> Producto_Skey ?></td>
                            <td><?php echo $productos->Producto_Nombre?></td>
                            <td><?php echo $productos->Estado?></td>
                            <td><a class="btn btn-warning " href="#">xxxxxx </a></td>
                            <td><a class="btn btn-danger " href="#">S/.xxxxxxxx </a></td>
                            <td><a class="" href="#">   <label class="mycheckbox">
                            <input type="checkbox" name="">
                            <span>
                              <i class="fas fa-check on"></i>
                              <i class="fas fa-times off"></i>
                            </span>
                            </label>
                            </a></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>