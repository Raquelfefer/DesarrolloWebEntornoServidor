<?php
$var1 = "hola";
echo "La variable 1 es: " . $var1 . " y su tipo es: " . gettype($var1)."<br>";
$var2 = (float)$var1;
echo "La variable 2 es: " . $var2 . " y su tipo es: " . gettype($var2)."<br>";
$var3 = (integer)$var1;
echo "La variable 3 es: " . $var3 . " y su tipo es: " . gettype($var3)."<br>";
$var4 = (boolean)$var1;
echo "La variable 4 es: " . $var4 . " y su tipo es: " . gettype($var4)."<br>";
?>