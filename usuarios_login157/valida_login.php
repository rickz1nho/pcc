

<?php 

    require_once __DIR__."/config.php";  

    valida_login();

    print_r($_SESSION['usuario']['id']);
  
?>

<h1>somente usuarios logados</h1>

<form action="app/controllers/userController.php?action=delete" method="POST">

<input type="submit" value="DELETAR USUARIO">


</form>

<form action="atualizar_usuario.php" method="POST">

<input type="submit" value = "ATUALIZAR USUARIO">

</form>
