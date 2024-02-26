<?php
    include('../../admin/db/connection.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkuser = "SELECT * FROM customer WHERE email = '$email'";
    $result = mysqli_query($conn, $checkuser);
    if(mysqli_num_rows($result) > 0) {
        header('location:../../?page=register&stt=error&msg=Email has been registered');
    } else {
        $sql = "INSERT INTO customer (name, email, password, stt) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            header('location:../../?page=login&stt=success&msg=Register Success');
        } else {
            header('location:../../?page=register&stt=error&msg=Register Failed');
        }
    }
    ?>