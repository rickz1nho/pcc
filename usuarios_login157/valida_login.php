<?php

require_once __DIR__ . "/config.php";

valida_login();
if (valida_nivel() == 1) {

    header("location: {$base_path}/adm_page.php");
    exit;
} elseif (valida_nivel() == 2) {

    header("location: {$base_path}/editor_page.php");
    exit;
} else {
    echo "Olá, usuario " . $_SESSION['usuario']['nome'] . "<br>";

    echo "@" . $_SESSION['usuario']['usuario'];
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="container">

    <form action="app/controllers/userController.php?action=delete" method="POST">

        <input type="submit" value="DELETAR USUARIO" onclick="return confirm('Tem certeza que deseja deletar sua conta?')">

    </form>

    <form action="atualizar_usuario.php" method="POST">

        <input type="submit" value="ATUALIZAR USUARIO">

    </form>

    <form action="app/controllers/logout.php" method="POST">

        <input type="submit" value="SAIR">

    </form>

    <a href="index.php">Pagina inicial</a>

</div>