$(document).ready(function () {
    $(document).on('click', '.delete-grid', function(e){
    // $(".delete").click(function () {
        e.preventDefault();
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        // var url = "{{route('products-grid', 'id')}}";
        // alert(id);
        $.ajax({
            type: "GET",
            url: "/admin/products-grid/destroy/" + id,
            data: {
                "id": id,
                "_token": token,
            },
            success: function (response) {
                // console.log("Ok");
                // window.location.reload();
                $("#product-list").load(" .product-list")
            }
        });
        // alert(id);
    });
    $(document).on('click', '.delete-list', function(e){
        // $(".delete").click(function () {
        e.preventDefault();
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        // alert(1);
        // var url = "{{route('products-grid')}}";
        if (confirm("Are you sure you want to delete this product?")) {
            $.ajax({
                type: "GET",
                url: "/admin/products-list/" + id,
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function (response) {
                    // console.log("Ok");
                    // window.location.reload();
                    $(".card-body").load(" .table-responsive")
                }
            });
        }
            
        // alert(id);
    });
    $(document).on('click', '.save', function(e){
        e.preventDefault();
        var order_id = $(this).data('id');
        var status = $('.status').val();
        var token = $("meta[name='csrf-token']").attr("content");
        // alert(status);
        $.ajax({
            type: "POST",
            url: "/admin/order/order-details/update-status/" + order_id,
            data: {
                "order_id": order_id,
                "status" : status,
                "_token": token,
            },
            success: function (response) {
                console.log(response);
                $(".card-body").load(" #card-body");
            }
        });
        // alert(id);
    });
    // $(document).on('click', '.add-new-product', function(e){
    //     e.preventDefault();
    //     var token = $("meta[name='csrf-token']").attr("content");
    //     let product_name = $('#product_name').val();
    //     let slug = $('#slug').val();
    //     let category_id = $('#category_id').val();
    //     let gender = $('#gender').val();
    //     let price = $('#price').val();
    //     let discount = $('#discount').val();
    //     let url_image = $('#url_image').val();
    //     let description = $('#description').val();
    //     let name = $(".add-new-product").val();

    //     $.ajax({
    //         type:"POST",
    //         url: "/admin/add-new-product/add",
    //         data:{
    //           "_token": token,
    //           product_name:product_name,
    //           slug:slug,
    //           category_id:category_id,
    //           gender:gender,
    //           price:price,
    //           discount:discount,
    //           url_image:url_image,
    //           description:description,
    //           add : name,
    //         },
    //         success:function(response){
    //           console.log(22222222222);
    //         },

    //         error : function(){
    //             console.log(1);
    //         }
    //     });
    // });

    // Change select category
        // $(document).on('change','.form-select-category', function(e) {
        //     e.preventDefault();
        //     let category_id = $(this).val();
        //     let token = $("meta[name='csrf-token']").attr("content");

        //     $.ajax({
        //         type: "GET",
        //         url: "/admin/products-list/select-category",
        //         data: {
        //             'category_id': category_id,
        //             "_token": token,
        //         },
        //         success: function (response) {
        //             $("#product-list").load(" #product-list");
        //         }
        //     });
        // });
        
    //Search
        $("#search").keyup(function(){ 
            $('.pagination').hide();
            _this = this; 
            $.each($("#myTable tbody tr"), function() { 
                if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1) 
                    $(this).hide();  
                else $(this).show(); 
            }); 
            if ($(_this).val() == "") {
                $('.pagination').show();  
            };
        }); 


});