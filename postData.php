<?php

// $url = "http://pecoding.com/bigpay/getProduct/doohdbox";
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_URL, $url);

// $response = curl_exec($ch);
// curl_close($ch);
// $response = file_get_contents("http://pecoding.com/bigpay/getProduct/doohdbox");
// $result = json_decode($response, true);
// foreach ($result as $row) {
//     echo $row['product_id'];
// }
function CURL($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    $response = curl_exec($ch);
    curl_close($ch);
    $result = json_decode($response, true);
    return $result;
}
$link = "http://pecoding.com/bigpay/getProduct/doohdbox";

$result = CURL($link);
foreach ($result as $row) {
    echo $row['product_id'];
    echo "<br>";
}
$link2 = "/1234";
$link3 = $link . $link2;
echo $link3;
