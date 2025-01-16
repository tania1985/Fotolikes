<?php
if(isset($_POST["nombre"])){
$host = "localhost"; // o la IP de tu servidor MySQL
$user = "root";
$password = "";
$database = "fotolike";
try {
    // Crear la conexión con PDO
    $conexion = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    // Establecer el modo de error de PDO a excepción
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Conexión fallida: " . $e->getMessage();
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotolikes</title>
</head>
<body> 
    <form action="" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required placeholder="Nombre">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required placeholder="Email">
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required placeholder="Contraseña">
    <input type="submit" value="Registrarse">
</form>
</body>
</html>