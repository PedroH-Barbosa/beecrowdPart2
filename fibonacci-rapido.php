<?php

//beecrowd | 2164 - Fibonacci Rápido | ACEITO

$n = intval(readline('numero: '));

$termo1 = (1 + sqrt(5))/2;
$termo2 = (1 - sqrt(5))/2;

$resultado1 = pow( $termo1, $n);
$resultado2 = pow( $termo2, $n);

$fibon = (($resultado1 - $resultado2) / sqrt(5));

echo number_format($fibon, 1, '.', '')."\n";

