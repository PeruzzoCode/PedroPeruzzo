       <?php
        $nome="";
        $idade=0;
        $resultado="";

        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $nome = $POST["nome"];
            $idade = $POST["idade"];

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
    <title>PedroPeruzzo</title>
</head>
<body>

    <form method="POST">

        <input type="text" id="nome" name="nome" required>
        <input type="number" id="idade" name="idade" required>

        <button type="submit">Enviar</button>

    </form>

    <?php if($resultado != "") { ?>
    <div class="card">  
        
        <h1><?= $nome ?> é <?= $resultado ?> de idade. Ele tem <?= $idade ?> anos.</h1>
        
    </div>
        <?php  } ?>

    
        

</body>
</html>