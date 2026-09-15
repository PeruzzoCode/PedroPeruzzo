<form method="POST">

        <input type="text" id="nome" name="nome">
        <input type="number" id="idade" name="idade">

        <?php
        $nome="";
        $idade=0;
        $resultado="";

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $nome = $POST["nome"];
            $idade = $POST["idade"];

            if ($idade >=18){
                $resultado = "Você é maior de idade";
            } 
            else {
                $resultado = "Você é menor de idade";
            }
        }
    ?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PedroPeruzzo</title>
</head>
<body>

    

    </form>

    <?php if($resultado != "") { ?>
    <div class="card">  
        <h1>nome: <?= $nome?> </h1>
        <p>idade: <?= $idade?></p>
        <p> <?= $resultado ?> </p>
    </div>
        <?php  } ?>

    
        

</body>
</html>