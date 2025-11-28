<?php
include "modelo/conexion-pdo.php"; 


if (!isset($_GET["id"])) {
    die("ID no enviado");
}

$id = $_GET["id"];


$consulta = $conexion->prepare("SELECT * FROM cine WHERE idcine = ?");
$consulta->execute([$id]);
$registro = $consulta->fetch(PDO::FETCH_OBJ);

if (!$registro) {
    die("Registro no encontrado");
}



if (isset($_POST["btn-actualizar"])) {

    $Alarmas       = $_POST["cantidad_de_alarmas"];
    $lamparas      = $_POST["cantidad_de_lamparas"];
    $sillones      = $_POST["cantidad_de_sillones"];
    $sostenedores  = $_POST["sostenedores"];
    $TV            = $_POST["TV"];

    $actualizar = $conexion->prepare("UPDATE cine 
                                      SET Alarmas=?, lamparas=?, sillones=?, sostenedores=?, TV=? 
                                      WHERE idcine=?");

    $resultado = $actualizar->execute([$Alarmas, $lamparas, $sillones, $sostenedores, $TV, $id]);

    if ($resultado) {
        header("Location: index.php?mensaje=actualizado");
        exit();
    } else {
        echo "Error al actualizar";
    }
}
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white p-4">

    <h2 class="text-center mb-4">Modificar Registro</h2>

    <form action="" method="POST" class="col-4 m-auto bg-secondary p-4 rounded">

        <input type="hidden" name="id" value="<?= $registro->idcine ?>">

        <label class="form-label">Cantidad de Alarmas</label>
        <input type="number" class="form-control" name="cantidad_de_alarmas" value="<?= $registro->Alarmas ?>">

        <label class="form-label mt-2">Cantidad de Lamparas</label>
        <input type="number" class="form-control" name="cantidad_de_lamparas" value="<?= $registro->lamparas ?>">

        <label class="form-label mt-2">Cantidad de Sillones</label>
        <input type="number" class="form-control" name="cantidad_de_sillones" value="<?= $registro->sillones ?>">

        <label class="form-label mt-2">Sostenedores</label>
        <input type="text" class="form-control" name="sostenedores" value="<?= $registro->sostenedores ?>">

        <label class="form-label mt-2">Televisión</label>
        <input type="text" class="form-control" name="TV" value="<?= $registro->TV ?>">

        <button class="btn btn-warning mt-3 w-100" name="btn-actualizar" type="submit">
            Actualizar
        </button>

    </form>

</body>

</html>