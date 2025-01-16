<?php
if(isset($_POST["nombre"])){
    include "conexiondb.php";
    $sql = "INSERT INTO usuarios (nombre, email, password) VALUES (:nombre, :email, :password)";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":nombre", $_POST["nombre"]);
    $stmt->bindParam(":email", $_POST["email"]);
    $stmt->bindParam(":password", password_hash($_POST["password"], PASSWORD_DEFAULT));
    if($stmt->execute()){
        echo "Usuario registrado";
    }else{
        echo "Error al registrar usuario";
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