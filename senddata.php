<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mymusic";

$name = $_POST['name'];
$title = $_POST['title'];
$tempo = $_POST['tempo'];
$energy = $_POST['energy'];
$danceability = $_POST['danceability'];
$loudness = $_POST['loudness'];
$valence = $_POST['valence'];
$acousticness = $_POST['acousticness'];
$mood = $_POST['mood'];
$file = $_POST['file'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO data (name, title, tempo, energy, danceability, loudness, valence, acousticness, mood, file)
VALUES ('$name', '$title', '$tempo', '$energy', '$danceability', '$loudness', '$valence', '$acousticness', '$mood', '$file')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>