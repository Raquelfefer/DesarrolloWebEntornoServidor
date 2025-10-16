<?php
$numeros = [1,2,3,4,5];
$mayoresDeTres = array_filter($numeros, function($num){
    return $num > 3;
});

echo "<pre>";
print_r($mayoresDeTres);
echo "</pre>";

?>