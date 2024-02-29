<?php
    
    $Man = array("man1", "man2", "man3", "man4",  "man5");
    $Girl = array("girl1", "girl2", "girl3", "girl4" , "girl5");
    $Aluno = array("aluno1", "aluno2", "aluno3", "aluno4" , "aluno5");
    $Casa = array("casa1", "casa2", "casa3", "casa4" , "casa5");

    foreach($Man as $num){
     echo$num . " | ";
    }echo "\n";
    foreach($Girl as $num){
     echo$num . " | ";
    }echo "\n";
    foreach($Aluno as $num){
     echo$num . " | ";
    }echo "\n";
    foreach($Casa as $num){
     echo$num . " | ";
    }echo "\n";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



<?php
    function imprimeVetor($vet){
    foreach($vet as $v){
        echo $v . " | ";
       }echo "\n";
    }
    $Man = array("man1", "man2", "man3", "man4",  "man5");
    $Girl = array("girl1", "girl2", "girl3", "girl4" , "girl5");
    $Aluno = array("aluno1", "aluno2", "aluno3", "aluno4" , "aluno5");
    $Casa = array("casa1", "casa2", "casa3", "casa4" , "casa5");

imprimeVetor($Man);
imprimeVetor($Girl);
imprimeVetor($Aluno);
imprimeVetor($Casa);
