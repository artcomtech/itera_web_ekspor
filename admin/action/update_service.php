<?php

include '../db/connection.php';

$title = $_POST['title'];
$id    = $_POST['id'];
if(!empty($_FILES['image']['name'])){
    $image = $_FILES['image']['name'];
    $dest = "../../image/";
    move_uploaded_file($_FILES['image']['tmp_name'], $dest.$image);
    $query = "UPDATE `service` SET `title` = '$title', `image` = '$image' WHERE `service`.`id` = $id";
    $update = mysqli_query($conn, $query);
}else{
    $query = "UPDATE `service` SET `title` = '$title' WHERE `service`.`id` = $id";
    $update = mysqli_query($conn, $query);
}


if($update){
    header('location:../?page=service&pesan=sukses');
}else{
    header('location:../?page=service&pesan=gagal');
}