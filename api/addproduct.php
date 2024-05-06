<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Access-Control-Allow-Origin");

include "config.php";

$RequestMethod = $_SERVER["REQUEST_METHOD"];

// Set the directory to save uploaded files
$uploadDirectory = __DIR__ . '/uploads/'; // Assuming a directory named 'uploads' in the same directory as this script

// Check if the directory exists, and create it if it doesn't
if (!file_exists($uploadDirectory)) {
    mkdir($uploadDirectory, 0755, true);
}

  
    // Read the image file into a variable 
    // $image = file_get_contents("path/to/image.jpeg"); 

if($RequestMethod == "POST"){
    try {

        // if(empty($_REQUEST['category']) || empty($_REQUEST['brand']) || empty($_REQUEST['parts'])
        //  || empty($_REQUEST['product_name'])|| empty($_REQUEST['price'])|| empty($_REQUEST['discount'])
        // || empty($_REQUEST['supplier'])|| empty($_REQUEST['cart'])) {
        //     throw new Exception("No data found tt  ");
        // }

        $category   	= addslashes((trim($_REQUEST['category'])));
        $brand	        = addslashes((trim($_REQUEST['brand'])));
        $parts	        = addslashes((trim($_REQUEST['parts'])));
        $product_name	= addslashes((trim($_REQUEST['product_name'])));
        $image_data     = addslashes((trim(empty(file_get_contents($_FILES['image_data']['tmp_name'])))));
        // $image_name     = addslashes((trim($_FILES['image_name']['tmp_name'])));
        $price          = addslashes((trim($_REQUEST['price'])));
        $discount     = addslashes((trim($_REQUEST['discount'])));
        $supplier     = addslashes((trim($_REQUEST['supplier'])));
        // $cart     = addslashes((trim($_REQUEST['cart'])));

         // Get the temporary file path and name
         $tmp_name = $_FILES['image_data']['tmp_name'];
    // Get the original file name
            $fileName = basename($_FILES['image_data']['name']);
        $targetDir = $uploadDirectory;
        $targetFilePath = $targetDir . $fileName;
        if (file_exists($targetFilePath)) {
            // Handle file name collision or take appropriate action
            // You can rename the file or skip uploading it
            $fileName = time() . '_' . $fileName;
            $targetFilePath = $targetDir . $fileName;
        }
        if (move_uploaded_file($tmp_name, $targetFilePath)) {

                // $Data=[
                //     $category,$brand,$parts,$product_name,$price,$discount,$supplier,$cart
                // ];
                // echo json_encode($Data);


        
        $sql = "INSERT INTO overall(`category`, `brand`, `parts`, `product_name`,`image_name`,`price`, `product_brand`, `discount`, `supplier`) VALUES(?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssssssss', $category, $brand, $parts, $product_name,$fileName, $price, $product_name, $discount,$supplier);

    
        

        if($stmt->execute()){

        //     $uploadedFilePath = $uploadDirectory . $image_name;
        // move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFilePath);
          

                $Data =[
                    'status' => 200,
                    'message' => 'Success',
                    
                ];
            
                header("HTTP/1.0 200 Success");
                echo json_encode($Data);
          

        }else{
            $Data =[
                'status' => 500,
                'message' => 'Internal Server Error'
            ];
        
            header("HTTP/1.0 500 Internal Server Error");
            echo json_encode($Data);
        }
    }
    else{
        $Data =[
            'status' => 200,
            'message' => 'uploaded failed'
        ];
    
        header("HTTP/1.0 200 Internal Try Server Error");
        echo json_encode($Data);
    }

    } catch (Exception $ex) {
        $Data =[
            'status' => 500,
            'message' => 'Exception '. $ex->getMessage()
        ];
    
        header("HTTP/1.0 500 Internal Try Server Error");
        echo json_encode($Data);
    }
}else{
    $Data =[
        'status' => 405,
        'message' => $RequestMethod . ' Method Not Allowed'
    ];

    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($Data);
}

?>