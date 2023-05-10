<?php
// beecrowd | 1987 - Divisibilidade Por 3 | ACEITO
while(1){

    $n = readline('número de algarismos: ');
    $n = explode(' ', $n);

    $digits = str_split($n[1]);
    $sum = array_sum($digits);

    if( $n[0] == 0 || $n[1] == 0){
        break;
    } else {
        echo $sum;
        if($sum % 3 != 0){
            echo " nao\n";
        }else{
            echo " sim\n";
        }
    }

}