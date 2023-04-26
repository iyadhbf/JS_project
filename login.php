<?php
session_start(); 

include "cnx.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['username']);

    $password = validate($_POST['password']);

    if (empty($username)) {

       
        echo "you must enter ur username";
       exit();

    }else if(empty($password)){

        
        echo "you must enter ur password";
        exit();

    }else{

        $sql = "SELECT * FROM register WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['username'] = $username;

                 header("Location: index.php");

                exit();

           

            }

        }

    }

}