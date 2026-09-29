<?php
require 'conexao.php';

$sqlTabela = "
    CREATE TABLE IF NOT EXISTS jogos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        genero VARCHAR(50) NOT NULL,
        nota INT NOT NULL
    )
";
$pdo->exec($sqlTabela);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $nota = $_POST["nota"];

    $sqlInsert = "INSERT INTO jogos (nome, genero, nota) VALUES ('$nome', '$genero', $nota)";
    
    $pdo->exec($sqlInsert);

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