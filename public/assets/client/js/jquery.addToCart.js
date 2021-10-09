$(document).ready(function(){
    $(document).on('click','.fa-shopping-cart',function(){
        var id = $(this).data("id").trim();
        console.log(id);
    })
})
