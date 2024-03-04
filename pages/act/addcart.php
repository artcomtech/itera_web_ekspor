<?php
    session_start();
    include('../../admin/db/connection.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM product WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result); 


    $checkcart = "SELECT * FROM cart WHERE product_id = '$id' and customer_id = '$_SESSION[id]'";
    $resultcart = mysqli_query($conn, $checkcart);
    $datacart = mysqli_fetch_assoc($resultcart);
    if(mysqli_num_rows($resultcart) > 0) {
        $qty = $datacart['qty'] + 1;
        $total = $datacart['subtotal'] + $row['price'];

        $update = "UPDATE cart SET qty = '$qty', subtotal = '$total' WHERE product_id = '$id' and customer_id = '$_SESSION[id]'";
        $resultupdate = mysqli_query($conn, $update);
        if($resultupdate) {
            header('location:../../?page=cart');
        }else{
            header('location:../../?page=cart&stt=error&msg=Add Cart Failed');
        }
    }else{
        $name = $row['title'];
        $price = $row['price'];
        $stock = $row['stock'];
        $qty = 1;
        $total = $price * $qty;

        $sql = "INSERT INTO cart (customer_id, product_id, price, qty, subtotal) VALUES ('$_SESSION[id]', '$id', '$price', '$qty', '$total')";

        $resultinsert = mysqli_query($conn, $sql);

        if($resultinsert) {
            header('location:../../?page=cart');
        }else{
            header('location:../../?page=cart&stt=error&msg=Add Cart Failed');
        }
    }

   
    
