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
            alertify.set('notifier','position', 'top-right');
            alertify.notify('Product added in cart!', 'success', 4, function(){  console.log('dismissed'); });
            // Swal.fire({
            //     icon: "success",
            //     title: "Success!",
            //     text: "Product added in cart!",
            //     type: "success",
            //     timer: 2000,
            // });

        } else {
            alertify.set('notifier','position', 'top-right');
            alertify.notify('Product Already Added', 'warning', 4, function(){  console.log('dismissed'); });
            // Swal.fire({
            //     icon: "error",
            //     title: "Error",
            //     text: "Product Already Added",
            //     type: "error",
            //     timer: 2000,
            // });
        }
    })

});
// window.location.reload(true);


// Remove from cart

$(document).on('click', '#remove-product', function () {
    //  alert('enter');
    $("#" + $(this).data('productremove')).remove();
    setTimeout(function () {

        window.location.reload(true);
    }, 1000);
    $.get($(this).data('route'), function (res) {
        if (response.success) {
            alertify.set('notifier','position', 'top-right');
            alertify.notify('Product remove from cart', 'success', 4, function(){  console.log('dismissed'); });
            // Swal.fire({
            //     icon: "success",
            //     title: "Success!",
            //     text: "Product remove from cart!",
            //     type: "success",
            //     timer: 2000,
            // });

        } else {
            alertify.set('notifier','position', 'top-right');
            alertify.notify('Something went wrong', 'error', 4, function(){  console.log('dismissed'); });
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
            alertify.set('notifier','position', 'top-right');
            alertify.notify('Product added in wishlist', 'error', 4, function(){  console.log('dismissed'); });
            // Swal.fire({
            //     icon: "success",
            //     title: "Success!",
            //     text: "Product added in wishlist!",
            //     type: "success",
            //     timer: 3000,
            // });
        } else {
            alertify.set('notifier','position', 'top-right');
            alertify.notify('Something went wrong', 'error', 4, function(){  console.log('dismissed'); });
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

// Change Quantity

$(document).on('change', '.quantity', function () {
    var quantity = $(this).val();
    // setTimeout(function () {
    //     window.location.reload(true);
    // }, 1000);
    console.log(quantity);
    var url = $(this).data('route') + "/" + quantity;
    $.get(url, function (res) {
        $('.total_price').html(res.totalPrice);
        $('.sub_total').html(res.sub_total);
        $('.discount').html(res.discount);
    })
})

// product filters

var arr = [];
$(document).on("click", '.filter', function () {
    var val = $(this).val();
    if ($(this).data('type') == val) {
        if ($(this).is(":checked")) {
            arr.push($(this).val());
        } else {
            const index = arr.indexOf(val);
            if (index > -1) {
                arr.splice(index, 1);
            }
        }
    }
    $.ajax({
        type: "GET",
        url: '/filter',
        data: {
            "result": arr,
        },
        success: function (data) {
            // $("#result").html(data);
            console.log(data);
        },
        error: function (data) {
            // alert('error');
            // Swal.fire({
            //     icon: "error",
            //     title: "Error!",
            //     text: "Something went wrong!",
            //     type: "error",
            //     timer: 3000,
            // });
            alertify.set('notifier','position', 'top-right');
            alertify.notify('Something went wrong', 'error', 4, function(){  console.log('dismissed'); });
        }
    });

});

// search category value
$(document).on("change", '.search_category', function () {
    var val = $(this).val();
     $("#search").val(val);
});

// 