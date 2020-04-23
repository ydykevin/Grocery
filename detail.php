<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootnavbar.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>

</head>



<body>
<?php

    session_start();
    $product = $_GET['product_id'];
    echo $product;

?>

</body>
</html>