<?php

    require_once __DIR__."/../../config.php";
    require_once __DIR__."/../repositories/UserRepository.php";


    //roteamento

    switch ($_GET['action']) {
       
        case 'register':
            register();
            break;

        case 'delete':
            delete();
            break;


        case 'update':
            update();
            break;
        
        default:
            # code...
            break;
    }



    function register(){

    
        $nameCadastro  = $_POST['field_nome_cadastro'];
        $userCadastro  = $_POST['field_usuario_cadastro'];
        $passCadastro  = $_POST['field_senha_cadastro'];
        $emailCadastro = $_POST['field_email_cadastro'];
    
        
        //validacao
        if (empty($userCadastro) OR empty($passCadastro) OR empty($nameCadastro) OR empty($emailCadastro)) {
            # se usuario ou senha estiverem vazios
            header("location: " . BASE_URL ."/cadastro_usuario.php?msg=existemcamposnulos");
            exit; //nada eh executado daqui pra baixo...
        }
    

        try {
            $repository = new UserRepository();  

            $repository->verifyIfUserNameExists($userCadastro);

            $repository->criarUsuario($nameCadastro, $userCadastro, $passCadastro, $emailCadastro);

            
        
            header("location:" . BASE_URL ."/index.php");

        } catch (Exception $e) {

            $_SESSION['msg'] = $e->getMessage();


                    header("location:" . BASE_URL . "/cadastro_usuario.php");
        }


    }

    function delete(){
        $repository = new UserRepository();

        $repository->deletarUsuario($_SESSION['usuario']['id']);
    }

    function update(){
    
       /* $nameCadastro  = $_POST[''];
        $userCadastro  = $_POST[''];
        $passCadastro  = $_POST[''];
        $emailCadastro = $_POST[''];
    
        
        //validacao
        if (empty($userCadastro) OR empty($passCadastro) OR empty($nameCadastro) OR empty($emailCadastro)) {
            # se usuario ou senha estiverem vazios
            header("location: " . BASE_URL ."/cadastro_usuario.php?msg=existemcamposnulos");
            exit; //nada eh executado daqui pra baixo...
        }
    

        try {
            $repository = new UserRepository();  

            $repository->verifyIfUserNameExists($userCadastro);

            $repository->criarUsuario($nameCadastro, $userCadastro, $passCadastro, $emailCadastro);

            
        
            header("location:" . BASE_URL ."/index.php");

        } catch (Exception $e) {

            $_SESSION['msg'] = $e->getMessage();


                    header("location:" . BASE_URL . "/cadastro_usuario.php");
                  
        }
        */  
        echo "update";
    }