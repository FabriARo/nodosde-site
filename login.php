<?php
session_start();
if (isset($_SESSION['usuario'])) {
    if ($_SESSION['tipo_usuario']=='admin'){
        header("Location:./index.php");
        exit();
    } if ($_SESSION['tipo_usuario']=='editor'){
        header("Location:./index.php");
        exit();
    } else {
        header("Location:./index.php");
        exit();
    };
};
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form method="post" action="./models/procesar_login.php">
        <label for="email">
            Email:
        </label>
        <input type="email" id="email" name="email" required>
        <label for="password">
            Contraseña:
        </label>
        <input type="password" id="password" name="password" required><br>
        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>