<section class="main">
    <div class="main-top">
        <p></p>
    </div>
    <div class="main-body">
        <h1>CATEGORY</h1>
        <div class="card">
            <table class="table table-boredered table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include('db/connection.php');
                        $query = "SELECT * FROM category";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['desc']; ?></td>
                        <td><img src="../image/<?php echo $row['image']; ?>" width="60px"></td>
                        <td><a href="?page=edit_category&id=<?php echo $row['id']; ?>"><button class="button-3">Edit</button></a></td>
                    </tr>
                    <?php
                        }
                    ?>
                    
                </tbody>
            <table>
        </div>
        
    </div>
</section>