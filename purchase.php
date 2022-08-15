<?php
session_start();
$conn=mysqli_connect('localhost', 'root', '', 'all_ajax');
if(mysqli_connect_error()){
    echo "Connection error";
}
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['purchase'])){
        $query1  = "INSERT INTO `order_manager`(`name`, `mobile`, `address`, `payment`) VALUES ('$_POST[fullname]','$_POST[mobile]','$_POST[address]','$_POST[pay_mode]')";
        if(mysqli_query($conn,$query1)){
            $order_Id = mysqli_insert_id($conn);
            $query2 = "INSERT INTO `user_order`(`order_id`, `food_name`, `prize`, `quantity`) VALUES (?,?,?,?)";
            $stmt = mysqli_prepare($conn, $query2);
            if($stmt){
                mysqli_stmt_bind_param($stmt,"isii",$order_Id,$food_name,$prize,$quantity);
                foreach($_SESSION['cart'] as $key => $values){
                    $food_name=$values['Item_Name'];
                    $prize = $values['Prize'];
                    $quantity = 1;
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo "<script>
                        window.location.href='index.php';
                    </script>";
            }
            else{
                echo "prepare failed";
            }
        }
        else{
            echo "not connect";
        }
    }
}

?>