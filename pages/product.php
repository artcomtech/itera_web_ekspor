<?php
    include('admin/db/connection.php');
    $sqlprocduct = "SELECT * FROM product";
    $resultprocduct = mysqli_query($conn, $sqlprocduct);
?>

<section class="section__container product__container" id="product">
    <p class="section__subheader" style="text-align: center;">OUR PEODUCT</p>
    <h2 class="section__header" style="text-align: center;max-width: 100% !important;">The best product in our company.</h2>
    <div class="product__grid">
        <?php
            if (mysqli_num_rows($resultprocduct) > 0) {
                while($rowproduct = mysqli_fetch_assoc($resultprocduct)){
                    ?>
                    <div class="product__card">
                        <div class="product__card__image">
                            <img src="image/<?php echo $rowproduct['image'] ?>" alt="room" />

                        </div>
                        <div class="product__card__details">
                            <h4><?php echo $rowproduct['title'] ?></h4>
                            <p>
                                <?php echo substr($rowproduct['description'],0,100) ?>
                            </p>
                            <h5><span><?php echo number_format($rowproduct['price'],0,',','.') ?></span></h5>
                            <a href="?page=detail_product&id=<?php echo $rowproduct['id'] ?>"><button class="btn">Detail</button></a>
                        </div>
                    </div>
                    <?php
                }
            }
        ?>

    </div>
</section>