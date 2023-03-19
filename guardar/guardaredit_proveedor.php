<?php
if(
    !isset($_POST['idproveedores']) ||
    !isset($_POST['Proveedor_Nombre']) ||
    !isset($_POST['RUC']) ||
    !isset($_POST['Direccion']) ||
    !isset($_POST['IdProveedor'])
    )
{
    exit();
}

include_once "../conexion_botica.php";
$idproveedores = $_POST["idproveedores"];
$nombre = $_POST["Proveedor_Nombre"];
$ruc = $_POST["RUC"];
$direccion = $_POST["Direccion"];
$idproveedor = $_POST["IdProveedor"];

$sentencia = $conexion_botica->prepare("UPDATE Dim_Proveedor SET  Proveedor_Nombre = ?, RUC = ?, Direccion = ?, IdProveedor = ? WHERE Proveedor_Skey = ?;");
$resultado = $sentencia->execute([$nombre,$ruc,$direccion,$idproveedor,$idproveedores]);
if($resultado === true){
    header ("Location: ../listar/listar_proveedor.php");
} else{
    echo "Algo salió mal. Por favor verifique que la tabla exista, así como el ID del usuario."; 
}
?>