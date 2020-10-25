<?php include_once('header.php');
include "connect.php"
?>
<?php
if (isset($_POST["add_to_cart"])) {
    $types =  $_POST["types"];
    $price =  $_POST["price"];
    if (isset($_COOKIE["shopping_cart"])) {
        $cookie_data = stripslashes($_COOKIE['shopping_cart']);

        $cart_data = json_decode($cookie_data, true);
    } else {
        $cart_data = array();
    }

    $item_id_list = array_column($cart_data, 'item_id');

    if (in_array($_POST["hidden_id"], $item_id_list)) {
        foreach ($cart_data as $keys => $values) {
            if ($cart_data[$keys]["item_id"] == $_POST["hidden_id"]) {
                $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
            }
        }
    } else {
        $item_array = array(
            'item_id'            =>    $_POST["hidden_id"],
            'item_name'            =>    $_POST["types"],
            'item_price'        =>    $_POST["price"],
            'item_quantity'        =>    $_POST["quantity"]
        );
        $cart_data[] = $item_array;
    }
    $item_data = json_encode($cart_data);
    echo $types . '<br>';
    echo $price . '<br>';
    echo $item_data . '<br>';
    setcookie('shopping_cart', $item_data, time() + (86400 * 30));
    // header("location:carts?success=1");
}
?>
<div id="app">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <br>

                <table border="1" width="100%" class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th class="text-center" colspan="3">DooHDBox</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">ระยะเวลา</td>
                            <td align="center">K-Plus</td>
                            <td align="center"></td>
                        </tr>
                        <?php
                        $table_name = "doohdbox";
                        $query = "SELECT * FROM $table_name ORDER BY id ASC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post">
                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id'] . '' . $table_name ?>">
                                    <input type="hidden" name="types" value="<?php echo $row['types'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <td align="center"><?php echo $row['price'] ?></td>
                                    <td align="center"><span name="types"><?php echo $row['types'] ?></span></td>
                                    <td align="center"><input type="submit" name="add_to_cart" class="btn btn-primary" value="Add" /></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-6 col-md-6">
                <br>

                <table border="1" width="100%" class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th class="text-center" colspan="3">KingIPTV</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">ระยะเวลา</td>
                            <td align="center">K-Plus</td>
                            <td align="center"></td>
                        </tr>
                        <?php
                        $table_name = "kingiptv";
                        $query = "SELECT * FROM $table_name ORDER BY id ASC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post">
                                    <td align="center"><span name="types"><?php echo $row['types'] ?></span></td>
                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id'] . '' . $table_name ?>">
                                    <input type="hidden" name="types" value="<?php echo $row['types'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <td align="center"><?php echo $row['price'] ?></td>
                                    <td align="center"><input type="submit" name="add_to_cart" class="btn btn-primary" value="Add" /></td>
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
            <div class="col-sm-6 col-md-6">
                <br>

                <table border="1" width="100%" class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th class="text-center" colspan="3">IPTV SO</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center">ระยะเวลา</td>
                            <td align="center">K-Plus</td>
                            <td align="center"></td>
                        </tr>
                        <?php
                        $table_name = "iptv_so";
                        $query = "SELECT * FROM $table_name ORDER BY id ASC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post">
                                    <td align="center"><span name="types"><?php echo $row['types'] ?></span></td>
                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id'] . '' . $table_name ?>">
                                    <input type="hidden" name="types" value="<?php echo $row['types'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <td align="center"><?php echo $row['price'] ?></td>
                                    <td align="center"><input type="submit" name="add_to_cart" class="btn btn-primary" value="Add" /></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-6 col-md-6">
                <br>

                <table border="1" width="100%" class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th class="text-center" colspan="3">STAR4K ( UHDTV4K ) - Silver</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center">ระยะเวลา</td>
                            <td align="center">K-Plus</td>
                            <td align="center"></td>
                        </tr>
                        <?php
                        $table_name = "star4k";
                        $query = "SELECT * FROM $table_name ORDER BY id ASC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post">
                                    <td align="center"><span name="types"><?php echo $row['types'] ?></span></td>
                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id'] . '' . $table_name ?>">
                                    <input type="hidden" name="types" value="<?php echo $row['types'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <td align="center"><?php echo $row['price'] ?></td>
                                    <td align="center"><input type="submit" name="add_to_cart" class="btn btn-primary" value="Add" /></td>
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
            <div class="col-sm-6 col-md-6">
                <br>

                <table border="1" width="100%" class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th class="text-center" colspan="3">STAR4K ( UHDTV4K ) - Gold</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">ระยะเวลา</td>
                            <td align="center">K-Plus</td>
                            <td align="center"></td>
                        </tr>
                        <?php
                        $table_name = "star4k_gold";
                        $query = "SELECT * FROM $table_name ORDER BY id ASC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post">
                                    <td align="center"><span name="types"><?php echo $row['types'] ?></span></td>
                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id'] . '' . $table_name ?>">
                                    <input type="hidden" name="types" value="<?php echo $row['types'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <td align="center"><?php echo $row['price'] ?></td>
                                    <td align="center"><input type="submit" name="add_to_cart" class="btn btn-primary" value="Add" /></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-6 col-md-6">
                <br>

                <table border="1" width="100%" class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th class="text-center" colspan="3">FW-IPTV</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center">ระยะเวลา</td>
                            <td align="center">K-Plus</td>
                            <td align="center"></td>
                        </tr>
                        <?php
                        $table_name = "fw_iptv";
                        $query = "SELECT * FROM $table_name ORDER BY id ASC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post">
                                    <td align="center"><span name="types"><?php echo $row['types'] ?></span></td>
                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id'] . '' . $table_name ?>">
                                    <input type="hidden" name="types" value="<?php echo $row['types'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <td align="center"><?php echo $row['price'] ?></td>
                                    <td align="center"><input type="submit" name="add_to_cart" class="btn btn-primary" value="Add" /></td>
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
            <div class="col-sm-6 col-md-6">
                <br>

                <table border="1" width="100%" class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th class="text-center" colspan="3">Xtreme4K</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center">ระยะเวลา</td>
                            <td align="center">K-Plus</td>
                            <td align="center"></td>
                        </tr>
                        <?php
                        $table_name = "xtreme4k";
                        $query = "SELECT * FROM $table_name ORDER BY id ASC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post">
                                    <td align="center"><span name="types"><?php echo $row['types'] ?></span></td>
                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id'] . '' . $table_name ?>">
                                    <input type="hidden" name="types" value="<?php echo $row['types'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <td align="center"><?php echo $row['price'] ?></td>
                                    <td align="center"><input type="submit" name="add_to_cart" class="btn btn-primary" value="Add" /></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-6 col-md-6">
                <br>

                <table border="1" width="100%" class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th class="text-center" colspan="3">HD2Live - Gold</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">ระยะเวลา</td>
                            <td align="center">K-Plus</td>
                            <td align="center"></td>
                        </tr>
                        <?php
                        $table_name = "hd2live_gold";
                        $query = "SELECT * FROM $table_name ORDER BY id ASC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post">
                                    <td align="center"><span name="types"><?php echo $row['types'] ?></span></td>
                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id'] . '' . $table_name ?>">
                                    <input type="hidden" name="types" value="<?php echo $row['types'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <td align="center"><?php echo $row['price'] ?></td>
                                    <td align="center"><input type="submit" name="add_to_cart" class="btn btn-primary" value="Add" /></td>
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

            <div class="col-sm-6 col-md-6">
                <br>

                <table border="1" width="100%" class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th class="text-center" colspan="3">HD2Live - Silver</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center">ระยะเวลา</td>
                            <td align="center">K-Plus</td>
                            <td align="center"></td>
                        </tr>
                        <?php
                        $table_name = "hd2live_silver";
                        $query = "SELECT * FROM $table_name ORDER BY id ASC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post">
                                    <td align="center"><span name="types"><?php echo $row['types'] ?></span></td>
                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id'] . '' . $table_name ?>">
                                    <input type="hidden" name="types" value="<?php echo $row['types'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <td align="center"><?php echo $row['price'] ?></td>
                                    <td align="center"><input type="submit" name="add_to_cart" class="btn btn-primary" value="Add" /></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <div class="col-sm-6 col-md-6">
                <br>

                <table border="1" width="100%" class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th class="text-center" colspan="3">U-Play</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td align="center">ระยะเวลา</td>
                            <td align="center">K-Plus</td>
                            <td align="center"></td>
                        </tr>
                        <?php
                        $table_name = "u_play";
                        $query = "SELECT * FROM $table_name ORDER BY id ASC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post">
                                    <td align="center"><span name="types"><?php echo $row['types'] ?></span></td>
                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id'] . '' . $table_name ?>">
                                    <input type="hidden" name="types" value="<?php echo $row['types'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <td align="center"><?php echo $row['price'] ?></td>
                                    <td align="center"><input type="submit" name="add_to_cart" class="btn btn-primary" value="Add" /></td>
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
            <div class="col-sm-6 col-md-6">
                <br>

                <table border="1" width="100%" class="table table-bordered">
                    <thead>
                        <tr class="table-secondary">
                            <th class="text-center" colspan="3">LiveTV55</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">ระยะเวลา</td>
                            <td align="center">K-Plus</td>
                            <td align="center"></td>
                        </tr>
                        <?php
                        $table_name = "livetv55";
                        $query = "SELECT * FROM $table_name ORDER BY id ASC";
                        $statement = $connect->prepare($query);
                        $statement->execute();
                        $result = $statement->fetchAll();
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <form method="post">
                                    <td align="center"><span name="types"><?php echo $row['types'] ?></span></td>
                                    <input type="hidden" name="hidden_id" value="<?php echo $row['id'] . '' . $table_name ?>">
                                    <input type="hidden" name="types" value="<?php echo $row['types'] ?>" />
                                    <input type="hidden" name="price" value="<?php echo $row['price'] ?>" />
                                    <input type="hidden" name="quantity" value="1" />
                                    <td align="center"><?php echo $row['price'] ?></td>
                                    <td align="center"><input type="submit" name="add_to_cart" class="btn btn-primary" value="Add" /></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php') ?>