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
  position: relative;
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

    </style>
   </head>
<body>
  <div class="wrapper">
    
    <form action="addproductbk.php" method="post" enctype="multipart/form-data">
        <img src="logo.png" alt="" height="150" width="150" left>
      <div class="input-box">
        <input type="text" placeholder="Category" name="category" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Brand" name="brand" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Parts" name="parts" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Product_name"  name="product_name"required>
      </div>
      <div class="input-box">
        <input type="file" placeholder="Image_data" name="image" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Price" name="price" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Product_brand"  name="product_brand"required>
      </div>
      <div class="input-box">
        <input type="text " placeholder="Discount" name="discount" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Supplier" name="supplier" required>
      </div>
      
      
      <div class="input-box button">
        <input type="Submit" value="Signup">
      </div>
      
    </form>
  </div>
</body>
</html>
