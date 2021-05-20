<h1>LeaderBoard set up</h1>

<style>
table {
width: 70%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
border: 1px solid_black;
}
th {
background-color: #588c7e;
color: white;
border: 1px #000000;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
<body>
<h3>There are <?php echo $count; ?> results in the leaderboard!</h3>
<table>
<tr>
<th>Name</th>
<th>Score</th>
</tr>
<?php include "db_connection.php";

$sql2 = "SELECT * FROM Scores ORDER BY score DESC";
$stmt1 = $pdo->prepare($sql2);
$stmt1->execute([
	
	]);
$count = $stmt1->rowCount();
if ($count > 0) {
while($board = $stmt1->fetch(PDO::FETCH_ASSOC)){
	echo "<tr><td>" . $board["name"]. "</td><td>" . $board["score"]. "</td> </tr> <br>";

}
echo "</table>";
} else{ echo "0 Results"; }



?>