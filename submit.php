<?php
include "db_connection.php";
if(isset($_POST["submitBtn"]) && $_POST["submitBtn"]!=""){ 
        $name = $_POST["name"];
        $score = $_COOKIE['highscore'];
        $scoring = (int)$score; 

    $sql1 = "INSERT INTO Scores(name, score) VALUES(:name, :scoring)";
    $stmt = $pdo->prepare($sql1);
    $stmt->execute([
        ':name' => $name,
        ':scoring' => $scoring,
    ]); 
};
?>
<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<link rel="stylesheet" type="text/css" href="css/mathtrainer.css" />
<a id="leaderboard" href="leaderboard.php">Leaderboard</a>
</head>
<Body>

<h1> Congratulations <?php echo $name; ?>!!!</h1>

<h2> Your scored of <?php echo $scoring; ?> has been submitted!</h2>

<?php
$sql3 = "SELECT * from Scores WHERE score > :score";
$stmt3 = $pdo->prepare($sql3);
$stmt3->execute([
    ':score' => $scoring,
    ]);
$count2 = $stmt3->rowCount();

$sql4 = "SELECT * FROM Scores";
$stmt4 = $pdo->prepare($sql4);
$stmt4->execute([]);
$total = $stmt4->rowCount();

$percent = (float)($count2 / $total) * 100;
$userPercent = round($percent, 1);
?>
<h2> You placed in the top <?php echo $userPercent; ?>%</h2>


