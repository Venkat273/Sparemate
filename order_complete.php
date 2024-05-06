<?php
// Your database connection code here
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'sparemate';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $orderId = $_GET['id'];

    echo $orderId;

    

    // Perform the database update here
    $update_query = "UPDATE orders SET status = 'completed' WHERE id = $orderId";
    
    // ... (Your existing database connection code)
    
    
    if ($conn->query($update_query) === TRUE) {
        echo "<script type='text/javascript'>alert('Order Completed Successfully');window.location.href='emp_completed.php';</script>";
    } else {
        echo "<script type='text/javascript'>alert('Error In adding Order');window.location.href='emp_completed.php';</script>";
    }

    // ... (Close the database connection)
    $conn->close();
} else {
    echo "Invalid parameters";
}
?>

