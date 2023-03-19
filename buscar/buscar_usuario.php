<?php
include_once '../conexion_botica.php';

if (isset($_GET['search'])) {
    $search = $_GET['search'];

    // $sentencia = $base_de_datos->prepare("SELECT * FROM co.libros WHERE ")
    $sentencia = $conexion_botica->prepare("SELECT * FROM dbo.Dim_Usuario WHERE Nombre_Apellidos 
    LIKE '%$search%' OR Usuario_Skey LIKE '%$search%'");

    $sentencia->execute();
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    // include_once 'listar.php';
} else {
    $sentencia = $conexion_botica->prepare("SELECT * FROM dbo.Dim_Usuario");
    $sentencia->execute();
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
}
?>
<?php
    echo '<link href="../ingcss/bootstrap.min.css" rel="stylesheet">';
    echo '<script src="https://kit.fontawesome.com/e797658226.js" crossorigin="anonymous"></script>';
    echo '<link href="../ingcss/style.css" rel="stylesheet">';
?>
<div style="padding: 0 80px 0 80px" class="row">
    <div class="col-12">
        <a href="../listar/listar_usuario.php" 
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
        <h1>Lista de Usuarios</h1>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombre Apellido</th>
                        <th>DNI</th>
                        <th>Usuario</th>    
                        <th>Contraseña</th>     
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($usuarios as $usuario){ ?>
                        <tr>
                            <td><?php echo $usuario-> Usuario_Skey ?></td>
                            <td><?php echo $usuario->Nombre_Apellidos?></td>
                            <td><?php echo $usuario->DNI?></td>
                            <td><?php echo $usuario->Usuario?></td>
                            <td><?php echo $usuario->password?></td>
                            <td><a class="btn btn-warning" href="<?php echo "../editar/editar_usuario.php?id=". $usuario->Usuario_Skey?>">Editar</a></td>
                            <td><a class="btn btn-danger" href="<?php echo "../eliminar/eliminar_usuario.php?id=". $usuario->Usuario_Skey?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>