<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PedroPeruzzo</title>
</head>
<body>
    <?php
    $nome = "Peruzzo";
    $idade = "37";
    $verificar = "";
    if ($idade >=18){
        $verificar = "Você é maior de idade";
    } 
    else {
        $verificar = "Você é menor de idade";
    }
        
    ?>
    <h1>nome: <?= $nome?> </h1>
    <p>idade: <?= $idade?></p>
    <p> <?= $verificar ?> </p>
    
</body>
</html>