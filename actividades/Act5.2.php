<?php
$precioUnitario = 5.25;
$cantidadKilos = 10;
$precioTotal = $precioUnitario * $cantidadKilos;
echo "El precio del kilo es: " . number_format($precioUnitario,2) . " euros.<br>";
echo "Los kilos encargados son: " . $cantidadKilos . ".<br>";
echo "Por lo que el total del pedido ha sido: " . number_format($precioTotal,2) . " euros.";
?>