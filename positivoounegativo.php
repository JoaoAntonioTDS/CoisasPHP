<?php

   $n = 1;


  while($n <= 10) {

   $escolha = readline("Escolha um numero: ");
   
   if($escolha > 0) {
    echo "\nO número $escolha é positivo\n";
   }
   
   else{ 
    echo "\nO número $escolha é negativo\n";
   } 
   
    $n++;
}
