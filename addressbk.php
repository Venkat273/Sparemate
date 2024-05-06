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
$userid = $_SESSION["id"]; 
$pro_id = $_SESSION['product_id'];
// Check if the user ID is provided in the query parameter
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zipcode = $_POST['zipcode'];
    $contactno = $_POST['contactno'];
    

    // Validate and sanitize input if necessary

    // Update user's billing address in the database
    $sql = "UPDATE signup SET address = '$address', city = '$city', state = '$state', zipcode = '$zipcode', contact_no = '$contactno', product_id = '$pro_id' WHERE id = '$userid'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Billing address updated successfully'); window.location.href = 'address.php?id=$pro_id';</script>";
        
    } else {
        echo "Error updating billing address: " . $conn->error;
    }
}



$conn->close();
?>