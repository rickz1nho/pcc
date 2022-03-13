<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Codigo copiado-->
    <link href="assets/images/favicon/favicon.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i%7CWork+Sans:300,400,500,600,700,800,900" rel="stylesheet" type="text/css">
    <link href="assets/css/external.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">

    <!-- Termino do codigo copiado-->

    <title>Home</title>
</head>

<body>

    <div class="preloader">
        <div class="loader-eclipse">
            <div class="loader-content"></div>
        </div>
    </div>
    <div id="wrapper" class="wrapper clearfix">
        <div id="top-bar" class="top-bar bitcoin-tracker-dark">
            <div class="container-fluid pr-0 pl-0">
                <div class="row clearfix">
                    <div class="topbarBitcoinTracker"></div>
                </div>
            </div>
        </div>
    </div>

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
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bitcoinPriceWidgets.js"></script>
    <script src="assets/js/bitcoinPrice.js"></script>
    <script src="assets/js/bitcoinTracker.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/rsconfig.js"></script>
</body>

</html>