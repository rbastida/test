<?php
$dir = dirname(__FILE__) . '/config/config.php';
require_once($dir);

function conn() {

    try {

        $host       = Config::DBHOST;
        $dbname     = Config::DBNAME;
        $user       = Config::DBUSER;
        $password   = Config::DBPASSWORD;
        
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conn->exec("set names utf8");        

        return($conn);
        
    } catch (\PDOException $e) {

        die("Não foi possível estabelecer uma conexão com o banco de dados: Erro código: " . $e->getCode() . ": " . $e->getMessage());
        
    }
    
}
