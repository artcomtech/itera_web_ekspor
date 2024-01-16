<section class="main">
    <div class="main-top">
        <p></p>
    </div>
   
    <div class="main-body">
        <h1>ADD PRODUCT</h1>
        <div class="card">
            <form method="POST" action="action/save_product.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Title</label>
                    <input type="text" name="title" placeholder="title" required>
                </div>
                <div class="form-group">
                    <label >Price</label>
                    <input type="text" name="price" required>
                </div>
                <div class="form-group">
                    <label >Stock</label>
                    <input type="text" name="stock" required>
                </div>
                <div class="form-group">
                    <label >Description</label>
                    <textarea name="description" class="ckeditor" required></textarea>
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