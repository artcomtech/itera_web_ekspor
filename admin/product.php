<section class="main">
    <div class="main-top">
        <p></p>
    </div>
    <div class="main-body">
        <h1>PRODUCT</h1>
        <?php
            if(isset($_GET['pesan']) && $_GET['pesan'] == 'sukses'){
                echo '<div class="alert alert-success" role="alert">Data Berhasil Disimpan</div>';
            }
        ?>
        <div class="card">
            <a href="?page=add_product"><button class="button-3" style="float: right;margin-bottom: 10px">Add Product</button></a>
            <table class="table table-boredered table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Image</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include('db/connection.php');
                        $query = "SELECT * FROM product";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['stock']; ?></td>
                        <td><img src="../image/<?php echo $row['image']; ?>" width="60px"></td>
                        <td><a href="?page=edit_product&id=<?php echo $row['id']; ?>"><button class="button-3">Edit</button></a></td>
                    </tr>
                    <?php
                        }
                    ?>
                    
                </tbody>
            <table>
        </div>
        
    </div>
</section>