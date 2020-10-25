<?php include "../templates/header.php";
include "../connect.php"
?>
<?php
date_default_timezone_set('Asia/Bangkok');
function GetIp()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    //check ip from share internet
    {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    //to check ip is pass from proxy
    {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$ip = GetIp();
echo $ip;
echo '<br>';
$date = date('Y-m-d H:i:s');
echo $date;
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    echo $name . '<br>';
    echo $username . '<br>';
    echo $password . '<br>';
    $sql = "INSERT INTO employees (name,username,password,ip) VALUE ('$name','$username','$password','$ip')";
    $query = $connect->prepare($sql);
    $result = $query->execute();
    if ($result) {
        echo 'insert success';
    } else {
        echo 'insert failed';
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Pantip Bigpay</h5>
                    <form method="POST">
                        <div class="form-groupp">
                            <label for="Name">Name</label>
                            <input type="text" id="Name" class="form-control" name="name" placeholder="Name" required autofocus>
                        </div>
                        <div class="form-groupp">
                            <label for="Username">Username</label>
                            <input type="text" id="Username" class="form-control" name="username" placeholder="Usernames" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" id="Password" class="form-control" name="password" placeholder="Password" required>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../templates/footer.php" ?>