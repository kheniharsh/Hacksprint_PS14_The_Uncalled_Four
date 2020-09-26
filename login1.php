<?php
session_start();
include_once 'dbConnection.php';

$email = $_POST['email'];
$password = $_POST['password'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password); 
$password = addslashes($password);
$password=SHA1($password); 
$result = mysqli_query($con,"SELECT name FROM login WHERE email = '$email' and pass = '$password'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
header("location:account.php");
}
else
header("location:$ref?w=Wrong Username or Password");


?>