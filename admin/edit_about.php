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
                    <input type="text" name="title" value="<?php echo $about['title']; ?>" required>
                    <input type="hidden" name="id" value="<?php echo $about['id']; ?>">
                </div>
                <div class="form-group">
                    <label >Description</label>
                    <textarea class="ckeditor" id="editor" name="desc"><?php echo $about['desc']; ?></textarea>
                </div>
                <div class="form-group">
                    <label >Visi</label>
                    <input type="text" name="visi" value="<?php echo $about['visi']; ?>" required>
                </div>
                <div class="form-group">
                    <label >Misi</label>
                    <textarea name="misi" required><?php echo $about['misi']; ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="button-3">Update</button>
                </div>
            </form>
        </div>
        
    </div>
</section>