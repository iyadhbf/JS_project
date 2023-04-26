<?php
include "cnx.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $subject = $_POST['subject'];
  $message = $_POST['message'];

   if (!$conn) {
    
    
    echo 'Oops! Something went wrong. Please try again later.';
    exit;
  }

  if (empty($subject) || empty($message)) {
    
    
    echo 'Please fill in all fields.';
    exit;
  }

  $sql1 = "INSERT INTO contact(subject,contact_message) VALUES ('$subject','$message')";


      if (mysqli_query($conn , $sql1)) {
        echo "Thank you for contacting us!";
      }else {
        echo "Oops! Something went wrong. Please try again later.eazeaze";
      }
      mysqli_close($conn);
    }
?>