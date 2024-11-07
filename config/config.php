<?php
// Definimos el usuario
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nodo_home";

// Creamos conexión

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificamos conexión

// if ($conn->connect_error) {
//     die("Conexión fallida: " .
//     $conn->connect_error);
// }
// echo "Conexión exitosa";
?>