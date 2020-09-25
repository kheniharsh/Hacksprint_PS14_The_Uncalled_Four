<?php

include 'include.php';
// Grab User submitted information
$email = $_POST["your_name"];
$pass = $_POST["your_pass"];


$result = mysqli_query($conn, "SELECT email, pass FROM users WHERE email = '$email' AND pass = '$pass'");

$row = mysqli_fetch_assoc($result);

if($row["email"] == $email && $row["pass"] == $pass)
{
    echo"You are a validated user.";
    header("Location: index.php");
}

else
{
    echo"Sorry, your credentials are not valid, Please try again.";
}
?>