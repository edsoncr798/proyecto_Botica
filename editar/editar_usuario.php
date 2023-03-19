<?php
if(!isset($_GET["id"])){
    exit();
}

$id = $_GET["id"];
include_once "../conexion_botica.php";
// echo "SELECT codigoLibro, nombreLibro, tipoLibro, empresa FROM co.libros WHERE libros = $id";
$sentencia = $conexion_botica->prepare("SELECT Usuario_Skey,Nombre_Apellidos,DNI,Usuario,Password 
    FROM dbo.Dim_Usuario WHERE Usuario_Skey = ? ");
$sentencia->execute([$id]);
$usuario = $sentencia->fetchObject();

if(!$usuario){
    // ! NO EXISTE
    echo("¡no exixte algun usuario con ese ID");
    exit();
}
// ?SI LIBRO EXISTE, SE EJECUTA ESTE HMTL
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
            <form action="../guardar/guardaredit_usuario.php" method="POST">
       
                <input type="text" name="idusuarios" id="idusuarios" value=" <?php echo $usuario->Usuario_Skey;?>">
                <div class="form-group">
                    <label for="nombre">Nombre Apellidos</label>
                    <input value="<?php echo $usuario->Nombre_Apellidos; ?>" required name="Nombre_Apellidos" type="text" id="Nombre_Apellidos"
                     placeholder="Codigo Cliente" class="form-control">
                </div>
                <div class="form-group">
                    <label for="DNI">DNI</label>
                    <input value ="<?php echo $usuario->DNI; ?>" required name="DNI" type="number" id="DNI"
                     placeholder="Nombre de Empresa" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Usuario">Usuario</label>
                    <input value ="<?php echo $usuario->Usuario; ?>" required name="Usuario" type="text" id="Usuario"
                     placeholder="Usuario" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input value ="<?php echo $usuario->Password; ?>" required name="Password" type="text" id="Password"
                     placeholder="Password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="../listar/listar_usuario.php" class="btn btn-warning"> Ver todos</a>
            </form>
    </div>
</div>