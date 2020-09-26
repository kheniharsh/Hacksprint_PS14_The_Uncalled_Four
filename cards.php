<?php
include 'dbConnection.php';
?>
<?php
$sql = "SELECT * FROM data WHERE id = $id";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
?>
<div class="single-upcoming-shows d-flex align-items-center flex-wrap">
	<div class="shows-date">
		<h2><?php echo $id; ?></h2>
	</div>
	<div class="shows-desc d-flex align-items-center">
		<div class="shows-img">
			<img src="img/bg-img/s1.jpg" alt="">
		</div>
		<div class="shows-name">
			<h6><?php echo $row["name"]; ?></h6>
			<p><?php echo $row["title"]; ?></p>
		</div>
	</div>
	<div class="shows-location">
		<p><?php echo $row["tempo"]; ?></p>
		<p><?php echo $row["energy"]; ?></p>
		<p><?php echo $row["danceability"]; ?></p>
		<p><?php echo $row["loudness"]; ?></p>
		<p><?php echo $row["valence"]; ?></p>
		<p><?php echo $row["acousticness"]; ?></p>
	</div>
	<div class="shows-time">
		<p><?php echo $row["mood"]; ?></p>
	</div>
	<div class="buy-tickets">
		<a href="#" class="btn musica-btn">Play Now</a>
	</div>
</div>

<?php
}
} else {
echo "0 results";
}
mysqli_close($conn);
?>