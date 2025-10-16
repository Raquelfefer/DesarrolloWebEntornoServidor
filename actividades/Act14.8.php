<?php
$frutas = ["manzana", "papaya", "kiwi"];
$opcion = "platano";
if(in_array($opcion,$frutas)){
    echo "En el array encontramos la fruta " . $opcion;
}else{
    echo "En el array no encontramos la fruta " . $opcion;
}
?>