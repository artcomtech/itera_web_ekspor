<?php

include('../../admin/db/connection.php');

$id = $_GET['id'];

$sql = "DELETE FROM cart WHERE cart_id = '$id'";
$result = mysqli_query($conn, $sql);
if($result) {
    header('location:../../?page=cart&stt=success&msg=Delete Cart Success');
}
?>