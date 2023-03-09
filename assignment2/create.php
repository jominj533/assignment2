<?php

    require_once("./connect.php");
    $sql= "INSERT INTO superhuman (title,name,superpowers
    ) VALUES (
        :title,
        :name,
        :superpowers
    )";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":title", 
    $_POST["title"],
    PDO::PARAM_STR);
    $stmt->bindParam("Superhuman name", 
    $_POST["Superhuman name"],
    PDO::PARAM_STR);
    $stmt->bindParam(":superpowers", 
    $_POST["superpowers"],
    PDO::PARAM_STR);
    $stmt->execute();
header("Location: ./index.php")
?>