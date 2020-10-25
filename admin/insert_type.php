<?php include_once('header.php') ?>
<?php include "connect.php"; ?>
<?php
if (isset($_POST['submiti'])) {
    $web = $_POST['web'];
    echo $web, "<br>";
    $type = $_POST['types'];
    echo $type, "<br>";
    $price = $_POST['price'];
    echo $price, "<br>";
    // if ($table != "" && $type != "" && $price != "") {
    $sql = "INSERT INTO products (web,type,price) VALUE ('$web','$type',$price)";
    $query = $connect->prepare($sql);
    $result = $query->execute();
    // }
}
?>
<!-- @submit="insertType" -->
<div class="container" id="app">
    <form method="POST">
        <div class="form-group">
            <label for="web">WEB</label>
            <input type="text" class="form-control" id="web" name="web" placeholder="ชื่อเว็บ">
        </div>
        <div class="form-group">
            <label for="type">TYPE</label>
            <input type="text" class="form-control" id="type" name="types" placeholder="ระยะเวลา">
        </div>
        <div class="form-group">
            <label for="">PRICE</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="ราคา">
        </div>
        <input type="submit" name="submiti" class="btn btn-primary" value="บันทึก">
        <input type="reset" name="reset" class="btn btn-danger" value="ยกเลิก">
    </form>
    <div class="py-2">
        <!-- {{formType}} -->
    </div>
</div>
<?php include_once('footer.php') ?>