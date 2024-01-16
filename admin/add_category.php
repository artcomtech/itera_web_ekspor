<section class="main">
    <div class="main-top">
        <p></p>
    </div>
   
    <div class="main-body">
        <h1>Add Category</h1>
        <div class="card">
            <form method="POST" action="action/update_category.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Title</label>
                    <input type="text" name="title" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label >Description</label>
                    <textarea name="desc" placeholder="Description" required></textarea>
                </div>
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="image" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="button-3">Update</button>
                </div>
            </form>
        </div>
        
    </div>
</section>