<?php
include "db_connection.php";
if(isset($_POST["submitBtn"]) && $_POST["submitBtn"]!=""){ 
        $name = $_POST["name"];
        $score = $_COOKIE['highscore'];
        $scoring = (int)$score; 
        $date = 'CURRENT_TIMESTAMP';

    $sql1 = "INSERT INTO Scores(name, score, ts) VALUES(:name, :scoring, :date)";
    $stmt = $pdo->prepare($sql1);
    $stmt->execute([
        ':name' => $name,
        ':scoring' => $scoring,
        ':date' => $date
    ]); 
    echo "score submitted";
};
echo $name;
echo $scoring;



?>