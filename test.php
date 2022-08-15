<?php

$conn = mysqli_connect("localhost", "root", "", "all_ajax");

$order_query="SELECT * FROM `user_order`";
$order_result = mysqli_query($conn, $order_query);
while($order_fetch=mysqli_fetch_assoc($order_result)){
    echo "<td>or</td>"



?>