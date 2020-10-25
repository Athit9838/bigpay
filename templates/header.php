<?php error_reporting(E_WARNING); ?>
<?php
if (isset($_COOKIE['productid'])) {
    $pid = $_COOKIE['productid'];
}
$check = "SELECT ";
$API = "http://pecoding.com/bigpay";
$API_GET = $API . "/getProduct/";
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
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pantip</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/pantip/templates/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <div class="container">
            <a class="navbar-brand" href="/pantip">Pantip</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav" id="navbar">
                    <li class="nav-item">
                        <a class="nav-link" href="/pantip/">หน้าแรก <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pantip/signup">สมัครบริการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pantip/renew">ต่ออายุสมาชิก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pantip/autorenew">ต่ออายุอัตโนมัติ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pantip/download">ดาวน์โหลด</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pantip/contact">ติดต่อเรา</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pantip/showcode">ดู pincode</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script>
        var elems = document.querySelectorAll(".nav-item a");
        [].forEach.call(elems, function(el) {
            if (el.href == window.location.href) {
                el.classList.add("active")
            } else {
                el.classList.remove("active");
            }
        })
    </script>
    <script>
        function update() {
            $.ajax({
                url: '/pantip/updatepin',
            });
        }
        $(document).ready(update);
        setInterval(update, 5000);
    </script>
    <?php //require "modal.php" 
    ?>
    <script>
        $(document).ready(async function() {
            // await doAjax()
        })
    </script>