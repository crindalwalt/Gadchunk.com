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
var loop_variable = 1;
function add_more(array) {
    console.log(array)
    // abc = jQuery('#attr_1').html();
    // console.log(abc)
    loop_variable++;
    var html = ' <div class="card" id="product_div_'+loop_variable+'"> <div class="card-body bg-soft"><div class="row">';
    array.forEach(element => {
        html +='   <div class="col-4 mb-3"><label class="control-label">'+element.attribute_name+' </label><select name="'+element.attribute_name+[]+'"class="form-control select2">';
        array_value.forEach(elem => {
           html+= '<option value="'+elem.id+'"class="d-flex justify-content-between ">'+elem.attribute_value+'<smallclass="badge badge-pill badge-dark rounded-pill">&nbsp;&nbsp;</small></option>';     
        });   
        html+='</select></div>';
    });
    html +=' <div class="col-4 mb-3"><label for="example-text-input" class="col-sm-6 col-form-label">RetailPrice</label><div class="col-sm-12"><input class="form-control" type="text"placeholder="Enter retail price" id="example-text-input"name="retail_price[]"></div></div>';
    html+='<div class="col-4 mb-3"><label for="example-text-input" class="col-sm-6 col-form-label">Discount Price</label><div class="col-sm-12"><input class="form-control" type="text"placeholder="Enter discount price(if any)" id="example-text-input"name="discount_price[]"></div></div>';
    html+='<div class="col-4 mb-3"><label for="example-text-input" class="col-sm-6 col-form-label">Stock</label><div class="col-sm-12"><input class="form-control" type="text"placeholder="Enter stock price" id="example-text-input"name="stock_price[]"></div></div>';
    html += '<button  type="button" class="btn btn-danger col-md-2 float-end m-4" onclick="div_remove('+loop_variable+')">Remove</button>';
    html += '</div></div></div> ';
    jQuery('#add_div').append(html);
}

function div_remove(remove_id) {
    jQuery('#product_div_' + remove_id).remove();
}


// });


