<!doctype html>
<html lang="en">

<head>
    <!--    <meta charset="UTF-8">-->
    <!---->
    <!--    <link rel="stylesheet" href="css/bootstrap.min.css">-->
    <!--    <link rel="stylesheet" href="css/animate.min.css">-->
    <!---->
    <!--    <script src="js/bootnavbar.js"></script>-->
    <!--    <script src="js/bootstrap.min.js"></script>-->
    <!--    <script src="js/popper.min.js"></script>-->
    <!--    <script src="js/jquery-3.3.1.slim.min.js"></script>-->

    <?php
    require "head.html";
    ?>
    <style>
        html, body {
            height: 100%;
            width: 100%;
            margin: 0;
        }
    </style>

</head>


<nav class="navbar navbar-expand-lg navbar-dark bg-secondary"
     style="font-weight: bold; width: 300px;position: absolute;z-index: 2;" id="main_navbar">
    <a class="navbar-brand" href="#">Online Grocery Store</a>
    <div class="navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <!--<li class="nav-item active">-->
            <!--<a class="nav-link" href="#">Frozen</a>-->
            <!--</li>-->
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="frozen" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Frozen Food
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!--<div class="dropdown-divider"></div>-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="fishfinger" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Fish Fingers
                        </a>
                        <ul class="dropdown-menu" style="margin-left: 30px; margin-right: 30px"
                            aria-labelledby="fishfinger">
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=1000"
                                   target="top_right">500G</a></li>
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=1001"
                                   target="top_right">1000G</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=1002" target="top_right">Hamburger
                            Patties</a></li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=1003" target="top_right">Shelled
                            Prawns</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="tub" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Tub Ice Cream
                        </a>
                        <ul class="dropdown-menu" style="margin-left: 30px; margin-right: 30px" aria-labelledby="tub">
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=1004"
                                   target="top_right">1L</a></li>
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=1005"
                                   target="top_right">2L</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="fresh" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Fresh Food
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!--<div class="dropdown-divider"></div>-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="Cheddar" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Cheddar Cheese
                        </a>
                        <ul class="dropdown-menu" style="margin-left: 30px; margin-right: 30px"
                            aria-labelledby="fishfinger">
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=3000"
                                   target="top_right">500G</a></li>
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=3001"
                                   target="top_right">1000G</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=3002" target="top_right">T Bone
                            Steak</a></li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=3003" target="top_right">Navel
                            Oranges</a></li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=3004" target="top_right">Bananas</a>
                    </li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=3005" target="top_right">Peaches</a>
                    </li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=3006"
                           target="top_right">Grapes</a></li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=3007"
                           target="top_right">Apples</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="beverage" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Beverage
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!--<div class="dropdown-divider"></div>-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="tea" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Earl Grey Tea Bags
                        </a>
                        <ul class="dropdown-menu" style="margin-left: 30px; margin-right: 30px"
                            aria-labelledby="fishfinger">
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=4000"
                                   target="top_right">Pack 25</a></li>
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=4001"
                                   target="top_right">Pack 100</a></li>
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=4002"
                                   target="top_right">Pack 200</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="coffee" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Instant Coffee
                        </a>
                        <ul class="dropdown-menu" style="margin-left: 30px; margin-right: 30px"
                            aria-labelledby="fishfinger">
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=4003"
                                   target="top_right">200G</a></li>
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=4004"
                                   target="top_right">500G</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=4005" target="top_right">Chocolate
                            Bar</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="health" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Home Health
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!--<div class="dropdown-divider"></div>-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="panadol" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Panadol
                        </a>
                        <ul class="dropdown-menu" style="margin-left: 30px; margin-right: 30px"
                            aria-labelledby="fishfinger">
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=2000"
                                   target="top_right">Pack 24</a></li>
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=2001"
                                   target="top_right">Bottle 50</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=2002" target="top_right">Bath
                            Soap</a></li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="garbage" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Garbage Bags
                        </a>
                        <ul class="dropdown-menu" style="margin-left: 30px; margin-right: 30px"
                            aria-labelledby="fishfinger">
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=2003"
                                   target="top_right">Small (Pack 10)</a></li>
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=2004"
                                   target="top_right">Big (Pack 50)</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=2005" target="top_right">Washing
                            Powder</a></li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=2006" target="top_right">Laundry
                            Bleach</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="pet" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Pet Food
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!--<div class="dropdown-divider"></div>-->
                    <li class="nav-item dropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="dog" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Dry Dog Food
                        </a>
                        <ul class="dropdown-menu" style="margin-left: 30px; margin-right: 30px"
                            aria-labelledby="fishfinger">
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=5000"
                                   target="top_right">1KG</a></li>
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=5001"
                                   target="top_right">5KG</a></li>
                        </ul>
                    </li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=5002" target="top_right">Bird
                            Food</a></li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=5003" target="top_right">Cat
                            Food</a></li>
                    <li><a class="dropdown-item no-collapse" href="detail.php?product_id=5004" target="top_right">Fish
                            Food</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
<div style="height: 100%;width: 300px;background-color: #6c757d;position: absolute;z-index: 1;"></div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="js/bootnavbar.js"></script>
<script>
    $(function () {
        $('#main_navbar').bootnavbar();
    })
    $(".no-collapse").click(function (e) {
        e.stopPropagation();
    });
</script>


</body>

</html>