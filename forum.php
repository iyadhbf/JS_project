<?php
session_start();
include "cnx.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['post-title'];
  $content = $_POST['post-content'];
  $username = $_SESSION["username"];

   if (!$conn) {
    
    
    echo 'Oops! Something went wrong. Please try again later.';
    exit;
  }

  if (empty($content) || empty($title)) {
    
    
    echo 'Please fill in all fields.';
    exit;
  }

  $sql1 = "INSERT INTO contact(content , username , title) VALUES ('$content','$username','$title')";


      if (mysqli_query($conn , $sql1)) {
        echo "Your post has been submitted !";
      }else {
        echo "Oops! Something went wrong. Please try again later.eazeaze";
      }
      mysqli_close($conn);
    }
?>

	
