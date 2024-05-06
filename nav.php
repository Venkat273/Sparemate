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
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  

   
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
              <span class="navlink">My Cart</span>
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