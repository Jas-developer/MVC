<?php 

$dsn = "mysql:host=localhost;dbname=myfirstdatabase"; //correct
$dbusername = "root";
$dbpassword = "macbookair";


try{
   $pdo = new PDO($dsn, $dbusername, $dbpassword);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //calling
}catch(PDOException $e){
    echo "Connection failed".$e->getMessage();
}