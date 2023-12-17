<section class="main">
    <div class="main-top">
        <p></p>
    </div>
    <?php
        include('db/connection.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM product WHERE id = '$id'";
        $result = mysqli_query($conn,$query);
        $product = mysqli_fetch_assoc($result);
    ?>
    <div class="main-body">
        <h1>PRODUCT</h1>
        <div class="card">
            <form method="POST" action="action/update_product.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Title</label>
                    <input type="text" name="title" value="<?php echo $product['title']; ?>">
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                </div>
                <div class="form-group">
                    <label >Star</label>
                    <input type="text" name="star" value="<?php echo $product['star']; ?>">
                </div>
                <div class="form-group">
                    <label >Price</label>
                    <textarea name="price"><?php echo $product['price']; ?></textarea>
                </div>
                <div class="form-group">
                    <label >Unit</label>
                    <textarea name="unit"><?php echo $product['unit']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <img src="../image/<?php echo $product['image']; ?>" class="image">
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <button type="submit" class="button-3">Update</button>
                </div>
            </form>
        </div>
        
    </div>
</section>