<?php

include '../db/connection.php';

$title = $_POST['title'];
$desc  = $_POST['desc'];
$id    = $_POST['id'];
if(!empty($_FILES['image']['name'])){
    $image = $_FILES['image']['name'];
    $dest = "../../image/";
    move_uploaded_file($_FILES['image']['tmp_name'], $dest.$image);
    $query = "UPDATE `category` SET `title` = '$title', `desc` = '$desc', `image` = '$image' WHERE `category`.`id` = $id";
    $update = mysqli_query($conn, $query);
}else{
    $query = "UPDATE `category` SET `title` = '$title', `desc` = '$desc' WHERE `category`.`id` = $id";
    $update = mysqli_query($conn, $query);
}


if($update){
    header('location:../?page=category&pesan=sukses');
}else{
    header('location:../?page=category&pesan=gagal');
}