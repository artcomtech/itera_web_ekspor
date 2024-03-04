<?php
    include('../../admin/db/connection.php');

    $id = $_POST['id'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];

    $subtotal = $qty * $price;

    $sql = "UPDATE cart SET qty = '$qty', subtotal = '$subtotal' WHERE cart_id = '$id'";
    $result = mysqli_query($conn, $sql);
    if($result) {
        header('location:../../?page=cart&stt=success&msg=Update Cart Success');
    }else{
        header('location:../../?page=cart&stt=error&msg=Update Cart Error');
    }
    
?>