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
        $erro="";
        $pontos=0;
        

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $nome = $_POST["name"];
            $idade = (int) $_POST["idade"];
            $nota1 = (float) $_POST["nota1"];
            $nota2 = (float) $_POST["nota2"];
            $nota3 = (float) $_POST["nota3"];
            $nota4 = (float) $_POST["nota4"];
            $nota5 = (float) $_POST["nota5"];
            $erro = $_POST["erro"];
            
            if ($idade <= 0 || $nota1 < 0 || $nota1 >10 || $nota2 < 0 ||  $nota2 >10 || $nota3 < 0 || $nota3 >10 || $nota4 < 0 || $nota4 >10 || $nota5 < 0 || $nota5 >10 ) {
                $erro = "A nota deve ser entre 0 e 10. A idade deve ser maior que 0.";
                
            }

            else {
                $media = (($nota1 * 2) + ($nota2 * 3) + ($nota3 * 1) + ($nota4 * 1) + ($nota5 * 3)) /10 ;
            }

            if ($media == 10){
                $resultado = "APROVADO COM EXELÊNCIA";
            }

            elseif ($media >=7 ){
                $resultado = "Aprovado";
            } 

            elseif ($media >=5 && $media<7) { 
                $resultado = "de Recuperação";
                $pontos = 7 - $media;
            }
            
            else {
                $resultado = "Reprovado";
                $pontos = 7 - $media;
            }
        }
    ?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="notas.css">
    <title>Calculadora de média</title>
</head>
<body>

    <form method="POST">

        <input type="text" id="name" name="name" placeholder="Digite seu nome">
        <input type="number" id="idade" name="idade" placeholder="Digite sua idade"><br><br>
        <input type="number" step="any" id="nota1" name="nota1" placeholder="Digite sua nota da 1° prova:"><br><br>
        <input type="number" step="any" id="nota2" name="nota2" placeholder="Digite sua nota da 2° prova:"><br><br>
        <input type="number" step="any" id="nota3" name="nota3" placeholder="Digite sua nota da 3° prova:"><br><br>
        <input type="number" step="any" id="nota4" name="nota4" placeholder="Digite sua nota da 4° prova:"><br><br>
        <input type="number" step="any" id="nota5" name="nota5" placeholder="Digite sua nota da 5° prova:"><br><br>



        <button type="submit">Enviar</button>

    </form>

    

    <?php if($resultado != "") { ?>
    
        <h1>Relatório do aluno: <?= $nome ?></h1>
        <h2>Idade: <?= $idade ?></h2>
        <h2>Status: <?= $resultado?></h2>
        <h2>Falta <?= $pontos?> pontos para atingir a média.</h2>
        <h2>Média final: <?= $media?></h2>
        <h1 style="color: red;"><?= $erro ?></h1>
        
        <?php  } ?>

    
        

</body>
</html>