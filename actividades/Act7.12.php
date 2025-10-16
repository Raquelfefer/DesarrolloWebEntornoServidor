<?php
$edad = 20;
$tiene_licencia = true;
$conduce = false;
if($edad >= 18 && $tiene_licencia){
    $conduce = true;
    echo "La persona conduce.";
}else{
    echo "La persona no conduce";
}
?>