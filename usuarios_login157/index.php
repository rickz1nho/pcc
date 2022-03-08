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
if(valida_login() == 1){
    echo "Olá, " . $_SESSION['usuario']['nome'] . "<br>";
    echo "@" . $_SESSION['usuario']['usuario'];
}

?>

<h1>Home page</h1>
    <br>
    <br>
    </form>
    <a href="login_page.php">Realizar login</a>
    <br>
    <br>
    <a href="cadastro_usuario.php">Cadastre-se</a>

</body>
</html>