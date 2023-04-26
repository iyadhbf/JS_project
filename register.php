<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
    <link rel="stylesheet" href="register.css" />
    <link rel="stylesheet" href="ValidateForm.js" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
  <header>
      <a id="logo" href="index.php">
        <img src="img/isik.png" alt="Logo" />
      </a>
    <?php
     
      if(isset($_SESSION["username"])){
      $navbar='<nav>
        <ul>
          <li><a href="presentation.php">Our Institute</a></li>
          <li><a href="">Student Life</a></li>
          <li><a href="forum.php">Forum</a></li>
          <li><a href="logout.php">Logout</a></li>
          <li><span>' . $_SESSION["username"] . '</span></li>
        </ul>
      </nav>';
      } else  {
        $navbar='<nav>
        <ul>
          <li><a href="presentation.php">Our Institute</a></li>
          <li><a href="studentlife.php">Student Life</a></li>
          <li><a href="forum1.php">Forum</a></li>
          <li><a href="login1.php">Sign in</a></li>
        </ul>
      </nav>';
      }
      echo $navbar;
      ?>
      </header>
    <form action="register1.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" name="username" required />
      <br />
      <label for="password">Password:</label>
      <input type="password" name="password" required />
      <br />
      <label for="confirm_password">Confirm Password:</label>
      <input type="password" name="confirm_password" required />
      <br />
      <input type="submit" name="register" value="Register" />
    </form>
  </body>
</html>
