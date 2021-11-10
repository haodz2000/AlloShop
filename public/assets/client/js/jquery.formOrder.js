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
$(document).on('dblclick','.container',function(){
    $('.order-form').addClass('hidden');
})
$(document).on('click','.order-form button.close',function(){
    $('.order-form').addClass('hidden')
})
function createFormOrder(product,size,color,quantityStock){
    console.log(size);
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
                    <img src="/assets/client/images/product/'+product.url_image+'" alt="...">\
                    <div class="carousel-caption">...</div>\
                    </div>\
                    <div class="item">\
                    <img src="/assets/client/images/product/'+product.url_image+'" alt="...">\
                    <div class="carousel-caption">...</div>\
                    </div>\
                </div>\
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
            <select required class="form-control"  name="color" id="color"><option value="">Color</option>';
        $.each(color,function(index,val){
            form += '<option value="'+val.color_id+'">'+val.color+'</option>'
        })
        form+='</select>\
            <strong>Select Size</strong>\
            <select required class="form-control" name="size" id="size"><option value="">Size</option>';
        $.each(size,function(index,val){
            form += '<option value="'+val.size_id+'">'+val.size+'</option>';
        })
        form +='</select>\
            <strong id="stock">Kho: '+quantityStock+' sản phẩm</strong><br>\
            <strong>Quantity</strong>\
            <input required type="number" name="quantity" class="form-control" value="1" id="quantity">\
            <button type="submit" class="btn btn-primary form-control">Add To Cart</button>\
        </form>';
    return form;
}
$(document).on('change','.order-form select',function(){
    var id = $(".order-form #idProduct").val();
    var color = $(".order-form #color").val();
    var size = $(".order-form #size").val();
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
})
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
