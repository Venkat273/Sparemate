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
        if(empty($_REQUEST['user_id']) || empty($_REQUEST['payment_id']) || empty($_REQUEST['amount']) || empty($_REQUEST['product_id'])
        || empty($_REQUEST['date'])|| empty($_REQUEST['time'])|| empty($_REQUEST['status'])) {
            throw new Exception("No data found");
        }

        // $username = addslashes(trim($requestData['username']));
        // $email = addslashes(trim($requestData['email']));
        // $password = addslashes(trim($requestData['password']));
        // $confirmpassword = addslashes(trim($requestData['confirmpassword']));

        // REQUEST METHOD FOR API POSTMAN
        $user_id	= addslashes((trim($_REQUEST['user_id'])));
        $payment_id	    = addslashes((trim($_REQUEST['payment_id'])));
        $amount	= addslashes((trim($_REQUEST['amount'])));
        $product_id	= addslashes((trim($_REQUEST['product_id'])));
        $date	= addslashes((trim($_REQUEST['date'])));
        $time	    = addslashes((trim($_REQUEST['time'])));
        $status	= addslashes((trim($_REQUEST['status'])));
        // $assign	= addslashes((trim($_REQUEST['assign'])));

     
        // $InsertArray = array();
        // $InsertArray["username"]        = $username;
        // $InsertArray["email"]           = $email;
        // $InsertArray["password"]        = $password;
        // $InsertArray["confirmpassword"] = $confirmpassword;
        
       
        $AddNewUserQuery = "INSERT INTO orders( user_id,payment_id,amount,product_id,date,time,status) VALUES ('$user_id','$payment_id','$amount','$product_id','$date','$time','$status')";
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
