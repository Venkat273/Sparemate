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

	   $username = $_POST['username'];

     $email = $_POST['email'];

     $password = $_POST['password'];
     
     $confirmpassword = $_POST['confirmpassword'];

     $sql = "INSERT INTO signup(username, email, password, confirmpassword) VALUES('$username','$email','$password','$confirmpassword')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='login.html';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>