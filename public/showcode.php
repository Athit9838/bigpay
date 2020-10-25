<?php
if (isset($_COOKIE['productid'])) {
    $pid = $_COOKIE['productid'];
}
if (isset($_COOKIE['phone'])) {
    $phone = $_COOKIE['phone'];
}

?>
<?php include_once('templates/header.php');
include "connect.php"
?>
<div class="container">
    <h3>ผลการจ่ายเงิน</h3>
    <div id="result"></div>
</div>
<script>
    function detial() {
        var pid = <?php echo $pid ?>
        var phone = <?php echo $phone ?>
        // console.log(pid)
        $.ajax({
            url: <?php echo $API ?> "/webnoti",
            method: 'post',
            data: {
                pid: pid,
                phone: phone
            },
            success: function(data) {
                $('#result').html(data)
            }

        })
    }
    $(document).ready(function() {
        detial
    })
    setInterval(detial, 1000)
</script>
<?php include_once('templates/footer.php') ?>