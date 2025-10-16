<?php
$frase = "Ayer estuvimos en casa de nuestra abuela merendando";
$frase = strtolower($frase);
$array = str_split($frase);
$vocales = ["a","e","i","o","u"];
$num_vocales = 0;
foreach($array as $caracter){
    if(in_array($caracter,$vocales)){
        $num_vocales++;
    }
}
echo "En la frase : " . $frase . " hay " . $num_vocales . " vocales.";
?>