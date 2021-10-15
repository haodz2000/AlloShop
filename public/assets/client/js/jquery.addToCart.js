
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on('change',"input#quantity",function(){
    var quantity = parseInt($("#quantity").val());
    quantity = (isNaN(quantity)&&quantity>0)?quantity:1;
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
                $("#quantity-store").html(data.product.quantity);
                $("input#sku").val(data.product.sku);
            },
            error: function(){
                console.log("Error")
            }
        })
    }else{
        $("#quantity-store").empty();
        $("input#sku").val('');
    }


})
$(document).on('submit',"Form.Form-Add-To-Cart",function(e){

    e.preventDefault();
    var quantity = parseInt($("#quantity").val());
    var id = parseInt($("#addItemCart").data('id'));
    const url = '/addCart/'+id;
    console.log(quantity);
    if( quantity>=0){
        $.ajax({
            url: url,
            method: "POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $(".cart").load(" .cart");
                console.log(data);
        },
            error: function (){
            console.log('error');
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
            },
            error: function(){
                console.log('errors')
            }
        })
    }
})

