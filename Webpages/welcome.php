<?php
  #Check if already logged in, else redirect
  require('Security/authentication.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Home</title>
  </head>
  <body>
      <h3>Successfully Logged In</h3><br>
      <div class="form">
        <p>Welcome <?php echo $_SESSION['name']; ?>!</p>
        <p>This is a very secure area.</p> <!-- Not Really -->
        <a href="logout.php">Logout</a>
      </div>
    </body>
</html>
