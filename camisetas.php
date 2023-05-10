<?php
//Essa foi MUITO dificil
//Gera o resultado correto mas NAO é aceito pelo Beecrowd

while (true) {
    $n_camisas = readline();
    if ($n_camisas == 0) {
        break;
    }

    // Leitura das camisas
    $camisas = [];
    for ($i = 0; $i < $n_camisas; $i++) {
        $nome = readline('nome: ');
        [$cor, $tamanho] = explode(' ', readline('cor e tamanho: '));
        $camisas[] = [
            'nome' => $nome,
            'cor' => $cor,
            'tamanho' => $tamanho,
        ];
    }

    // Ordenação das camisas
    //usort para poder fazer ordem personalizada
    usort($camisas, function ($a, $b) {
        // Ordena por cor (ascendente), tamanho (descendente) e nome (ascendente)
        return strcmp($a['cor'], $b['cor']) ?: strcmp($b['tamanho'], $a['tamanho']) ?: strcmp($a['nome'], $b['nome']);
    });

    // Impressão das camisas
    foreach ($camisas as $camisa) {
        echo "{$camisa['cor']} {$camisa['tamanho']} {$camisa['nome']}\n";
    }
    echo "\n";
    //echo PHP_EOL; <- foi uma tentativa da linha em branco, mesmo assim, nao passou no teste.
}
