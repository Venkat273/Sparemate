<?php
  session_start();
  ?>
<!doctype html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - BBBootstrap</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='#' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
                                ::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } body {
            min-height: 100vh;
            background-size: cover;
            font-family: 'Lato', sans-serif;
            color: rgba(116, 116, 116, 0.667);
          

        }
        .container-fluid {
            margin-top: 200px ;
            
        }

        p {
            font-size: 14px;
            margin-bottom: 7px;

        }

        .small {
            letter-spacing: 0.5px !important;
        }

        .card-1 {
            box-shadow: 2px 2px 10px 0px rgb(190, 108, 170);
        }

        hr {
            background-color: rgba(248, 248, 248, 0.667);
        }


        .bold {
            font-weight: 500;
        }

        .change-color {
            color: #AB47BC !important;
        }

        .card-2 {
            box-shadow: 1px 1px 3px 0px rgb(112, 115, 139);

        }

        .fa-circle.active {
            font-size: 8px;
            color: #AB47BC;
        }

        .fa-circle {
            font-size: 8px;
            color: #aaa;
        }

        .rounded {
            border-radius: 2.25rem !important;
        }


        .progress-bar {
            background-color: #AB47BC !important;
        }


        .progress {
            height: 5px !important;
            margin-bottom: 0;
        }

        .invoice {
            position: relative;
            top: -70px;
        }

        .Glasses {
            position: relative;
            top: -12px !important;
        }

        .card-footer {
            background-color: #AB47BC;
            color: #fff;
        }

        h2 {
            color: rgb(78, 0, 92);
            letter-spacing: 2px !important;
        }

        .display-3 {
            font-weight: 500 !important;
        }

        @media (max-width: 479px) {
            .invoice {
                position: relative;
                top: 7px;
            }

            .border-line {
                border-right: 0px solid rgb(226, 206, 226) !important;
            }

        }

        @media (max-width: 700px) {

            h2 {
                color: rgb(78, 0, 92);
                font-size: 17px;
            }

            .display-3 {
                font-size: 28px;
                font-weight: 500 !important;
            }
        }

        .card-footer small {
            letter-spacing: 7px !important;
            font-size: 12px;
        }

        .border-line {
            border-right: 1px solid rgb(226, 206, 226)
        }
        h2.ord-text{
            color:#BC9ABD; 
        }
        .ord{
            position:relative;
            margin-left:300px;
        }
        </style>
    </head> 
    <body className='snippet-body' style="margin-top:100px; background-color:white;">
    <?php include 'nav.php' ?>
    
        <div class="container-fluid my-5  d-flex  justify-content-center" >
        
        <div class="card card-1">
        <div class="ord"><h2 class="ord-text">ORDERS</h2></div>
            <div class="card-body">
                <div class="row justify-content-between mb-3">
                    <div class="col-auto"> <h6 class="color-1 mb-0 change-color">Receipt</h6> </div>
                    <div class="col-auto  "> <small>Receipt Voucher : 1KAU9-84UIL</small> </div>
                </div>
                <?php
 
 // Database connection
 $servername = "localhost";
 $username = "root";
 $password = "";
 $databasename = "sparemate";

 $conn = new mysqli($servername, $username, $password, $databasename);

 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 
   
   $user_id = $_SESSION["id"];
 // Query to select all images from the table
 $query = "SELECT ca.payment_id,ov.id,ov.price, ov.brand, ov.product_name, ov.parts, ov.image_data FROM overall ov INNER JOIN orders ca ON ca.product_id = ov.id WHERE ca.user_id= $user_id";

$result = $conn->query($query);
 if ($result->num_rows > 0) {
     while ($row = $result->fetch_assoc()) {
         // Retrieve the image data
        $image_data = $row['image_data'];
        $product_name = $row['product_name'];
        $id = $row['id'];
        $price = $row['price'];
        $brand = $row['brand'];
        $pay_id = $row['payment_id'];




echo '<div class="row">
<div class="col">
    <div class="card card-2">
        <div class="card-body">
            <div class="media">
                <div class="sq align-self-center "> <img class="img-fluid  my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="data:image/jpeg;base64,' . base64_encode($image_data) . '" width="135" height="135" /> </div>
                <div class="media-body my-auto text-right">
                    <div class="row  my-auto flex-column flex-md-row">
                         <div class="col my-auto"> <h6 class="mb-0">' . $brand . '</h6>  </div>
                        <div class="col-auto my-auto"> <small>' . $product_name . '</small></div>
                        <div class="col-auto my-auto"> <small>Payment-id :</small></div>
                        <div class="col my-auto" style="font-size:10px;">'.$pay_id.' </div>
                        <div class="col my-auto"><h6 class="mb-0">&#8377;'.$price.'.00</h6>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3 ">
            <div class="row">
                <div class="col-md-3 mb-3"> <small> Track Order <span><i class=" ml-2 fa fa-refresh"  aria-hidden="true"></i></span></small> </div>
                <div class="col mt-auto">
                    <div class="progress my-auto"> <div class="progress-bar progress-bar  rounded" style="width: 80%" role="progressbar" aria-valuenow="25" aria-valuemin="0"  aria-valuemax="100"></div> </div>
                    <div class="media row justify-content-between ">
                        <div class="col-auto text-right"><span> <small  class="text-right mr-sm-2"></small> <i class="fa fa-circle active"></i> </span></div>
                        <div class="flex-col"> <span> <small class="text-right mr-sm-2">Out for delivary</small><i class="fa fa-circle active"></i></span></div>
                        <div class="col-auto flex-col-auto"><small  class="text-right mr-sm-2">Delivered</small><span> <i  class="fa fa-circle"></i></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<br>';
}
 } else {
     echo 'No images found in the table.';
 }

 $conn->close();
 ?>
                
        </div>
    </div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>

 