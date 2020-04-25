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
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
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
        echo "cart:",$_SESSION['cart'][$product_id];
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
            <?php echo $data["unit_price"] ?>
        </td>
        <td>
            <?php echo $data["unit_quantity"] ?>
        </td>
        <td id="in_stock">
            <?php echo $data["in_stock"];
            $_SESSION['in_stock'] = $data["in_stock"]; ?>
        </td>
        <td style="width: 200px;">
            <form id="add_form" action="cart.php" method="post" target="bottom_right" onsubmit="return checkStock()">
                <div class="row">
                    <div class="col-8">
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
<!--<div id="no_stock" class="card bg-danger float-right"-->
<!--     style="width: 22rem; margin-right: 20px; color: #fff;display: none">-->
<!--    <div class="card-body">-->
<!--        <h5 class="card-title">Not enough stock</h5>-->
<!--        <h6 class="card-subtitle" id="remind_more"></h6>-->
<!--    </div>-->
<!--</div>-->
<div id="quantity_error" class="card bg-danger float-right"
     style="width: 22rem; margin-right: 20px; color: #fff;display: none">
    <div class="card-body">
        <h5 class="card-title">Quantity Invalid Format</h5>
<!--        <h6 class="card-subtitle">Quantity should be positive integer which is smaller or equal to in stock number</h6>-->
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
            }
        });
    });

    function checkStock() {
        //alert("pid:"+<?php //echo $product_id ?>//);
        //alert("cart number:"+<?php //echo $_SESSION['cart'][$product_id] ?>//);
        //alert("add number:"+$('#add_quantity').val());
        //alert("in_stock:"+<?php //echo $_SESSION['in_stock'] ?>//);

        if (<?php echo isset($_SESSION['cart'][$product_id]) ?>) {
            if(parseInt(<?php echo $_SESSION['cart'][$product_id] ?>) + parseInt($('#add_quantity').val()) <= parseInt(<?php echo $_SESSION['in_stock'] ?>)){
                   alert("old session enough");
                   return true;
            }else{
                   alert("not enough");
                   var more = parseInt(<?php echo $_SESSION['in_stock'] ?>) - parseInt(<?php echo $_SESSION['cart'][$product_id] ?>);
                    //$('#remind_more').text("You can add "+more+" more");
                    //$('#no_stock').css("display", "block");
                    alert("No enough stock");
                   return false;
            }
        }
    }
</script>

</body>
</html>