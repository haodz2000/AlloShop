$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).on('click','a.addCart',function(){
    var id = parseInt($(this).data("id"));
    const url = '/addCart/'+id;
    $.ajax({
        type: "POST",
        url : url,
        dataType:"JSON",
        success: function(data){
            console.log(data[0].products);
            alert(data.success);
        },
        error: function(){
            console.log("error");
        }
    })
})
