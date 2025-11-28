

<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "poporopo1";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_errno) {
    die("Conexion no conectada" . $conexion->connect_errno);
}else{
    echo "Conectada";
    
}

$sql = "SELECT * FROM dormitorio";
$resultado = $conexion->query($sql);


$conexion -> autocommit(FALSE);
$conexion -> query("INSERT INTO dormitorio VALUES(3, 'aramrio de material madera', 2, 'suave cama para cuatro personas', 'mesa para dos persomas')");

if (!$conexion -> commit()){
    echo "Error al guaradar";
    exit();
}

echo " Datos guardados correctamente";
$conexion -> close();  




?>  