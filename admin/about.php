<section class="main">
    <div class="main-top">
        <p></p>
    </div>
    <div class="main-body">
        <h1>ABOUT</h1>
        <?php
        if(!empty($_GET['pesan']) && $_GET['pesan'] == 'sukses'){
            echo '
                <div class="alert alert-success">
                    <p>Data berhasil diperbarui</p>
                </div>
            ';
            
        }
        ?>
        <div class="card">
            <table class="table table-boredered table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Phone</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include('db/connection.php');
                        $query = "SELECT * FROM about";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result)){
                            echo '
                                <tr>
                                    <td>'.$row['title'].'</td>
                                    <td>'.$row['desc'].'</td>
                                    <td>'.$row['location'].'</td>
                                    <td>'.$row['phone'].'</td>
                                    <td><a href="?page=edit_about&id='.$row['id'].'"><button class="button-3">Edit</button></td>
                                </tr>
                            ';
                        }
                    ?>
                   
                </tbody>
            <table>
        </div>
        
    </div>
</section>