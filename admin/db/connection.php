<?php
$user = 'root';
$password = '';
$host = "localhost";
$dbname = "db_ekspor";

// Create connection
$conn = mysqli_connect($host, $user, $password);
// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    $db = mysqli_select_db($conn, $dbname);
}

?>