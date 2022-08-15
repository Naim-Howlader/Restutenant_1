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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Your Food</title>
</head>
<body>
    <?php
    $msg = '<div class="alert alert-light text-center" role="alert">
    Please login first !
  </div>';
    if($_SESSION["name"]){
    ?>
    <div class="wrapper">
        <div class="admin-navbar d-flex">
            <div class="col-md-2 admin-bg">
                <div class="row">
                    <div class="admin-logo d-flex">
                        <h4>Logo Here</h4>
                        <li><a href="logout.php"><button class="btn btn-danger">Logout</button></a></li>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="admin-profile-pic">
                    <img src="assets/image/chef-1.png" alt="" width="100px">
                    </div>
                </div>
                <div class="row">
                    <div class="admin-link">
                        <ul>
                            <div class="home-link d-flex">
                            <li><i class="fa fa-home" aria-hidden="true"></i></li>
                            <li><a href="admin.php">Home</a></li>
                            </div>

                            <div class="home-link d-flex">
                            <li><i class="fa fa-tasks" aria-hidden="true"></i></li>
                            <li><a href="food-item.php">Food Item</a></li>
                            </div>

                            <div class="home-link d-flex">
                            <li><i class="fa fa-user" aria-hidden="true"></i></li>
                            <li><a href="">Users</a></li>
                            </div>

                            <div class="home-link d-flex">
                            <li><i class="fa fa-shopping-cart" aria-hidden="true"></i></li>
                            <li><a href="food-orders.php">Orders</a></li>
                            </div>
                        </ul>
                        <div class="link-footer">
                            <p>Copyright Logo here corporation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10 admin-main-section">
                <div class="container">
                <div class="admin-title">
                    <h2>Welcome Admin</h2>
                </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('form.php'); ?>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/script.js"></script>
    <?php
    }
    else{
        echo $msg;
    }
    ?>
</body>
</html>