<?php
    // 1. DECLARARO CAMINHO DO ARQUIVO JSON
    $caminho = __DIR__ . "/dados.json";

    // 2. ABRIR/LER O ARQUIVO JSON
    $json = file_get_contents($caminho);

    // 3. TRANSFORMAR JSON EM ARRAY PHP
    $alunos = json_decode($json, true);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $acao = $_POST["acao"];
        if ($acao == "cadastrar"){
            // 4. CRIAR UM ALUNO
            $novoAluno = [
                "nome" => $_POST["nome"],
                "idade" => $_POST["idade"],
                "curso" => $_POST["curso"]
            ];

            // 5. ADICIONAR O ALUNO NO ARRAY
            $alunos[] = $novoAluno;

            // 6. TRANSFORMAR ARRAY PHP EM JSON
            $jsonAtualizado = json_encode($alunos,
                JSON_PRETTY_PRINT | 
                JSON_UNESCAPED_UNICODE   
            );

            // 7. salvar no arquivo
            file_put_contents($caminho,
            $jsonAtualizado);
    }
    if ($acao == "atualizar"){
        // PEGAR OS DADOS DO FORMULARIO

        $nome = $_POST["nome"];
        $novaIdade = $_POST["idade"];
        $novoCurso = $_POST["curso"];

        // PERCORRER TODOS OS ALUNOS

        foreach($alunos as $posicao => $aluno){ 
            if($aluno["nome"] == $nome){
                $alunos[$posicao]["idade"] = $novaIdade;
                $alunos[$posicao]["curso"] = $novoCurso;
            }

        }
        $jsonAtualizado = json_encode(
            $alunos,
            JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        );
    file_put_contents($caminho, $jsonAtualizado);
    }
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <label> Idade:</label>
        <input type="number" name="idade">
        <label>Curso:</label>
        <input type="text" name="curso">
        <button type="submit" name="acao" value="atualizar">Cadastrar!</button>
    </form>
    
    <h2>ALUNOS CADASTRADOS</h2>
    <?php foreach($alunos as $aluno) { ?>
        <h3>Nome: <?=  $aluno["nome"] ?></h3>
        <p>Idade: <?=   $aluno["idade"]?></p>
        <p>Curso: <?=   $aluno["curso"]?></p>
    <?php } ?>

    <form method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <label> Idade:</label>
        <input type="number" name="idade">
        <label>Curso:</label>
        <input type="text" name="curso">
        <button type="submit" name="acao" value="atualizar">Autalizar!</button>
    </form>


</body>
</html>