<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$email = $_POST['email'];
$password = $_POST['pass'];
$repassword = $_POST['re_pass'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$email = stripslashes($email);
$email = addslashes($email);

$password = stripslashes($password);
$password = addslashes($password);
$password = SHA1($password);

$repassword = stripslashes($repassword);
$repassword = addslashes($repassword);
$repassword = SHA1($repassword);

$q3=mysqli_query($con,"INSERT INTO login VALUES  ('$name' ,'$email' ,'$password', '$repassword')");
if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;

header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>