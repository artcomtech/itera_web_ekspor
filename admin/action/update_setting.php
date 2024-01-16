<?php

include '../db/connection.php';

$phone = $_POST['phone'];
$email  = $_POST['email'];
$address  = $_POST['address'];
$id    = $_POST['id'];

$query = "UPDATE `setting` SET `phone` = '$phone', `email` = '$email', `address`='$address' WHERE `setting`.`id` = $id";
$update = mysqli_query($conn, $query);

if($update){
    header('location:../?page=setting&pesan=sukses');
}else{
    header('location:../?page=setting&pesan=gagal');
}