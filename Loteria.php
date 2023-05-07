<?php

echo "Digite os números que você apostou: ";
$apostados = explode(" ", readline());

echo "Digite os números sorteados: ";
$sorteados = explode(" ", readline());

$iguais = 0;
foreach ($apostados as $apostado) {
    if (in_array($apostado, $sorteados)) {
        $iguais++;
    }
}

switch ($iguais) {
    case 1:
        echo "Você ganhou um 'terno'!";
        break;
    case 2:
        echo "Você ganhou uma 'quadra'!";
        break;
    case 3:
        echo "Você ganhou uma 'quina'!";
        break;
    case 4:
        echo "Você ganhou uma 'sena'!";
        break;
    default:
        echo "Você não ganhou nenhum prêmio desta vez.";
}

