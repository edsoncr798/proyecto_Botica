<?php
if(!isset($_GET["id"])){
    exit();
}

$id = $_GET["id"];
include_once "../conexion_botica.php";
// echo "SELECT codigoLibro, nombreLibro, tipoLibro, empresa FROM co.libros WHERE libros = $id";
$sentencia = $conexion_botica->prepare("SELECT Proveedor_Skey, Proveedor_Nombre, RUC,Direccion,IdProveedor FROM dbo.Dim_Proveedor WHERE Proveedor_Skey = ? ");
$sentencia->execute([$id]);
$proveedor = $sentencia->fetchObject();

if(!$proveedor){
    // ! NO EXISTE
    echo("¡no exixte algun proveedor con ese ID");
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
            <form action="../guardar/guardaredit_proveedor.php" method="POST">
       
                <input type="text" name="idproveedores" id="idproveedores" value=" <?php echo $proveedor->Proveedor_Skey;?>">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input value="<?php echo $proveedor->Proveedor_Nombre; ?>" required name="Proveedor_Nombre" type="text" id="Proveedor_Nombre"
                     placeholder="Nombre Proveedor" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nombre">RUC</label>
                    <input value ="<?php echo $proveedor->RUC; ?>"  name="RUC" type="number" id="RUC"
                     placeholder="RUC" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nombre">Direcciòn</label>
                    <input value ="<?php echo $proveedor->Direccion; ?>" required name="Direccion" type="text" id="Direccion"
                     placeholder="Direccion" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nombre">Codigo</label>
                    <input value ="<?php echo $proveedor->IdProveedor; ?>" required name="IdProveedor" type="number" id="IdProveedor"
                     placeholder="Codigo" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
                <a href="../listar/listar_proveedor.php" class="btn btn-warning"> Ver Todos</a>
            </form>
    </div>
</div>