<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['Add_To_Cart'])){
        if(isset($_SESSION['cart'])){
            $mycart = array_column($_SESSION['cart'], "Item_Name");
            if(in_array($_POST["Item_Name"],$mycart)){
                echo"<script>
                        alert('Item already added');
                        window.location.href='index.php';
                    </script>";
            }
            else{
                $count = count($_SESSION['cart']);
            $_SESSION['cart'][$count] = array(
                "Item_Name" => $_POST["Item_Name"],
                "Prize"     => $_POST["Prize"],
                "Quantity"  => 1,
            );
            echo"<script>
                        //alert('Item added');
                        window.location.href='index.php';
                    </script>";
            //print_r($_SESSION['cart']);
            }
        }
        else{
            $_SESSION['cart'][0] = array(
                "Item_Name" => $_POST["Item_Name"],
                "Prize"     => $_POST["Prize"],
                "Quantity"  => 1,
            );
            //print_r($_SESSION['cart']);
            echo"<script>
            //alert('Item added');
            window.location.href='index.php';
        </script>";
        }
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