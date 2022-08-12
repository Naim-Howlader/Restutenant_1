$(document).ready(function(){
    $(document).on('submit','#final',function(e){
        e.preventDefault();
        console.log("hi");
        var $form = $(this).closest(".form-submit");
        var food_name = $form.find(".name").val();
        var food_prize = $form.find("#prize").val();
        console.log(food_name);
        console.log(food_prize);
        $.ajax({
            url : "manage_cart.php",
            method : "post",
            data : {food_name:food_name, food_prize:food_prize},
            success : function(response){
                $("#message").html(response);
                load_cart();
            },
        });
    });
    load_cart();
    function load_cart(){
        $.ajax({
            url : "manage_cart.php",
            method : "get",
            data : {cartItem:"cart_item"},
            success : function(response){
                $("#cart_num").html(response);
                $("#cart_num_second").html(response);
            },
        });
    };
});