<?php
class Pokemon{


public $nome;
public $tipo;
public $ataque;
public $defesa;
public $velocidade;

public $nivel;
public $pontosVida;
public $experiencia;



     function __construct()
{
    $this -> nivel = 1;
    $this -> pontosVida = 10;
    $this -> experiencia = 1;
}

function batalhar(){

    $this -> aumentarExperiencia(5);

}
function aumentarNivel(){

    $this -> nivel = $this -> nivel +1;
    $this -> aumentarPontosVida();
    $this -> experiencia = 0;
}

function aumentarPontosVida(){

    $this -> pontosVida = $this -> nivel * 10;

}

function aumentarExperiencia($exp){

    $this -> experiencia += $exp;
    if($this-> experiencia >= 100)
    $this -> aumentarNivel();
}
function dados(){
    $retorno = "\n \nNome = " . $this -> nome . " / ";
    $retorno = $retorno . "\nTipo = " . $this -> tipo . " / ";
    $retorno = $retorno . "\nNivel = " . $this -> nivel . " / ";
    $retorno = $retorno . "\nPontos de Vida = " . $this -> pontosVida . " / ";
    $retorno = $retorno . "\nExperiencia = " . $this -> experiencia . " / \n";
    return $retorno;
}
}

$psyduck = new Pokemon();
$psyduck -> nome = "Psyduck";
$psyduck -> tipo = "Aquatico";
for ($i=0; $i <= 5; $i++){
$psyduck -> batalhar();
 } echo $psyduck -> dados();

$charizard = new Pokemon();
$charizard -> nome = "Charizard";
$charizard -> tipo = "Ar";
for ($i=0; $i <= 5; $i++){
    $charizard -> batalhar();
     } echo $charizard -> dados();
