$(document).ready(function () {
    $(document).on('click', '.delete-grid', function(e){
    // $(".delete").click(function () {
        e.preventDefault();
        var id = $(this).data("id");
        var token = $("meta[name='csrf-token']").attr("content");
        // var url = "{{route('products-grid')}}";
        $.ajax({
            type: "GET",
            url: "/admin/products-grid/" + id,
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
    $(document).ready(function () {
        $(document).on('click', '.delete-banner', function(e){
        //   alert(1);
        // $(".delete").click(function () {
            e.preventDefault();
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            // var url = "{{route('products-grid')}}";
            $.ajax({
                type: "GET",
                url: "/admin/banner/" + id,
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function (response) {
                    // console.log("Ok");
                    // window.location.reload();
                    $("#banner-list").load(" .banner-list")
                }
            });
            // alert(id);
          });
        });
});