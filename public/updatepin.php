<?php
require "connect.php";

$query = "SELECT order_id,product_id FROM orders WHERE status=2 AND NOT EXISTS(SELECT 1 FROM pincodes WHERE orders.order_id = pincodes.order_id)";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();

$count = count($result);
if ($count > 0) {
    foreach ($result as $row) {
        $order_id = $row['order_id'];
        $product_id = $row['product_id'];
        // echo '<br>';
        // echo 'order_id ' . $order_id . '<br>';
        // echo 'product_id ' . $product_id . '<br>';
        $sqlop = "SELECT pincode_id FROM pincodes WHERE product_id = $product_id AND order_id IS NULL";
        $statement = $connect->prepare($sqlop);
        $statement->execute();
        $pincode_id = $statement->fetchColumn();
        // echo 'pincode_id ' . $pincode_id . '<br>';
        $sql = "UPDATE pincodes SET order_id = $order_id, update_date=now() WHERE product_id = $product_id AND pincode_id = $pincode_id";
        $statement = $connect->prepare($sql);
        $statement->execute();
        $update = $statement->fetchAll();
        echo json_encode($update);
    }
}
