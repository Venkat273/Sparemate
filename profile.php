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
                
$id = $_SESSION["id"];
                // Query to select all images from the table
                $sql = "SELECT * FROM signup where id='$id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Retrieve the image data
                        $name = $row['username'];
                        $email = $row['email'];
                        $password = $row['password'];
                        $confirmpassword = $row['confirmpassword'];

                        // Generate the HTML for each image with Bootstrap card styling

                      
                   
                    }
                } else {
                    echo $id;
                    echo 'No images found in the table.';
                }

                $conn->close();
                ?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background:white;
}
.wrapper{
  position:absolute;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #BC9ABD;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #BC9ABD;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #BC9ABD;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #BC9ABD;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color:#BC9ABD;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
img {
    margin-left: 113px;
}
.prof{
  margin-top:20px;
  margin-bottom:550px;
}
.prof-text{
  color:#BC9ABD;
}

    </style>
   </head>
<body>
  <?php include 'nav.php' ?>
  <div class="prof">
    <h2 class="prof-text">PROFILE</h2>
</div>
  
  <div class="wrapper" style="margin-top:150px;">
    
    <form action="profilebk.php" method="post">
        <img src="logo.png" alt="" height="150" width="150" left>
      <div class="input-box">
        <input type="text" placeholder="username" value="<?php echo $name; ?>" name="username" readonly required>
      </div>
      <div class="input-box">
        <input type="text" placeholder=" email" value="<?php echo $email; ?>" name="email" readonly required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="password" value="<?php echo $password; ?>" name="password" readonly required>
      </div>
      
      <div class="input-box button">
        <input type="Submit" value="Update">
      </div>
      
    </form>
  </div>
</body>
</html>
