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
        if(empty($_REQUEST['id']) || empty($_REQUEST['username']) || empty($_REQUEST['email']) || empty($_REQUEST['contact_no'])) {
            throw new Exception("No data found");
        }

        $username	= addslashes((trim($_REQUEST['username'])));
        $email	    = addslashes((trim($_REQUEST['email'])));

        $checkQuery = "SELECT COUNT(*) AS count FROM signup WHERE username = '$username' OR email = '$email'";
        $result = mysqli_query($conn, $checkQuery);
        $row = mysqli_fetch_assoc($result);
        if($row['count'] > 0) {
            throw new Exception("Username or email already exists. Please choose another.");
        }

        // $username = addslashes(trim($requestData['username']));
        // $email = addslashes(trim($requestData['email']));
        // $password = addslashes(trim($requestData['password']));
        // $confirmpassword = addslashes(trim($requestData['confirmpassword']));

        // REQUEST METHOD FOR API POSTMAN
        $id     	= addslashes((trim($_REQUEST['id'])));
        $username	= addslashes((trim($_REQUEST['username'])));
        $email	    = addslashes((trim($_REQUEST['email'])));
        $contact_no	= addslashes((trim($_REQUEST['contact_no'])));

        // Check if username or email already exists
        $checkQuery = "UPDATE signup SET username='$username',email='$email',contact_no=$contact_no WHERE id=$id;";
        $ExecuteAddNewUserQuery = mysqli_query($conn, $checkQuery) or die ("Error in query: $checkQuery. ".mysqli_error($conn));
       
        $Data = [
            'status' => 200,
            'message' => 'updated Success'
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
