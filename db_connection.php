<?php 
$servername = "fdb21.awardspace.net";

$username = "3847200_scoreboard";

$password = "74!jYswk";

$db = "3847200_scoreboard";

$conn = mysqli_connect($servername, $username, $password, $db );

if(!$conn) {
	die("Connection failed: ".mysqli_connect_error());

}

echo "Connected Successfully"

?>