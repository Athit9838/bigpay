<?php include_once('templates/header.php') ?>
<?php
if (isset($_COOKIE["product"])) {
    $product = unserialize($_COOKIE["product"]);

    echo $product['time'];
    echo $product['app'];
}

?>
<div id="app" class="container col-md-8">
    <!-- <h1>{{message}}</h1> -->
    <h2 class="h2">สวัสดีครับ ยินดีต้อนรับสู่ Pantip Bigoay</h2>
    <p>ที่นี่เรามีขายกล่องแอนดรอย์ Android TV ที่เปลี่ยนทีวีธรรมดาของคุณ ให้กลายเป็น สมาร์ททีวี
        ที่ใช้ท่องอินเตอร์เน็ต เล่นเกมส์ สนุกกับแอพๆต่าง YouTube , Facebook และอื่นๆอีกมากมาย
        และมีบริการต่ออายุ/สมาชิกใหม่ Star4K(UHDTV4k) , FW-IPTV , SportLive , SEED , IPTV SO , HD2Live ดูทีวีออนไลน์ กว่า 200 ช่อง ดูหนัง ดูซี่รี่ย์ ดูบอล คอนเสิร์ต การ์ตูน ดูทีวีย้อนหลัง คมชัดระดับ HD และดาวน์โหลด App ได้กว่าล้านๆบน Google Play เพียงกล่องเดียว ตอบโจทย์ ได้หมด</p>
</div>

<?php include_once('templates/footer.php') ?>