$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on('change',"input#quantity",function(){
    var quantity = parseInt($("#quantity").val());
    quantity = (!isNaN(quantity)&&quantity>0)?quantity:1;
    $("#quantity").val(quantity);
})
$(document).on('change','select#size',function(){
    var color = $("select#color").val();
    var size = $("select#size").val();
    if(size != '')
    {
        var product_id = $(this).data('id');
        const url = '/products/detail'
        $.ajax({
            type: "POST",
            url : url,
            data:{
                color:color,
                size:size,
                product_id:product_id
            },
            dataType: "JSON",
            success: function(data){
                if(data!=0)
                {
                    $("#quantity-store").html(data.product.quantity);
                    $("input#sku").val(data.product.sku);
                }else{
                    $("#quantity-store").html('Hết hàng');
                    $("#addItemCart").addClass('disable');
                }

            },
            error: function(){
                console.log('error');
            }
        })
    }else{
        $("#quantity-store").empty();
        $("input#sku").val('');
    }


})
$(document).on('submit',"Form.Form-Add-To-Cart",function(e){
    quantity = parseInt($('.order-form>Form input#quantity').val());
    e.preventDefault();
    if( quantity>=0){
        $.ajax({
            url: urlAddToCart,
            method: "POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $(".cart").load(" .cart");
                $("#shiping").load(" #shiping");
                $(".order-form").addClass('hidden');
                alertify.success('Thêm mới thành công');
        },
            error: function (){
                alertify.error('Thêm mới thất bại');
        }
        })
    }
})
$(document).on('click','.close-item',function(){
    var sku = $(this).data('sku');
    if(sku = sku?sku:null){
        const url = '/deleteItemCart';
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'JSON',
            data:{
                sku:sku
            },
            success: function(data) {
                $(".cart").load(" .cart");
                $("#shiping").load(" #shiping");
                alertify.success('Xóa thành công');
            },
            error: function(){
                alertify.error('Xóa thất bại');
            }
        })
    }
})
$(document).on('change','input.quantity_order',function(){
    let quantity = parseInt($(this).val())>0?parseInt($(this).val()):1;
    $(this).val(quantity);
    let sku = $(this).data("sku");
    if(isNaN(sku))
    {
        const url = '/updateCart';
        $.ajax({
            type: "POST",
            url: url,
            dataType:"JSON",
            data:
                {
                    quantity:quantity,
                    sku:sku
                },
            success: function(response){
                $(".cart").load(" .cart");
                $("#shiping").load(" #shiping");
                alertify.success('Cập nhật thành công');
            },
            error: function(){
                alertify.error('Cập nhật thất bại');
            }
        })
    }
    else{
        alert("Khong tim thay san pham")
    }
})

