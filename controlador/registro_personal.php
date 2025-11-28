<?php
if (isset($_POST["btn-registrar"])) {

    if (
        !empty($_POST["cantidad_de_alarmas"]) &&
        !empty($_POST["cantidad_de_lamparas"]) &&
        !empty($_POST["cantidad_de_sillones"]) &&
        !empty($_POST["sostenedores"]) &&
        !empty($_POST["TV"])
    ) {

        $Alarmas = $_POST["cantidad_de_alarmas"];
        $lamparas = $_POST["cantidad_de_lamparas"];
        $sillones = $_POST["cantidad_de_sillones"];
        $sostenedores = $_POST["sostenedores"];
        $TV = $_POST["TV"];

        $pdo = $conexion->query("INSERT INTO cine(Alarmas, lamparas, sillones, sostenedores, TV) 
VALUES('$Alarmas', '$lamparas', '$sillones', '$sostenedores', '$TV')");

 
        if ($pdo) {
            echo '<div class="alert alert-success">registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger">Error al registrar registro</div>';
        }

    } else {

        echo '<div class="alert alert-warning">Error, algunos de los campos están vacíos!</div>';

    }
}
?>