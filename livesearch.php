<?php

include("database.php");
if(isset($_POST["input"])){
    $input = $_POST["input"];
    //echo $input;
    $query = "SELECT * FROM usertable_5 WHERE food_name LIKE '{$input}%'";
    $result = mysqli_query($con, $query);
    if(mysqli_num_rows($result) > 0){?>
        <div class="col-md-12">
    <table class="table" id="usertable">
        <thead class="table-dark">
           <tr>
           <th scope="col">Id</th>
            <th scope="col">Food Image</th>
            <th scope="col">Food Name</th>
            <th scope="col">Food Description</th>
            <th scope="col">Food Prize</th>
            <th scope="col">Action</th>
           </tr>
        </thead>
        <tbody>
           <?php
            while($row = mysqli_fetch_assoc($result)){
                $id = $row["id"];
                $food_img = '<img src="uploads/'.($row["food_img"]).' " width="100px" height="100px">';
                $food_name = $row["food_name"];
                $food_des = $row["food_des"];
                $food_prize = $row["food_prize"];
           ?>
           <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $food_img; ?></td>
            <td><?php echo $food_name; ?></td>
            <td><?php echo $food_des; ?></td>
            <td><?php echo $food_prize; ?></td>
            <td>
            <a href="#" class="me-3 profile" data-bs-toggle="modal" data-bs-target="#userViewModal" title=" View Profile"><i class="fas fa-eye text-success"></i></a>
			<a href="#" class="me-3 edituser" title=" Edit" data-bs-toggle="modal" data-bs-target="#add-edit-modal"><i class="fas fa-edit text-info"></i></a>
			<a href="#" class="me-3 deleteuser" title=" Delete"><i class="fas fa-trash-alt text-danger"></i></a><td>
                
           </tr>
           <?php } ?>
        </tbody>
    </table>
</div>
<?php } ?>
<?php
    }

?>
