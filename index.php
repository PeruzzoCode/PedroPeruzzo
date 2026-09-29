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
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <br><br><a href="idade.php">Verificador de idade</a><br><br>
    <a href="notas.php">Verificador de notas</a><br><br>
    <a href="notas-desafio.php">Verificador de notas (desafio)</a><br><br>
    <a href="login-basico.php">Login Básico</a><br><br>
    <a href="jogos.php">Tabela de Jogos</a><br><br>

</body>
</html>