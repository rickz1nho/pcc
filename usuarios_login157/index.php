<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Home page</h1>

            </div>
            <?php

            require_once __DIR__ . "/config.php";
            require_once __DIR__ . "/app/repositories/UserRepository.php";
            if (isset($_SESSION['usuario'])) {
            ?>
                <div class="col mt-2">
                    <p> Olá, <?= $_SESSION['usuario']['nome'] ?>
                        @ <?= $_SESSION['usuario']['usuario'] ?></p>
                </div>
            <?php } ?>




            <?php
            if (!isset($_SESSION['usuario'])) {
            ?>
                <div class="col">
                    <a class="btn btn-default" href='login_page.php'>Realizar login </a>

                    <a class="btn btn-default" href='cadastro_usuario.php'>Cadastre-se</a>
                </div>
            <?php
            } else {
            ?>
                <div class="col">
                    <a class="btn btn-default" href='valida_login.php'>Meu perfil</a>
                </div>
            
    <form action="app/controllers/controllerForm.php?action=delete" method="POST">

            <?php
            }

            $repository = new UserRepository();
            $repository->view();


            ?>

<input type="submit" value="DELETAR PUBLICACAO" onclick="return confirm('Tem certeza que deseja deletar essa publicacao?')">

</form>

        </div>
    </div>
    <br>
    <br>



</body>

</html>