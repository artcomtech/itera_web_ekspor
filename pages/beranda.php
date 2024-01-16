<?php
    include('admin/db/connection.php');
    $sqlabout = "SELECT * FROM about";
    $resultabout = mysqli_query($conn, $sqlabout);
    $rowabout = mysqli_fetch_assoc($resultabout);

    $sqlproduct = "SELECT * FROM product LIMIT 3";
    $resultproduct = mysqli_query($conn, $sqlproduct);
?>
<section class="section__container about__container" id="about">
    <div class="about__image">
        <img src="assets/about.jpg" alt="about" />
    </div>
    <div class="about__content">
        <p class="section__subheader">ABOUT US</p>
        <h2 class="section__header"><?php echo $rowabout['title'] ?></h2>
        <p class="section__description">
            <?php echo $rowabout['desc'] ?>
        </p>
        <div class="about__btn">
            <a href="?page=about"><button class="btn">Read More</button></a>
        </div>
    </div>
</section>

<section class="explore" id="visimisi">
    <p class="section__subheader">VISION & MISION</p>
    <h2 class="section__header">Vision & Mision in our company.</h2>
    <div class="explore__bg">
        <div class="explore__content">
            <p class="section__description">Vision</p>
            <h4><?php echo $rowabout['visi'] ?></h4>
        </div>

        <div class="explore__content">
            <p class="section__description">Vision</p>
            <h4><?php echo $rowabout['misi'] ?></h4>
        </div>
    </div>
</section>

<section class="section__container product__container" id="product">
    <p class="section__subheader">OUR PEODUCT</p>
    <h2 class="section__header">The best product in our company.</h2>
    <div class="product__grid">
        <?php
            while($rowproduct = mysqli_fetch_assoc($resultproduct)){
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
        ?>
    </div>
</section>

<section class="service" id="service">
    <div class="section__container service__container">
        <div class="service__content">
            <p class="section__subheader">SERVICES</p>
            <h2 class="section__header">Service</h2>
            <ul class="service__list">
                <li>
                    <span><i class="ri-shield-star-line"></i></span>
                    Best Service
                </li>
                <li>
                    <span><i class="ri-map-2-line"></i></span>
                    Quality Control before packing
                </li>
                <li>
                    <span><i class="ri-headphone-line"></i></span>
                    Product The Best
                </li>
                <li>
                    <span><i class="ri-24-hours-line"></i></span>
                    Support 24 Hours
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="section__container banner__container">
    <div class="banner__content">
        <div class="banner__card">
            <h4>25+</h4>
            <p>Our Product</p>
        </div>
        <div class="banner__card">
            <h4>5+</h4>
            <p>Support Country</p>
        </div>
        <div class="banner__card">
            <h4>40+</h4>
            <p>Customer</p>
        </div>
    </div>
</section>