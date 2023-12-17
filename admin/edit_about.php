<section class="main">
    <div class="main-top">
        <p></p>
    </div>
    <?php
        include('db/connection.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM about WHERE id = '$id'";
        $result = mysqli_query($conn,$query);
        $about = mysqli_fetch_assoc($result);
    ?>
    <div class="main-body">
        <h1>ABOUT</h1>
        <div class="card">
            <form method="POST" action="action/update_about.php">
                <div class="form-group">
                    <label >Title</label>
                    <input type="text" name="title" value="<?php echo $about['title']; ?>">
                    <input type="hidden" name="id" value="<?php echo $about['id']; ?>">
                </div>
                <div class="form-group">
                    <label >Description</label>
                    <textarea name="desc"><?php echo $about['desc']; ?></textarea>
                </div>
                <div class="form-group">
                    <label >Location</label>
                    <input type="text" name="location" value="<?php echo $about['location']; ?>">
                </div>
                <div class="form-group">
                    <label >Phone</label>
                    <input type="text" name="phone" value="<?php echo $about['phone']; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="button-3">Update</button>
                </div>
            </form>
        </div>
        
    </div>
</section>