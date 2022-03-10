<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 


        if (!empty($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            $_SESSION['msg'] = null;
        }

        require_once __DIR__."/config.php";
        if(isset($_SESSION['usuario'])){
        echo  "<script>alert('Você já está logado!');</script>";
        header("location: {$base_path}/index.php?msg=talogadoja");
        }
    
    ?>


    <form action="app/controllers/userController.php?action=register" method="POST">

    <label for="field_nome_cadastro">Insira seu nome (*): </label>
    <input type="text" name="field_nome_cadastro"> 
    
    <br />
    
    <label for="field_usuario_cadastro">Crie um nome de usuário (*): </label>
    <input type="text" name="field_usuario_cadastro">
    
    <br />

    <label for="field_senha_cadastro">Crie uma senha (*):</label>
    <input type="password" name="field_senha_cadastro">
    
    <br />
    <label for="field_email_cadastro">Coloque seu email (*): </label>
    <input type="text" name="field_email_cadastro">
    
    <br />

    <input type="submit">
    </form>
    
    <a href="index.php">VOLTAR </a>

</body>
</html>