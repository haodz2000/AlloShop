$(document).ready(function () {
    
    $(".delete").click(function (e) {
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
});