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

// Set the directory to save uploaded files
$uploadDirectory = __DIR__ . '/uploads/'; // Assuming a directory named 'uploads' in the same directory as this script

// Check if the directory exists, and create it if it doesn't
if (!file_exists($uploadDirectory)) {
    mkdir($uploadDirectory, 0755, true);
}

// File upload handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {




    $category = $_POST['category'];

     $brand = $_POST['brand'];

     $parts = $_POST['parts'];
     
     $product_name = $_POST['product_name'];
     
     $image_data = file_get_contents($_FILES['image']['tmp_name']);

     $image_name = $_FILES['image']['name']; 

       $price = $_POST['price'];
  
       $product_name = $_POST['product_brand'];
       
	   $discount = $_POST['discount'];

       $supplier = $_POST['supplier'];

    $sql = "INSERT INTO overall (category, brand, parts, product_name,image_data,image_name,price,product_brand,discount,supplier) VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssssss', $category, $brand, $parts, $product_name,$image_data, $image_name, $price, $product_name, $discount,$supplier);

    if ($stmt->execute()) {
        // Move the uploaded file to the specified directory
        $uploadedFilePath = $uploadDirectory . $image_name;
        move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFilePath);

        echo "<script type='text/javascript'>alert('Data Added
         Successfully');window.location.href='addproduct.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
