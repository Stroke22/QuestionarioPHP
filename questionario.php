<!DOCTYPE html>
<html>
<head>
    <title>Questionário</title>
    <style>
        /* Estilos CSS para a página do questionário */
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            text-align: center;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        p {
            font-weight: bold;
        }
        input[type="submit"] {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        #pontuacao {
    font-size: 2em;
        }
    </style>
</head>
<body>

    <h1>Questionário</h1>
    <form method="post" action="resultado.php">
        <h2>Pergunta 1</h2>
        <p>Qual é a capital do Brasil?</p>
        <input type="radio" name="pergunta1" value="0"> a) Brasília<br>
        <input type="radio" name="pergunta1" value="1"> b) São Paulo<br>
        <input type="radio" name="pergunta1" value="2"> c) Rio de Janeiro<br>
        <input type="radio" name="pergunta1" value="3"> d) Belo Horizonte<br>
        
        <h2>Pergunta 2</h2>
        <p>Qual é a cor do céu em um dia ensolarado?</p>
        <input type="radio" name="pergunta2" value="0"> a) Azul<br>
        <input type="radio" name="pergunta2" value="1"> b) Verde<br>
        <input type="radio" name="pergunta2" value="2"> c) Vermelho<br>
        <input type="radio" name="pergunta2" value="3"> d) Amarelo<br>
        
        <h2>Pergunta 3</h2>
        <p>Qual é o animal símbolo da Austrália?</p>
        <input type="radio" name="pergunta3" value="0"> a) Canguru<br>
        <input type="radio" name="pergunta3" value="1"> b) Elefante<br>
        <input type="radio" name="pergunta3" value="2"> c) Girafa<br>
        <input type="radio" name="pergunta3" value="3"> d) Tigre<br>
        
        <h2>Pergunta 4</h2>
        <p>Qual é o maior órgão do corpo humano?</p>
        <input type="radio" name="pergunta4" value="0"> a) Fígado<br>
        <input type="radio" name="pergunta4" value="1"> b) Cérebro<br>
        <input type="radio" name="pergunta4" value="2"> c) Coração<br>
        <input type="radio" name="pergunta4" value="3"> d) Pele<br>
        
        <h2>Pergunta 5</h2>
        <p>Qual é o símbolo químico do oxigênio?</p>
        <input type="radio" name="pergunta5" value="0"> a) O<br>
        <input type="radio" name="pergunta5" value="1"> b) H<br>
        <input type="radio" name="pergunta5" value="2"> c) C<br>
        <input type="radio" name="pergunta5" value="3"> d) N<br>
        <input type="submit" name="submit" value="Enviar Respostas">
    </form>
    <?php
        session_start();

        // verifica se a pontuação está salva na variável de sessão
        
        if (isset($_SESSION['pontuacao'])) {
        
            // exibe a pontuação do usuário
       
        echo "<p id='pontuacao'>Você obteve uma pontuação de: " . $_SESSION['pontuacao'] . " pontos</p>";
        
        // remove a pontuação da variável de sessão para que não seja exibida novamente
        unset($_SESSION['pontuacao']);
        }
    ?>

</body>
</html>