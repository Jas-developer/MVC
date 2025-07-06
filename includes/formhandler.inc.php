<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $username = $_POST["username"];
   $pwd = $_POST["password"];
   $email = $_POST["email"];
// TRY CATCH BLOCK
   try{
 
    require_once "dbh.inc.php";
   
   


   } catch ( PDOException $e) {
     die("Query Failed: ".$e->getMessage());
   } 
    

}else{
    header("Location: ../index.php")
}
