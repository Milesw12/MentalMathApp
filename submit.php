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
    echo "score submitted";
};
?>
<head>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<Body>

<h1> Congratulations <?php echo $name; ?>!!!</h1>

<h2> Your scored of <?php echo $scoring; ?> has been submitted!</h2>


