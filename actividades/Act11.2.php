<?php
$nota = 6;
if($nota >= 0 && $nota < 5){
    echo "TU NOTA ES UN SUSPENSO";
}else if($nota >= 5 && $nota < 7){
    echo "TU NOTA ES UN APROBADO";
}else if ($nota >= 7 && $nota < 9){
    echo "TU NOTA ES UN NOTABLE";
}else if($nota >= 9 && $nota <= 10){
    echo "TU NOTA ES UN SOBRESALIENTE";
}else{
    echo "Introduce una nota válida.";
}
?>