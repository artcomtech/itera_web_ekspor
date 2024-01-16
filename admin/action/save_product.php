<?php

include '../db/connection.php';

$title = $_POST['title'];
$stock  = $_POST['stock'];
$price  = $_POST['price'];
$description  = $_POST['description'];

$image = $_FILES['image']['name'];
$dest = "../../image/";
move_uploaded_file($_FILES['image']['tmp_name'], $dest.$image);
$query = "INSERT INTO product (title, stock, price, image, description) VALUES ('$title', '$stock', '$price', '$image', '$description')";
$update = mysqli_query($conn, $query);

if($update){
    header('location:../?page=product&pesan=sukses');
}else{
    header('location:../?page=product&pesan=gagal');
}