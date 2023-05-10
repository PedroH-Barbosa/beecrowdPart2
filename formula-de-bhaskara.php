<?php
//1036 - Fórmula de Bhaskara - ACEITO

$n = readline('digite os números:  '); 
$n = explode(' ', $n); 
$n = array_map('floatval', $n);

//formula do delta
$delta = ($n[1] * $n[1]) - (4 * $n[0] * $n[2]);

if ($n[0] == 0 || $delta < 0 || $delta == $n[1]){
    echo "Impossivel calcular\n";
} else if($delta == 0){ 

    //formula de bhaskara
    $x1 = (-$n[1] + sqrt($delta)) / (2 * $n[0]);
    $x2 = (-$n[1] - sqrt($delta)) / (2 * $n[0]);


    echo "R1 = " . number_format($x1, 5, '.', '') . "\n";
    
} else {

    $x1 = (-$n[1] + sqrt($delta)) / (2 * $n[0]);
    $x2 = (-$n[1] - sqrt($delta)) / (2 * $n[0]);


    echo "R1 = " . number_format($x1, 5, '.', '') . "\n";
    echo "R2 = " . number_format($x2, 5, '.', '') . "\n";
}


