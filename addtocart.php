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
    $user_id = $_SESSION["id"];
    
    // Query to fetch user details by ID
    $sql = "INSERT INTO cart (product_id, user_id, status) VALUES ($id,$user_id,1)";
   

    if ($conn->query($sql) === TRUE) {
  
        echo "<script type='text/javascript'>alert('Added to cart');window.location.href='favorite.php';</script>";
        
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
      $conn->close();
?>
