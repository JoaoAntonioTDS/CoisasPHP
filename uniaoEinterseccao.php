<?php

function lerVetor($tamanho) {
    $vetor = [];
    for ($i = 0; $i < $tamanho; $i++) {
        $elemento = readline("Digite o elemento " . ($i + 1) . ": ");
        $vetor[] = $elemento;
    }
    return $vetor;
}

function intersecao($vetorA, $vetorB) {
    return array_intersect($vetorA, $vetorB);
}

function uniao($vetorA, $vetorB) {
    return array_unique(array_merge($vetorA, $vetorB));
}

$vetorA = lerVetor(5);
$vetorB = lerVetor(5);


$vetorC = intersecao($vetorA, $vetorB);
echo "Vetor C (Interseção): " . implode(", ", $vetorC) . PHP_EOL;


$vetorD = uniao($vetorA, $vetorB);
echo "Vetor D (União): " . implode(", ", $vetorD) . PHP_EOL;
