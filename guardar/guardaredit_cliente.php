<?php
if(
    !isset($_POST['idclientes']) ||
    !isset($_POST['Cliente_Nombre']) ||
    !isset($_POST['Nombre_Empresa']) ||
    !isset($_POST['Nro_Documento']) 
    )
{
    exit();
}

include_once "../conexion_botica.php";
$idclientes = $_POST["idclientes"];
$nombre = $_POST["Cliente_Nombre"];
$empre = $_POST["Nombre_Empresa"];
$docu = $_POST["Nro_Documento"];

$sentencia = $conexion_botica->prepare("UPDATE Dim_Cliente SET  Cliente_Nombre = ?, Nombre_Empresa = ?, Nro_Documento = ?
WHERE Cliente_Skey = ?;");
$resultado = $sentencia->execute([$nombre,$empre,$docu,$idclientes]);
if($resultado === true){
    header ("Location: ../listar/listar_clientes.php");
} else{
    echo "Algo salió mal. Por favor verifique que la tabla exista, así como el ID del usuario."; 
}
?>