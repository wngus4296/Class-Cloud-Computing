<?php


$username = 'root';
$password = 'rootpass';
$dsn = 'mysql:host=192.168.3.6;dbname=formresponses';
$dsn2 = 'mysql:host=192.168.3.7;dbname=formresponses';

try{
   $db = new PDO($dsn, $username, $password);
   $db2 = new PDO($dsn2, $username, $password);
   $result=FALSE;

    $query = "SELECT * FROM response";

    $stmt = $db->query($query);
    $stmt2 = $db2->query($query);
    
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $rows2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
  
    echo "<table border='1'>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>email</th>
    </tr>";

    foreach($rows as $row) {
        echo "<tr>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";

        //printf("{$row['firstname']} {$row['secondname']} {$row['email']}\n");
    }

    echo "<table border='1'>
    <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>email</th>
    </tr>";

    foreach($rows2 as $row) {
        echo "<tr>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "</tr>";

        //printf("{$row['firstname']} {$row['secondname']} {$row['email']}\n");
    }

} catch(PDOException $ex) {
   echo $ex->getMessage();
}

echo "</table>";
?>