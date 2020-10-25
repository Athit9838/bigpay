<?php require "../templates/header.php";
require "../connect.php" ?>
<?php
$time = time();
$currentDateTime = date('Y-m-d H:i:s');
echo $currentDateTime;
echo "<br>";
echo strtotime($currentDateTime);
echo "<br>";
echo time();
echo "<br>";

if (isset($_POST['btnSubmit'])) {
    $filename = $_FILES['fileCSV']['tmp_name'];
    echo $filename;
    echo "<br>";
    if ($_FILES['fileCSV']['size'] > 0) {
        $fileupload = fopen($filename, "r");
        while (($empData = fgetcsv($fileupload, 1000, ",")) !== FALSE) {
            $sqlcheckpin = "SELECT pincode_id FROM pincodes WHERE pin = $empData[0]";
            $statement = $connect->prepare($sqlcheckpin);
            $statement->execute();
            $checkpin = $statement->fetchAll();


            if (count($checkpin) > 0) {
                echo "มีรหัสนี้อยู่แล้ว";
                echo "<br>";
            } else {
                $sqluploadpin = "INSERT INTO pincodes (product_id,pin,cost) VALUE ($empData[0],'$empData[1]',$empData[2])";
                $statement = $connect->prepare($sqluploadpin);
                $statement->execute();
                $result = $statement->fetchAll();
                if ($result) {
                    echo "complete";
                    echo "<br>";
                } else {
                    echo "failed";
                    echo "<br>";
                }
            }

            // echo $empData[0];
            // echo "<br>";
            // echo $empData[1];
            // echo "<br>";
            // echo $empData[2];
            // echo "<br>";
        }
        fclose($fileupload);
        echo "Upload & Import Done.";
    } else {
        echo "Upload & Import failed.";
    }
}

?>
<div class="container mt-1">
    <form method="POST" action="" method="post" enctype="multipart/form-data" name="form1">
        <input name="fileCSV" type="file" id="fileCSV">
        <input name="btnSubmit" type="submit" id="btnSubmit" value="Submit">
    </form>
</div>

<?php require "../templates//footer.php" ?>