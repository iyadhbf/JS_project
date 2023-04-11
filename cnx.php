<?php
$user="root";
$mdp="";
$db="js project";
$server="localhost";


$conn=mysqli_connect($server,$user,$mdp,$db);

if ($conn) {
    echo "connexion etablie";
} else {
    die(mysqli_connect_error());
}

?>

