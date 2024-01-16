<section class="main">
    <div class="main-top">
        <p></p>
    </div>
    <?php
        include('db/connection.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM setting WHERE id = '$id'";
        $result = mysqli_query($conn,$query);
        $category = mysqli_fetch_assoc($result);
    ?>
    <div class="main-body">
        <h1>SETTING</h1>
        <div class="card">
            <form method="POST" action="action/update_setting.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Phone</label>
                    <input type="text" name="phone" value="<?php echo $category['phone']; ?>">
                    <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="text" name="email" value="<?php echo $category['email']; ?>">
                </div>
                <div class="form-group">
                    <label >Address</label>
                    <textarea name="address"><?php echo $category['address']; ?></textarea>
                </div>
              
                <div class="form-group">
                    <button type="submit" class="button-3">Update</button>
                </div>
            </form>
        </div>
        
    </div>
</section>