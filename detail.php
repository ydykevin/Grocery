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
        session_start();
        if (isset($_GET['product_id'])) {
        $product_id = $_GET['product_id'];

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
            <form id="addForm" action="cart.php" method="post" target="bottom_right">
                <div class="row">
                    <div class="col-8">
                        <input class="form-control" type="number" value="1" id="addQuantity" name="addQuantity">
                    </div>
                    <div>
                        <button id="addButton" class="btn btn-secondary" type="submit" disabled>Add</button>
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
<div id="quantityError" class="card bg-danger float-right"
     style="width: 22rem; margin-right: 20px; color: #fff;visibility: hidden;">
    <div class="card-body">
        <h5 class="card-title">Invalid Format</h5>
        <h6 class="card-subtitle">Quantity should be positive integer which is smaller or equal to in stock number</h6>
    </div>
</div>
<script>
    $(function () {
        $('#addQuantity').bind('input', function () {
            var reg = /^[0-9]*[1-9][0-9]*$/;
            var in_stock = <?php echo $_SESSION['in_stock']?>;
            if ($(this).val() === "") {
                $('#addButton').prop('disabled', true);
            } else {
                if (reg.test($(this).val()) && $(this).val() <= in_stock) {
                    $('#addButton').prop('disabled', false);
                    $('#quantityError').css("visibility", "hidden");
                } else {
                    $('#addButton').prop('disabled', true);
                    $('#quantityError').css("visibility", "visible");
                }
            }
        });
    })
</script>
</body>
</html>