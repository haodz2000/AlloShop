$(document).on('click','.shopping-cart',function(){
    var id = $(this).data('id');
    $.ajax({
        type :'Post',
        url :urlGetDataProduct,
        data:{id:id},
        dataType: 'Json',
        success: function(response){
            $('.order-form').removeClass('hidden');
            console.log(response);
            var product = response.product;
            var color = response.color;
            var size = response.size;
            var quantityStock = response.quantityStock;
            let form = createFormOrder(product,size,color,quantityStock);
            $('.order-form').html(form);
        },
        error: function(){
            console.log('error')
        }


    })
})
$(document).on('dblclick','html',function(){
    $('.order-form').addClass('hidden');
})
$(document).on('click','.order-form button.close',function(){
    $('.order-form').addClass('hidden')
})
function createFormOrder(product,size,color,quantityStock){

    var image = JSON.parse(product.url_image);
    var form = '<button class="close">X</button>\
        <h3 class="text-center">'+product.product_name+'</h1>\
            <div class="imgslide">\
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">\
                <ol class="carousel-indicators">\
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>\
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>\
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>\
                </ol>\
                <div class="carousel-inner" role="listbox">\
                    <div class="item active">\
                    <img src="/assets/storage/images/product/'+image[0]+'" alt="...">\
                    <div class="carousel-caption">...</div>\
                    </div>';
        $.each(image,function(index,val){
            if(index != 0)
            {
                form +='<div class="item">\
                            <img src="/assets/storage/images/product/'+val+'" alt="...">\
                            <div class="carousel-caption">...</div>\
                        </div>';
            }
        })
         form +='</div>\
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">\
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>\
                    <span class="sr-only">Previous</span>\
                </a>\
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">\
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>\
                    <span class="sr-only">Next</span>\
                </a>\
                </div>\
            </div>\
            <form class="Form-Add-To-Cart" method="post" action="">\
            <input type="hidden" id="idProduct" value="'+product.product_id+'">\
            <input type="hidden" id="skuProduct" name="sku" value="">\
            <strong>Select Color</strong>\
            <div style="margin: 0 auto" class="row">\
                <ul>';
        $.each(color,function(index,val){
            form += '<li type="button" data-value="'+val.color_id+'" class="color">'+val.color+'</li>';
        })
        form+='</ul>\
        </div>\
        <input type="hidden" id="color" name="color" value="">\
        <strong>Select Size</strong>\
        <div style="margin: 0 auto" class="row">\
            <ul>';
        $.each(size,function(index,val){
            form += '<li type="button" data-value="'+val.size_id+'" class="size">'+val.size+'</li>';
        })
        form +='</ul>\
        </div>\
        <input type="hidden" id="size" name="size" value="">\
        <strong style="color: red" id="stock">Kho:'+quantityStock+'</strong>\
        <br>\
        <strong>Quantity:</strong>\
        <input required="" style="border-radius: 5px;" type="number" name="quantity" min="1" value="1" id="quantity">\
        <button style="margin-top:10px " type="submit" class="btn btn-primary form-control">Add To Cart</button>\
        </form>';
    return form;
}
function getSku(){
        var id = $(".order-form #idProduct").val();
        var color = $(".order-form>Form input#color").val();
        var size = $(".order-form>Form input#size").val();
        if(color!='' && size !='' && id!='')
        {
            let url = urlProductDetail
            $.ajax({
                type: "Post",
                url: url,
                data:{
                    color:color,
                    size:size,
                    product_id:id
                },
                dataType:'JSON',
                success: function(data){
                    if(data!=0)
                    {
                        $(".order-form #stock").html('Kho: '+data.product.quantity +' sản phẩm');
                        $(".order-form #skuProduct").val(data.product.sku);
                    }
                    else
                    {
                        $(".order-form #stock").html('Kho: Hết hàng');
                        $(".order-form #skuProduct").val('');
                    }

                },
                error: function(){
                    console.log('error')
                }
            });
        }
}
$(document).on('click','.des-pro select',function(){
    let id = $(this).data('id');
    $.ajax({
        type :'Post',
        url :urlGetDataProduct,
        data:{id:id},
        dataType: 'Json',
        success: function(response){
            $('.order-form').removeClass('hidden');
            var product = response.product;
            var color = response.color;
            var size = response.size;
            var quantityStock = response.quantityStock;
            let form = createFormOrder(product,size,color,quantityStock);
            $('.order-form').html(form);
        },
        error: function(){
            console.log('error')
        }
    });
})
$(document).on('click','div.order-form>Form li.size',function(){
    $('div.order-form>Form li.size').removeClass('activeClick');
    $(this).addClass('activeClick');
    let value = $(this).data('value');
    $('div.order-form>Form input#size').val(value);
    getSku();
})
$(document).on('click','div.order-form>Form li.color',function(){
    $('div.order-form>Form li.color').removeClass('activeClick');
    $(this).addClass('activeClick');
    let value = $(this).data('value');
    $('div.order-form>Form input#color').val(value);
    getSku();
})

