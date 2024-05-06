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

if (isset($_GET['orderId']) && isset($_GET['employeeId'])) {
    $orderId = $_GET['orderId'];
    $employeeId = $_GET['employeeId'];
    echo $orderId;
    echo $employeeId;
    

    // Perform the database update here
    $update_query = "UPDATE orders SET assign = '$employeeId' WHERE id = $orderId";
    
    // ... (Your existing database connection code)
    
    
    if ($conn->query($update_query) === TRUE) {
        echo "<script type='text/javascript'>alert('Assigned Employee Successfully');window.location.href='adminorders.php';</script>";
    } else {
        echo "<script type='text/javascript'>alert('Error In adding employee');window.location.href='adminorders.php';</script>";
    }

    // ... (Close the database connection)
    $conn->close();
} else {
    echo "Invalid parameters";
}
?>

