<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Boxicons CSS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <title>Spare Home</title>
    <link rel="stylesheet" href="sparestyle.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="swiper-bundle.min.css" />
    <link rel="stylesheet" href="imagestyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <script src="imagescript.js" defer></script>

    <style>
    hr {
      border: none;
      height: 1px;
      background-color: blue;
      width: 100%;
      margin-top: 20px;
      margin-bottom: 20px;
    }

    /* Additional styles for the next content */
    .grid-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 20px;
      margin-top: 20px;
      justify-content: center;
      text-align: center;
      margin-left: 400px;
    }

    .grid-box {
      display: flex;
      align-items: center;
      border: 1px solid #ddd;
      padding: 20px;
      text-align: center;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .grid-box img {
      width: 100px;
      height: 100px;
      margin-right: 10px; /* Add margin to separate image and text */
    }

    .grid-box h2 {
      margin: 0; /* Remove default margin for h2 */
      margin-left:70px;
    }
  </style>
  </head>
  <body style=" background-color:white;">
    <!-- navbar -->
    <nav class="navbar">
      <div class="logo_item">
        <i class="bx bx-menu" id="sidebarOpen"></i>
        <img src="logo.png" alt=""></i>SpareMate
      </div>

      <div class="search_bar">
        <input type="text" id="searchInput" oninput="filterTable()" placeholder="Search" />
      </div>

      <div class="navbar_content">
        <i class="bi bi-grid"></i>
        <i class='bx bx-sun' id="darkLight"></i>
        <a href="notification.php">
        <i class='bx bx-bell' ></i>
        </a>
       
        
      </div>
    </nav>
    <script>
    document.getElementById('searchInput').addEventListener('click', function () {
        // Redirect to nav_bar.php
        window.location.href = 'nav_bar.php';
    });
</script>

    <!-- sidebar -->
    <nav class="sidebar">
      <div class="menu_content">
        
          

        <ul class="menu_items">
         <div><br></div>
          <!-- duplicate these li tag if you want to add or remove navlink only -->
          <!-- Start -->
          <li class="item">
            <a href="sparehome.php" class="nav_link">
              <span class="navlink_icon">
              <i class="bx bx-home-alt"></i>
              </span>
              <span class="navlink">Home</span>
            </a>
          </li>
          <!-- End -->

          <li class="item">
            <a href="profile.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-loader-circle"></i>
              </span>
              <span class="navlink">Profile</span>
            </a>
          </li>
          <li class="item">
            <a href="order_details.php" class="nav_link">
              <span class="navlink_icon">
                <i class="bx bx-filter"></i>
              </span>
              <span class="navlink">Orders</span>
            </a>
          </li>
          <li class="item">
            <a href="favorite.php" class="nav_link">
              <span class="navlink_icon">
              <i class='bx bx-bell' ></i>
              </span>
              <span class="navlink">Favorites</span>
            </a>
          </li>
          <li class="item">
            <a href="login.html" class="nav_link">
              <span class="navlink_icon">
              <i class='bx bx-log-in' ></i>
              </span>
              <span class="navlink">Logout</span>
            </a>
          </li>
        </ul>

       

        <!-- Sidebar Open / Close -->
        <div class="bottom_content">
          <div class="bottom expand_sidebar">
            <span> Expand</span>
            <i class='bx bx-log-in' ></i>
          </div>
          <div class="bottom collapse_sidebar">
            <span> Collapse</span>
            <i class='bx bx-log-out'></i>
          </div>
        </div>
      </div>
    </nav>
    

    
    <section class="main swiper mySwiper" >
      <div class="wrapper swiper-wrapper">
        <div class="slide swiper-slide">
          <img src="banner-motorcycle.jpg" alt="" class="image" />
          <div class="image-data">
            
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="home_scroll.jpg" alt="" class="image" />
          <div class="image-data">
            
          </div>
        </div>
        <div class="slide swiper-slide">
          <img src="horizontal-banner.jpg" alt="" class="image" />
          <div class="image-data">
           
          
          </div>
        </div>
      </div>

      <div class="swiper-button-next nav-btn"></div>
      <div class="swiper-button-prev nav-btn"></div>
      <div class="swiper-pagination"></div>
    </section>
    <hr />
    <a href="carbrand.php" style="text-decoration:none;">
  <div class="grid-container" >
    <h3 style="margin-left: -450px;">Categories</h3>
    <br>
    <div class="grid-box">
      <img src="https://c.animaapp.com/MXGgXXXP/img/3-2-car-free-download-png-2@2x.png" alt="">
      <h2>Four Wheeler</h2>
    </div>
  </div>
  </a>
  <a href="bikebrand.php" style="text-decoration:none;">
  <div class="grid-container">
    <div class="grid-box">
      <img src="https://c.animaapp.com/MXGgXXXP/img/image-80@2x.png" alt="">
      <h2>Two Wheeler</h2>
    </div>
  </div>
  </a>
    <br><br>
    <!-- Swiper JS -->
    <script src="swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

   
    <!-- JavaScript -->
    <script src="sparehome.js"></script>
  </body>
</html>