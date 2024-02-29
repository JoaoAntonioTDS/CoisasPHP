<?php
    
    $escolha = 1;
    $resto = 0;
   
    while($escolha > 0){

        $escolha = readline("Informe um número: ");
        $resto = $escolha % 2;
        
        if($resto == 0){
            echo "$escolha é um número par\n";
        } else{
            echo "$escolha é um número impar\n";
        }

    }
