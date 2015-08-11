<!DOCTYPE html>
<head>
<title>Form for pdo</title>
</head>
<body>
<?php
include_once("connection.php");
//echo $_GET['id'];
$id = $_GET['id'];
echo $id;

 $sql = "SELECT * FROM test_master where test_id=$id";
// $dbh = setFetchMode(PDO::FETCH_ASSOC);
//  foreach ($dbh->query($sql) as $row)
//        {

        $stmt = $dbh->prepare($sql);
   $stmt->bindValue(":id", $id);
   
   $stmt->execute();
   $results = $stmt->fetchAll();
?>
<form name="frm1" method="POST" action="updatefrm.php">
<table>
<caption>Fill Simple Form</caption>
<tbody>
    <tr>
        <td>Your ID </td>
        <td><input type="number" name= "id1" id="id1" value="<?php echo $results[0]['test_id']; ?>"></td>
    </tr>
    
    <tr>
        <td>Name </td>
        <td><input type="text" name= "name1" id="name1" value="<?php echo $results[0]['test_name']; ?> "></td>
    </tr>
    
    <tr>
        <td>Address</td>
        <td><textarea rows="6" cols="50" name="add1" id="add1" "><?php echo $results[0]['test_add']; ?></textarea></td>
    </tr>
    
    <tr>
        <td colspan="2" >
            <input type="submit" name="submit" value="submit">
        </td>
       
    </tr>
</tbody>
</table>
</form>

</body>
</html>