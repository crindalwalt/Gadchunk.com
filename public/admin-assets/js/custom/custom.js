// // search script
// $(document).ready(function () {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });



// Change Attibute with category

// $(document).on('change', '.category_attr', function () {
//     var value = $(this).val();
//     //  alert(value);
//     $.ajax({
//         type: "post",
//         url: '/admin/cat_attribute',
//         data: 'id=' + value,
//         success: function (data) {
//             $("#cat_attribute").html(data);
//         }
//     });
// })
// var loop_count = 1;
// function add_more(add_div) {
//     loop_count++;
//     var html = ' <div class="card" id="product_attribute_' + loop_count + '"> <div class="card-body"><div class="row">';
//     html += '<a name="" id="" class="btn btn-danger" onclick="div_remove(' + loop_count + ')" style="float:right;" href="#" role="button">Remove</a>';
//     html += '</div></div></div> ';
//     jQuery('#product_attribute_' + add_div).append(html);
// }

// function div_remove(remove_id) {
//     jQuery('#product_attribute_' + remove_id).remove();
// }


// });


