<?php

function determineWinner($jogo1, $jogo2) {
    $time1 = $jogo1[0] + $jogo2[1];
    $time2 = $jogo1[1] + $jogo2[0]; 

    $pontuação1 = ($time1 > $time2) ? 3 : 0; 
    $pontuação2 = ($time2 > $time1) ? 3 : 0; 

    $pontuação1 += ($time1 === $time2 && $jogo2[1] > $jogo1[0]) ? 1 : 0;
    $pontuação2 += ($time1 === $time2 && $jogo2[1] < $jogo1[0]) ? 1 : 0; 

    if ($time1 > $time2) {
        return "Time 1";
    } elseif ($time2 > $time1) {
        return "Time 2";
    } else {
        return "Penaltes";
    }
}

$teste = intval(trim(fgets(STDIN)));

for ($i = 1; $i <= $teste; $i++) {
    // Read the match scores
    $jogo1 = explode("x", trim(fgets(STDIN)));
    $jogo2 = explode("x", trim(fgets(STDIN)));

    $vencedor = determineWinner($jogo1, $jogo2);

    echo $vencedor . "\n";
}
?>