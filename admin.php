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
    <div class="include bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-md-12 header d-flex align-items-center justify-content-between">
                <div class="logo">
                    <h3>Admin panel</h3>
                </div>
                <div class="link">
                    <ul>
                        <li><a href="logout.php">Logout</a></li>
                        <li><button type='button' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-edit-modal" id='adduserbtn'>Add food</button></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="layer d-flex ">
                <div class="col-md-4">
                <input type="text" class="form-control" id="live_search" autocomplete="off" placeholder="search food item....">
                </div>
                <h3 class='text-center ms-5'>All Food Items</h3><hr>
                </div>
            </div>
        </div>
        <div class="mt-5 row">
            <?php include('tableData.php'); ?>
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