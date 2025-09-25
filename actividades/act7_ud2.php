<?php
    $var = "Hola";
    if(is_array($var)){
        echo "La variable es un array.";
        echo "<br/>";
        echo "La variable es del tipo " . gettype($var) . ".";
    }elseif(is_string($var)) {
        echo "La variable es una cadena.";
        echo "<br/>";
        echo "La variable es del tipo " . gettype($var) . ".";
    }elseif(is_int($var)) {
        echo "La variable es un entero.";
        echo "<br/>";
        echo "La variable es del tipo " . gettype($var) . ".";
    }
?>