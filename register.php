<?php
if(isset($_POST["register"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('user_registration') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM register WHERE username='".$username."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO register(username,password) VALUES('$username','$password')";

	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created";
	} else {
	echo "Failure!";
	}

	} else {
	echo "That username already exists! Please try again with another.";
	}

} else {
	echo "All fields are required!";
}
}
?>