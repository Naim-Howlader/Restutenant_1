<?php

include("header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h2>My Cart</h2>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Food Name</th>
                            <th scope="col">Fodd Prize</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $total = 0;
                        $sl = 0;
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key=>$value){
                                $total = ((int)$total + (int)$value['Prize']);
                                $sl++;
                                echo"<tr>
                                        <td>$sl</td>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[Prize]</td>
                                        <td><input class='text-center' type='number' style='width:100px;' min='1' max='10' value='$value[Quantity]'></td>
                                        <td>
                                            <form action='manage_cart.php' method='post'>
                                            <button class='btn btn-sm btn-outline-danger' name='Remove_Item'>Remove</button>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                            </form>
                                        </td>
                                    </tr>";
                            };
                        };
                        
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3 my-5 ">
                <div class="border bg-light rounded p-4">
                    <h4>Total amount : </h4>
                    <h5><?= $total; ?></h5>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cash on delivary
                        </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                        <label class="form-check-label" for="flexRadioDefault2">
                            Card
                        </label>
                        </div>
                        <br>
                <form action="" method="post">
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Make Purchase</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>