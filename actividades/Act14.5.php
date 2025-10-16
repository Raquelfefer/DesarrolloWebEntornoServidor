<?php
$numeros = [34, 52, 103];
echo "<pre>";
print_r($numeros);
echo "</pre>";

$numeros[0] = 44;
echo "<pre>";
print_r($numeros);
echo "</pre>";

$numeros[] = 87;
echo "<pre>";
print_r($numeros);
echo "</pre>";

unset($numeros[1]);
echo "<pre>";
print_r($numeros);
echo "</pre>";
?>