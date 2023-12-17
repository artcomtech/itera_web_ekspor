<section class="main">
    <div class="main-top">
        <p></p>
    </div>
    <?php
        include('db/connection.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM `service` WHERE id = '$id'";
        $result = mysqli_query($conn,$query);
        $service = mysqli_fetch_assoc($result);
    ?>
    <div class="main-body">
        <h1>SERVICE</h1>
        <div class="card">
            <form method="POST" action="action/update_service.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Title</label>
                    <input type="text" name="title" value="<?php echo $service['title']; ?>">
                    <input type="hidden" name="id" value="<?php echo $service['id']; ?>">
                </div>
              
                <div class="form-group">
                    <label>Gambar</label>
                    <img src="../image/<?php echo $service['image']; ?>" class="image">
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="button-3">Update</button>
                </div>
            </form>
        </div>
        
    </div>
</section>