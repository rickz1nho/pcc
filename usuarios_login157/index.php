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
require_once __DIR__."/app/repositories/UserRepository.php";
if(isset($_SESSION['usuario'])){
    echo "Olá, " . $_SESSION['usuario']['nome'] . "<br>";
    echo "@" . $_SESSION['usuario']['usuario'];
}

?>

<h1>Home page</h1>
    <br>
    <br>


    <?php
    if(!isset($_SESSION['usuario'])){
     echo "<a href='login_page.php'>Realizar login</a><br>
     <br>" . "<a href='cadastro_usuario.php'>Cadastre-se</a>";
    }
    else{
        echo "<a href='valida_login.php'>Meu perfil</a>";
    }

    $repository = new UserRepository();
    $repository->view();
    ?>
    

    <br>
    <br>



</body>
</html>