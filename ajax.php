<?php
$action = $_REQUEST['action'];
if(!empty($action)){
    require_once("db/user.php");
    $obj = new user();
}
if($action == "adduser" && !empty($_POST)){
    $food_name = $_POST['food_name'];
    $food_des = $_POST['food_des'];
    $food_prize = $_POST['food_prize'];
    $food_img = $_FILES['food_img'];
    $imagename = "";
    if(!empty($food_img['name'])){
        $imagename = $obj->uploadPhoto($food_img);
        $foodData = [
            'food_name' => $food_name,
            'food_des' => $food_des,
            'food_prize' => $food_prize,
            'food_img' => $imagename,
        ];
    }
    else{
        $foodData = [
            'food_name' => $food_name,
            'food_des' => $food_des,
            'food_prize' => $food_prize,
        ];
    }
    $foodId = $obj->add($foodData);
    echo $foodId;
}
if($action == "getallusers"){
    $users = $obj->getRows();
    if(!empty($users)){
        $userList = $users;
    }
    else{
        $userList = [];
    }
    $userArr = array('players' => $userList);
    echo json_encode($userArr);
    exit();
}
?>