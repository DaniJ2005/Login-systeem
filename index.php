<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="navbar-container">
    <a href="sign-in.php">Login</a>
    <a href="sign-up.php">Register</a>
  </nav>

  <?php 
  if (isset($_SESSION["useruid"])) {

      echo "<div>Welcome " . "<p>" . $_SESSION["useruid"] . "</p></div>";

  }
  else {
      echo "<div>HomePage</div>";
  }
      ?>



</body>
</html>