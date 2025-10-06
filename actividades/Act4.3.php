<?php
$var = "10";
$suma = $var + 20;
echo "El resultado de la suma es: " . $suma;
?>
<!-- Realiza una conversión implícita de la variable ya
 que PHP es un lenguaje débilmente tipado. Busca un valor
 numérico y lo convierte en número para realizar la suma. 
 Si tuviera una variable con números y letras solo cogería 
 la parte numérica para hacer la suma y mostraría un 
 mensaje referente a la línea donde hay un valor no 
 numérico. -->