<?php

if (isset($_POST['go_pay'])) {
    $productid = htmlentities($_POST['product_id']);
    $web = htmlentities($_POST['web']);

    setcookie("productid", $productid, time() + 3600);
    setcookie("web", $web, time() + 3600);

    header("Location: /pantip/pay");
}

?>
<?php include_once('templates/header.php');
include "connect.php"
?>

<div id="app">
    <div class="container mt-1">
        <div class="renew">
            <h2 class="h2">เติมเงินต่ออายุ IPTV</h2>
            <p>บริการเติมเงินต่ออายุสมาชิก App ดูทีวีออนไลน์ ดูหนัง ดูซี่รี่ ดูบอล ยอดนิยม</p>
            <p>STAR4K , KingIPTV , IPTVHero , U-Play , DooHDBox , IPTV SO , Xtreme4K , HD2Live , FW-IPTV , LiveTV55</p>
            <p><span>รับโค๊ดทันที</span> หลังจากชำระเงินไม่ต้องรอ</p>
            <div>รีวิว - <a href="">STAR4K</a> ,<a href="">FWIPTV</a>,<a href="">KingIPTV</a>,<a href="">IPTVHERO</a>,<a href="">HD2Live</a>,<a href="">DooHDBox</a></div>
            <div>
                <p>KingIPTV แทน ทดลองฟรี 1 วัน <a href="">คลิกที่นี่</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <br>
                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center" colspan="2">DooHDBox</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center" class="table-secondary">ระยะเวลา</td>
                            <td align="center" class="table-secondary">K-Plus</td>
                        </tr>
                        <?php
                        $web = 'doohdbox';
                        $result = CURL($API_GET . $web);
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post" action="">
                                    <input type="hidden" name="web" value="<?php echo $web ?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>" />
                                    <td align="center"><span name="types"><?php echo $row['type'] ?></span></td>
                                    <td align="center"><input class="submit" type="submit" name="go_pay" value="<?php echo $row['price'] ?>"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-4 col-md-4">
                <br>
                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center" colspan="2">KingIPTV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center" class="table-secondary">ระยะเวลา</td>
                            <td align="center" class="table-secondary">K-Plus</td>
                        </tr>
                        <?php

                        $web = 'kingiptv';
                        $result = CURL($API_GET . $web);

                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post" action="">
                                    <input type="hidden" name="web" value="<?php echo $web ?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>" />
                                    <td align="center"><span name="types"><?php echo $row['type'] ?></span></td>
                                    <td align="center"><input class="submit" type="submit" name="go_pay" value="<?php echo $row['price'] ?>"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-4 col-md-4">
                <br>

                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center" colspan="2">IPTV SO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center" class="table-secondary">ระยะเวลา</td>
                            <td align="center" class="table-secondary">K-Plus</td>
                        </tr>
                        <?php

                        $web = 'iptvso';
                        $result = CURL($API_GET . $web);

                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post" action="">
                                    <input type="hidden" name="web" value="<?php echo $web ?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>" />
                                    <td align="center"><span name="types"><?php echo $row['type'] ?></span></td>
                                    <td align="center"><input class="submit" type="submit" name="go_pay" value="<?php echo $row['price'] ?>"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <br>
                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center" colspan="2">STAR4K ( UHDTV4K ) - Silver</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center" class="table-secondary">ระยะเวลา</td>
                            <td align="center" class="table-secondary">K-Plus</td>
                        </tr>
                        <?php

                        $web = 'star4ksilver';
                        $result = CURL($API_GET . $web);

                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post" action="">
                                    <input type="hidden" name="web" value="<?php echo $web ?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>" />
                                    <td align="center"><span name="types"><?php echo $row['type'] ?></span></td>
                                    <td align="center"><input class="submit" type="submit" name="go_pay" value="<?php echo $row['price'] ?>"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-4 col-md-4">
                <br>

                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center" colspan="2">STAR4K ( UHDTV4K ) - Gold</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center" class="table-secondary">ระยะเวลา</td>
                            <td align="center" class="table-secondary">K-Plus</td>
                        </tr>
                        <?php

                        $web = 'star4kgold';
                        $result = CURL($API_GET . $web);

                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post" action="">
                                    <input type="hidden" name="web" value="<?php echo $web ?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>" />
                                    <td align="center"><span name="types"><?php echo $row['type'] ?></span></td>
                                    <td align="center"><input class="submit" type="submit" name="go_pay" value="<?php echo $row['price'] ?>"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-4 col-md-4">
                <br>

                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center" colspan="2">FW-IPTV</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center" class="table-secondary">ระยะเวลา</td>
                            <td align="center" class="table-secondary">K-Plus</td>
                        </tr>
                        <?php

                        $web = 'fwiptv';
                        $result = CURL($API_GET . $web);

                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post" action="">
                                    <input type="hidden" name="web" value="<?php echo $web ?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>" />
                                    <td align="center"><span name="types"><?php echo $row['type'] ?></span></td>
                                    <td align="center"><input class="submit" type="submit" name="go_pay" value="<?php echo $row['price'] ?>"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <br>

                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center" colspan="2">Xtreme4K</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center" class="table-secondary">ระยะเวลา</td>
                            <td align="center" class="table-secondary">K-Plus</td>
                        </tr>
                        <?php

                        $web = 'xtreme4k';
                        $result = CURL($API_GET . $web);

                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post" action="">
                                    <input type="hidden" name="web" value="<?php echo $web ?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>" />
                                    <td align="center"><span name="types"><?php echo $row['type'] ?></span></td>
                                    <td align="center"><input class="submit" type="submit" name="go_pay" value="<?php echo $row['price'] ?>"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-4 col-md-4">
                <br>

                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center" colspan="2">HD2Live - Gold</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center" class="table-secondary">ระยะเวลา</td>
                            <td align="center" class="table-secondary">K-Plus</td>
                        </tr>
                        <?php

                        $web = 'hd2livegold';
                        $result = CURL($API_GET . $web);

                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post" action="">
                                    <input type="hidden" name="web" value="<?php echo $web ?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>" />
                                    <td align="center"><span name="types"><?php echo $row['type'] ?></span></td>
                                    <td align="center"><input class="submit" type="submit" name="go_pay" value="<?php echo $row['price'] ?>"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-4 col-md-4">
                <br>

                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center" colspan="2">HD2Live - Silver</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center" class="table-secondary">ระยะเวลา</td>
                            <td align="center" class="table-secondary">K-Plus</td>
                        </tr>
                        <?php

                        $web = 'hd2livesilver';
                        $result = CURL($API_GET . $web);

                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post" action="">
                                    <input type="hidden" name="web" value="<?php echo $web ?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>" />
                                    <td align="center"><span name="types"><?php echo $row['type'] ?></span></td>
                                    <td align="center"><input class="submit" type="submit" name="go_pay" value="<?php echo $row['price'] ?>"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <br>

                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center" colspan="2">U-Play</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center" class="table-secondary">ระยะเวลา</td>
                            <td align="center" class="table-secondary">K-Plus</td>
                        </tr>
                        <?php

                        $web = 'uplay';
                        $result = CURL($API_GET . $web);

                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post" action="">
                                    <input type="hidden" name="web" value="<?php echo $web ?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>" />
                                    <td align="center"><span name="types"><?php echo $row['type'] ?></span></td>
                                    <td align="center"><input class="submit" type="submit" name="go_pay" value="<?php echo $row['price'] ?>"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-4 col-md-4">
                <br>

                <table width="100%" class="table table-bordered">
                    <thead>
                        <tr class="bg-success">
                            <th class="text-center" colspan="2">LiveTV55</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center" class="table-secondary">ระยะเวลา</td>
                            <td align="center" class="table-secondary">K-Plus</td>
                        </tr>
                        <?php

                        $web = 'livetv55';
                        $result = CURL($API_GET . $web);

                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post" action="">
                                    <input type="hidden" name="web" value="<?php echo $web ?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row['product_id'] ?>" />
                                    <td align="center"><span name="types"><?php echo $row['type'] ?></span></td>
                                    <td align="center"><input class="submit" type="submit" name="go_pay" value="<?php echo $row['price'] ?>"></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
<script>
    // $('go_pay').click(function() {
    //     $.removeCookie("phone")
    // })
</script>

<?php include_once('templates/footer.php') ?>