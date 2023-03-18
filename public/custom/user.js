// // search script
// $(document).ready(function () {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });


//     // Add to cart
$(".add-cart").click(function () {
    var route = $(this).data('route');
    $.get(route, function (response) {
        $("#cart-count").html(response.count);
        if (response.success) {
            Swal.fire({
                icon: "success",
                title: "Success!",
                text: "Product added in cart!",
                type: "success",
                timer: 2000,
                });
                
        }else{
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Product Already Added",
                type: "error",
                timer: 2000,
                });
        }
    })

});

 // Remove from cart

 $(document).on('click', '#remove-product', function () {
    //  alert('enter');
    $("#"+$(this).data('productremove')).remove();
    setTimeout(function(){
        window.location.reload(true);
    },1000);
        $.get($(this).data('route') , function(res){
            if (response.success) {
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "Product remove from cart!",
                    type: "success",
                    timer: 2000,
                    });
                    
            }else{
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: "Something went wrong",
                    type: "error",
                    timer: 2000,
                    });
            }
        })
        
})

  // Add in wishlist
$(".add-wishlist").click(function () {
    var route = $(this).data('route');
    // alert(route);
    $.get(route, function (response) {
        if (response == 1) {
            $("#wishlist-count").html(response.count);
            Swal.fire({
                icon: "success",
                title: "Success!",
                text: "Product added in wishlist!",
                type: "success",
                timer: 3000,
                });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Not Found...',
                text: 'Something went wrong!',
                });
        }
    })

});


// Remove Wishlist
$(document).on('click', '.wishremove', function () {
    item = $(this).data('item');
    $.get($(this).data('route'), function (res) {
        $("#" + item).remove();
        Swal.fire({
            icon: "success",
            title: "Success!",
            text: "Product remove from wishlist!",
            type: "success",
            timer: 3000,
            });
    })
})

// change quantity
 // Change Quantity

 $(document).on('change' , '.quantity' , function(){
    var quantity = $(this).val();
    console.log(quantity);
    var url = $(this).data('route')+"/"+quantity;
    $.get(url , function(res){
        $('.total_price').html(res.totalPrice);
    })
})


// });


