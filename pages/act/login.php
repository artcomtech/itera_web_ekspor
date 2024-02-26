<?php
    include('../../admin/db/connection.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM customer WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['id'] = $row['customer_id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];

        header('location:../../?page=beranda');
    } else {
        header('location:../../?page=login&stt=error&msg=Login Failed');
    }