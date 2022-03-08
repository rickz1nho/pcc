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
    
        require_once __DIR__."/config.php"; 


        if (!empty($_SESSION['msg'])) {
            echo $_SESSION['msg'];
            $_SESSION['msg'] = null;
        }

        valida_login();
        if(valida_nivel() != 1){

            header("location: {$base_path}/valida_login?msg=sempermissao.php");
            exit;
        
        }
    
    ?>


    <form action="app/controllers/userController.php?action=promove" method="POST">

    <label for="field_name_promove">Insira o nome  de usuário(*): </label>
    <input type="text" name="field_name_promove"> 
    
    <br />
    
    <input type="submit">

    <br />

    </form>
    
    <a href="valida_login.php">VOLTAR </a>

</body>
</html>