<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/main.css">
  <title>Sign Up Form</title>

</head>
<body>
  <!-- SIGN UP FORM -->
  <div class="main-container">
     

  <form action="includes/formhandler.inc.php" method="post" class="form-container">
    <h3>Signup</h3>
     
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="email" name="email" placeholder="E-Mail">
    <button type="submit" > SIGN UP </button>
  </form>

  </div>
</body>
</html>