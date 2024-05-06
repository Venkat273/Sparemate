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
        echo 'Product not found.';
    }
} else {
    echo 'Product ID not provided.';
}

// Fetch user details
$sql_user = "SELECT * FROM signup WHERE id = $userid";
$result_user = $conn->query($sql_user);

if ($result_user->num_rows == 1) {
    $row_user = $result_user->fetch_assoc();
    $address = $row_user['address'];
    $city = $row_user['city'];
    $state = $row_user['state'];
    $zipcode = $row_user['zipcode'];
    $contact_no = $row_user['contact_no'];
    $username = $row_user['username'];

} else {
    echo 'User not found.';
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addressg.css">
    <link rel="stylesheet" href="addresss.css">
    <title>Product Details</title>
</head>
<body>
    <div class="desktop">
        <div class="div">
            <?php include 'nav.php'; ?>

            <section class="product-details spad">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <div class="overlap">
                                <img class="vector" src="https://c.animaapp.com/n4nUgdNF/img/vector.svg" />
                                <div class="text-wrapper-2"><?php echo $username; ?></div>
                                <p class="element-dwaragar-nagar"><?php echo $address; ?>&nbsp;&nbsp;<br /><?php echo $city; ?> - <?php echo $zipcode; ?></p>
                                <div class="text-wrapper-3"><?php echo $contact_no; ?></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="overlap-3">
                                <div class="price-items">Price&nbsp;&nbsp; (1 items)</div>
                                <div class="text-wrapper-5">Delivery charges</div>
                                <div class="text-wrapper-6">Total amount</div>
                                <div class="text-wrapper-7">price details</div>
                                <img class="line" src="https://c.animaapp.com/n4nUgdNF/img/line-32.svg" />
                                <img class="line-2" src="https://c.animaapp.com/n4nUgdNF/img/line-33.svg" />
                                <div class="text-wrapper-8">₹<?php echo $price; ?></div>
                                <div class="text-wrapper-9">₹<?php echo $price; ?></div>
                                <div class="text-wrapper-10">FREE Delivery</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <a href="add_address.php?product_id=<?php echo $id; ?>">
                <div class="overlap-4">
                    <img class="vector-2" src="https://c.animaapp.com/n4nUgdNF/img/vector-2.svg" />
                    <div class="text-wrapper-11">Add a new address</div>
                </div>
            </a>
            <a href="order.php?id=<?php echo $id; ?>">
                <div class="group">
                    <div class="div-wrapper"><div class="text-wrapper-12">Delivery Here</div></div>
                </div>
            </a>
        </div>
    </div>
</body>
</html>
