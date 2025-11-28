<?php
require_once "../modelo/conexion-pdo.php";

if (!empty($_GET["id"])) {

    $id = $_GET["id"];

    $sql = $conexion->prepare("DELETE FROM cine WHERE idcine = :id");
    $sql->bindParam(":id", $id, PDO::PARAM_INT);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        header("Location: ../index.php?msg=eliminado");
        exit();
    } else {
        echo "Error al eliminar o el registro no existe";
    }
}
?>