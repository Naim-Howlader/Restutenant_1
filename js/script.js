$(document).ready(function(){
    function getusersrow(user){
        var userData = "";
        userData += `<tr>
                    <th scope="row">
                    <img src="uploads/${user.food_img} " width="100px" height="100px">
                    </th>
                    <td>${user.food_name}</td>
                    <td>${user.food_des}</td>
                    <td>${user.food_prize}</td>
                    <td>
                        <a href="#" class="me-3 profile" data-bs-toggle="modal" data-bs-target="#userViewModal" title=" View Profile" data-id="${user.id}"><i class="fas fa-eye text-success"></i></a>
                        <a href="#" class="me-3 edituser" title=" Edit" data-bs-toggle="modal" data-bs-target="#add-edit-modal" data-id="${user.id}"><i class="fas fa-edit text-info"></i></a>
                        <a href="#" class="me-3 deleteuser" title=" Delete" data-id="${user.id}"><i class="fas fa-trash-alt text-danger"></i></a>
                        </td>
                    </tr>`;
            return userData;
        
    }
    function frontuserrow(front){
        var frontData = "";
        frontData += `<div class=" col-md-3 all_info">
                        <form action='manage_cart.php' method='post'>
                        <div class="d-flex">
                        <img src="uploads/${front.food_img} " width="200px" height="200px" class="center">
                        </div>
                        <h3>${front.food_name}</h3>
                        <p>${front.food_des}</p>
                        <div class="d-flex align-items-center justify-content-between">
                        <h4 class="prize">${front.food_prize}</h4>
                        <button type="submit" class="btn btn-outline-danger" name="Add_To_Cart">Add to cart</button>
                        <input type="hidden" name="Item_Name" value="${front.food_name}">
                        <input type="hidden" name="Prize" value="${front.food_prize}">
                        </div>
                        </form>
                    </div>`
            return frontData;
    }
    function getUsers(){
        $.ajax({
            url : "/ajax_class/Restutenant_1/ajax.php",
            method : "get",
            dataType : "json",
            data : {action:"getallusers"},
            success : function(row){
                var userList = "";
                var frontList = "";
                $.each(row.players,function(index,user){
                    userList += getusersrow(user);
                    frontList += frontuserrow(user);
                });
                $("#usertable tbody").html(userList);
                $("#example").html(frontList);
            },
            error : function(request, error){
                console.log(arguments);
                console.log("Error:"+error);
            },
        });
    }
    getUsers();
    $(document).on('submit','#addform',function(e){
        //console.log("working");
        e.preventDefault();
        $.ajax({
            url : "/ajax_class/Restutenant_1/ajax.php",
            method : "post",
            dataType : "json",
            processData : false,
            contentType : false,
            data : new FormData(this),
            beforeSend : function(){
                console.log("Wait...");
            },
            success : function(response){
                console.log(response);
                if(response){
                    $("#add-edit-modal").modal("hide");
                    $("#addform")[0].reset();
                    getUsers();
                }
            },
            error : function(request, error){
                console.log(arguments);
                console.log("Error : "+error);
            },
        });
    });
    getUsers();
    $("#live_search").keyup(function(){
        var input = $(this).val();
        //alert(input);
        //if(input != ""){
            $.ajax({
                url : "livesearch.php",
                method : "post",
                data:{input:input},
                success : function(data){
                    $("#usertable").html(data);
                },
                error : function(request, error){
                    console.log(arguments);
                    console.log("Error:"+error);
                },
            });
        //}
    });
    $("#live_search_food").keyup(function(){
        var food = $(this).val();
        //alert(input);
        $.ajax({
            url : "livesearch_food.php",
            method : "post",
            data :{input:food},
            success : function(data){
                $("#example").html(data);
            },
            error : function(request, error){
                console.log(arguments);
                console.log("Error:"+error);
            },
        });
    });
    AOS.init({
		duration : 1500
	});
    $('html').smoothScroll();
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
});