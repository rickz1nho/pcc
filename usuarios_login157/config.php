<?php

//Apenas para ambientes de teste
//Remover quando for apresentar
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$base_path = "http://localhost/usuarios_login157";

define("BASE_URL", "http://localhost/usuarios_login157");


function valida_login()
{

    if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == null || $_SESSION['usuario'] == "") {
        echo "sem permissão";
        exit;
    } else return 1;
}

function valida_nivel()
{
    if ($_SESSION['usuario']['nivel'] == 4) {
        return 1;
    } elseif ($_SESSION['usuario']['nivel'] == 3) {
        return 2;
    }
}
