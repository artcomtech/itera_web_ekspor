
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
        <p></p>

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
