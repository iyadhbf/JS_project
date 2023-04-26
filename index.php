<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>isikef website</title>

    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header>
   
   </div>
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
          <li><span> Hello, ' . $_SESSION["username"] . '</span></li>
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

    <main>
      <div class="contact">
        <h1>Contact Us</h1>
        <style>
          form {
            margin: 50px auto;
            width: 500px;
          }

          label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
          }

          input[type="text"],
          input[type="email"],
          textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
            box-shadow: 0px 0px 5px #ccc;
          }

          textarea {
            height: 150px;
            resize: none;
          }

          input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
          }

          input[type="submit"]:hover {
            background-color: #45a049;
          }
        </style>

        <form action="contactUs.php" method="POST">
          

          <label for="subject">Subject</label>
          <input
            type="text"
            id="subject"
            name="subject"
            placeholder="Enter the subject"
            required
          />

          <label for="message">Message</label>
          <input
          type="text"
            id="message"
            name="message"
            placeholder="Enter your message"
            required
          ></input>

          <input type="submit" value="Submit" >
        </form>
      </div>
    </main>
  </body>
</html>
