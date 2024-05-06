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
        if(empty($_REQUEST['id']) ||empty($_REQUEST['address']) || empty($_REQUEST['city']) || empty($_REQUEST['state']) || 
        empty($_REQUEST['zipcode']) || empty($_REQUEST['contact_no'])) {
            throw new Exception("No data found");
        }

        // $username = addslashes(trim($requestData['username']));
        // $email = addslashes(trim($requestData['email']));
        // $password = addslashes(trim($requestData['password']));
        // $confirmpassword = addslashes(trim($requestData['confirmpassword']));

        // REQUEST METHOD FOR API POSTMAN
        $id	= addslashes((trim($_REQUEST['id'])));
        $address	= addslashes((trim($_REQUEST['address'])));
        $city	    = addslashes((trim($_REQUEST['city'])));
        $state	= addslashes((trim($_REQUEST['state'])));
        $zipcode	= addslashes((trim($_REQUEST['zipcode'])));
        $contact_no	= addslashes((trim($_REQUEST['contact_no'])));
       

        // Check if username or email already exists
        


        $AddNewUserQuery = "UPDATE signup SET address='$address',city='$city',state='$state',zipcode='$zipcode',contact_no='$contact_no' WHERE id='$id'";
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
