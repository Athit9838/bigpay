<?php include_once('templates/header.php');
include "connect.php"
?>
<?php
if (isset($_POST['submit'])) {
    $name_show = $_POST['name_show'];
    // echo $name_show . '<br>';
    $table_name = $_POST['table_name'];
    // echo $table_name . '<b>';
    $data = [
        'name' => $name_show,
        'table_name' => $table_name
    ];
    echo "start <br>";
    $sql = "INSERT INTO web (name,table_name) VALUE ('$name_show','$table_name')";
    $query = $connect->prepare($sql);
    $result = $query->execute($data);
    // if ($result) {
    //     echo "insert complete";
    // } else {
    //     echo "insert failed";
    // }
}
?>

<div class="container" id="app">
    <div class="renew pay">
        <h2 class="mb-5">insert_table_name</h2>
        <form method="POST">
            <div class="form-group">
                <label for="type">NAME SHOW</label>
                <input type="text" class="form-control" id="name_show" name="name_show" placeholder="ชื่อที่จะใช้สแดง">
            </div>
            <div class="form-group">
                <label for="">TABLE NAME</label>
                <input type="text" class="form-control" id="table_name" name="table_name" placeholder="ชื่อตาราง">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="บันทึก">
            <input type="reset" name="reset" class="btn btn-danger" value="ยกเลิก">
        </form>
    </div>
</div>
<div class="container">
    <form action="" class="form-inline mt-3">
        <input type="text" class="form-control" placeholder="ค้นหา">
        <input type="submit" name="search" id="" class="btn btn-outline-success ml-3" value="ค้นหา">
    </form>
</div>
<div class="container" id="app">
    <table width="100%" class="table table-bordered mt-3">
        <thead>
            <tr class="bg-success">
                <th class="text-center">ID</th>
                <th class="text-center">NAME SHOW</th>
                <th class="text-center">TABLE NAME</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM web";
            $query = $connect->prepare($sql);
            $query->execute();
            $results = $query->fetchAll();
            foreach ($results as $result) {
            ?>
                <tr>
                    <td><?php echo $result['id'] ?></td>
                    <td><?php echo $result['name'] ?></td>
                    <td><?php echo $result['table_name'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script>

</script>

<?php include_once('templates/footer.php')
?>