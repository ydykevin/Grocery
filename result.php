<!doctype html>
<html lang="en">

<head>
    <?php
    require "head.html";
    ?>
</head>

<body>

<?php
session_start();
$headers = 'MIME-Version: 1.0 ' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: Online Grocery Store 11946047' . "\r\n";

$to = $_POST['email'];
$title = "Order Details";
$msg = "

<html lang=\"en\">

<head>
    <title>Order Details</title>
    <style>
        table, table tr th, table tr td{
            border: solid 1px black;
        }
        .detail tr th{
            width: 150px;
        }
        table tr th{
            background-color: #e0e0e0;
        }
        table tr th, table tr td{
            padding: 5px;
        }
        table tr:hover {
            background-color: #f5f5f5;
        }
        .order tr td{
            text-align: center;
        }
    </style>
</head>

<body>

<span>Your contact details:</span>
<table class='detail' style='table-layout: auto;width: 500px;border-collapse: collapse;'>
    <tbody>
    <tr>
        <th>Name:</th>
        <td>" . $_POST['first'] . " " . $_POST['second'] . "</td>
    </tr>
    <tr>
        <th>Address:</th>
        <td>" . $_POST['address'] . "</td>
    </tr>
    <tr>
        <th>Suburb:</th>
        <td>" . $_POST['suburb'] . "</td>
    </tr>
    <tr>
        <th>State:</th>
        <td>" . $_POST['state'] . "</td>
    </tr>
    <tr>
        <th>Country:</th>
        <td>" . $_POST['country'] . "</td>
    </tr>
    <tr>
        <th>Post Code:</th>
        <td>" . $_POST['post'] . "</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>" . $_POST['email'] . "</td>
    </tr>
    </tbody>
</table>
<br>
<span>Your order details:</span>
<table class='order' style='table-layout: auto;border-collapse: collapse;'>
    <tr>
        <th>Product Name</th>
        <th>Unit Price</th>
        <th>Unit Quantity</th>
        <th>Required Quantity</th>
        <th>Total Cost</th>
    </tr>";


if (isset($_SESSION['cart'])) {
    $max = sizeof($_SESSION['cart']);
    //echo \"<br>size:\", $max;
    //$db = mysqli_connect("rerun.it.uts.edu.au","potiro","pcXZb(kL","poti","3306") or die("Fail to connect to MYSQL");
    $db = mysqli_connect("localhost", "potiro", "pcXZb(kL", "poti", "3307") or die("Fail to connect to MYSQL");
    $_SESSION['total_quantity'] = 0;
    $_SESSION['total_price'] = 0;
    while (list ($key, $val) = each($_SESSION['cart'])) {
        $_SESSION['total_quantity'] += $val;
        $product_id = $key;
        $query = "select * from products where product_id=$product_id";
        $result = mysqli_query($db, $query);
        if ($result) {
            while ($data = mysqli_fetch_array($result)) {
                $subtotal = $data["unit_price"] * $_SESSION['cart'][$data["product_id"]];
                $_SESSION['total_price'] += $subtotal;
                $msg .= "
                    <tr>
                        <td>" . $data["product_name"] . "</td>
                        <td>$" . $data["unit_price"] . "</td>
                        <td>" . $data["unit_quantity"] . "</td>
                        <td>" . $_SESSION['cart'][$data["product_id"]] . "</td>
                        <td>$" . $subtotal . "</td>
                    </tr>";
            }
        }
    }
    mysqli_close($db);
}

$msg .= "
    <tr style='font-weight: bold'>
        <td style='text-align: right' colspan='3'>Total</td>
        <td id='total_number'>" . $_SESSION['total_quantity'] . "</td>
        <td id='total_price'>$" . $_SESSION['total_price'] . "</td>
        </td>
    </tr>";


$msg .= "</table></body></html>";

echo $msg;

if(mail($to,$title,$msg,$headers)){
    echo "success";
}else{
    echo "fail";
}

?>

</body>

</html>