$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function changeCart(data){
    var cart ='';
    cart = '<div class="hove"><i class="fa fa-shopping-cart"></i><p class="be"><span>'+data.totalQuantity+'</span></p><div class="cart-list"><ul class="list">';
    $.each(data.products, function (index,val){
        cart +=' <li>\
                                <a href="#" title="" class="cart-product-image floatleft"><img style="width: 100px" src="/store/images/product/'+val.productInfo.image+'" alt="Product"></a>\
                            <div class="text">\
                                <a class="close" href="#" title="close"><i class="fa fa-times-circle"></i></a>\
                                <h4>'+val.productInfo.name+'</h4>\
                                <div class="product-price">\
                                    <div class="price">'+ Intl.NumberFormat('en-US', {style : 'currency', currency : 'USD'}).format(val.price)+'</div>\
                                    <div class="price-old">Quantity: <strong>'+ val.quantity+'</strong></div>\
                                </div>\
                            </div>\
                        </li>';
    })
    cart += '</ul>\
                            <div class="total"><span class="left">Total:</span> <span class="right">$'+data.totalPrice+'</span></div>\
                    <div class="bottom">\
                    <a class="btn4" href="#" title="viewcart">View Cart</a>\
                    <a class="btn4" href="#" title="checkout">Check out</a>\
                    </div>\
                    </div>';
    return cart;
}
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
                console.log('error')
            }
        })
    };


})

