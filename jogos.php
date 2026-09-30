<?php
require 'conexao.php';

$sqlTabela = "
    CREATE TABLE IF NOT EXISTS jogos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        genero VARCHAR(50) NOT NULL,
        nota INT NOT NULL,
        ano_lancamento INT
    )
";

$pdo->exec($sqlTabela);
echo "debug1";

// $sqlInsert = "ALTER TABLE jogos ADD ano_lancamento INT";
// $pdo->exec($sqlInsert);
// echo "debug2";




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $nota = $_POST["nota"];

    $sqlInsert = "INSERT INTO jogos (nome, genero, nota) VALUES ('$nome', '$genero', $nota)";
    
    $pdo->exec($sqlInsert);
    echo "debug3";


    //exec= executa quando voce nao precisa receber registros de volta
    echo "Jogo cadastrado com sucesso!<br><br>";
}

    //BUSCAR TODOS OS JOGOS REGISTRADOS NO BANCO DE DADOS
    $buscar = "SELECT * FROM jogos";

    //query= executa quando voce precisa receber registros de volta
    $stmt = $pdo -> query($buscar);

    $jogos = $stmt ->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jogos.css">
    <title>Cadastro de jogos</title>
</head>
<body>
<h1>Cadastro de Jogos</h1>

<form method="POST" action="">
    
    <input type="text" id="nome" name="nome" placeholder="Digite o nome do jogo: "><br><br>

    <input type="text" id="genero" name="genero" placeholder="Digite o gênero do jogo: "><br><br>

    <input type="number" id="nota" name="nota" placeholder="Digite a nota do jogo: "><br><br>

    <input type="number" id="ano_lancamento" name="ano_lancamento" placeholder="Digite a data de lançamento: "><br><br>

    <input type="submit" value="Cadastrar">
</form>

    <h2>JOGOS CADASTRADOS</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Nota</th>
            <th>Data de lançamento</th>
        </tr>

    <!--foreach()-> para cada item nessa lista, faca tal coisa-->
        <?php foreach($jogos as $jogo){?>
            <tr>
                <td><?= $jogo ["id"] ?></td>
                <td><?= $jogo ["nome"] ?></td>
                <td><?= $jogo ["ano_lancamento"] ?></td>
                <td><?= $jogo ["genero"] ?></td>
                <td><?= $jogo ["nota"] ?></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>