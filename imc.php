<?php
$nmr = 1;
for($cont = 1; $cont <= 5; $cont++){
    echo"Cliente $nmr\n";
    $nmr ++;
$nome = readline("Qual seu nome? ");
$altura = readline("Qual sua altura?(M) ");
$peso = readline("Qual seu peso?(KG) ");

$IMC = $peso / ($altura * $altura);
echo "$nome, considerando sua altura de $altura metros\nSeu peso de $peso Kg\nSeu IMC é: $IMC";
echo"\n\n";
}
