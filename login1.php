
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      body {
        background-color: #f1f1f1;
      }
      .container {
        background-color: #ffffff;
        border: 1px solid #cccccc;
        border-radius: 5px;
        box-shadow: 0px 0px 5px #cccccc;
        margin: auto;
        margin-top: 100px;
        padding: 20px;
        width: 400px;
      }
      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      button {
        background-color: #4caf50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
      }
      button:hover {
        background-color: #45a049;
      }
      .error {
        color: red;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: center;
      }
    </style>
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
          <li><a href="studentlife.php">Student Life</a></li>
          <li><a href="forum1.php">Forum</a></li>
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
    <div class="container">
      <h2>Login</h2>
	  
      <form action="login.php" method='post'>
        <label for="username"><b>Username</b></label>
        <input
          type="text"
          placeholder="Enter Username"
          name="username"
          required
        />

        <label for="password"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="password"
          required
        />

        <button type="submit">Login</button>
        <div class="form-switch">
          Don't have an account?
          <a href="register.php" onclick="toggleForm()">Register here</a>
        </div>
         
				
        </div>
      </form>
    </div>
  </body>
</html>
