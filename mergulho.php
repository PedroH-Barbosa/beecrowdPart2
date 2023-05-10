<?php
//beecrowd | 1471 - Mergulho | ACEITO

while(1){

    $valores = readline('foram e voltaram: ');
    [$n , $r] = explode(' ', $valores);
    
    //EOF
    if ($n == 0 || $r == 0){
        break;
    } else if ( $n == $r) { //verifica se todos retonaram
        //identificando os voluntários que retornaram
        $retornaram = explode(' ', readline('quais retornaram: '));
        echo "*\n";
    } else {

    //identificando os voluntários que retornaram
    $retornaram = explode(' ', readline('quais retornaram: '));

    // Cria um array com todos os identificadores
    $todos = range(1, $n);

    //removendo os ids que nao retornaram
    $nao_retornaram = array_diff($todos, $retornaram);
    ksort($nao_retornaram);

    //printando valores
    echo implode(' ', $nao_retornaram) . " "."\n";
    
    }
}