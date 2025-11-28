<?php
try {
    $conexion = new PDO('mysql:host=localhost;dbname=poporopo2', 'root', '');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Error de conexión: " . $e->getMessage();
    exit();
}
?>
