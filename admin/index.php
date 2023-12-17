<span style="font-family: verdana, geneva, sans-serif;">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <title>Job Dashboard | By Code Info</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Font Awesome Cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
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
            <li><a href="?page=category">
                <i class="fas fa-tags"></i>
                <span class="nav-item">Category</span>
              </a>
            </li>
            <li><a href="?page=product">
                <i class="fas fa-cube"></i>
                <span class="nav-item">Product</span>
              </a>
            </li>
            <li><a href="?page=service">
                <i class="fas fa-question-circle"></i>
                <span class="nav-item">Serivce</span>
              </a>
            </li>
            <li><a href="#">
                <i class="fas fa-cog"></i>
                <span class="nav-item">Setting</span>
              </a>
            </li>
            <li><a href="#" class="logout">
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

  </html>
</span>