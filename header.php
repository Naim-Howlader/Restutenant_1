<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <div class="navbar">
                <div class="container">
                <div class="logo">
                    <img src="assets/image/logo.png" alt="" width="50px">
                </div>
                <div class="nav-link">
                    <ul>
                        <li><a href="index.php">home</a></li>
                        <li><a href="">product</a></li>
                        <li><a href="">promo</a></li>
                        <li><a href="">about</a></li>
                        <?php
                           
                        ?>
                       <li><a href="mycart.php" class="btn btn-outline-danger hvr-buzz-out"><i class="fa fa-shopping-cart" aria-hidden="true"><span id="cart_num_second"></span></i></a></li>
                    </ul>
                </div>
                </div>
            </div>
</head>
<body>
<script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/script.js"></script>
    <script src="js/test.js"></script>
    <script src="assets/js-plugin/counterup.min.js"></script>
    <script src="assets/js-plugin/jquery.waypoints.min.js"></script>
    <script src="assets/js-plugin/jquery.smoothscroll.min.js"></script>
    <script src="assets/js-plugin/aos.js"></script>
</body>
</html>