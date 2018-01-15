<?php
$servername = "localhost";
$username = "root";
$password = "Welkom01";

try {
    $conn = new PDO("mysql:host=$servername;dbname=fletnix", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{}

//$query="select firstname, lastname from customer order by 1 desc";
//foreach ($conn->query($query) as $row) {
//    echo $row['firstname'];
//    echo $row['lastname'];
//}

?>