<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require "head.html";
    ?>
    <style>
        .checkout tr td {
            border: solid 0px;
            padding-top: 10px;
        }

        .checkout tr td:first-child, .checkout tr td:nth-child(3) {
            width: 32%;
        }

        .checkout tr td:nth-child(2), .checkout tr td:last-child {
            width: 18%;
            padding-left: 20px;
        }

        .checkout tr td div div span {
            width: 105px;
        }
    </style>
</head>
<body>

<table class="table table-bordered" style="width: 99%;margin-bottom: 0px;">
    <thead class="bg-secondary" style="color:#fff">
    <tr>
        <th colspan="4" style="vertical-align: middle;text-align: center">Purchase Details</th>
    </tr>
    </thead>
</table>

<table style="width: 99%;margin-bottom: 15px;" class="checkout">
    <tr>
        <td>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">First Name</span>
                </div>
                <input type="text" class="form-control">
            </div>
        </td>
        <td>1</td>
        <td>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">State</span>
                </div>
                <input type="text" class="form-control">
            </div>
        </td>
        <td>1</td>
    </tr>
    <tr>
        <td>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Second Name</span>
                </div>
                <input type="text" class="form-control">
            </div>
        </td>
        <td>1</td>
        <td>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Country</span>
                </div>
                <input type="text" class="form-control">
            </div>
        </td>
        <td>1</td>
    </tr>
    <tr>
        <td>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Address</span>
                </div>
                <input type="text" class="form-control">
            </div>
        </td>
        <td>1</td>
        <td>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Post Code</span>
                </div>
                <input type="text" class="form-control">
            </div>
        </td>
        <td>1</td>
    </tr>
    <tr>
        <td>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Suburb</span>
                </div>
                <input type="text" class="form-control">
            </div>
        </td>
        <td>1</td>
        <td>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-text">Email</span>
                </div>
                <input type="text" class="form-control">
            </div>
        </td>
        <td>1</td>
    </tr>

</table>

<center>
    <form>
        <button type="submit" class="btn btn-secondary" onclick="doPurchase()">Purchase</button>
    </form>
</center>

<script>

    function doPurchase() {
        alert("1");
    }

</script>

</body>
</html>