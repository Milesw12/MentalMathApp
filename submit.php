<?php
include "db_connection.php";
if(isset($_POST["submitBtn"]) && $_POST["submitBtn"]!=""){ 
        $name = $_POST["name"];
        $score = $_COOKIE['highscore'];
        $scoring = (int)$score; 

    $sql1 = "INSERT INTO Scores(name, score, ts) VALUES(:name, :scoring)";
    $stmt = $pdo->prepare($sql1);
    $stmt->execute([
        ':name' => $name,
        ':scoring' => $scoring,
    ]); 
    echo "score submitted";
};
echo $name;
echo $scoring;



?>