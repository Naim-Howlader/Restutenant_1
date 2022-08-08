<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    
</body>
</html>


<?php
include("database.php");
if(isset($_POST["input"])){
    $input = $_POST["input"];
    //echo $input;
    $query = "SELECT * FROM usertable_5 WHERE food_name LIKE '{$input}%'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){

                $id = $row["id"];
                $food_img = '<img src="uploads/'.($row["food_img"]).' " width="100px" height="100px">';
                $food_name = $row["food_name"];
                $food_des = $row["food_des"];
                $food_prize = $row["food_prize"];?>
                

<div class="flex col-md-3 all_info">
                        <form action='manage_cart.php' method='post'>
                        <div class="d-flex">
                            <?='<img src="uploads/'.($row["food_img"]).' " class="center"width="200px" height="200px">'?>
                        </div>
                        <h3><?= $food_name ?></h3>
                        <p><?= $food_des ?></p>
                        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="prize"><?= $food_prize?></h4>
                        <button type="submit" class="btn btn-outline-danger" name="Add_To_Cart">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="${front.food_name}">
                        <input type="hidden" name="Prize" value="${front.food_prize}">
                        </div>
                        </form>
                    </div>

        <?php
        
        }
    }
}
        ?>
    

                


