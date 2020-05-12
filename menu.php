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
<body>

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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px"><path d="M22 11h-4.17l3.24-3.24-1.41-1.42L15 11h-2V9l4.66-4.66-1.42-1.41L13 6.17V2h-2v4.17L7.76 2.93 6.34 4.34 11 9v2H9L4.34 6.34 2.93 7.76 6.17 11H2v2h4.17l-3.24 3.24 1.41 1.42L9 13h2v2l-4.66 4.66 1.42 1.41L11 17.83V22h2v-4.17l3.24 3.24 1.42-1.41L13 15v-2h2l4.66 4.66 1.41-1.42L17.83 13H22z"/><path d="M0 0h24v24H0z" fill="none"/></svg>&nbsp;Frozen Food
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
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="white" width="18px" height="18px"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M6.05,8.05c-2.73,2.73-2.73,7.15-0.02,9.88c1.47-3.4,4.09-6.24,7.36-7.93c-2.77,2.34-4.71,5.61-5.39,9.32 c2.6,1.23,5.8,0.78,7.95-1.37C19.43,14.47,20,4,20,4S9.53,4.57,6.05,8.05z"/></g></g></svg>&nbsp;Fresh Food
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3H4v10c0 2.21 1.79 4 4 4h6c2.21 0 4-1.79 4-4v-3h2c1.11 0 2-.9 2-2V5c0-1.11-.89-2-2-2zm0 5h-2V5h2v3zM4 19h16v2H4z"/></svg>&nbsp;Beverage
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 3H5c-1.1 0-1.99.9-1.99 2L3 19c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-1 11h-4v4h-4v-4H6v-4h4V6h4v4h4v4z"/></svg>&nbsp;Home Health
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px"><circle cx="4.5" cy="9.5" r="2.5"/><circle cx="9" cy="5.5" r="2.5"/><circle cx="15" cy="5.5" r="2.5"/><circle cx="19.5" cy="9.5" r="2.5"/><path d="M17.34 14.86c-.87-1.02-1.6-1.89-2.48-2.91-.46-.54-1.05-1.08-1.75-1.32-.11-.04-.22-.07-.33-.09-.25-.04-.52-.04-.78-.04s-.53 0-.79.05c-.11.02-.22.05-.33.09-.7.24-1.28.78-1.75 1.32-.87 1.02-1.6 1.89-2.48 2.91-1.31 1.31-2.92 2.76-2.62 4.79.29 1.02 1.02 2.03 2.33 2.32.73.15 3.06-.44 5.54-.44h.18c2.48 0 4.81.58 5.54.44 1.31-.29 2.04-1.31 2.33-2.32.31-2.04-1.3-3.49-2.61-4.8z"/><path d="M0 0h24v24H0z" fill="none"/></svg>&nbsp;Pet Food
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
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=5001"
                                   target="top_right">1KG</a></li>
                            <li><a class="dropdown-item no-collapse" href="detail.php?product_id=5000"
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