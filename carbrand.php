<?php include 'nav.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Boxes</title>
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
        <a href="carparts.php?brand=Suzuki">
            <div class="box">
            <img src="uploads/download.png" alt="Tyres Image" />
                <span>SUZUKI</span>
            </div>
        </a>
        <a href="carparts.php?brand=Mahindra">
            <div class="box">
            <img src="uploads/mahindra.jpeg" alt="Tyres Image" />
                <span>MAHINDRA</span>
            </div>
        </a>
        <a href="carparts.php?brand=VOLKSWAGAN">
            <div class="box">
            <img src="uploads/volkswegon.jpeg" alt="Tyres Image" />
                <span>VOLKSWAGEN</span>
            </div>
        </a>
        <a href="carparts.php?brand=Honda">
            <div class="box">
            <img src="uploads/honda_car.png" alt="Tyres Image" />
                <span>HONDA</span>
            </div>
        </a>
        <a href="carparts.php?brand=Skoda">
            <div class="box">
            <img src="uploads/skoda.png" alt="Tyres Image" />
                <span>SKODA</span>
            </div>
        </a>
    </div>
</body>
</html>

