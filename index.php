<?php

require "C:/xampp/htdocs/EAFC24_teste/php/connect.php";

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAFC 24  UT BANCO DE DADOS - LOGIN</title>
    <link rel="stylesheet" href="./css/login-style.css">
    
</head>
<body>
    <div class="titulo-img">
        <img src="./images/ea-sports-fc-logo-white.png" alt="">
    </div>

    <div class="titulo-frase">
        <h1>Bem-vindo(a) ao Banco de dados do Ultimate Team do EAFC 24! (Gael Ver 1.0)</h1>
    </div>

    <div class="caixa-login">
        <br>
        <label class="label-login">
            Login: <input type="text" id="login" name="login" placeholder="Digite aqui seu login!" required>
        </label>
        <label class="label-senha">
            Senha: <input type="password" id="senha" name="senha" placeholder="Digite aqui sua senha!" required>
        </label>
        <br><br>
        <div class="botao">
            <button>Entrar</button>
        </div>
    </div>
    
</body>
</html>