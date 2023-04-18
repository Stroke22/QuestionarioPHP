<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Questionário</title>
</head>
<body>
    <h1>Resultado do Questionário</h1>
    
    <?php
    // Recebe as respostas do formulário
    $resposta1 = $_POST['pergunta1'];
    $resposta2 = $_POST['pergunta2'];
    $resposta3 = $_POST['pergunta3'];
    $resposta4 = $_POST['pergunta4'];
    $resposta5 = $_POST['pergunta5'];
    // Soma as respostas
$pontuacao = $resposta1 + $resposta2 + $resposta3 + $resposta4 + $resposta5;
?>
<p>Você obteve a pontuação: <?php echo $pontuacao; ?></p>
</body>
</html>