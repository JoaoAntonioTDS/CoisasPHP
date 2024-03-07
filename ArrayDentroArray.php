<?php
$vetor1 = [];

for ($i = 0; $i < 5; $i++) {
    $palavra = readline("Digite uma palavra: ");
    $vetor1[] = $palavra;
}

$vetor2 = [$vetor1];

foreach ($vetor2 as $v) {
    foreach ($v as $palavra) {
        echo "$palavra,";
    }
}
?>
