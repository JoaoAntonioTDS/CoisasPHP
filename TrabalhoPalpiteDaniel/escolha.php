<?php

session_start();
require_once 'modelo/palpite.php';


$palpites = [
    new Palpite("Internacional", "internacional.jpg", "Tem a maior rivalidade do Rio Grande do Sul"),
    new Palpite("São Paulo", "saopaulo.png", "Já foi campẽao mundial 3x"),
    new Palpite("Flamengo", "flamengo.jpg", "Tem a maior torcida do Brasil"),
];


if(!isset($_SESSION['correto'])) {
    $_SESSION['correto'] = rand(0, 2); 
}

$correto_index = $_SESSION['correto'];
$palpite_correto = $palpites[$correto_index];

$mensagem = "";
$classe_mensagem = "";
$palpite_usuario = isset($_GET['palpite']) ? (int)$_GET['palpite'] : null;

if ($palpite_usuario === null) {
    $mensagem = "Ocorreu algum erro e não temos o seu palpite, aperte em 'Tentar novamente' e escolha um dos 3 times";
    $classe_mensagem = "erro";
} elseif ($palpite_usuario < 1 || $palpite_usuario > 3) {
    $mensagem = "Esse palpite nao é aceito, forneça um palpite 1(Internacional), 2(São Paulo) ou 3(Flamengo)";
    $classe_mensagem = "erro";
} else {
    $index_usuario = $palpite_usuario - 1;

    if ($index_usuario === $correto_index) {
      
        $mensagem = "Parabens voce acertou<br>";
        $mensagem .= "Era: <strong>" . $palpite_correto->getNome() . "</strong><br>";
        $mensagem .= "<img src='" . $palpite_correto->getImagem() . "' alt='Correto'>";
        $classe_mensagem = "sucesso";

        
        unset($_SESSION['correto']);
    } else {
       
        $mensagem = "Voce errou tente novamente<br>";
        $mensagem .= "Dica: <strong>" . $palpite_correto->getDica() . "</strong><br>";
    
        $classe_mensagem = "erro";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; text-align: center; padding: 30px; }
        .erro { color: red; }
        .sucesso { color: green; }
        img { max-width: 300px; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Resposta:</h1>
    <div class="<?= $classe_mensagem ?>">
        <?= $mensagem ?>
    </div>
    <a href="pagina.php">Tentar novamente</a>
</body>
</html>


