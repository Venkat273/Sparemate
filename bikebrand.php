<?php include 'nav.php' ?>
<!DOCTYPE html>
<html>
  <head>
  <style>
        .box {
            width: 500px;
            height: 50px;
            border: 1px solid black;
            border-radius: 10px;
            margin-bottom: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        /* Additional styles for demonstration purposes */
        .container { 
            margin-top: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }

        a {
            text-decoration: none;
        }
      span{
        color:black;
      }
    </style>
    <style>
       

        a {
            text-decoration: none;
            display: flex; /* Make the link a flex container */
            align-items: center; /* Center the content vertically */
       
        }

       

        span {
            color: black;
            margin-right: 60px; /* Add space between the text and the image */
            flex-grow: 1; /* Allow the span to take up the remaining space */
        }

        img {
            max-width: 40px; /* Adjust the maximum width of the image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Add border-radius to match the box */
            margin-left: 10px; /* Add space between the image and the text */
        }
    </style>
  </head>
  <body>
  <div class="container">
        <a href="bikeparts.php?brand=yamaha">
            <div class="box">
            <img src="uploads/yamaha.png" alt="Tyres Image" />
                <span>YAMAHA</span>
            </div>
        </a>
        <a href="bikeparts.php?brand=Bajaj">
            <div class="box">
            <img src="uploads/bajaj.png" alt="Tyres Image" />
                <span>BAJAJ</span>
            </div>
        </a>
        <a href="bikeparts.php?brand=TVS">
            <div class="box">
            <img src="uploads/tvs.png" alt="Tyres Image" />
                <span>TVS</span>
            </div>
        </a>
        <a href="bikeparts.php?brand=Honda">
            <div class="box">
            <img src="uploads/honda.png" alt="Tyres Image" />
                <span>HONDA</span>
            </div>
        </a>
        <a href="bikeparts.php?brand=Suzuki">
            <div class="box">
            <img src="uploads/suzuki.png" alt="Tyres Image" />
                <span>Suzuki</span>
            </div>
        </a>
    </div>


 
  </body>
</html>
