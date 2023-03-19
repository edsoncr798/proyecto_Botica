<?php
include_once '../conexion_botica.php';

if (isset($_GET['search'])) {
    $search = $_GET['search'];

    // $sentencia = $base_de_datos->prepare("SELECT * FROM co.libros WHERE ")
    $sentencia = $conexion_botica->prepare("SELECT * FROM dbo.Dim_Cliente WHERE Cliente_Nombre 
    LIKE '%$search%' OR Cliente_Skey LIKE '%$search%'");

    $sentencia->execute();
    $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
    // include_once 'listar.php';
} else {
    $sentencia = $conexion_botica->prepare("SELECT * FROM dbo.Dim_Cliente");
    $sentencia->execute();
    $clientes = $sentencia->fetchAll(PDO::FETCH_OBJ);
}
?>
<?php
    echo '<link href="../ingcss/bootstrap.min.css" rel="stylesheet">';
    echo '<script src="https://kit.fontawesome.com/e797658226.js" crossorigin="anonymous"></script>';
    echo '<link href="../ingcss/style.css" rel="stylesheet">';
?>
<div style="padding: 0 80px 0 80px" class="row">
    <div class="col-12">
        <a href="../listar/listar_clientes.php" 
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
        <h1>Lista de Clientes</h1>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre Cliente</th>
                        <th>Nombre Empresa</th>
                        <th>Nro Doc.</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($clientes as $cliente){ ?>
                        <tr>
                            <td><?php echo $cliente-> Cliente_Skey ?></td>
                            <td><?php echo $cliente->Cliente_Nombre?></td>
                            <td><?php echo $cliente->Nombre_Empresa?></td>
                            <td><?php echo $cliente->Nro_Documento?></td>
                            <td><a class="btn btn-warning" href="<?php echo "../editar/editar_cliente.php?id=". $cliente->Cliente_Skey?>">Editar</a></td>
                            <td><a class="btn btn-danger" href="<?php echo "../eliminar/eliminar_cliente.php?id=". $cliente->Cliente_Skey?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
    </div>
</div>