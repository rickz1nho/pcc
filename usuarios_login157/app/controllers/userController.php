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
            session_destroy();
            break;


        case 'update':
            update();
            break;

        case 'promove':
            promove();
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
        header("location: " . BASE_URL ."/index.php");
        
        
    }

    function update(){
        $nameUpdate  = $_POST['field_name_update'];
        $userUpdate  = $_POST['field_user_update'];
        $passUpdate  = $_POST['field_pass_update'];
        $emailUpdate = $_POST['field_email_update'];
    
    

        try {
            $repository = new UserRepository();  

            $repository->verifyIfUserNameExists($userUpdate);

            $repository->updateUser($nameUpdate, $userUpdate, $passUpdate, $emailUpdate, $_SESSION['usuario']['id']);    
        
            header("location:" . BASE_URL ."/valida_login.php");

        } catch (Exception $e) {

            $_SESSION['msg'] = $e->getMessage();
            echo ("usuario já existe");

                    header("location:" . BASE_URL . "/valida_login.php");
                  
        }
        
    }

    function promove(){
        $nome_promovido = $_POST['field_name_promove'];

        $repository = new UserRepository();

        $userId = $repository->getId($nome_promovido);

        $userBanco['usuario'] = $userId;

        $repository->promover($userBanco['usuario']['id']);

        header("location:" . BASE_URL . "/valida_login.php?msg=usuáriopromovido");
    }