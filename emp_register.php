<?php
 $servername = "localhost";

    $username = "root";

    $password = "";

    $dbname = "sparemate"; 
	
	$message = "Register successful";
	
	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

	   $username = $_POST['name'];

     $email = $_POST['email'];

     $password = $_POST['password'];
     
     $contact = $_POST['contact'];

     $sql = "INSERT INTO employee(name, email, password, contact) VALUES('$username','$email','$password','$contact')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='admin-register.php';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>