<?php
if(!isset($_POST["Proveedor_Nombre"]) || !isset($_POST["RUC"]) || !isset($_POST["Direccion"]) || !isset($_POST["IdProveedor"])){

    exit();
}

include_once "../conexion_botica.php";
$idproveedor = $_POST["IdProveedor"];
$ruc = $_POST["RUC"];
$nombre = $_POST["Proveedor_Nombre"];
$direccion = $_POST["Direccion"];



$sentencia = $conexion_botica->prepare("Insert into Dim_Proveedor(Proveedor_Nombre, RUC, Direccion, IdProveedor) VALUES (?,?,?,?)");

$resultado = $sentencia->execute([$nombre, $direccion, $ruc , $idproveedor]);

if($resultado === true){
    header("Location: ../listar/listar_proveedor.php");
} else {
    echo "Algo salió mal. Por favor verifique que la tabla exista";
}
?>