<?php
$sequencia = readline("Digite a palavra: ");

$numero = array_fill(0, 26, 0);

for ($i = 0; $i < strlen($sequencia); $i++) {
    $letra = strtolower($sequencia[$i]);
    $indice = ord($letra) - ord('a');
    $numero[$indice]++;
}

$quantidade = 0;
for ($i = 0; $i < 26; $i++) {
    if ($numero[$i] % 2 != 0) {
        $quantidade++;
    }
}

if ($quantidade > 1) {
    echo ($quantidade - 1) . "\n";
} else {
    echo "0\n";
}
?>