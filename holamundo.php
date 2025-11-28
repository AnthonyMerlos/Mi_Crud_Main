<?php

echo "Aqui se comparan las notas";
$notas1 = 150;
$notas2 = 100;

$calcular = 1 + 2;
$resultado = $calcular /2;

if ($resultado >= 0 && $resultado <= 60){
    echo "debe mejorar";
}else if($resultado >= 60 && $resultado < 80){
    echo "bien";
}else if($resultado >= 90 && $resultado <= 100){
    echo "excelente";
}else{
    echo "REPROBADO";
}
?>