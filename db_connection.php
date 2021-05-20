<?php 
$servername = "fdb21.awardspace.net";

$username = "3847200_scoreboard";

$password = "74!jYswk";

$db = "3847200_scoreboard";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$db;", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
