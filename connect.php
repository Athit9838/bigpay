<?php
date_default_timezone_set("Asia/Bangkok");
$connect = new PDO("mysql:host=localhost;dbname=bigpay", "root", "");

// if ($connect) {
//     echo "connected <br>";
// }
// $request_data = json_decode(file_get_contents("php://input"));


// if ($request_data->action == "insert") {
//     $data = array(":phone" => $request_data->phone);
//     $sql = "INSERT INTO customers (phone) VALUE (:phone)";
//     $query = $connect->prepare($sql);
//     $query->execute($data);
//     $output = array("message" => "insert complete");
//     echo json_encode($output);
// }

// if ($request_data->action == "inserttype") {
//     $data = array(":tables" => $request_data->tables, ":types" => $request_data->types, ":price" => $request_data->price);
//     $sql = "INSERT INTO :tables (types,price) VALUE (':types',:price)";
//     $query = $connect->prepare($sql);
//     $result = $query->execute($data);
//     $output = array("message" => "insert complete");
//     echo json_encode($output);
// }
