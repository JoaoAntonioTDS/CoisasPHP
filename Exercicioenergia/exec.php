<?php

require_once("Modelo/Comercio.php");
require_once("Modelo/Industria.php");
require_once("Modelo/Residencia.php");

do {
    echo "\n-----------MENU DE ENERGIA-----------\n";
    echo "1- Calcular Consumo da Indústria\n";
    echo "2- Calcular Consumo do Comércio\n";
    echo "3- Calcular Consumo Residencial\n";
    echo "0- Sair do Programa\n";
    $opcaoSelecionada = readline("Escolha uma opção: ");

    switch ($opcaoSelecionada) {
        case 0:
            echo "Programa finalizado!\n";
            break;

        case 1:
            $consumoIndustrial = readline("Informe o consumo da indústria: ");
            $ind = new Industrial();
            $ind->setConsumoIndustrial($consumoIndustrial);
            echo "Sua fatura industrial é de R$ " . $ind->getValorFatura() . "\n";
            break;

        case 2:
            $consumoComercial = readline("Informe o consumo do comércio: ");
            $com = new Comercial();
            $com->setConsumoComercial($consumoComercial);
            echo "Sua fatura comercial é de R$ " . $com->getValorFatura() . "\n";
            break;

        case 3:
            $consumoResidencial = readline("Informe o consumo residencial: ");
            $res = new Residencial();
            $res->setConsumoResidencial($consumoResidencial);
            echo "Sua fatura residencial é de R$ " . $res->getValorFatura() . "\n";
            break;

        default:
            echo "Opção inválida, tente novamente!\n";
    }
} while ($opcaoSelecionada != 0);

