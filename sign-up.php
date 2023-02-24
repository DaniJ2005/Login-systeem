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

  <section class="register-section">
    <div class="register-container">
      <h2 class="title">REGISTER</h2>

      <form action="includes/signup.inc.php" method="post" class="form">
        <label class="label" for="text">Full Name</label>
        <input type="text" name="name" class="input" placeholder="Full Name">

        <label class="label" for="text">Username</label>
        <input type="text" name="uid" class="input" placeholder="Username">

        <label class="label" for="email">Email</label>
        <input type="text" name="email" class="input" placeholder="Email">

        <label class="label" for="password">Password</label>
        <input type="password" name="pwd" class="input" placeholder="Password">

        <label class="label" for="password">Repeat Password</label>
        <input type="password" name="pwdrepeat" class="input" placeholder="Repeat Password">

        <button class="submit-btn" type="submit" name="submit">REGISTER</button>
      </form>


      <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p class='feedbackmsg'>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p class='feedbackmsg'>Choose a proper username!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p class='feedbackmsg'>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p class='feedbackmsg'>Passwords doesn't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p class='feedbackmsg'>Something went wrong, try again later.</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p class='feedbackmsg'>This username is already taken!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p class='feedbackmsg-green'>You have signed up!</p>";
        }
    }


?>

      <p class="text">Already have an account? <a href="sign-in.php">SIGN IN</a></p>
    </div>
  </section>
    
</body>
</html>