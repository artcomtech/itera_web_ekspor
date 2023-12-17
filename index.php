<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>PT.Rollindo Rabbani Makmur</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">

  <!-- Owl  Carouse css -->
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Owl  Carouse css -->


  <!-- jquery   -->
  <script src="js/jquery.js" charset="utf-8"></script>
  <!-- jquery   -->

</head>

<body>

  <section class="head" id="home">
    <div class="content flex1">
      <div class="social_media flex">
       
        <i class="fab fa-facebook-f"></i>
        <!-- <i class="fab fa-youtube"></i> -->
        <i class="fab fa-instagram"></i>
      </div>

      <div class="logo">
        <img src="image/logo.png" alt="" style="width: 130px;">
      </div>

      <div class="account social_media flex">
        <!-- <i class="fas fa-shopping-bag"></i> -->
        <!-- <i class="fas fa-search"></i> -->
      </div>
    </div>
  </section>


  <header>
    <nav>
      <div id="mySidenav" class="sidenav">
        <span class="closebtn " onclick="closeNav()">&times;</span>
        <div class="menu_items">
          <a href="#home"> Home </a>
          <a href='#abouts'> About Us </a>
          <a href='#products'> Products </a>
          <a href='#contact'> Contact </a>
          <a href='#galery'> Galery </a>
        </div>
      </div>
      <div class="social_media">
        <i class="fas fa-bars hamburger-icon " onclick="openNav()"></i>
      </div>
    </nav>
  </header>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>




  <section class="home">
    <div class="item">
      <div class="heading">
        <h1> <span>Best Copra</span> Great Company</h1>
        <p>We are a company in Indonesia that provides raw coconut and its derivatives such as Copra, Cocofiber/Coconut Fiber and Cocopeat/Coconut Shell Charcoal. Some of the other products provided are Grade A Watermelon, Enoki Mushrooms, Ant Sugar and Palm Sugar </p>
      </div>
      <div class="img">
        <img src="image/home.jpg" alt="">
      </div>
    </div>
  </section>





  <section class="menu top">
    <div class="container">
      <div class="heading">
        <h5>Rollindo Rabbani Makmur </h5>
        <h2>Category Products </h2>
      </div>

      <div class="owl-carousel owl-theme mtop">
        <?php
          include('admin/db/connection.php');
          $sql = "SELECT * FROM category";
          $category = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($category)){
            echo '<div class="item">
                    <div class="img">
                      <img src="image/'.$row['image'].'" alt="">
                    </div>
                    <div class="text">
                      <h3>'.$row['title'].'</h3>
                      <p>'.$row['desc'].'</p>
                    </div>
                  </div>';
          }
        ?>
        
      </div>
    </div>
  </section>


  <!-- Owl  Carouse js file  -->
  <script src="js/jquery3.4.1.min.js" charset="utf-8"></script>
  <script src="js/owl.carousel.js" charset="utf-8"></script>
  <!-- Owl  Carouse js file  -->


  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      dots: true,
      responsive: {
        511: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>

  <?php
  $sql = "SELECT * FROM about";
  $about = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($about);
  ?>
  <section class="wrapper mtop" id="abouts">
    <div class="container flex">
      <div class="left  ">
        <div class="heading heading2">
          <h1> <?php echo $row['title']; ?> </h1>
          <p style="font-weight: bold;color: #FFFFFF !important;"> <?php echo $row['desc']; ?> </p>
          <div class="text flex">
            <div class="icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="add">
              <h5>Our Location</h5>
              <label>B<?php echo $row['location']; ?></label>
            </div>
          </div>
        </div>
        <div class="button">
          <button class="btn1">Contact Us </button>
        </div>
      </div>
      <div class="right">
        <img src="image/w1.png" alt="">
      </div>
    </div>
  </section>



  <section class="list">
    <div class="container">
      <div class="grid">
        <?php
          $sql = "SELECT * FROM service";
          $service = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($service)){
            echo  '<div class="box">
            <img src="image/'.$row['image'].'"  style="width: 100px;"/>
            <p>'.$row['title'].'</p>
          </div>';
          }
        ?>
       
       
      </div>
    </div>
  </section>

  <section class="product mtop" id="products">
    <div class="heading">
      <h5>Our Produvct </h5>
      <h2>Take with You</h2>
      <p style="color: black;">All the products we provide are of the best quality and best standards. </p>
    </div>

    <div class="content grid mtop">
      <?php
        $sql = "SELECT * FROM product";
        $product = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($product)){
          echo '<div class="box">
                  <div class="img">
                    <img src="image/'.$row['image'].'" alt="">
                  </div>
                  <div class="text">
                    <div class="rate flex">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <h4>'.$row['title'].'</h4>
                    <h5>'.$row['price'].'/'.$row['unit'].'</h5>
                  </div>
                </div>';
        }
      ?>
    </div>
  </section>




  <section class="wrapper customer mtop" id="testimonials">
    <div class="container">
      <div class="owl-carousel owl-carousel2 owl-theme mtop">
        <div class="items">
          <i class="fas fa-quote-right"></i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <div class="img">
            <img src="image/c1.jpg" alt="">
          </div>
          <h5>Alex Ander</h5>
        </div>
        <div class="items">
          <i class="fas fa-quote-right"></i>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <div class="img">
            <img src="image/c2.jpg" alt="">
          </div>
          <h5>Alex Ander</h5>
        </div>
      </div>
    </div>
  </section>

  <script>
    $('.owl-carousel2').owlCarousel({
      loop: true,
      margin: 20,
      nav: true,
      dots: false,
      navText: ["<i class='far fa-long-arrow-alt-left'></i>", "<i class='far fa-long-arrow-alt-right'></i>"],
      items: 1
    })
  </script>


  <section class="image" id="galery" style="margin-top:4%;margin-bottom: 3%;";>
    <div class="content grid">
      <div class="box">
        <div class="img">
          <img src="image/cocofiber2.jpg" alt="">
        </div>
        <div class="icon">
          <i class="fas fa-search-plus"></i>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="image/cocofiber3.jpg" alt="">
        </div>
        <div class="icon">
          <i class="fas fa-search-plus"></i>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="image/cocofiber4.jpg" alt="">
        </div>
        <div class="icon">
          <i class="fas fa-search-plus"></i>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="image/cocopeat1.jpg" alt="">
        </div>
        <div class="icon">
          <i class="fas fa-search-plus"></i>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="image/cocopeat2.jpg" alt="">
        </div>
        <div class="icon">
          <i class="fas fa-search-plus"></i>
        </div>
      </div>
      <div class="box">
        <div class="img">
          <img src="image/cocopeat3.jpg" alt="">
        </div>
        <div class="icon">
          <i class="fas fa-search-plus"></i>
        </div>
      </div>
    </div>
  </section>



  <footer>
    <div class="footerbg">
      <div class="content grid">
        <div class="box">
          <div class="logo">
            <img src="image/logo.png" alt="" style="width: 140px;">
          </div>
          <p> We are a company in Indonesia that provides raw coconut and its derivatives such as Copra, Cocofiber/Coconut Fiber and Cocopeat/Coconut Shell Charcoal.</p>
          <div class="icon flex">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-youtube"></i>
            <i class="fab fa-instagram"></i>
          </div>
        </div>

        <div class="box">
          <h3>Contact Info</h3>
          <div class="address">
            <div class="item flex">
              <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="text">
                <h5>Our Location:</h5>
                <span>Bandar Lampung, Indonesia</span>
              </div>
            </div>
            <div class="item flex">
              <div class="icon">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div class="text">
                <h5>Phone Number:</h5>
                <span>+123 456 789</span>
                <span>+123 456 789</span>
              </div>
            </div>
          </div>
        </div>

        <div class="box">
          <h3>Your Email</h3>

          <div class="input flex1">
            <input type="text" placeholder="Your Email">
            <input type="submit" value="Send" class="submit">
          </div>
          <div class="check">
            <input type="checkbox">
            <span> I have read and agree to the terms & conditions</span>
          </div>
        </div>
      </div>


      <div class="legal">
        <p>Copyright (c) 2023 Copyright Holder All Rights Reserved.</p>
      </div>
    </div>
  </footer>
</body>

</html>