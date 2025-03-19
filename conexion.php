<?php
$servidor = "localhost";
$usuario = "root";  
$clave = "";        
$baseDatos = "hippocardio";

$conn = new mysqli($servidor, $usuario, $clave, $baseDatos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
