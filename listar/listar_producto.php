<?php 
include_once "../conexion_botica.php";

$por_pagina = 20;

if(isset($_GET["pagina"])){
    $pagina = $_GET["pagina"];
}else{
    $pagina = 1;
}

$empieza = ($pagina - 1) * $por_pagina;

$sentencia = $conexion_botica->query(" SELECT * from Dim_Producto p ORDER BY p.Producto_Skey ASC
OFFSET $empieza ROW FETCH NEXT $por_pagina ROW ONLY");

$sentencia_total = $conexion_botica->query(" SELECT COUNT(*) from Dim_Producto");
$cantidad_total = $sentencia_total->fetchColumn();
$pagina_total = ceil($cantidad_total / $por_pagina);

$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<!Doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="LUIS CABRERA">
    <title>BOTICA FISI-UNAP</title>
    <script src="https://kit.fontawesome.com/e797658226.js" crossorigin="anonymous"></script>
    <!-- Cargar el CSS de Boostrap-->
    <link href="../ingcss/bootstrap.min.css" rel="stylesheet">
    <!-- Cargar estilos propios -->
    <link href="../ingcss/style.css" rel="stylesheet">
    <link href="../micss/listar.css" rel="stylesheet">
    <link href="./pagination.css" rel="stylesheet">
</head>

<body>
    <!-- Definición del menú -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <h1><a href="#"><img src="../images/fisiunap1.jpg" alt=""></a></h1>
        <a class="navbar-brand" target="_blank" href="#">BOTICA-FISI</a>
        <div class="collapse navbar-collapse" id="miNavbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../registrar/registrar_producto.php">Agregar [Producto]</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../mantenimiento.php">Volver</a>
                </li>
            </ul>
        </div>
        <form action="../buscar/buscar_producto.php" method="get">
            <input type="text" name="search" placeholder="Buscar Producto...">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
    </nav>
    <!-- Termina la definición del menú -->
    <main role="main" class="container" style="background: #fff;">
        <div class="row">
            <div class="col-12 padd">
                <h3>Lista de Productos</h3>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre Producto</th>
                                <th>Estado</th>
                                <th>Codigo</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($productos as $producto){ ?>
                                <tr>
                                    <td><?php echo $producto-> Producto_Skey ?></td>
                                    <td><?php echo $producto->Producto_Nombre?></td>
                                    <td><?php echo $producto->Estado?></td>
                                    <td><?php echo $producto->IdProducto?></td>
                                    <td><a class="btn btn-warning" href="<?php echo "../editar/editar_producto.php?id=". $producto->Producto_Skey?>">Editar</a></td>
                                    <td><a class="btn btn-danger" href="<?php echo "../eliminar/eliminar_producto.php?id=". $producto->Producto_Skey?>">Eliminar</a></td>
                                </tr>
                            <?php } ?>
        
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    <div class="pagination-content">
                        <?php if($pagina > 1):?>
                            <a class="star-end" href="listar_producto.php?pagina=1">inicio</a>
                        <?php endif;?>
                        <button 
                            class="btn-page" <?php if ($pagina == 1){echo 'disabled';} ?> 
                            onclick="navigateToPage(<?php echo $pagina - 1 ?>)"
                        > 
                            <i class="fa-solid fa-angles-left"></i> 
                        </button>
                        <?php
                            $max_paginas_mostradas = 10;
                            $mitad_max_paginas_mostradas = floor($max_paginas_mostradas / 2);
                            $pagina_inicio = max(1, $pagina - $mitad_max_paginas_mostradas);
                            $pagina_fin = min($pagina_total, $pagina_inicio + $max_paginas_mostradas - 1);
                            $pagina_inicio = max(1, $pagina_fin - $max_paginas_mostradas + 1);
                            for ($i = $pagina_inicio; $i <= $pagina_fin; $i++) {
                            if ($i == $pagina) {
                                echo "<a class='active btn-nav' href='listar_producto.php?pagina=$i'>$i</a>";
                            } else {
                                echo "<a class='btn-nav' href='listar_producto.php?pagina=$i'>$i</a>";
                            }
                        }
                        ?>
                        <button 
                            class="btn-page" <?php if($pagina == $pagina_total) {echo 'disabled';} ?> 
                            onclick="navigateToPage(<?php echo $pagina + 1 ?>)"
                        > 
                                <i class="fa-solid fa-angles-right"></i> 
                        </button>

                        <?php if($pagina < $pagina_total): ?>
                            <a class="star-end" href="listar_producto.php?pagina=<?php echo $pagina_total; ?> ">ultimo</a>
                        <?php endif; ?>
                    </div>
                </div>
                <script>
                    function navigateToPage(pageNumber) {
                        const url = new URL(window.location.href);
                        url.searchParams.set('pagina', pageNumber);
                        window.location.href = url.href;
                    }
                </script>
            </div>
        </div>
    </main>
</body>
</html>