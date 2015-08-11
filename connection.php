<?php
try{
$dbh = new PDO('mysql:host=localhost;dbname=pdotest_db;charset=utf8', 'root', '');
 echo "PDO connection object created";
}
 
 catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>