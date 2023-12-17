<?php
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE_NAME", "db_ekspor");

// Create connection
$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);
// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    $db = mysqli_select_db($conn, DB_DATABASE_NAME);
}

?>