<?php
//beecrowd | 1171 - Frequência de Números | ACEITO

$n = readline(''); 

//Fazendo o array da contagem
$count = array();


for( $i = 0; $i < $n; $i++){
    $x = readline('');
    if(array_key_exists($x , $count)) {
        $count[$x]++;
    } else {
        $count[$x] = 1;
    }
}

//chaves do aray em ordem crescente
ksort($count);

//Imprime a contagem de cada valor
foreach ($count as $x => $freq){
    echo "$x aparece $freq vez(es)\n";
}

