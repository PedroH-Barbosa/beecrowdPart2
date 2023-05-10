<?php
//beecrowd | 1542 - Lendo Livros | ACEITO

//Q é a quantidade de páginas lidas por dia.
//D é o número de dias que você adiantaria a leitura caso estivesse lendo 
//a quantidade de páginas P. 

while(1){
    //entrada
    [$q , $d , $p] = explode(' ', readline('digite: '));

    //EOF
    if ($q == 0 && $d == 0 && $p == 0) {
        break;
    }

    $dias = ($d * $q) / ($p - $q);

    $n_pags = intval($dias * $p);

    
    echo  "$n_pags pagina" . ($n_pags == 1 ? '' : 's') . "\n";
}