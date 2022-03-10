<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <title>Login do Usuário</title>
</head>
<body class="corpo">

<?php


require_once __DIR__."/config.php";
    if(isset($_SESSION['usuario'])){
    echo  "<script>alert('Você já está logado!');</script>";
    header("location: {$base_path}/index.php?msg=talogadoja");
    }
    

?>
 <h2 class="titulo">Login</h2>
   <div class="login-box">
       <div class="user-box">
        <form action="app/controllers/login_controller.php" method="POST">

        <input placeholder="Usuário" type="text" name="field_usuario">
        <input placeholder="Senha" type="password" name="field_senha">
        </div>
        <input class="button" type="submit" value="Confirmar">
    </form>
</div>
    <br>
    <br>
 
    <div class="cadastro2">
    <a href="cadastro_usuario.php"> Caso não tenha uma conta - Cadastre-se</a>
</div>



</body>
</html>