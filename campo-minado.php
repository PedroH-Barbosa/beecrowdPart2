<?php
//beecrowd | 2399 - Campo Minado | ACEITO

$n = readline('digite quantos tabuleiros:  '); 
$tabuleiro = array_fill(0, $n, 0);

for ($i = 1; $i <= $n; $i++){
    $tabuleiro[$i] = readline('Existe mina na celula numero '.$i.' do tabuleiro? 0(NAO)  |  1(SIM): ');
}
    
for($i = 1; $i <= $n ; $i++){
    if($i == 1){ //se for a primeira posiçao
        //if($n <= 0){
         //   echo $tabuleiro[$i]."\n";//**************
        //} else {
            echo $tabuleiro[$i] + $tabuleiro[$i+1]."\n";
        
    } else if ($i == $n){ //se for a ultima posiçao
        echo $tabuleiro[$i] + $tabuleiro[$i-1]."\n";
    } else {
        echo $tabuleiro[$i] + $tabuleiro[$i-1] + $tabuleiro[$i+1]."\n";
    }

}