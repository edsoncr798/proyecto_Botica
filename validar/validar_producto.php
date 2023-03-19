<?php
if(!isset($_POST["Producto_Nombre"]) || !isset($_POST["Estado"]) || !isset($_POST["IdProducto"])){

    exit();
}

include_once "../conexion_botica.php";
$idproducto = $_POST["IdProducto"];
$nombre = $_POST["Producto_Nombre"];
$estado = $_POST["Estado"];


$sentencia = $conexion_botica->prepare("Insert into Dim_Producto(Producto_Nombre, Estado, IdProducto) VALUES (?,?,?)");

$resultado = $sentencia->execute([$nombre, $estado, $idproducto]);

if($resultado === true){
    header("Location: ../listar/listar_producto.php");
} else {
    echo "Algo salió mal. Por favor verifique que la tabla exista";
}
?>