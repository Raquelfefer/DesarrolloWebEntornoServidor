<?php
$colores = ["amarillo", "azul", "verde", "burdeos"];
echo "<pre>";
print_r($colores);
echo "</pre>";

unset($colores[2]);
echo "<pre>";
print_r($colores);
echo "</pre>";

$colores = array_values($colores);
echo "<pre>";
print_r($colores);
echo "</pre>";
?>