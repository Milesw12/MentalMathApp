<h1>LeaderBoard set up</h1>
<?php include "db_connection.php";

$sql2 = "SELECT * FROM Scores ORDER by score DESC LIMIT 100";
$stmt = $pdo->prepare($sql2);
$stmt->execute([]);
?>