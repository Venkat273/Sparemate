<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Access-Control-Allow-Origin");

include "config.php";

$RequestMethod = $_SERVER["REQUEST_METHOD"];

// USE THIS WHEN YOU ARE USING INPUT method
// $requestData = json_decode(file_get_contents('php://input'), true);

if($RequestMethod == "POST"){
    try {
        if(empty($_REQUEST['product_id']) || empty($_REQUEST['user_id']) || empty($_REQUEST['status'])) {
            throw new Exception("No data found");
        }

       
        // REQUEST METHOD FOR API POSTMAN
        $product_id	= addslashes((trim($_REQUEST['product_id'])));
        $user_id	    = addslashes((trim($_REQUEST['user_id'])));
        $status	= addslashes((trim($_REQUEST['status'])));
    
        $AddNewUserQuery = "INSERT INTO cart( product_id,user_id,status) VALUES ('$product_id','$user_id','$status')";
        $ExecuteAddNewUserQuery = mysqli_query($conn,$AddNewUserQuery) or die ("Error in query: $AddNewUserQuery. ".mysqli_error($conn));

        $Data = [
            'status' => 200,
            'message' => 'Registration Success'
        ];

        header("HTTP/1.0 200 Success");
        echo json_encode($Data);

    } catch (Exception $ex) {
        $Data = [
            'status' => 500,
            'message' => $ex->getMessage()
        ];
    
        header("HTTP/1.0 500 Internal Server Error");
        echo json_encode($Data);
    }
}else{
    $Data = [
        'status' => 405,
        'message' => $RequestMethod . ' Method Not Allowed'
    ];

    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($Data);
}

?>
