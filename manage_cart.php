<?php
session_start();
if(isset($_POST['food_name'])){
    $food_name = $_POST['food_name'];
    $food_prize = $_POST['food_prize'];
    if(isset($_SESSION['cart'])){
        $mycart = array_column($_SESSION['cart'], "Item_Name");
        if(in_array($food_name,$mycart)){
            
        }
        else{
            $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array(
            "Item_Name" => $food_name,
            "Prize"     => $food_prize,
            "Quantity"  => 1,
        );
        echo '<div class="alert alert-success" role="alert">
        Item added !
        </div>';
  
        //print_r($_SESSION['cart']);
        }
    }
    else{
        $_SESSION['cart'][0] = array(
            "Item_Name" => $food_name,
            "Prize"     => $food_prize,
            "Quantity"  => 1,
        );
        echo '<div class="alert alert-success" role="alert">
        Item added !
        </div>';
        //print_r($_SESSION['cart']);
    }
    
}
    
if(isset($_POST['Remove_Item'])){
    foreach($_SESSION['cart'] as $key=>$value){
        if($value["Item_Name"]==$_POST['Item_Name']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo"<script>
                        alert('Item Removed');
                        window.location.href='mycart.php';
                </script>";
        }
    }
}
?>