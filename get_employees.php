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
// Example query to fetch employees (replace with your actual query)
$sql = "SELECT id, name FROM employee";
$result = $conn->query($sql);

// Generate dropdown options
$options = '';
while ($row = $result->fetch_assoc()) {
    $options .= '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
}

echo $options;

// Close the database connection
$conn->close();
?>
