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


   
    // Check if the user is an employee
    $employee_sql = "SELECT * FROM `employee`";
    $employee_result = mysqli_query($conn, $employee_sql);
    $ListArray  = array();

    if ($employee_result) {
        while($employeeInfo = mysqli_fetch_assoc($employee_result)){

        $data = array();
        $data["id"]             = $employeeInfo["id"];
        $data["name"]       = $employeeInfo["name"];
        $data["contact"]          = $employeeInfo["contact"];
        $data["type"]          = $employeeInfo["type"];
    
        array_push($ListArray,$data);

        }
            $Data = [
                'status' => 200,
                'message' => 'Employee Login Successfully.',
                'data' => $ListArray,
            ];
            header("HTTP/1.0 200 Success");
            echo json_encode($Data);
            exit();
        
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
