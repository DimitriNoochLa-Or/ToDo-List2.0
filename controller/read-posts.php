<?php 
	require_once(__DIR__ . "/../model/config.php");

	$query = "SELECT * FROM posts";
	$result = $_SESSION["connection"]->query($query);

	if($result){
		while($row = mysqli_fetch_array($result)){
			echo "<div class='row ' id='background'>";
			echo "<h2>" . $row['title'] . "</h2>";
			echo "<br />";
			echo "<p>" . $row['post'] . "</h4>";
			echo "<br />";
			echo "<p>Posted on: " . $row["DateTime"] . "</p>";
			echo "</div>";
		}
	}
 ?>