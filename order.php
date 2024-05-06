<?php
session_start();
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'sparemate';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user ID is provided in the query parameter
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query to fetch user details by ID
    $sql = "SELECT * FROM overall WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $discount = $row['discount'];
        $price = $row['price'];
        $product_brand = $row['product_brand'];
        $supplier = $row['supplier'];
        $product_brand = $row['product_brand'];
        $image_data = $row['image_data'];

    } else {
        echo 'User not found.';
    }
} else {
    echo 'User ID not provided.';
}

$conn->close();
?>
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
$userid = $_SESSION["id"]; 
// Check if the user ID is provided in the query parameter

   

    // Query to fetch user details by ID
    $sql = "SELECT * FROM signup WHERE id = $userid";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $address = $row['address'];
        $city = $row['city'];
        $state = $row['state'];
        $zipcode = $row['zipcode'];
        $contact_no = $row['contact_no'];
        $username = $row['username'];
      

    } else {
        echo 'User not found.';
    }


$conn->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="orderg.css" />
    <link rel="stylesheet" href="orders.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
  </head>
  <body>
    <div class="desktop">
      <div class="div">
      <?php include 'nav.php' ?>
        <div class="overlap-group">
          <div class="overlap-2">
            <div class="text-wrapper-2">Deliver To :</div>
            <div class="text-wrapper-2">Deliver To :</div>
          </div>
          <div class="text-wrapper-3"><?php echo $username; ?></div>
          <p class="element-dwaragar-nagar"><?php echo $address; ?>&nbsp;&nbsp;<br /><?php echo $city; ?> -  <?php echo $zipcode; ?></p>
          <div class="text-wrapper-4"><?php echo $contact_no; ?></div>
          <!-- <div class="overlap-3">
            <div class="rectangle"></div>
            <div class="text-wrapper-5">Change</div>
          </div> -->
        </div>
        <div class="overlap-4">
          <img class="element" src="data:image/jpeg;base64,<?php echo base64_encode($image_data); ?>" />
          <p class="p"><?php echo $product_brand; ?></p>
          <div class="overlap-5">
            <div class="text-wrapper-6">₹<?php echo $price; ?></div>
            <!-- <div class="text-wrapper-7"><?php echo $discount; ?>off</div> -->
          </div>
          <div class="text-wrapper-8">Delivered by Tomorrow, Fri</div>
          <!-- <img class="formkit-add" src="https://c.animaapp.com/nPZgxoVM/img/formkit-add.svg" />
          <img class="zondicons-minus" src="https://c.animaapp.com/nPZgxoVM/img/zondicons-minus-outline.svg" />
          <div class="overlap-6">
            <div class="rectangle-2"></div>
            <div class="text-wrapper-9">1</div>
          </div>
          <div class="text-wrapper-10">Remove</div> -->
        </div>
        <div class="overlap-group-2">
          <div class="text-wrapper-11">Price Details</div>
          <div class="text-wrapper-12">₹99</div>
          <div class="text-wrapper-13">Secured Packaging Fee</div>
          <div class="overlap-7">
            <div class="text-wrapper-14">FREE Delivery</div>
            <div class="text-wrapper-14">FREE Delivery</div>
          </div>
          <div class="price-items">Price&nbsp;&nbsp; (1 items)</div>
          <div class="text-wrapper-15">Delivery charges</div>
          <div class="text-wrapper-16">Total amount</div>
          <img class="line" src="https://c.animaapp.com/nPZgxoVM/img/line-34.svg" />
          <img class="img" src="https://c.animaapp.com/nPZgxoVM/img/line-34.svg" />
          <div class="text-wrapper-17">₹<?php echo $price; ?></div>
          <?php
// Assuming $price is a variable containing the second price
$pric = (int)$price;

$totalPrice = 99 + $pric;

?>
          <div class="text-wrapper-18">₹<?php echo $totalPrice; ?></div>
        </div>
        <div class="group">
        <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-img="//www.tutsmake.com/wp-content/uploads/2019/03/c05917807.png" data-amount="<?php echo $totalPrice; ?>" data-id="1">
          <div class="div-wrapper"><div class="text-wrapper-19">Pay</div></div>
        </a> 

        </div>
      </div>
    </div>

    
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_d3Hp2lyAkOW2OT",
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {

               window.location.href = 'https://www.tutsmake.com/Demos/php/razorpay/success.php';
            }
        });
     
    },

    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.`preventDefault`();
  });

</script>

<script src=""></script>

<script>
 
  $('body').on('click', '.buy_now', function(e){
    var prodimg = $(this).attr("data-img");
    var totalAmount = $(this).attr("data-amount");
    var product_id =  $(this).attr("data-id");
    var options = {
    "key": "rzp_test_d3Hp2lyAkOW2OT", // secret key id
    "amount": (totalAmount*100), // 2000 paise = INR 20
    "name": "Tutsmake",
    "description": "Payment",
 
    "handler": function (response){
          $.ajax({
            url: 'payment-proccess.php',
            type: 'post',
            dataType: 'json',
            data: {
                razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount ,product_id : product_id,
            }, 
            success: function (msg) {
 
               window.location.href = 'payment-success.php';
            }
        });
      
    },
 
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
  e.preventDefault();
  });
 
</script>
  </body>
</html>
