<?php
    include('admin/db/connection.php');
    $sql = "SELECT * FROM slider";
    $slider = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($slider);
?>
<div class="section__container header__container" id="home">
    <p>PT. Rollindo Rabbani Makmur</p>
    <h1><?php echo $data['title']; ?></h1>
    <p><?php echo $data['desc']; ?></p>
</div>