<?php
session_start();

if (isset($_GET['brand'])) {
    $_SESSION['carbrand'] = $_GET['brand'];
}
// Rest of your code
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .container {
            margin-top: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 20px;
        }

        a {
            text-decoration: none;
            display: flex; /* Make the link a flex container */
            align-items: center; /* Center the content vertically */
       
        }

        .box {
            width: 500px;
            height: 55px;
            border: 1px solid black;
            border-radius: 10px;
            display: flex;
            align-items: center;
            text-align: center;
            padding: 0 20px; /* Add padding for better spacing */
        }

        span {
            color: black;
            margin-right: 30px; /* Add space between the text and the image */
            flex-grow: 1; /* Allow the span to take up the remaining space */
        }

        img {
            max-width: 40px; /* Adjust the maximum width of the image */
            height: auto; /* Maintain aspect ratio */
            border-radius: 10px; /* Add border-radius to match the box */
            margin-right: 20px; /* Add space between the image and the text */
        }
    </style>
</head>

<body>
    <?php include 'nav.php' ?>
    <div class="container">
        <a style='margin-bottom: 40px;' href="cartyre.php?parts=Tyres">
            <div class="box">
                <img src="download (13).jpg" alt="Tyres Image" />
                <span>TYRES</span>
            </div>
        </a>
        <a style='margin-bottom: 40px;' href="cartyre.php?parts=Break system">
            <div class="box">
                <img src="916xfg-6-5L._AC_UY327_FMwebp_QL65_.webp" alt="Break System Image" />
                <span >BRAKE SYSTEM</span>
            </div>
        </a>
        <a style='margin-bottom: 40px;' href="cartyre.php?parts=Engine system">
            <div class="box">
                <img src="download (8).jpg" alt="Engine System Image" />
                <span>ENGINE SYSTEM</span>
            </div>
        </a>
        <a style='margin-bottom: 40px;' href="cartyre.php?parts=Steering system">
            <div class="box">
                <img src="61dPHZr+EWL._AC_UL480_FMwebp_QL65_.webp" alt="Steering System Image" />
                <span>STEERING SYSTEM</span>
            </div>
        </a>
        <a style='margin-bottom: 40px;' href="cartyre.php?parts=Gear system">
            <div class="box">
                <img src="51AW8M7358L._AC_UY327_FMwebp_QL65_.webp" alt="Gear System Image" />
                <span>GEAR SYSTEM</span>
            </div>
        </a>
    </div>
</body>

</html>
