<?php
$es_mayor = true;
$es_estudiante = false;
if($es_mayor && $es_estudiante){
    echo "Es un estudiante mayor.<br>";
}
if($es_mayor || $es_estudiante){
    echo "Es mayor o estudiante.<br>";
}
if(!$es_mayor && !$es_estudiante){
    echo "No es mayor ni estudiante.<br>";
}
?>