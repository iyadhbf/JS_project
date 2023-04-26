<?php
include 'cnx.php';
if(isset($_POST['username'])&& isset($_POST['password'])  )
{
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    } 
$username =$_POST['username'];
$password =$_POST['password'];


$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);


if(empty($username)){
    header("location: register.php?error= nom obligatoire");
    exit();
} else if (empty($password)){
    header("location: register.php?error= prenom obligatoire");
    exit();}


   
            $sql = "INSERT INTO register ( username , password )
            VALUES( '$username', '$password')";
            if (mysqli_query($conn , $sql)) {
                echo "New user created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
}
?>