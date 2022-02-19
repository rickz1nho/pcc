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
    
        session_start();


        if (!empty($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            $_SESSION['msg'] = null;
        }
    
    ?>


    <form action="app/controllers/userController.php?action=update" method="POST">

    <label for="field_name_update">Insira seu novo nome (*): </label>
    <input type="text" name="field_name_update"> 
    
    <br />
    
    <label for="field_user_update">Insira seu novo nome de usuário (*): </label>
    <input type="text" name="field_user_update">
    
    <br />

    <label for="field_pass_update">Crie uma nova senha (*):</label>
    <input type="password" name="field_pass_update">
    
    <br />
    <label for="field_email_update">Coloque seu email (*): </label>
    <input type="text" name="field_email_update">
    
    <br />

    <input type="submit" value="Salvar">
    </form>
    
    <a href="valida_login.php">VOLTAR </a>

</body>
</html>