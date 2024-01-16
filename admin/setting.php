<section class="main">
    <div class="main-top">
        <p></p>
    </div>
    <div class="main-body">
        <h1>SETTING</h1>
        <div class="card">
            <table class="table table-boredered table-hover">
                <thead>
                    <tr>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include('db/connection.php');
                        $query = "SELECT * FROM setting";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><a href="?page=edit_setting&id=<?php echo $row['id']; ?>"><button class="button-3">Edit</button></a></td>
                    </tr>
                    <?php
                        }
                    ?>
                    
                </tbody>
            <table>
        </div>
        
    </div>
</section>