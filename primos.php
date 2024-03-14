<?php

function verificaPrimo($numero) {
    $naoEPrimo = 0;

    if ($numero >= 2) {
        for ($divisao = 2; $divisao < $numero; $divisao++) {
            $resto = $numero % $divisao;

            if ($resto == 0) {
                $naoEPrimo = 1;
                break;
            }
        }

        if ($naoEPrimo == 1) {
            echo "O número $numero não é primo.\n";
        } else {
            echo "O número $numero é primo.\n";
        }
    } else {
        echo "Número inválido, deve ser igual ou maior a 2!!\n";
    }
}

$escolha = readline("Escolha um número, vou conferir se ele é primo ou não: ");
verificaPrimo($escolha);
}
