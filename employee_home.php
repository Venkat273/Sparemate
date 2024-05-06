<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Emplaoyee Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="employee/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="employee/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="employee/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="employee/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="employee/js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="employee/js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="employee/js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            

<div class="inner-block" style="margin-top:-100px;">
<!--market updates updates-->
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-8 market-update-left">
						<h3>83</h3>
						<h4>Assigned Work</h4>
						<p>Total Count, This Month</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-2">
				 <div class="col-md-8 market-update-left">
					<h3>35</h3>
					<h4>Daily Visitors</h4>
					<p>Total Count, This Month</p>
				  </div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<h3>23</h3>
						<h4>New Task</h4>
						<p>Total Count, This Month</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>
<!--market updates end here-->
<!--mainpage chit-chating-->
<div class="chit-chat-layer1">
	<div class="col-md-16 chit-chat-layer1-left">
               <div class="work-progres">
                            <div class="chit-chat-heading">
                                  Recent Task
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th>ID</th>
                                      <th>Product</th>
                                      <th>Parts</th>
                                      <th>Client Name</th> 
                                      <th>Contact</th>                                  
                                      <th>Address</th>                                  
                                      <th>Status</th>
                                      
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
$emp_name = $_SESSION["employee_name"];
$sql = "SELECT * FROM orders where assign='$emp_name'";

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
        $assign = $row['assign'];
        $status = $row['status'];

        // Get username from the signup table using user_id
        $user_query = "SELECT * FROM signup WHERE id = '$user_id'";
        $user_result = $conn->query($user_query);

        if ($user_result->num_rows > 0) {
            $user_row = $user_result->fetch_assoc();
            $username = $user_row['username'];
            $address = $user_row['address'];
            $city = $user_row['city'];
            $state = $user_row['state'];
            $zipcode = $user_row['zipcode'];
            $contact = $user_row['contact_no'];
        $pro = "SELECT * FROM overall WHERE id = $product_id ";
        $pro_result = $conn->query($pro);
        if($pro_result->num_rows > 0){
            $pro_row = $pro_result->fetch_assoc();
            $product = $pro_row['product_name'];
            $part = $pro_row['parts'];
        

            // Generate the HTML for each image with Bootstrap card styling
            echo '
            <tr>
            <td>'.$id.'</td>
            <td>'.$product.'</td>
            <td>'.$part.'</td>
            <td>'.$username.'</td>  
            <td>'.$contact.'</td>                                
            <td>'.$address.'<br> '.$city.', Pin-'.$zipcode.'</td>                   
       <td>

    
             ';
                if ($status == 'pending') {
                    echo '<span class="label label-danger">In Progress</span>';
                } else {
                    echo '<span class="label label-success">Completed</span>';
                }
                
            echo'</div>
        </td>
        
          </tr> 
       ';
        }} else {
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
<!--slider menu-->
    <div class="sidebar-menu" style="height:800px;">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="employee_home.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <!-- <li><a href="employee_home.php"><i class="fa fa-cogs"></i><span>Components</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		            <li><a href="grids.html">Grids</a></li>
		            <li><a href="portlet.html">Portlets</a></li>		            
		          </ul>
		        </li> -->
		        <!-- <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Element</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="buttons.html">Buttons</a>		              
		            </li>
		            <li id="menu-arquivos" ><a href="typography.html">Typography</a></li>
		            <li id="menu-arquivos" ><a href="icons.html">Icons</a></li>
		          </ul>
		        </li> -->
		          <!-- <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li> -->
		        <li id="menu-academico" ><a href="emp_completed.php"><i class="fa fa-file-text"></i><span>Status</a></li>
		        
		        <li><a href="login.html"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>

		        <!-- <li><a href="#"><i class="fa fa-envelope"></i><span>Mailbox</span></a></li> -->

		         
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="employee/js/jquery.nicescroll.js"></script>
		<script src="employee/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="employee/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     