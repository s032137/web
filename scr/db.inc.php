<?php
$dsn = "mysql:dbname=book;host=localhost";
$dbuser = "root";
$dbpwd = "";

try{
	$pdo = new PDO($dsn, $dbuser, $dbpwd);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,
						PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
	$e->getMessage();
}
?>
