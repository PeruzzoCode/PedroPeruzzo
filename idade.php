<?php
        $nome="";
        $idade=0;
        $resultado="";

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $nome = $_POST["name"];
            $idade = $_POST["idade"];

            if ($idade >=18){
                $resultado = "maior";
            } 
            else {
                $resultado = "menor";
            }
        }
    ?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>VERIFICADOR DE IDADE!</title>
</head>
<body>

    <form method="POST">

        <input type="text" id="name" name="name" placeholder="Digite seu nome">
        <input type="number" id="idade" name="idade" placeholder="Digite sua idade">

        <button type="submit">Enviar</button>

    </form>

    <?php if($resultado != "") { ?>
    
        <h1>O <?= $nome ?> é <?= $resultado ?> de idade. Ele tem <?= $idade ?> anos.</h1>
        
        <?php  } ?>

    
        

</body>
</html>