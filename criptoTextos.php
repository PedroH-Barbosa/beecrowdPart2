<?php

$numeroDeCasos = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $numeroDeCasos; $i++) {

    $codedMessage = trim(fgets(STDIN));

    $texto = '';
    for ($j = 0; $j < strlen($Messagem); $j++) {
        $char = $Messagem[$j];
        if (ctype_upper($char)) {
            $texto .= $char;
        }
    }

    echo $texto . "\n";
}

?>