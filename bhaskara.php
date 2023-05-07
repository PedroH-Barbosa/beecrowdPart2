<?php

$a = floatval(readline());
$b = floatval(readline());
$c = floatval(readline());

$delta = ($b * $b) - (4 * $a * $c);

if ($a == 0 || $delta < 0) {
  echo "Impossivel calcular\n";
} else {
  $x1 = (-$b + sqrt($delta)) / (2 * $a);
  $x2 = (-$b - sqrt($delta)) / (2 * $a);

  echo "R1 = ".number_format($x1, 5, '.', '')."\n";
  echo "R2 = ".number_format($x2, 5, '.', '')."\n";
}

?>