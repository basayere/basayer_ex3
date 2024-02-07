<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basayer_ex3";

//create connection 
$connection = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($connection->connect_error) {
die("connection failed: ". $connection->connect_error);
}

//Read all row from database table
$sql = "SELECT * FROM basayer_ex3";
$result = $connection->query($sql);

if(!$result) {
    die("Invalid query: " . $connection->error);
}
// Read data of each row
while ($row = $result->fetch_assoc()) {
    echo "
    <tr>
       <td>$row[id]</td>
       <td>$row[name]</td>
       <td>$row[email]</td>
       <td>$row[phone]</td>
       <td>$row[address]</td>
       <td>$row[create_at]</td>
       </tr>
       ";

       
}
?>
