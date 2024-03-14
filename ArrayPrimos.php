<?php

function verificaPrimo($numero, &$primos) {
    if ($numero >= 1) {
        if ($numero == 1) {
            echo "O número 1 não é primo.\n";
            return;
        }
        $naoEPrimo = false;
        for ($divisao = 2; $divisao < $numero; $divisao++) {
            $resto = $numero % $divisao;

            if ($resto == 0) {
                $naoEPrimo = true;
                break;
            }
        }
        if ($naoEPrimo ==false) {
            echo "O número $numero é primo.\n";
            $primos[] = $numero;
        } else {
            echo "O número $numero não é primo.\n";
        }
    } else {
        echo "Número inválido, deve ser igual ou maior a 1!!\n";
    }
}

$primos = array();
$escolha = 1;

while ($escolha > 0) {
    $escolha = readline("Escolha um número, vou conferir se ele é primo ou não: ");
    verificaPrimo($escolha, $primos);
}

echo "Números primos informados: ";
foreach ($primos as $primo) {
    echo $primo . ", ";
}
