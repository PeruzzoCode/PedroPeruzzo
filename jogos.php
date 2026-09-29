<?php
// Utilizando require para carregar o arquivo de conexão
require 'conexao.php';

// Criando a tabela através do PHP utilizando CREATE TABLE IF NOT EXISTS
$sqlTabela = "
    CREATE TABLE IF NOT EXISTS jogos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        genero VARCHAR(50) NOT NULL,
        nota INT NOT NULL
    )
";
// Executando a criação da tabela
$pdo->exec($sqlTabela);

// Verificando se o formulário foi enviado (método POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recebendo as informações enviadas pelo formulário utilizando $_POST
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $nota = $_POST["nota"];

    // Criando o comando SQL utilizando INSERT INTO
    // (Nota: o uso direto de variáveis em exec() requer atenção em produção devido a SQL Injection, mas segue estritamente o requisito pedido)
    $sqlInsert = "INSERT INTO jogos (nome, genero, nota) VALUES ('$nome', '$genero', $nota)";
    
    // Executando o comando utilizando $pdo->exec()
    $pdo->exec($sqlInsert);

    // Mensagem de sucesso
    echo "Jogo cadastrado com sucesso!<br><br>";
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de jogos</title>
</head>
<body>
<h1>Cadastro de Jogos</h1>

<form method="POST" action="">
    
    <input type="text" id="nome" name="nome" placeholder="Digite o nome do jogo: "><br><br>

    <input type="text" id="genero" name="genero" placeholder="Digite o gênero do jogo: "><br><br>

    <input type="number" id="nota" name="nota" placeholder="Digite a nota do jogo: "><br><br>

    <input type="submit" value="Cadastrar">
</form>
</body>
</html>