<?php
require_once("./connect.php");
 $sql="UPDATE superhuman SET title=:title,name=:name,superpowers = :superpowers WHERE id= :id";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":title",
$_POST["title"],
PDO::PARAM_STR);
$stmt->bindParam(":name", 
$_POST["name"],
PDO::PARAM_STR);
$stmt->bindParam(":superpowers", 
$_POST["superpowers"],
PDO::PARAM_STR);
$stmt->bindParam(":id", 
$_POST["id"], 
PDO::PARAM_INT);
$stmt->execute();
header("Location: ./index.php");

?>