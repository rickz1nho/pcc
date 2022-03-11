<h1>Alterar password</h1>
<?php
  if( empty($_GET['utilizador']) || empty($_GET['confirmacao']) )
    die('<p>Não é possível alterar a password: dados em falta</p>');
 
    require_once __DIR__."/config.php";
    require_once __DIR__."/app/repositories/UserRepository.php";  
    require_once __DIR__."/app/database/connection.php";
 
  $user = $_GET['utilizador'];
  $hash = $_GET['confirmacao'];

  echo $hash;
 
  $repository = new UserRepository();

  $repository->formularioSenha($user, $hash);
 
?>