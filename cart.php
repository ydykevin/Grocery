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
    if($_POST['addQuantity']){
        echo $_POST['addQuantity'];
        echo $_SESSION['product_id'];
        echo $_SESSION['in_stock'];
    }
?>

</body>
</html>