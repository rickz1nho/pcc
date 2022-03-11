<?php

    require_once __DIR__."/../../config.php";
    require_once __DIR__."/../repositories/UserRepository.php";


    //roteamento

    switch ($_GET['action']) {
       
        case 'save':
            salvarPublicacao();
            break;

        case 'delete':
            delete();
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



    function salvarPublicacao(){
    }

        ?>