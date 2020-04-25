<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require "head.html";
    ?>
    <style>
        .vertial-middle td {
            vertical-align: middle;
        }
    </style>
</head>
<body>

<?php
session_start();
if (isset($_POST['add_quantity'])) {
    echo $_POST['add_quantity'], "<br>";
    echo $_SESSION['product_id'], "<br>";
    echo $_SESSION['in_stock'], "<br>";
    if($_SESSION['cart'][$_SESSION['product_id']]+$_POST['add_quantity']>$_SESSION['in_stock']){
        ?>
        <script>
            $(function(){
                alert("No enough stock");
            });
        </script>
        <?php
    }else {
        $_SESSION['cart'][$_SESSION['product_id']] += $_POST['add_quantity'];
    }
}
?>

<table class="table table-bordered" style="width: 99%;">
    <thead class="bg-secondary" style="color:#fff">
    <tr>
        <th scope="col">Delete</th>
        <th scope="col">Product Name</th>
        <th scope="col">Unit Price</th>
        <th scope="col">Unit Quantity</th>
        <th scope="col">Required Quantity</th>
        <th scope="col">Total Cost</th>
    </tr>
    </thead>
    <tbody>

    <?php
    if (isset($_SESSION['cart'])) {
        $max = sizeof($_SESSION['cart']);
        echo "<br>size:", $max;
        $db = mysqli_connect("localhost", "potiro", "pcXZb(kL", "poti", "3307") or die("Fail to connect to MYSQL");
        while (list ($key, $val) = each($_SESSION['cart'])) {

            ?>

            <tr class="vertial-middle">
            <?php

            $product_id = $key;
            //mysql_select_db("poti", $db) or die("Fail to open database");
            $query = "select * from products where product_id=$product_id";
            $result = mysqli_query($db, $query);
            if ($result) {
                while ($data = mysqli_fetch_array($result)) {
                    if($_SESSION['cart'][$data["product_id"]]==0){
                        unset($_SESSION['cart'][$data["product_id"]]);
                        continue;
                    }
                    echo "<br>pid:", $key, "<br>", $val;
                    ?>

                    <th style="font-weight: unset;vertical-align: middle;">
                        <?php echo $data["product_id"] ?>
                    </th>
                    <td>
                        <?php echo $data["product_name"] ?>
                    </td>
                    <td>
                        <?php echo $data["unit_price"] ?>
                    </td>
                    <td>
                        <?php echo $data["unit_quantity"] ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['cart'][$data["product_id"]] ?>
                    </td>
                    <td style="width: 200px;">
                    <form id="add_form" action="cart.php" method="post" target="bottom_right"
                          onsubmit="return checkStock()">
                        <div class="row">
                            <div class="col-8">
                                <input class="form-control" type="number" value="1" id="add_quantity"
                                       name="add_quantity">
                            </div>
                            <div>
                                <button id="add_button" class="btn btn-secondary" type="submit">Add</button>
                            </div>
                        </div>
                    </form>
                    </td>
                    <?php
                }
            }
        }
        mysqli_close($db);
        ?>

        </tr>

        <?php
    } ?>
    </tbody>
</table>
</body>
</html>