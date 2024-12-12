<?php
// Parámetros de conexión a la base de datos
$host = 'localhost'; // o la IP del servidor donde se aloja la base de datos
$usuario = 'Totsii';   // El usuario de la base de datos
$contraseña = 'Toxiic04';    // La contraseña del usuario de la base de datos
$baseDeDatos = 'Empresa'; // El nombre de la base de datos

// Crear la conexión
$conn = new mysqli($host, $usuario, $contraseña, $baseDeDatos);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos $baseDeDatos";
}
?>

