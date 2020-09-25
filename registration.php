<?php
include 'include.php';
$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$re_pass = $_POST["re_pass"];
$agree_term = $_POST["agree_term"];
$sql = "INSERT INTO users (name, email, pass, re_pass) VALUES ('$name', '$email', '$pass', '$re_pass')";
if($agree_term == 1 && $pass == $re_pass)
	{
		if (mysqli_query($conn, $sql))
			{
				echo "New record created successfully";
				header("Location: index.php");
		}
else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
else
	{
	echo"Sorry, your credentials are not valid, Please try again.";
	}
?>