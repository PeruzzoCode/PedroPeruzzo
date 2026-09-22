<?php
        $nome="";
        $idade=0;
        $nota1=0;
        $nota2=0;
        $nota3=0;
        $nota4=0;
        $nota5=0;
        $media=0;
        $resultado="";
        

        if ($_SERVER["REQUEST_METHOD"]=="GET"){
            $nome = $_GET["name"];
            $idade = $_GET["idade"];
            $nota1 = $_GET["nota1"];
            $nota2 = $_GET["nota2"];
            $nota3 = $_GET["nota3"];
            $nota4 = $_GET["nota4"];
            $nota5 = $_GET["nota5"];
            
            $media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 1) + ($nota4 * 1) + ($nota5 * 3)) /10 ;

            if ($media >=7){
                $resultado = "Aprovado";
            } 

            elseif ($media >=5 && $media<7) { 
                $resultado = "de Recuperação";

            }
            
            else {
                $resultado = "Reprovado";
            }
        }
    ?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="notas-desafio.css">
    <title>Calculadora de média</title>
</head>
<body>

    <form method="GET">

        <input type="text" id="name" name="name" placeholder="Digite seu nome">
        <input type="number" id="idade" name="idade" placeholder="Digite sua idade"><br><br>
        <input type="number" id="nota1" name="nota1" placeholder="Digite sua nota da 1° prova:"><br><br>
        <input type="number" id="nota2" name="nota2" placeholder="Digite sua nota da 2° prova:"><br><br>
        <input type="number" id="nota3" name="nota3" placeholder="Digite sua nota da 3° prova:"><br><br>
        <input type="number" id="nota4" name="nota4" placeholder="Digite sua nota da 4° prova:"><br><br>
        <input type="number" id="nota5" name="nota5" placeholder="Digite sua nota da 5° prova:"><br><br>



        <button type="submit">Enviar</button>

    </form>

    <?php if($resultado != "") { ?>
    
        <h1>Relatório do aluno: <?= $nome ?></h1>
        <h2>Idade: <?= $idade ?></h2>
        <h2>Status: <?= $resultado?></h2>
        <h2>Média final: <?= $media?></h2>
        
        <?php  } ?>

    
        

</body>
</html>