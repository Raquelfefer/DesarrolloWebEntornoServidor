<?php
$producto = ["nombre" => "Detergente líquido", "precio" => 24.50, "stock" => 34];
echo "<pre>";
print_r($producto);
echo "</pre>";

$claves = array_keys($producto);
echo "<pre>";
print_r($claves);
echo "</pre>";
?>