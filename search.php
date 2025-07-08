<?php
// CHECK IF THE REQUEST METHOD IS POST 
if($_SERVER["REQUEST_METHOD"] == "POST"){

   $usersearch = $_POST["usersearch"]; //grabbing the data from form data
   //TRY CATCH BLOCK
 try{
   require_once "includes/dbh.inc.php";
   $query = "SELECT * FROM comments WHERE username = :usersearch;";
   $stmt = $pdo->prepare($query);
   $stmt->bindParam(":usersearch", $usersearch);
   $stmt->execute();
   //grabing data and put it into our php variable
   $results = $stmt->fetchAll(PDO::FETCH_ASSOC); // get all the result from query into an array
   $pdo = null; 
   $stmt = null; //free up resources early result to lighter code
   } catch ( PDOException $e) {
     die("Query Failed: ".$e->getMessage());
   } 
 }else{
    header("Location: ../index.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This will Search Data from Data Base</title>
</head>
<body>
    
 <section>
 <h3>Search Results</h3>
  <?php 
   if(empty($results)){
     echo "<p>There was no result!</p>";
     echo "<div>";
     echo "</div>";
   }else {
     foreach($results as $row){
       echo 
          "<div>
               $name = htmlspecialchars($row["username"]);
               $comment = htmlspecialchars($row["comment_text"]);   
               echo "<h4> $name: $comment </h4> </br>";
          </div>"
     };
   };
 ?>
 </section>
</body>
</html>

