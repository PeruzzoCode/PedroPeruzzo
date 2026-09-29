<?php 
 $usuario="";
 $senha=123;
 $resultado="";

 if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

if ($usuario == "Pedro" && $senha == 123){
    $resultado = "Login realizado com sucesso";
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
    <title>Login</title>
</head>
<body>

    <form method = "POST">

        <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário: ">
        <input type="number" id="senha" name="senha" placeholder="Digite sua senha: ">

        <button type="submit">Entrar</button>

        <!--  Estou usando POST, pois nao aparece na url (é mais seguro para login) -->

    </form>

    <?php if($resultado != "") { ?>
        <h1><?= $resultado?></h1>
        
        <?php  } ?>

</body>
</html>
