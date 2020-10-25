<?php
// if (isset($_POST['submit'])) {
//     $phone = $_POST['phone'];
//     setcookie("phone", $phone, time() + 1200);
// }

?>
<?php include_once('templates/header.php');
?>
<?php include "connect.php"; ?>
<?php

if (isset($_COOKIE["productid"]) && isset($_COOKIE["web"])) {
    $product_id = $_COOKIE["productid"];
    $web = $_COOKIE["web"];
    // echo '<br>' . $_COOKIE["productid"];
    // echo '<br>' . $_COOKIE["web"];
} else {
    echo "no have cookie <br>";
}
?>
<!-- <?php //echo $API 
        ?>.'/scanPay' -->
<!-- http://localhost:3000/bigpay/scanPay -->
<?php
// $web = $_POST['web'];
// $product_id = $_POST['product_id'];
// echo $product_id . '<br>';
// echo $web . '<br>';
?>
<div class="container" id="app">
    <div class="renew pay">
        <h2>เติมเงินต่ออายุ</h2>
        <h4 class="mb-5">คุณกำลังซื้อ <span class="red"><?php echo $web ?></span> </h4>
        <form action="" method="post">
            <div class="form-group">
                <label for="">เบอร์โทร</label>
                <input type="tel" class="form-control" name="phone" placeholder="เบอร์โทร" pattern="[0]{1}[6,8,9]{1}[0-9]{8}" required>
                <input type="hidden" class="form-control" name="product_id" value="<?php echo $product_id ?>">
                <input type="hidden" class="form-control" name="web" value="<?php echo $web ?>">
            </div>
            <button align="left" type="submit" class="btn btn-primary" name="submit_phone" id="submit_phone">ดำเนินการ</button>
        </form>
    </div>
</div>
<script>
    $('form').submit(function() {
        var phone = document.getElementsByName('phone')[0].value
        document.cookie = "phone= " + phone
        // alert(phone)
    })
    // $(document).ready(function() {
    //     let product_id = <?php echo $product_id ?>
    //     let web = <?php echo $web ?>
    //     console.log(product_id)
    // })
</script>
<?php include_once('templates/footer.php') ?>