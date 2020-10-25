<?php include "../header.php" ?>
<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    echo $username, "<br>";
    $password = $_POST['password'];
    echo $password, "<br>";
    $sql = "SELECT username,password employees WHERE username";
    $query = $connect->prepare($sql);
    $result = $query->execute();
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
                            <label for="Username">Username</label>
                            <input type="text" id="Username" class="form-control" name="username" placeholder="Usernames" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" id="Password" name="password" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../footer.php" ?>