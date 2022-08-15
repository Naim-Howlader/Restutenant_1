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
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                    
                        $sl = 0;
                        if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key=>$value){
                                
                                $sl++;
                                echo"<tr>
                                        <td>$sl</td>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[Prize]Tk<input type='hidden' class='iprize' value='$value[Prize]'></td>
                                        <td><input class='text-center iquantity' onchange='subtotal()' type='number' style='width:100px;' min='1' max='10' value='$value[Quantity]'></td>
                                        <td class='itotal'></td>
                                        <td>
                                            <form id='remove_cart' class='remove_item'>
                                            <button class='btn btn-sm btn-outline-danger' type='submit'>Remove</button>
                                            
                                            <input type='hidden' id='remove_item' value='$value[Item_Name]'>
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
                    <h4>Grand Total : </h4>
                    <h5 id="gtotal"></h5>
                    <br>
                    
                <?php
                    if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0){
                ?>
                <form action="purchase.php" method="post">
                    <div class="d-grid gap-2">
                        <div class="form-group">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullname" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="form-label">Mobile No</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                        </div>
                        <div class="form-group">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault1" checked>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Cash on delivary
                        </label>
                        </div>
                        <div class="form-check">
                        
                    </div>
                    <button class="btn btn-primary" type="submit" name="purchase">Make Purchase</button>
                    </div>
                </form>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/script.js"></script>
    <script src="js/test.js"></script>
    <script src="js/total.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="assets/js-plugin/counterup.min.js"></script>
    <script src="assets/js-plugin/jquery.waypoints.min.js"></script>
    <script src="assets/js-plugin/jquery.smoothscroll.min.js"></script>
    <script src="assets/js-plugin/aos.js"></script>
</body>
</html>