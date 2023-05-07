<?php

$joao = 0;
$maria = 0;

$num_partidas = intval(fgets(STDIN));

for ($i = 0; $i < $num_partidas; $i++) {
    $resultado = trim(fgets(STDIN)); 
    if ($resultado === 'caroa') { 
        $joao++;
    } else { 
        $maria++;
    }
}

echo "Joao ganhou ".$joao_wins." vezes\n";
echo "Maria ganhou ".$maria_wins." vezes";

?>