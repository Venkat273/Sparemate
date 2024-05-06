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
        if(empty($_REQUEST['name']) || empty($_REQUEST['email']) || empty($_REQUEST['password']) || empty($_REQUEST['contact']) || empty($_REQUEST['type'])) {
            throw new Exception("No data found");
        }

        
        $name	    = addslashes((trim($_REQUEST['name'])));
        $email	    = addslashes((trim($_REQUEST['email'])));
        $password   = addslashes((trim($_REQUEST['password'])));
        $contact	= addslashes((trim($_REQUEST['contact'])));
        $type       = addslashes((trim($_REQUEST['type'])));
 

        $checkQuery = "SELECT COUNT(*) AS count FROM employee WHERE name = '$name' OR email = '$email'";
        $result = mysqli_query($conn, $checkQuery);
        $row = mysqli_fetch_assoc($result);
        if($row['count'] > 0) {
            throw new Exception("Username or email already exists. Please choose another.");
        }

      
       
        // Check if username or email already exists
        $checkQuery = "INSERT INTO employee (name,email,password,contact,type) VALUES ('$name','$email','$password','$contact','$type')";
        $ExecuteAddNewUserQuery = mysqli_query($conn, $checkQuery) or die ("Error in query: $checkQuery. ".mysqli_error($conn));
       
        $Data = [
            'status' => 200,
            'message' => 'registered Successfully'
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
