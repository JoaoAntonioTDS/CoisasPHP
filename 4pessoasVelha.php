<?php

// Função para encontrar a pessoa mais velha na matriz
function encontrarPessoaMaisVelha($pessoas) {
    $idadeMaisVelha = 0;
    $pessoaMaisVelha = null;

    foreach ($pessoas as $pessoa) {
        if ($pessoa['idade'] > $idadeMaisVelha) {
            $idadeMaisVelha = $pessoa['idade'];
            $pessoaMaisVelha = $pessoa;
        }
    }

    return $pessoaMaisVelha;
}

// Matriz para armazenar os dados das pessoas
$pessoas = array();

// Loop para ler os dados de 4 pessoas
for ($i = 1; $i <= 4; $i++) {
    echo "Pessoa $i:\n";

    // Array associativo para armazenar os dados de cada pessoa
    $pessoa = array(
        'nome' => readline("Nome: "),
        'idade' => intval(readline("Idade: ")),
        'cidadeNatal' => readline("Cidade Natal: "),
        'profissao' => readline("Profissão: ")
    );

    // Adiciona a pessoa à matriz
    $pessoas[] = $pessoa;

    echo "\n";
}

// Encontra e exibe os dados da pessoa mais velha
$pessoaMaisVelha = encontrarPessoaMaisVelha($pessoas);

if ($pessoaMaisVelha !== null) {
    echo "A pessoa mais velha é:\n";
    echo "Nome: " . $pessoaMaisVelha['nome'] . "\n";
    echo "Idade: " . $pessoaMaisVelha['idade'] . "\n";
    echo "Cidade Natal: " . $pessoaMaisVelha['cidadeNatal'] . "\n";
    echo "Profissão: " . $pessoaMaisVelha['profissao'] . "\n";
} else {
    echo "Não há dados para encontrar a pessoa mais velha.\n";
}

?>
