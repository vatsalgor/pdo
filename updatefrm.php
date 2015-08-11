<?php
include_once("connection.php");
$form = $_POST;
$id = $form['id1'];
$name = $form['name1'];
$add = $form['add1'];

$sql = "UPDATE `test_master` SET `test_name`= :name,`test_add`= :add WHERE `test_id`= :id ";
                                
$STH = $dbh->prepare($sql);
$STH->bindParam(":id", $id,PDO::PARAM_INT);
 $STH->bindParam(":name", $name,PDO::PARAM_STR);
 $STH->bindParam(":add", $add,PDO::PARAM_STR);
$STH->execute();


?>
