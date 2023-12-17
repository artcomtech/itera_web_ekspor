<?php
include"../db/connection.php";

$title = $_POST['title'];
$desc = $_POST['desc'];
$location = $_POST['location'];
$phone = $_POST['phone'];

$sql = "UPDATE `about` SET `title` = '$title', `desc` = '$desc', `location` = '$location', `phone` = '$phone' WHERE `about`.`id` = 1";
$update = mysqli_query($conn, $sql);
if($update){
    header("location:../?page=about&pesan=sukses");
}else{
    header("location:../?page=about&pesan=gagal");
}