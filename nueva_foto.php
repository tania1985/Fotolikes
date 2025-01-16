<?php
if(isset($_POST["titulo"])){
    
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Foto</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" id="titulo" required placeholder="Título">
    <label for="foto">Foto:</label>
    <input type="file" name="foto" id="foto" accept="image/*" required>
    <input type="submit" value="Subir">
</form>
</body>
</html>