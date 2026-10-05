<?php

require __DIR__. "/conexao.php";

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

/// $sqlInsert = "ALTER TABLE jogos ADD ano_lancamento INT";
// $pdo->exec($sqlInsert);
// echo "debug2";

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $genero = $_POST["genero"];
    $nota = $_POST["nota"];
    $ano_lancamento = $_POST["ano_lancamento"];
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario == "pedro" && $senha == "123"){
        $sqlInsert = "INSERT INTO jogos (nome, genero, nota, ano_lancamento) VALUES ('$nome', '$genero', $nota, $ano_lancamento)";
        
        $pdo->exec($sqlInsert);

        $mensagem = "Jogo cadastrado com sucesso!<br><br>";
    }
    else {
        $mensagem = "Senha ou usuário incorreto!<br><br>";
    }

    echo $mensagem;
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

    <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário: ">
    <input type="number" id="senha" name="senha" placeholder="Digite sua senha: "><br><br><br><br>

    <input type="text" id="nome" name="nome" placeholder="Digite o nome do jogo: "><br><br>

    <input type="text" id="genero" name="genero" placeholder="Digite o gênero do jogo: "><br><br>

    <input type="number" id="nota" name="nota" placeholder="Digite a nota do jogo: "><br><br>

    <input type="number" id="ano_lancamento" name="ano_lancamento" placeholder="Digite a data de lançamento do jogo: "><br><br>

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
                <td><?= $jogo ["genero"] ?></td>
                <td><?= $jogo ["nota"] ?></td>
                <td><?= $jogo ["ano_lancamento"] ?></td>
            </tr>
        <?php } ?>
    </table>

    <?php if($mensgem != "") { ?>
        <h1><?= $mensagem?></h1>
        
        <?php  } ?>
        
    <br><br><br><br><br><br><a href="index.php">Voltar ao início!</a>
</body>
</html>