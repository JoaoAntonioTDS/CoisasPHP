<?php

$ArrayDez = [];

for ($i = 1; $i <= 10; $i++) {
    $numero = readline("Informe o {$i}º número: ");
    $ArrayDez[] = $numero;
}
$media = array_sum($ArrayDez) / count($ArrayDez);
echo "A média dos valores informados é: " . $media;


