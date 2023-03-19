<?php
include_once 'conexion_botica.php';

if (isset($_GET['search'])) {
    $search = $_GET['search'];

    // $sentencia = $base_de_datos->prepare("SELECT * FROM co.libros WHERE ")
    $sentencia = $conexion_botica->prepare("SELECT * FROM dbo.Dim_Producto WHERE Producto_Nombre 
    LIKE '%$search%' OR Producto_Skey LIKE '%$search%'");

    $sentencia->execute();
    $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    // include_once 'listar.php';
} else {
    $sentencia = $conexion_botica->prepare("SELECT * FROM dbo.Dim_Producto");
    $sentencia->execute();
    $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
}
?>
<?php
    echo '<link href="ingcss/bootstrap.min.css" rel="stylesheet">';
    echo '<script src="https://kit.fontawesome.com/e797658226.js" crossorigin="anonymous"></script>';
    echo '<link href="ingcss/style.css" rel="stylesheet">';
    echo '<link rel="stylesheet" href="css/boton2.css">';
    echo '<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />';
?>
<div style="padding: 0 80px 0 80px" class="row">
    <div class="col-12">
        <h1>Listar</h1>
        <a href="ventas_productos.php" 
            style="
                color: blue;
                font-size:3rem;
                position:absolute;
                top:0;
                right:20px;">
            <i class="fa-solid fa-left-long"></i>
        </a>
        
        <br>
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
                            <td><a href="#"><label class="mycheckbox">
                            <input type="checkbox" name="">
                            <span>
                              <i class="fas fa-check on"></i>
                              <i class="fas fa-times off"></i>
                            </span>
                            </label></a></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
</div>