<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update & Delete User</title>
</head>
<body>


<div class="parent-container">
    <!-- WILL UPDATE OR MODIFY DATA INSIDE DATABASE -->
     <div class="update-container">
        <h3>Update Account</h3>
          <form action="includes/userupdate.inc.php" method="post">
            <input type="text" name="username" placeholderr="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="email" name="email" placeholder="E-mail">
            <button type="submit">Update</button>
          </form> 
     </div>
 
    <!-- WILL REMOVE OR DELETE DATA INSIDE DATABASE -->

   <div class="delete-container">
    <h3> Delete Account </h3>
     <form action="includes/userdelete.inc.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <button type="submit"> delete </button>
     </form>
   </div>
</div>
    
</body>
</html>