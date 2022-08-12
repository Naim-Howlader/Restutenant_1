 
<?php
session_start();
if(isset($_POST['food_prize'])){
    $food_name = $_POST['food_name'];
    $food_prize = $_POST['food_prize'];
    //print_r($food_prize);
    if(isset($_SESSION['cart'])){
        $mycart = array_column($_SESSION['cart'], "Item_Name");
        if(in_array($food_name,$mycart)){
            
            echo "already added";
            exit();
            
        }
        else{
            $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count] = array(
            "Item_Name" => $food_name,
            "Prize"     => $food_prize,
            "Quantity"  => 1,
        );
       echo "first added";
       exit();

    }
}
    else{
        $_SESSION['cart'][0] = array(
            "Item_Name" => $food_name,
            "Prize"     => $food_prize,
            "Quantity"  => 1,
        );
        echo "added";
        exit();
    }
    
}
    
if(isset($_POST['remove'])){
    foreach($_SESSION['cart'] as $key=>$value){
        if($value["Item_Name"]==$_POST['remove']){
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            //return $_SESSION['cart'];
            echo "hiiiii";
        }
    }
}

if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == "cart_item"){
    $count = "";
    if(isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
    };
    echo $count;
}
?>
