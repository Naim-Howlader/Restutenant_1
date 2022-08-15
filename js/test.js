$(document).ready(function(){
    $(document).on('submit','#final',function(e){
        e.preventDefault();
        //console.log("hi");
        var $form = $(this).closest(".form-submit");
        var food_name = $form.find(".name").val();
        var food_prize = $form.find("#prize").val();
        var food_img = $form.find("#img_url").val();
        //console.log(food_name);
        //console.log(food_prize);
        $.ajax({
            url : "manage_cart.php",
            method : "post",
            data : {food_name:food_name, food_prize:food_prize, food_img:food_img},
            success : function(response){
                console.log(response);
                if(response){
                    Swal.fire({
                        position: 'top-midded',
                        icon: 'success',
                        title: 'Your food added to cart',
                        showConfirmButton: false,
                        timer: 1500
                      })
                }
                
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
    $(document).on('submit','#remove_cart',function(e){
        e.preventDefault();
        var remove = $("#remove_item").val();
        //console.log(item);
        $.ajax({
            url : "manage_cart.php",
            method : "post",
            data : {remove:remove},
            success : function(response){
                if(response){
                    setTimeout(function(){
                        window.location.reload(1);
                     }, 1200);
                    Swal.fire({
                        position: 'top-midded',
                        icon: 'success',
                        title: 'Food removed from cart',
                        showConfirmButton: false,
                        timer: 1200
                      })
                }
            }
        })
       
    })
});