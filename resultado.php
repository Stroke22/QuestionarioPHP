<?php
// Recebe as respostas do formulário
$resposta1 = $_POST['pergunta1'];
$resposta2 = $_POST['pergunta2'];
$resposta3 = $_POST['pergunta3'];
$resposta4 = $_POST['pergunta4'];
$resposta5 = $_POST['pergunta5'];
// Soma as respostas
$pontuacao = $resposta1 + $resposta2 + $resposta3 + $resposta4 + $resposta5;


session_start();
$_SESSION['pontuacao'] = $pontuacao;
header('location: questionario.php');
exit();
?>
