<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $username = $_POST["username"];
   $pwd = $_POST["password"];
   $email = $_POST["email"];
// TRY CATCH BLOCK
   try{
    require_once "dbh.inc.php";
    
   $query = "INSERT INTO users (username, pwd, email ) VALUES 
   (":username",":pwd",":email");";


   $stmt = $pdo->prepare($query);

   $stmt->bindParam(":username", $username);
   $stmt->bindParam(":pwd", $pwd);
   $stmt->bindParam(":email", $email);
   
   $stmt->execute();

   $pdo = null;
   $stmt = null;


   header("Location: ../index.php");

   die();
   
   } catch ( PDOException $e) {
     die("Query Failed: ".$e->getMessage());
   } 
    

}else{
    header("Location: ../index.php");
}
