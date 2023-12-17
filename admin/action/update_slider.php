<?php
include '../db/connection.php';

$title = $_POST['title'];
$description = $_POST['desc'];
$id = $_POST['id'];

$update = mysqli_query($conn, "UPDATE slider SET title='$title', `desc`='$description' where id='$id'");
if ($update) {
    header("location:../?page=slider&pesan=sukses");
} else {
    header("location:../?page=slider&pesan=error");
}
