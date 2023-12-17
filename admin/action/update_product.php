<?php

include '../db/connection.php';

$title = $_POST['title'];
$star  = $_POST['star'];
$price  = $_POST['price'];
$unit  = $_POST['unit'];
$id    = $_POST['id'];
if(!empty($_FILES['image']['name'])){
    $image = $_FILES['image']['name'];
    $dest = "../../image/";
    move_uploaded_file($_FILES['image']['tmp_name'], $dest.$image);
    $query = "UPDATE `product` SET `title` = '$title', `star` = '$star', `price` = '$price', `unit` = '$unit', `image` = '$image' WHERE `product`.`id` = $id";
    $update = mysqli_query($conn, $query);
}else{
    $query = "UPDATE `product` SET `title` = '$title', `star` = '$star', `price` = '$price', `unit` = '$unit' WHERE `product`.`id` = $id";
    $update = mysqli_query($conn, $query);
}


if($update){
    header('location:../?page=product&pesan=sukses');
}else{
    header('location:../?page=product&pesan=gagal');
}