<?php

include_once("connection.php");
try{
    echo "</br>";
    /*** The SQL SELECT statement ***/
    $sql = "SELECT * FROM test_master";
    echo "<table>
            <tbody>
                <tr>
                    <th>Id </th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Delete</th>
                    <th>Edit</th>
                <tr>                    
    ";
    
    foreach ($dbh->query($sql) as $row)
        {
            $val1 = $row['test_id'];
            $val2 = $row['test_name'];
            $val3 = $row['test_add'];
            echo '<tr><td>';
            echo $row['test_id'];
            echo '</td><td>';
            echo $val2;
            echo '</td><td>';
            echo $val3;
            echo '</td><td>';
            echo "<a href='delete.php?id=$val1'>Delete</a>";
            echo '</td><td>';
            echo "<a href='update.php?id=$val1'>Edit</a>";
            echo '</td></tr>';
        //print $row['test_id'] .' - '. $row['test_name'] . ' - '.$row['test_add'] .'<br />';
        }

    /*** close the database connection ***/
    $dbh = null;
}
catch(PDOException $e)
    {
    echo $e->getMessage();
    }



?>