<?php
if(
    !isset($_POST['idproductos']) ||
    !isset($_POST['Producto_Nombre']) ||
    !isset($_POST['Estado']) ||
    !isset($_POST['IdProducto']) 
    )
{
    exit();
}

include_once "../conexion_botica.php";
$idproductos = $_POST["idproductos"];
$nombre = $_POST["Producto_Nombre"];
$estado = $_POST["Estado"];
$IdProducto = $_POST["IdProducto"];

$sentencia = $conexion_botica->prepare("UPDATE Dim_Producto SET  Producto_Nombre = ?, Estado = ?, IdProducto = ?
WHERE Producto_Skey = ?;");
$resultado = $sentencia->execute([$nombre,$estado,$IdProducto,$idproductos]);
if($resultado === true){
    header ("Location: ../listar/listar_producto.php");
} else{
    echo "Algo salió mal. Por favor verifique que la tabla exista, así como el ID del usuario."; 
}
?>