<?php
session_start();

if (isset($_GET['brand'])) {
    $_SESSION['brand'] = $_GET['brand'];
}
// Rest of your code
?>
  <?php include 'nav.php' ?>
<!DOCTYPE html>
<html>
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
  <div class="container">
        <a style='margin-bottom: 40px;' href="biketyre.php?parts=tyre">
            <div class="box">
                <img src="https://c.animaapp.com/nN3RtvxA/img/61zrztikyfl-3@2x.png" style="height:40px;" alt="Tyres Image" />
                <span>TYRES</span>
            </div>
        </a>
        <a style='margin-bottom: 40px;' href="biketyre.php?parts=Exhaust">
            <div class="box">
                <img src="916xfg-6-5L._AC_UY327_FMwebp_QL65_.webp" alt="Break System Image" />
                <span>EXHAUSTERS</span>
            </div>
        </a>
        <a style='margin-bottom: 40px;' href="biketyre.php?parts=Handle bar">
            <div class="box">
                <img src="https://c.animaapp.com/nN3RtvxA/img/download-3@2x.png" alt="Engine System Image" />
                <span>Handle Bar</span>
            </div>
        </a>
        <a style='margin-bottom: 40px;' href="biketyre.php?parts=Visor">
            <div class="box">
                <img src="https://c.animaapp.com/nN3RtvxA/img/download--9--2@2x.png" alt="Steering System Image" />
                <span>Visor</span>
            </div>
        </a>
        <a style='margin-bottom: 40px;' href="biketyre.php?parts=Foot rost">
            <div class="box">
                <img src="https://c.animaapp.com/nN3RtvxA/img/download--10--2@2x.png" alt="Gear System Image" />
                <span>GEAR SYSTEM</span>
            </div>
        </a>
    </div>





   
  </body>
</html>
