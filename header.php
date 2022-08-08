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
                            $count = 0;
                            if(isset($_SESSION['cart'])){
                                $count = count($_SESSION['cart']);
                            };
                        ?>
                        <li><a href="mycart.php" class="btn btn-outline-danger">Cart (<?= $count?>)</a></li>
                    </ul>
                </div>
                </div>
            </div>
</head>
<body>
    
</body>
</html>