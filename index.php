<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>PT. Rollindo Rabbani Makmur</title>
  </head>
  <body>
    <?php
        $header = empty($_GET['page']) || $_GET['page'] == 'beranda' ? 'header' : 'header__page';

        include('admin/db/connection.php');
        $sqlsetting = "select * from setting";
        $querysetting = mysqli_query($conn, $sqlsetting);
        $rowsetting = mysqli_fetch_assoc($querysetting);
        $phone = $rowsetting['phone'];
    ?>
    <header class="<?php echo $header; ?>">
      <nav>
        <div class="nav__bar">
          <div class="logo">
            <a href="#"><img src="assets/logo.png" alt="logo" /></a>
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <i class="ri-menu-line"></i>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li><a href="?page=beranda#home">Home</a></li>
          <li><a href="?page=beranda#about">About</a></li>
          <li><a href="?page=beranda#visimisi">Vision & Mision</a></li>
          <li><a href="?page=beranda#service">Service</a></li>
          <li><a href="?page=product">Product</a></li>
          <li><a href="?page=beranda#contact">Contact</a></li>
        </ul>
        <a href="https://api.whatsapp.com/send?phone=<?php echo $phone;?>&text=Hello, Welcome to PT. Rollindo Rabbani MakmurIf you have a question, please write here ..."><button class="btn nav__btn">Contact Now</button></a>
      </nav>
      <?php
        if(empty($_GET['page']) || $_GET['page'] == 'beranda') {
            include('pages/header.php');
        }
        ?>
    </header>

    <?php
        if(isset($_GET['page'])) {
            include('pages/'.$_GET['page'].'.php');
        } else {
            include('pages/beranda.php');
        }
    ?>

    <footer class="footer" id="contact">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="logo">
            <a href="#home"><img src="assets/logo.png" alt="logo" /></a>
          </div>
          <p class="section__description" style="color:#000000 !important">
            <?php echo substr($rowabout['desc'],0,100);?>.
          </p>
        </div>
       
       
        <div class="footer__col">
          <h4>CONTACT US</h4>
          <ul class="footer__links">
            <li><a href="#"><?php echo $rowsetting['email'];?></a></li>
            <li><a href="#"><?php echo $rowsetting['phone'];?></a></li>
          </ul>
          <div class="footer__socials">
            <a href="#"><img src="assets/facebook.png" alt="facebook" /></a>
            <a href="#"><img src="assets/instagram.png" alt="instagram" /></a>
            <a href="#"><img src="assets/youtube.png" alt="youtube" /></a>
            <a href="#"><img src="assets/twitter.png" alt="twitter" /></a>
          </div>
        </div>
        <div class="footer__col">
          <h4>MAPS</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15889.479033937429!2d105.30134543151941!3d-5.360425813892341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40c35634c1a611%3A0xcb3cf692dbb4f26!2sInstitut%20Teknologi%20Sumatera%20%22ITERA%22!5e0!3m2!1sid!2sid!4v1704111870550!5m2!1sid!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      <div class="footer__bar">
        Copyright © 2023 Web Design Mastery. All rights reserved.
      </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="main.js"></script>
  </body>
</html>
