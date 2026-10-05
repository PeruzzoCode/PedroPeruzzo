<?php
    require "conexao.php";

    echo "<br>Meu sistema está conectado!";

    $sql = "CREATE TABLE IF NOT EXISTS teste  (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(100),
    idade INT 
    )";

    $pdo -> exec($sql);

    echo "<br>Tabela criada com sucesso!";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Document</title>
</head>
<body>
    <br><br><a href="idade.php">Verificador de idade</a><br><br>
    <a href="notas.php">Verificador de notas</a><br><br>
    <a href="notas-desafio.php">Verificador de notas (desafio)</a><br><br>
    <a href="login-basico.php">Login básico</a><br><br>
    <a href="jogos.php">Tabela de jogos</a><br><br>

    <header>
            <nav class="navbar">

                <h2 class="logo">Meu Portifólio</h2>

                <ul class="menu">
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#habilidades">Habilidades</a></li>
                    <li><a href="#projetos">Projetos</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
    </header>
</body>
</html>