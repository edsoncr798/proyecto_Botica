<?php
$contraseña = '';
$usuario = '';
$nombreBaseDeDatos = "Botica_Fisi";
$rutaServidor = "DESKTOP-MOSHUKS";
try{
    $conexion_botica = new PDO("sqlsrv:server=$rutaServidor;database=$nombreBaseDeDatos", $usuario, $contraseña);
    $conexion_botica->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    //echo 'conexion exitosa';
} catch(Exception $e){
    echo "Ocurrio un error con la base de datos: " . $e->getMessage();
}
?>