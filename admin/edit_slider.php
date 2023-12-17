<section class="main">
    <div class="main-top">
        <p></p>
    </div>
    <?php
        include('db/connection.php');
        $id = $_GET['id'];
        $query = "SELECT * FROM slider WHERE id = '$id'";
        $result = mysqli_query($conn,$query);
        $slider = mysqli_fetch_assoc($result);
    ?>
    <div class="main-body">
        <h1>SLIDER INFO</h1>
        <div class="card">
            <form method="POST" action="action/update_slider.php">
                <div class="form-group">
                    <label >Title</label>
                    <input type="text" name="title" value="<?php echo $slider['title']; ?>">
                    <input type="hidden" name="id" value="<?php echo $slider['id']; ?>">
                </div>
                <div class="form-group">
                    <label >Description</label>
                    <textarea name="desc"><?php echo $slider['desc']; ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="button-3">Update</button>
                </div>
            </form>
        </div>
        
    </div>
</section>