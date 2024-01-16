<?php
    include('admin/db/connection.php');
    $sqlproduct="SELECT * FROM product WHERE id = '$_GET[id]'";
    $resultproduct = mysqli_query($conn, $sqlproduct);
    $rowproduct = mysqli_fetch_assoc($resultproduct);
?>
<section class="section__container productdetail__container" id="about">
<div class="productdetail__image">
    <img src="image/<?php echo $rowproduct['image']; ?>" alt="about" />
</div>
<div class="about__content">
    <p class="section__subheader">Detail Product</p>
    <h2 class="section__header"><?php echo $rowproduct['title']; ?></h2>
    <p class="section__description">
        <?php echo $rowproduct['description']; ?>
    </p>
    <h4 style="margin-bottom: 5px;margin-top: 5px">Price : <?php echo $rowproduct['price']; ?></h4>
    <h5 style="margin-bottom: 20px;">Stock : <?php echo $rowproduct['stock']; ?></h5>

    <a href="https://api.whatsapp.com/send?phone=<?php echo $phone;?>&text= I want to checkout this product <?php echo $rowproduct['title']; ?> \n Quantity : " class="btn">Add To Cart</a>
    <a href="https://api.whatsapp.com/send?phone=<?php echo $phone;?>&text= I want to ask about product <?php echo $rowproduct['title']; ?>" class="btn">Contact Us</a>
</div>
</section>