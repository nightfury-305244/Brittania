<?php
//DB Var Local
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "properties";

// //DB Var Web
// $servername = "db5015601711.hosting-data.io";
// $username = "dbu2024100";
// $password = "C27bd8C13@";
// $dbname = "dbs12742416";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>