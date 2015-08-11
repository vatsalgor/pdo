<?php
include_once("connection.php");
//echo $_GET['id'];
$id = $_GET['id'];
echo $id;

$stmt = $dbh->prepare("DELETE FROM test_master WHERE test_id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$affected_rows = $stmt->rowCount(); 

?>
