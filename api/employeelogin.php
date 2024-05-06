<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Access-Control-Allow-Origin");

include "config.php"; // Include your database connection configuration


$RequestMethod = $_SERVER["REQUEST_METHOD"];

// USE THIS WHEN YOU ARE USING INPUT method
// $requestData = json_decode(file_get_contents('php://input'), true);

if ($RequestMethod == "POST") {

    // $email = strtolower(addslashes((trim($requestData['email']))));
    // $password = addslashes((trim($requestData['password'])));
    // $platform  	= addslashes((trim($requestData['platform'])));

    // REQUEST METHOD FOR API POSTMAN
    $email = strtolower(addslashes((trim($_REQUEST['email']))));
    $password = addslashes((trim($_REQUEST['password'])));
    $platform  	= addslashes((trim($_REQUEST['platform'])));

   
    

    // Check if the user is an employee
    $employee_sql = "SELECT * FROM employee WHERE email = '$email' AND password = '$password'";
    $employee_result = mysqli_query($conn, $employee_sql);

    if (mysqli_num_rows($employee_result) == 1) {
        $employeeInfo = mysqli_fetch_assoc($employee_result);

        
        if($platform == "Android"){

            $Data = [
                'status' => 200,
                'message' => 'Employee Login Successfully.',
                'employee_id' => $employeeInfo["id"],
                'employee_name' => $employeeInfo["name"],
                'contact' => $employeeInfo["contact"],
                'type' => $employeeInfo["type"],
            ];
            header("HTTP/1.0 200 Success");
            echo json_encode($Data);
            exit();
        }
    }else{
        $Data = [
            'status' => 500,
            'message' => 'User Not Found'
        ];
        header("HTTP/1.0 500 Method Not Allowed");
        echo json_encode($Data);

    }

} else {
    $Data = [
        'status' => 405,
        'message' => $RequestMethod . ' Method Not Allowed'
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($Data);
    exit();
}
?>
