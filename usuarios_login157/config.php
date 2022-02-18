<?php 

    //Apenas para ambientes de teste
    //Remover quando for apresentar
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();

    $base_path = "http://localhost/usuarios_login157";

    define("BASE_URL", "http://localhost/usuarios_login157");


    function valida_login(){
            
        if(!isset($_SESSION['usuario']) || $_SESSION['usuario'] == null || $_SESSION['usuario'] == "") {
            print "sem permissão";
            exit;
        }
        
    }
