<?php
include_once("connection.php");

$form = $_POST;
$id = $form['id1'];
$name = $form['name1'];
$add = $form['add1'];
// the data we want to insert

//$data = array($id , $name , $add);
//$STH = $dbh->prepare("INSERT INTO test_master(test_id, test_name, test_add) VALUES "."(:$id,:$name,:$add)");
//$STH->execute( array(':id'=>$id ,':name'=>$name , ':add'=>$add ));
$sql = "INSERT INTO `test_master`(`test_id`, `test_name`, `test_add`) VALUES (:id,:name,:add)";
$STH = $dbh->prepare($sql);
$STH->bindParam(":id", $id,PDO::PARAM_INT);
 $STH->bindParam(":name", $name,PDO::PARAM_STR);
 $STH->bindParam(":add", $add,PDO::PARAM_STR);
$STH->execute(); 
//Named Placeholder
//$sql = "INSERT INTO `test_master`(`test_id`, `test_name`, `test_add`) VALUES (:$id,:$name,$add)";
//Unnamed Placeholder
//$sql = "INSERT INTO `test_master`(`test_id`, `test_name`, `test_add`) VALUES (?,?,?)";
//$query = $db->prepare($sql);

//$query->execute( $data);

//$sth = $dbh->prepare("INSERT INTO `test_master`(`test_id`, `test_name`, `test_add`) VALUES (:$id,:$name,:$add");

//$sth->bindParam(':id', $form['id'], PDO::PARAM_INT);
//$sth->bindParam(':name', $form['name'], PDO::PARAM_STR);
//$sth->bindParam(':add', $form['add'], PDO::PARAM_STR);
//$sth->execute();
//echo $count;

 ?>
 