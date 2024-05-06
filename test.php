<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product </title> 
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

/* ... (existing styles) ... */

.wrapper {
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
  min-height: 100vh; /* Set a minimum height to fill the viewport */
}

/* ... (existing styles) ... */

.wrapper form {
  width: 100%; /* Make the form width 100% */
}

.wrapper form .input-box {
  width: 100%; /* Make the input boxes width 100% */
}

/* ... (existing styles) ... */


.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #BC9ABD;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #BC9ABD;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #BC9ABD;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #BC9ABD;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color:#BC9ABD;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
img {
    margin-left: 113px;
}

    </style>
   </head>
<body>

 <!--  Body Wrapper -->
 <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="#" class="text-nowrap logo-img">
            <img src="logo.png" width="180" alt="" />
          </a>
          
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="admin_home.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="addproduct.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Add Product</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="adminorders.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Orders</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="assigntask.php" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">Assigned Employee</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="emp_details.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Employee Details</span>
              </a>
            </li>
            <!-- <li class="sidebar-item">
              <a class="sidebar-link" href="allorders.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file-description"></i>
                </span>
                <span class="hide-menu">All Orders</span>
              </a>
            </li> -->
           
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">AUTH</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="login.html" aria-expanded="false">
                <span>
                  <i class="ti ti-login"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="admin-register.php" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Add Employee</span>
              </a>
            </li>
            
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll--
      >
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <div >

      
      <!--  Header End -->
      <div class="wrapper">
    
    <form action="addproductbk.php" method="post" enctype="multipart/form-data">
       <h4>Add Product</h4>
      <div class="input-box">
        <input type="text" placeholder="Category" name="category" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Brand" name="brand" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Parts" name="parts" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Product_name"  name="product_name"required>
      </div>
      <div class="input-box">
        <input type="file" placeholder="Image_data" name="image" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Price" name="price" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Product_brand"  name="product_brand"required>
      </div>
      <div class="input-box">
        <input type="text " placeholder="Discount" name="discount" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Supplier" name="supplier" required>
      </div>
      
      
      <div class="input-box button">
        <input type="Submit" value="Signup">
      </div>
      
    </form>
  </div>
  </div>
          
      
      </div>
    </div>
  </div>
  <!-- Add this JavaScript code at the end of your body or include it in your existing scripts -->
  <!-- Include this script in the head or at the end of your HTML file -->

<script>
   
    function selectEmployee(orderId, employeeId, employeeName) {
        // Send data to the server using AJAX
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Optionally, update the UI or handle success
                console.log("Order " + orderId + " assigned to employee: " + employeeName);
            }
        };

        // Replace 'your_server_script.php' with the actual server-side script
        xhttp.open("GET", "update_assignment.php?orderId=" + orderId + "&employeeId=" + employeeId, true);
        xhttp.send();
    }
</script>

<script>
  // JavaScript function to handle the assignment dropdown
  function assignEmployee(orderId) {
    // Get the dropdown content element
    var dropdownContent = document.getElementById("dropdown-" + orderId);

    // Toggle the display of the dropdown content
    dropdownContent.style.display === "block"
      ? (dropdownContent.style.display = "none")
      : (dropdownContent.style.display = "block");
  }

  // JavaScript function to handle the employee selection
  function selectEmployee(orderId, employeeId) {
    // You can use AJAX to send the selected employeeId to the server
    // For simplicity, we'll just log it to the console here
    console.log("Selected Employee for Order " + orderId + ": " + employeeId);
  }
</script>

  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>




  
</body>
</html>
