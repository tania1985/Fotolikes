<?php
session_start();
if (!isset($_SESSION["idusuario"])) {
    header("Location: index.php");
    exit();
}
if (isset($_GET["idfoto"])) {
    try {
        include("conexiondb.php");
        $sql = "INSERT INTO likes (idfoto, idusuario) VALUES (:idfoto, :idusuario)";
        $stm = $conexion->prepare($sql);
        $stm->bindParam(":idfoto", $_GET["idfoto"]);
        $stm->bindParam(":idusuario", $_SESSION["idusuario"]);
        $stm->execute();
        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        echo "Error al dar like".$e->getMessage();
        exit();
    }
}
?>