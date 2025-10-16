<?php
$numero = 13;
$primo = true;
$limite = sqrt($numero);
for($i = 2; $i <= $limite; $i++){
    if($numero % $i === 0){
        $primo = false;
    }
}
$mensaje = ($primo ? ("El número " . $numero . " es primo.") : ("El número " . $numero . " no es primo."));
echo $mensaje;
?>