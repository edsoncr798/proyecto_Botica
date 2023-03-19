<?php
if(!isset($_POST["Cliente_Nombre"]) || !isset($_POST["Nombre_Empresa"]) || !isset($_POST["Nro_Documento"])|| !isset($_POST["IdCliente"])){

    exit();
}

include_once "../conexion_botica.php";
$idcliente = $_POST["IdCliente"];
$nombre = $_POST["Cliente_Nombre"];
$empre = $_POST["Nombre_Empresa"];
$docu = $_POST["Nro_Documento"];

$sentencia = $conexion_botica->prepare("Insert into Dim_Cliente(Cliente_Nombre, Nombre_Empresa, Nro_Documento,IdCliente) VALUES (?,?,?,?)");

$resultado = $sentencia->execute([$nombre, $empre, $docu,$idcliente]);

if($resultado === true){
    header("Location: ../listar/listar_clientes.php");
} else {
    echo "Algo salió mal. Por favor verifique que la tabla exista";
}
?>