<section class="main">
    <div class="main-top">
        <p></p>
    </div>
    <?php
        include('db/connection.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM category WHERE id = '$id'";
        $result = mysqli_query($conn,$query);
        $category = mysqli_fetch_assoc($result);
    ?>
    <div class="main-body">
        <h1>CATEGORY</h1>
        <div class="card">
            <form method="POST" action="action/update_category.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Title</label>
                    <input type="text" name="title" value="<?php echo $category['title']; ?>">
                    <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
                </div>
                <div class="form-group">
                    <label >Description</label>
                    <textarea name="desc"><?php echo $category['desc']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <img src="../image/<?php echo $category['image']; ?>" class="image">
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="button-3">Update</button>
                </div>
            </form>
        </div>
        
    </div>
</section>