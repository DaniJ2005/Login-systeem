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
  <nav>
    
  </nav>
  <section class="login-section">
    <div class="login-container">
      <h2 class="title">LOGIN</h2>

      <form class="form" action="includes/login.inc.php" method="post" id="login">


        <label class="label" for="uid">Email</label>
        <input type="text" name="uid" class="input" placeholder="Username/Email">

        <label class="label" for="password">Password</label>
        <input class="input" type="password" name="pwd" id="password" placeholder="Enter Password">

        <div class="checkbox-container">
          <input type="checkbox" name="" id="">
          <p>Remember me?</p>
        </div>

        <button class="submit-btn" type="submit" name="submit">LOGIN</button>
      </form>

      <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyinput") {
              echo "<p class='feedbackmsg'>Fill in all fields!</p>";
          }
          else if ($_GET["error"] == "wronglogin") {
              echo "<p class='feedbackmsg'>Incorrect Password</p>";
          }
            
        }

      ?>

      <p class="text">Need an account? <a href="sign-up.php">SIGN UP</a></p>
    </div>
  </section>
</body>
</html>