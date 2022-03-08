<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <?php

    require_once __DIR__."/config.php";

    valida_login();

    ?>
    <form action="app/controllers/login_controller.php" method="POST">
    

        <input placeholder="usuario" type="text" name="field_usuario">
        
        <br />

        <input placeholder="senha" type="password" name="field_senha">
        
        <br />
        <input type="submit">
    
    </form>
    <br>
    <br>

    <a href="cadastro_usuario.php"> Caso não tenha uma conta - Cadastre-se</a>

</body>
</html>