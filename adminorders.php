<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <!-- Add this HTML and CSS in the head of your document or include it in your existing stylesheets -->
  <style>
 
/* CSS */
.button-22 {
  align-items: center;
  appearance: button;
  background-color: #0276FF;
  border-radius: 8px;
  border-style: none;
  box-shadow: rgba(255, 255, 255, 0.26) 0 1px 2px inset;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: flex;
  flex-direction: row;
  flex-shrink: 0;
  font-family: "RM Neue",sans-serif;
  font-size: 100%;
  line-height: 1.15;
  margin: 0;
  padding: 10px 21px;
  text-align: center;
  text-transform: none;
  transition: color .13s ease-in-out,background .13s ease-in-out,opacity .13s ease-in-out,box-shadow .13s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-22:active {
  background-color: #006AE8;
}

.button-22:hover {
  background-color: #1C84FF;
}
  </style>
<style>
  /* Styles for the dropdown */
  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {
    background-color: #f1f1f1;
  }

  .dropdown:hover .dropdown-content {
    display: block;
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
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
           
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
               <h3>Admin Dashboard</h3>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        
        
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Orders</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Order Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">UserName</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Payment ID</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Amount</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Product ID</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'sparemate';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM orders where status='pending'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Retrieve the image data
        $id = $row['id'];
        $date = $row['date'];
        $payment_id = $row['payment_id'];
        $amount = $row['amount'];
        $product_id = $row['product_id'];
        $user_id = $row['user_id'];

        // Get username from the signup table using user_id
        $user_query = "SELECT username FROM signup WHERE id = '$user_id'";
        $user_result = $conn->query($user_query);

        if ($user_result->num_rows > 0) {
            $user_row = $user_result->fetch_assoc();
            $username = $user_row['username'];

            // Generate the HTML for each image with Bootstrap card styling
            echo '
            <tr>
            <td class="border-bottom-0">
                <h6 class="fw-semibold mb-1">'.$id.'</h6>                         
            </td>
            <td class="border-bottom-0">
              <p class="mb-0 fw-normal">'.$username.'</p>
            </td>
            <td class="border-bottom-0">
              <p class="mb-0 fw-normal">'.$payment_id.'</p>
            </td>
            <td class="border-bottom-0">
              <h6 class="fw-semibold mb-0 fs-4">₹ '.$amount.'</h6>
            </td>
            <td class="border-bottom-0">
              <h6 class="fw-semibold mb-0 fs-4">'.$product_id.'</h6>
            </td>
            <td class="border-bottom-0">
              <div class="dropdown">
                <button class="button-22" onclick="assignEmployee('.$id.')">Assign</button>
                <div id="dropdown-'.$id.'" class="dropdown-content">
                  ';

            // Fetch employees from the employee table
            $employee_query = "SELECT * FROM employee";
            $employee_result = $conn->query($employee_query);

            // Display employee options in the dropdown
            if ($employee_result->num_rows > 0) {
                while ($employee_row = $employee_result->fetch_assoc()) {
                    echo '<a href="update_assignment.php?orderId='.$id.'&employeeId='.$employee_row['name'].'" >'.$employee_row['name'].'</a>';
                }
            } else {
                echo 'No employees found.';
            }

            echo '
                </div>
              </div>
            </td>
          </tr> 
       ';
        } else {
            echo 'No username found for user_id: ' . $user_id;
        }
    }
} else {
    echo 'No images found in the table.';
}

$conn->close();
?>

                     
                                            
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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