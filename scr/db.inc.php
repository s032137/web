<?php
    
    function db_connect() {
        $dsn = "mysql:dbname=account;host=localhost";
        $dbuser = "root";
        $dbpwd = "";

        try{
                $pdo = new PDO($dsn, $dbuser, $dbpwd);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
                
        }catch (PDOException $e){
                $e->getMessage();
        }
    }
        
   
?>
