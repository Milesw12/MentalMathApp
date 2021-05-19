<html>
<body>
<?php
include 'db_connection.php';
$data=[
	':name' => $_POST['name'],
	':score' => $_POST['score'],
];
$sql = "INSERT INTO Scores (name, score, ts) VALUES (:name, :score, CURRENT_TIMESTAMP)";
$stmt = $pdo->prepare($sql);
if(!$stmt->execute([$data])){
	die('Error: ' . mysql_error());
}
echo "1 record added";

								


?>
</body>
</html>