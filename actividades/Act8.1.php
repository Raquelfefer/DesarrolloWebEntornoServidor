<?php 
$nota = 6;
$calificacion = (($nota < 5) ? "Reprobado" : (($nota >= 9) ? "Sobresaliente" : "Aprobado"));
echo $calificacion;
?>