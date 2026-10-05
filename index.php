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
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>
    <br><br><a href="projetos/idade.php">Verificador de idade</a><br><br>
    <a href="projetos/notas.php">Verificador de notas</a><br><br>
    <a href="projetos/notas-desafio.php">Verificador de notas (desafio)</a><br><br>
    <a href="projetos/login-basico.php">Login básico</a><br><br>
    <a href="projetos/jogos.php">Tabela de jogos</a><br><br>

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

    <main>
        <section id="inicio" class="inicio">
            <div class="inicio-conteudo">
                <p class="saudacao">Olá! Eu sou</p>
                <h1>Pedro Peruzzo</h1>
                <h2>Desenvolvedor em formação</h2>
                <p>Sou estudante de desenvolvimento de sistemas.</p>
                <a href="#projetos" class="botao"></a>
                Ver meus projetos
            </div>
        </section>
    </main>
</body>
</html>