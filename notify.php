<?php
require "connect.php";
if (isset($_COOKIE['phone']) && isset($_POST['pid'])) {
    $phone = $_COOKIE['phone'];
    $product_id = $_POST['pid'];
    $sqlcid = "SELECT customer_id FROM customers WHERE phone='$phone'";
    $statement = $connect->prepare($sqlcid);
    $statement->execute();
    $customer_id = $statement->fetchColumn();
    $sqloid = "SELECT order_id,status,note FROM orders WHERE product_id = $product_id AND customer_id = $customer_id";
    $statement = $connect->prepare($sqloid);
    $statement->execute();
    $order_id = $statement->fetchAll();
    $output = "";
    $pin = "";
    $output .= "<div>";
    foreach ($order_id as $oid) {
        $message = $oid['note'];
        $or_id = $oid['order_id'];
        $sql = "SELECT pin,update_date FROM pincodes WHERE product_id = $product_id AND order_id=$or_id ORDER BY pincode_id ASC";
        $statement = $connect->prepare($sql);
        $statement->execute();
        $pincode = $statement->fetchAll();
        // echo json_encode($pincode);
        // echo $pincode[0]['pin'];

        // $pin = $pincode[0]['pin'];
        if ($oid['status'] == 2) {
            foreach ($pincode as $pin) {
                $output .= "<h4>$message</h4>";
                $p = $pin['pin'];
                $output .= "<p id='pincode'>$p</p>";
            }
        } else {
            if ($message == 'wait') {
                $output .= "<h4>กรุณารอสักครู่ค่ะ</h4>";
            } else {
                $output .= "<h4>$message</h4>";
            }
        }
    }
    $output .= "</div>";
    echo $output;
} else if (!isset($_COOKIE['phone']) && isset($_POST['pid'])) {
    echo "กรุณากรอกเบอร์โทรด้วยค่ะ";
} else if (!isset($_COOKIE['phone']) && !isset($_POST['pid'])) {
    echo "ไม่มีข้อมูล กรุณาเลือกรายการ หรือติดต่อผู้ดูแลค่ะ";
}


// if (isset($_COOKIE['phone']) && isset($_POST['pid'])) {
//     $phone = $_COOKIE['phone'];
//     $product_id = $_POST['pid'];
//     $sqlcid = "SELECT customer_id FROM customers WHERE phone='$phone'";
//     $statement = $connect->prepare($sqlcid);
//     $statement->execute();
//     $customer_id = $statement->fetchColumn();

//     $sqloid = "SELECT order_id,status,note FROM orders WHERE product_id = $product_id AND customer_id = $customer_id AND status != 1 ";
//     $statement = $connect->prepare($sqloid);
//     $statement->execute();
//     $order_id = $statement->fetchAll();

//     $output = "";
//     $pin = "";
//     $output .= "<div>";

//     // echo json_encode($order_id);
//     foreach ($order_id as $oid) {
//         $message = $oid['note'];
//         $or_id = $oid['order_id'];
//         $sql = "SELECT pin,update_date FROM pincodes WHERE product_id = $product_id AND order_id=$or_id ORDER BY pincode_id ASC";
//         $statement = $connect->prepare($sql);
//         $statement->execute();
//         $pincode = $statement->fetchAll();
//         // echo json_encode($pincode);
//         // echo $pincode[0]['pin'];

//         // $pin = $pincode[0]['pin'];
//         if ($oid['status'] == 2) {
//             foreach ($pincode as $pin) {
//                 $update_date = $pin['update_date'];
//                 $difdate = time() - strtotime($update_date);
//                 if ($difdate <= 3600) {
//                     $output .= "<h2>$message</h2>";
//                     $output .= "<p>$update_date</p>";
//                     $p = $pin['pin'];
//                     $output .= "<p id='pincode'>$p</p>";
//                 }
//             }
//         }
//     }
//     $output .= "</div>";
//     echo $output;
// } else if (!isset($_COOKIE['phone']) && isset($_POST['pid'])) {
//     echo "กรุณากรอกเบอร์โทรด้วยค่ะ";
// } else if (!isset($_COOKIE['phone']) && !isset($_POST['pid'])) {
//     echo "ไม่มีข้อมูล กรุณาเลือกรายการ หรือติดต่อผู้ดูแลค่ะ";
// }
