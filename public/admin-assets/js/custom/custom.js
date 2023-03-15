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

function add_more() {
    // alert('hello worldx')
    var html = ' <div class="card"> <div class="card-body"><div class="row">';
    html +=' <div class="col-4 mb-3"><label for="example-text-input" class="col-sm-6 col-form-label">RetailPrice</label><div class="col-sm-12"><input class="form-control" type="text"placeholder="Enter retail price" id="example-text-input"name="retail_price">@error("retail_price")<div class="text-danger">{{ $message }}</div>@enderror</div></div>';
    html+='<div class="col-4 mb-3"><label for="example-text-input" class="col-sm-6 col-form-label">Discount Price</label><div class="col-sm-12"><input class="form-control" type="text"placeholder="Enter store price(if any)" id="example-text-input"name="store_price">@error("store_price")<div class="text-danger">{{ $message }}</div>@enderror</div></div>';
    html+='<div class="col-4 mb-3"><label for="example-text-input" class="col-sm-6 col-form-label">Stock</label><div class="col-sm-12"><input class="form-control" type="text"placeholder="Enter store price" id="example-text-input"name="store_price">@error("store_price")<div class="text-danger">{{ $message }}</div>@enderror</div></div>';
    html += '<a name="" id="" class="btn btn-danger col-md-2 m-3" onclick="div_remove()" style="float:right;" href="#" role="button">Remove</a>';
    html += '</div></div></div> ';
    jQuery('#add_value').append(html);
}

// function div_remove(remove_id) {
//     jQuery('#product_attribute_' + remove_id).remove();
// }


// });


