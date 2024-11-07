<?php
include '../config/config.php'; // Conectamos con el archivo que contiene la conexión a la base de datos
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consulta para verificar credenciales
    $sql = "SELECT * FROM usuarios WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows>0) {
        $usuario = $result->fetch_assoc();
        if (password_verify($password, $usuario['password'])) {
            $_SESSION['usuario'] = $usuario['id'];
            $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
            if ($usuario['tipo_usuario'] == 'admin') {
                header("Location:../index.php");
            } else if ($usuario['tipo_usuario'] == 'editor'){
                header("Location:../index.php");
            } else {
                header("Location:../index.php");
            }
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "No existe una cuenta con ese email.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Error de inicio de sesión</title>
</head>
<body>
    <br>
    <a href="../login.php">Volver a intentar</a><br>
    <a href="#">Olvidé mi contraseña</a>
</body>
</html>