<?php

include '../db/connection.php';

$title = $_POST['title'];
$stock  = $_POST['stock'];
$price  = $_POST['price'];
$description  = $_POST['description'];
$id    = $_POST['id'];
if(!empty($_FILES['image']['name'])){
    $image = $_FILES['image']['name'];
    $dest = "../../image/";
    move_uploaded_file($_FILES['image']['tmp_name'], $dest.$image);
    $query = "UPDATE `product` SET `title` = '$title', `stock` = '$stock', `description` = '$description', `price` = '$price', `image` = '$image' WHERE `product`.`id` = $id";
    $update = mysqli_query($conn, $query);
}else{
    $query = "UPDATE `product` SET `title` = '$title', `stock` = '$stock', `description` = '$description', `price` = '$price' WHERE `product`.`id` = $id";
    $update = mysqli_query($conn, $query);
}


if($update){
    header('location:../?page=product&pesan=sukses');
}else{
    header('location:../?page=product&pesan=gagal');
}