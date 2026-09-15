
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PedroPeruzzo</title>
</head>
<body>

    <form action="">

        <input type="text" name="$nome" placeholder="Digite seu texto:">
        <input type="number" number="$idade" placeholder="Digite sua idade:">
        <button type="$idade">Click Me</button>

    </form>

    <?php
    $verificar = "";
    if ($idade >=18){
        $verificar = "Você é maior de idade";
    } 
    else if ($idade >=0) {
        $verificar = "Você é menor de idade";
    }
        
    ?>
    
    <div class="card">    
    <h1>nome: <?= $nome?> </h1>
    <p>idade: <?= $idade?></p>
    <p> <?= $verificar ?> </p>
    </div>

</body>
</html>