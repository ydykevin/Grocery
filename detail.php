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
    <script>

    </script>

</head>

<body>

<table class="table table-bordered" style="width: 99%;">
    <thead class="bg-secondary" style="color:#fff">
    <tr>
        <th colspan="6" style="vertical-align: middle;text-align: center"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M14 2H6c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>&nbsp;Product Details</th>
    </tr>
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
    <tr class="vertial-middle">
        <?php
        //ini_set('display_errors', 1);
        //ini_set('display_startup_errors', 1);
        //error_reporting(E_ALL);
        //session_start();
        //session_destroy();
        session_start();
//        if (isset($_SESSION['cart']['bb'])) {
//            echo "bb set";
//        }

        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] =  array();
        }
//        $_SESSION['cart'] = array("apple" => 2, "Orange" => 3, "Banana" => 5, "Mango" => 7);
//        if (isset($_SESSION['cart']['apple'])) {
//            echo "apple set";
//        }

        if (isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];

        //$_SESSION['cart'][$product_id] = 20;
        if(!isset($_SESSION['cart'][$product_id])){
            //unset($_SESSION['cart'][$product_id]);
            $_SESSION['cart'][$product_id] = 0;
        }
        //echo "cart:",$_SESSION['cart'][$product_id];
        //unset($_SESSION['cart']['apple']);

        //$max = sizeof($_SESSION['cart']);
        //for($i=0; $i<$max; $i++) {
        //while (list ($key, $val) = each($_SESSION['cart'])) {
        //    echo "$key$val<br>";
        //}

        //$db = mysqli_connect("rerun.it.uts.edu.au","potiro","pcXZb(kL","poti","3306") or die("Fail to connect to MYSQL");
        //ssh -fNg -L 3307:rerun.it.uts.edu.au:3306 dayyang@rerun.it.uts.edu.au
        $db = mysqli_connect("localhost", "potiro", "pcXZb(kL", "poti", "3307") or die("Fail to connect to MYSQL");

        //mysql_select_db("poti", $db) or die("Fail to open database");
        $query = "select * from products where product_id=$product_id";
        $result = mysqli_query($db, $query);
        if ($result) {
        while ($data = mysqli_fetch_array($result)) {

        ?>

        <th style="font-weight: unset;vertical-align: middle;">
            <?php echo $data["product_id"] ?>
        </th>
        <td>
            <?php echo $data["product_name"] ?>
        </td>
        <td>
            $<?php echo $data["unit_price"] ?>
        </td>
        <td>
            <?php echo $data["unit_quantity"] ?>
        </td>
        <td id="in_stock">
            <?php echo $data["in_stock"];
            $_SESSION['in_stock'] = $data["in_stock"]; ?>
        </td>
        <td style="width: 250px;">
            <form action="cart.php" method="post" target="bottom_right" onsubmit="return checkStock()">
                <div class="input-group-append">
                    <div>
                        <input class="form-control" type="number" value="1" id="add_quantity" name="add_quantity">
                    </div>
                    <div>
                        <button id="add_button" class="btn btn-secondary" type="submit">Add</button>
                    </div>
                </div>
            </form>
            <?php
            }
            $_SESSION['product_id'] = $product_id;
            mysqli_close($db);
            }
            }
            ?>
        </td>
    </tr>
    </tbody>
</table>

<div id="quantity_error" class="card bg-danger float-right"
     style="width: 13rem; margin-right: 20px; color: #fff;display: none; height:50px;">
    <div style="padding-top:12px;text-align: center">
        <h6>Quantity Invalid Format</h6>
    </div>
</div>

<script>
    $(function () {
        $('#add_quantity').bind('input', function () {
            var reg = /^[0-9]*[1-9][0-9]*$/;
            var in_stock = <?php echo $_SESSION['in_stock']?>;
            if (reg.test($(this).val()) && $(this).val() <= in_stock) {
                $('#add_button').prop('disabled', false);
                $('#quantity_error').css("display", "none");
            } else {
                $('#add_button').prop('disabled', true);
                $('#quantity_error').css("display", "block");
                //alert("Invalid quantity");
            }
        });
    });

    function checkStock() {

        <?php
            //echo "alert('-".$_SESSION['checkout']."-')";
            if(isset($_SESSION['checkout'])){
                echo "alert('Shopping cart is locked, please finish last checkout by clicking on \"Checkout\" button in the shopping cart page.');
                return false;";
            }
        ?>

        if(parseInt(<?php echo $_SESSION['cart'][$product_id] ?>) + parseInt($('#add_quantity').val()) <= parseInt(<?php echo $_SESSION['in_stock'] ?>)){
            return true;
        }else{
            var more = parseInt(<?php echo $_SESSION['in_stock'] ?>) - parseInt(<?php echo $_SESSION['cart'][$product_id] ?>);
            alert("Detail: No enough stock");
            return false;
        }

    }
</script>

</body>
</html>