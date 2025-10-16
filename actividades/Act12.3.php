<?php
for($i = 1; $i <= 5; $i++){
    echo "Tabla del " . $i . "<br>";
    $multiplo = 1;
    while($multiplo <= 10){
        echo "$i * $multiplo = " . ($i*$multiplo) . "<br>";
        $multiplo++;
    } 
    echo "<br>";
}
?>