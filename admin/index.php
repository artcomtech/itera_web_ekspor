<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>PT. Rollindo Rabbani Makmur</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
  </head>

  <body>
    <div class="container">
      <nav>
        <div class="navbar">
          <div class="logo">
            <img src="../image/logo.png" alt="" style="width: 80px;height: 80px;">
            <h1>ADMIN</h1>
          </div>
          <ul>
            <li><a href="#">
                <i class="fas fa-user"></i>
                <span class="nav-item">Dashboard</span>
              </a>
            </li>
            <li><a href="?page=slider">
                <i class="fas fa-chart-bar"></i>
                <span class="nav-item">Slider</span>
              </a>
            </li>
            <li><a href="?page=about">
                <i class="fas fa-user"></i>
                <span class="nav-item">About</span>
              </a>
            </li>
           
            <li><a href="?page=product">
                <i class="fas fa-cube"></i>
                <span class="nav-item">Product</span>
              </a>
            </li>
          
            <li><a href="?page=setting">
                <i class="fas fa-cog"></i>
                <span class="nav-item">Setting</span>
              </a>
            </li>
            <li><a href="../index.php" class="logout">
                <i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>

    <?php
      if(!empty($_GET['page'])){
        include $_GET['page'].'.php';
      }else{
        include 'dashboard.php';
      }
      
    ?>
    </div>

  </body>
  
  <script>
          CKEDITOR.replace('desc');
  </script>
  </html>
</span>