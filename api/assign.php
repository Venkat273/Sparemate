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
        if(empty($_REQUEST['id']) || empty($_REQUEST['assign']) ) {
            throw new Exception("No data found");
        }

        $id	= addslashes((trim($_REQUEST['id'])));
        $assign	    = addslashes((trim($_REQUEST['assign'])));

    

        // Check if username or email already exists
        $checkQuery = "UPDATE orders SET assign='$assign' WHERE id=$id";
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
