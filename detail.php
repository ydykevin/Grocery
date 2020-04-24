<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require "head.html";
    ?>
</head>

<body>
<?php

session_start();
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    echo "$product_id";

    //$db = mysqli_connect("rerun.it.uts.edu.au","potiro","pcXZb(kL","poti","3306") or die("Fail to connect to MYSQL");
    //ssh -fNg -L 3307:rerun.it.uts.edu.au:3306 dayyang@rerun.it.uts.edu.au
    $db = mysqli_connect("localhost","potiro","pcXZb(kL","poti","3307") or die("Fail to connect to MYSQL");
    echo "1";
    //mysql_select_db("poti", $db) or die("Fail to open database");
    $query = "select * from products where product_id=$product_id";
    $result = mysqli_query($db,$query);
    if ($result) {
        echo "2";
        while ($data = mysqli_fetch_array($result)) {

            echo $data['product_name'];
        }
    }
}
?>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Product ID</th>
        <th scope="col">Product Name</th>
        <th scope="col">Unit Price</th>
        <th scope="col">Unit Quantity</th>
        <th scope="col">In Stock</th>
        <th scope="col">Quantity</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th style="font-weight: unset">
<!--            --><?// $data["product_id"] ?>
        </th>
        <td>
<!--            --><?// $data["product_name"] ?>
        </td>
        <td>
<!--            --><?// $data["unit_price"] ?>
        </td>
        <td>
<!--            --><?// $data["unit_quantity"] ?>
        </td>
        <td>
<!--            --><?// $data["in_stock"] ?>
        </td>
        <td>
<!--            --><?//
//            }
//            mysql_close($db);
//            }
//            }
//            ?>
        </td>
    </tr>
    </tbody>
</table>
</body>
</html>