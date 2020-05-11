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
            color: red;
            visibility: hidden;
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

<form action="result.php" method="post" target="top_right">
    <table style="width: 99%;margin-bottom: 15px;" class="checkout">
        <tr>
            <td>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text">First Name</span>
                    </div>
                    <input type="text" class="form-control" id="first" name="first" required>
                </div>
            </td>
            <td id="firstError">Invalid first name</td>
            <td>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text">State</span>
                    </div>
                    <input type="text" class="form-control" id="state" name="state" required>
                </div>
            </td>
            <td id="stateError">Invalid state</td>
        </tr>
        <tr>
            <td>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Second Name</span>
                    </div>
                    <input type="text" class="form-control" id="second" name="second" required>
                </div>
            </td>
            <td id="secondError">Invalid second name</td>
            <td>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Country</span>
                    </div>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>
            </td>
            <td id="countryError">Invalid country</td>
        </tr>
        <tr>
            <td>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Address</span>
                    </div>
                    <input type="text" class="form-control" id="address" name="address" required>
                </div>
            </td>
            <td id="addressError">Invalid address</td>
            <td>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Post Code</span>
                    </div>
                    <input type="text" class="form-control" id="post" name="post" required>
                </div>
            </td>
            <td id="postError">Invalid post code</td>
        </tr>
        <tr>
            <td>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Suburb</span>
                    </div>
                    <input type="text" class="form-control" id="suburb" name="suburb" required>
                </div>
            </td>
            <td id="suburbError">Invalid suburb</td>
            <td>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                    </div>
                    <input type="text" class="form-control" id="email" name="email" required>
                </div>
            </td>
            <td id="emailError">Invalid Email</td>
        </tr>

    </table>

    <button type="submit" class="btn btn-secondary" onclick="doPurchase()">Purchase</button>
    <span>*All fields are required</span>

</form>
<script>

    function doPurchase() {

        let first = $("#first").val().trim();
        let second = $("#second").val().trim();
        let address = $("#address").val().trim();
        let suburb = $("#suburb").val().trim();
        let state = $("#state").val().trim();
        let country = $("#country").val().trim();
        let post = $("#post").val().trim();
        let email = $("#email").val().trim();

        alert("first:" + first + "--\nsecond:" + second + "--\naddress:" + address + "--\nsuburb:" + suburb + "--\nstate:" + state + "--\ncountry:" + country + "--\npost:" + post + "--\nemail:" + email+"--");

        let inputArr = [$("#first"), $("#second"), $("#address"), $("#suburb"), $("#state"), $("#country"), $("#post"), $("#email")];
        let valueArr = [first, second, address, suburb, state, country, post, email];
        let validArr = Array(8).fill(false);
        let regArr = [/.*/, /.*/, /.*/, /.*/, /.*/, /.*/, /.*/, /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/];
        let errorArr = [$("#firstError"), $("#secondError"), $("#addressError"), $("#suburbError"), $("#stateError"), $("#countryError"), $("#postError"), $("#emailError")];

        for (var i = 0; i < validArr.length; i++) {
            if (valueArr[i] === "") {
                invalidClass(inputArr[i], errorArr[i]);
            } else {
                if (regArr[i].test(valueArr[i])) {
                    validClass(inputArr[i], errorArr[i]);
                    validArr[i] = true;
                } else {
                    invalidClass(inputArr[i], errorArr[i]);
                }
            }
        }

        if (validArr.every((val, i, arr) => val === true)) {
            alert("All valid");
            $("form").unbind('submit').submit();
        }else{
            return false;
        }

    }

    function validClass(input, error) {
        input.addClass("is-valid").removeClass("is-invalid");
        error.css("visibility", "hidden");
    }

    function invalidClass(input, error) {
        input.addClass("is-invalid").removeClass("is-valid");
        error.css("visibility", "visible");
    }

    $("form").submit(function (e) {
        e.preventDefault();
    });

</script>


</body>
</html>