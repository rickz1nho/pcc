

<?php 

require_once __DIR__."/config.php";  

valida_login();
if(valida_nivel() == 1){

    header("location: {$base_path}/adm_page.php");
    exit;

}elseif(valida_nivel() == 2){
    
    header("location: {$base_path}/editor_page.php");
    exit;

}else{
echo "Olá, usuario " . $_SESSION['usuario']['nome'] . "<br>";

echo "@" . $_SESSION['usuario']['usuario'];
}
?>

<form action="app/controllers/userController.php?action=delete" method="POST">

<input type="submit" value="DELETAR USUARIO">

</form>

<form action="atualizar_usuario.php" method="POST">

<input type="submit" value = "ATUALIZAR USUARIO">

</form>

<form action="app/controllers/logout.php" method="POST">

<input type="submit" value="SAIR">

</form>
