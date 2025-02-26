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
if (isset($_POST['add_quantity'])&&isset($_SESSION['product_id'])) {
    //echo $_POST['add_quantity'], "<br>";
    //echo $_SESSION['product_id'], "<br>";
    //echo $_SESSION['in_stock'], "<br>";
    if (!isset($_SESSION['cart'][$_SESSION['product_id']])) {
        $_SESSION['cart'][$_SESSION['product_id']] = 0;
    }
    if ($_SESSION['cart'][$_SESSION['product_id']] + $_POST['add_quantity'] > $_SESSION['in_stock']) {
        ?>
        <script>
            $(function () {
                alert("Cart: No enough stock");
            });
        </script>
        <?php
    } else {
        $_SESSION['cart'][$_SESSION['product_id']] += $_POST['add_quantity'];
    }
}

if (isset($_POST['delete'])) {
    foreach ($_POST['delete'] as $delete_item) {
        unset($_SESSION['cart'][$delete_item]);
    }
}

if (isset($_POST['clear'])) {
    unset($_SESSION['cart']);
}
$_SESSION['total_quantity'] = 0;
$_SESSION['total_price'] = 0;
?>

<table class="table table-bordered" style="width: 99%;">
    <thead class="bg-secondary" style="color:#fff">
    <tr>
        <th colspan="6" style="vertical-align: middle;text-align: center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px"><path d="M7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zM1 2v2h2l3.6 7.59-1.35 2.45c-.16.28-.25.61-.25.96 0 1.1.9 2 2 2h12v-2H7.42c-.14 0-.25-.11-.25-.25l.03-.12.9-1.63h7.45c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.08-.14.12-.31.12-.48 0-.55-.45-1-1-1H5.21l-.94-2H1zm16 16c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>&nbsp;Shopping Cart</th>
    </tr>
    <tr>
        <th scope="col" style="text-align: center">Delete</th>
        <th scope="col">Product Name</th>
        <th scope="col">Unit Price</th>
        <th scope="col">Unit Quantity</th>
        <th scope="col">Required Quantity</th>
        <th scope="col">Total Price</th>
    </tr>
    </thead>
    <tbody>

    <?php
    if (isset($_SESSION['cart'])) {
        $max = sizeof($_SESSION['cart']);
        //echo "<br>size:", $max;
        //$db = mysqli_connect("rerun.it.uts.edu.au","potiro","pcXZb(kL","poti","3306") or die("Fail to connect to MYSQL");
        $db = mysqli_connect("localhost", "potiro", "pcXZb(kL", "poti", "3307") or die("Fail to connect to MYSQL");

        while (list ($key, $val) = each($_SESSION['cart'])) {
            $_SESSION['total_quantity'] += $val;
            ?>

            <tr class="vertial-middle" id="cart_rows">

            <?php

            $product_id = $key;
            //mysql_select_db("poti", $db) or die("Fail to open database");
            $query = "select * from products where product_id=$product_id";
            $result = mysqli_query($db, $query);
            if ($result) {
                while ($data = mysqli_fetch_array($result)) {
                    if ($_SESSION['cart'][$data["product_id"]] == 0) {
                        unset($_SESSION['cart'][$data["product_id"]]);
                        continue;
                    }
                    //echo "<br>pid:", $key, "<br>", $val;
                    ?>

                    <th style="font-weight: unset;vertical-align: middle;text-align: center">
                        <input type="checkbox" class="checkbox">
                    </th>
                    <td style="display: none" class="product_id">
                        <?php echo $data["product_id"] ?>
                    </td>
                    <td class="product_name">
                        <?php echo $data["product_name"] ?>
                    </td>
                    <td>
                        $<?php echo $data["unit_price"] ?>
                    </td>
                    <td>
                        <?php echo $data["unit_quantity"] ?>
                    </td>
                    <td>
                        <?php echo $_SESSION['cart'][$data["product_id"]] ?>
                    </td>
                    <td style="width: 200px;">
                        $<?php
                        $subtotal = $data["unit_price"] * $_SESSION['cart'][$data["product_id"]];
                        $_SESSION['total_price'] += $subtotal;
                        echo $subtotal;
                        ?>
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
    <tr style="font-weight: bold">
        <td style="text-align: right" colspan="4">Total</td>
        <td id="total_number">
            <?php echo $_SESSION['total_quantity']; ?></td>
        <td id="total_price">
            $<?php echo $_SESSION['total_price']; ?></td>
        </td>
    </tr>

    </tbody>
</table>
<!--<form action="cart.php" method="post" target="bottom_right">-->
<form id="cart_form" action="cart.php" method="post" target="bottom_right">
    <!--    <input name="delete" value="321" id="delete_item" style="display: none">-->
    <button type="submit" class="btn btn-secondary" onclick="
    if(confirm('Do you want to delete selected items?')){
        doDelete();
    }else{
        return false;
    }
    ">Delete
    </button>
    <button type="submit" class="btn btn-secondary" onclick="
    if(confirm('Do you want to clear shopping cart?')){
        doClear();
    }else{
        return false;
    }
    ">Clear
    </button>
    <button type="button" class="btn btn-secondary float-right" onclick="doCheckout()" style="margin-right: 20px;">
        Checkout
    </button>
</form>
<script>
    function doDelete() {
        //var deleteItem = [];
        $('.checkbox:checked').each(function () {
            var pid = $(this).parents("tr").find(".product_id").text().trim();
            //deleteItem.push(pid);
            $("#cart_form").append('<input name="delete[]" type="hidden"value="' + pid + '">');
        });

    }

    function doClear() {
        $("#cart_form").append('<input name="clear" type="hidden">');
    }

    function doCheckout() {
        <?php
        if (isset($_SESSION['cart'])) {
            $max = sizeof($_SESSION['cart']);
            if($max!=0){
                //$_SESSION['checkout'] = true;
                echo "parent.top_right.location = 'checkout.php';";
            }else{
                echo "alert('Nothing to checkout');";
            }
        }else{
            echo "alert('Nothing to checkout');";
        }
        ?>
    }

</script>
</body>
</html>