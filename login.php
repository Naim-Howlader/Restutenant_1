<?php

session_start();
if(count($_POST)>0){
    include_once('database.php');
    $result = mysqli_query($con,"SELECT * FROM admin_login WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
    $row = mysqli_fetch_array($result);
    if(is_array($row)){
        $_SESSION["id"] = $row["id"];
        $_SESSION["name"] = $row["name"];
    }
    else{
        $message = "Invalid email or Password";
    }
}
if(isset($_SESSION["id"])){
    header("Location:admin.php");
}

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
    <style>
        .login{
            background-color: #fff;
            padding:40px;
            margin-top: 30%;
            border-radius: 10px;
        }
        .btn{
            display: flex;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="bg-img">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="login col-md-8">
                    <?php
                            if(isset($message)){
                            echo '<div class="alert alert-warning" role="alert" >
                            Invalid Email or Password!
                          </div>';
                            }
                        ?>
                        <form action="" method="post">
                            <h2 class="text-center">Login</h2>
                            <label for="email" class="form-label">Email</label>
                            <input type="text" id="email" class="form-control" name="user_name">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password">
                            <button type="submit" class="btn btn-primary mt-3" name="login">Log in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
