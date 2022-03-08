<?php

require_once __DIR__."/config.php";  

valida_login();

echo "Olá, editor " . $_SESSION['usuario']['nome'] . "<br>";
    
echo "@" . $_SESSION['usuario']['usuario'];

?>

<form action="atualizar_usuario.php" method="POST">

<input type="submit" value = "ATUALIZAR USUARIO">

</form>

<form action="app/controllers/logout.php" method="POST">

<input type="submit" value="SAIR">

</form>