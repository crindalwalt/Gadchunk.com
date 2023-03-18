// search script
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
   
    // product inventory variation & its value
    $(document).on("change", '#variation', function () {
        var val = $(this).val();
        $.ajax({
            type: "post",
            url: '/admin/var_val',
            data: 'id='+val,
            success: function (data) {
                $("#variation_value").html(data);
            }
        });
    });

  
    
});



