<?php 

session_start();

$_SESSION["GOAL"]  = "Software Engineer";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
      echo $_SESSION["GOAL"];
     ?>
</body>
</html>