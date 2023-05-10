<?php

function fibonacci($n, &$numCalls) {
    $numCalls++;
    
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1, $numCalls) + fibonacci($n - 2, $numCalls);
    }
}

$N = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $N; $i++) {
    $X = intval(trim(fgets(STDIN)));
    $numCalls = 0;
    $result = fibonacci($X, $numCalls);
    echo "fib($X) = $numCalls calls = $result\n";
}

?>