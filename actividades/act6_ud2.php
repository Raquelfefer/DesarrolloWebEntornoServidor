<?php
$edad = -3;
$estatus = ($edad < 0) ? "Edad inválida." : 
            (($edad >= 18) ? "La persona es mayor de edad." : "La persona es menor de edad.");
echo $estatus;
?>