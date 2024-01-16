<?php
include"../db/connection.php";

$title = $_POST['title'];
$desc = $_POST['desc'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];

$sql = "UPDATE `about` SET `title` = '$title', `desc` = '$desc', `visi` = '$visi', `misi` = '$misi' WHERE `about`.`id` = 1";
$update = mysqli_query($conn, $sql);
if($update){
    header("location:../?page=about&pesan=sukses");
}else{
    header("location:../?page=about&pesan=gagal");
}