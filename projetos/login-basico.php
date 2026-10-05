<?php 
 $usuario="";
 $senha=0;
 $resultado="";

 if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

if ($usuario == "Pedro" && $senha == 123){
    $resultado = "Logado com sucesso!";
}
else{
    $resultado = "Usuário ou senha incorretos";
}

 }
    ?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login-basico.css">
    <title>Login</title>
</head>
<body>

    <form method = "POST">

        <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário: ">
        <input type="number" id="senha" name="senha" placeholder="Digite sua senha: ">

        <button type="submit">Entrar</button>
        <br><br>

        <!--  Estou usando POST, pois nao aparece na url (é mais seguro para login) -->

    </form>

    <?php if($resultado != "") { ?>
        <h1><?= $resultado?></h1>
        
        <?php  } ?>
        <br><br><br><br><br><br><a href="../index.php">Voltar ao início!</a>
</body>
</html>
