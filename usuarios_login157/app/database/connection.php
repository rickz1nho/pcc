<?php
class Connection {
    private static $connection = null;

    public static function getConnection():PDO {
        //conectar ao banco
        $host       = "localhost";
        $db         = "usuarios_acl";
        $charset    = "utf8";
        $db_usuario = "root";
        $db_senha   = ""; #

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC
        ];

        try {
            
            self::$connection = new PDO($dsn, $db_usuario, $db_senha, $options);        
        
        } catch(PDOException $e){
            print $e->getMessage();
        }

        return self::$connection;
    }

}