$(document).ready(function() {
    $(document).on('click','.deletePost',function(e) {
        e.preventDefault();
        let id = $(this).data('id');
        let token   = $('meta[name="csrf-token"]').attr('content');
            
      if(confirm('Are you sure you want to delete this post?')) {
        $.ajax({
                type: "DELETE",
                url: "/admin/post/" + id,
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function(response) {
                  $("#alert-success-post").removeClass('d-none');
                  $("#alert-success-post strong").html('Delete post is successfully!');
                  setTimeout(function() { 
                    $("#alert-success-post").addClass('d-none');
                  }, 3000);
                  $("#data_post").load(" #data_post");
                }
        });
      }  
    });
    $(document).on('click','.show-detail', function(e) {
      e.preventDefault();
      let id_post = $('.show-detail').data('id');
      let title = $('.show-detail').data('title');
      let author = $('.show-detail').data('author');
      let content = $('.show-detail').data('content');
      let url_image = $('.show-detail').data('image');
      let url_main = $('#data_post').data('public');
        
        $('#titleDetailPost').html('Title: '+title);
        $('#authorDetailPost h6').html('Author: '+author);
        $('#imageDetailPost img').attr('src',url_main+'/'+url_image);
        $('#contentDetailPost').html('<h6>Content: </h6>'+content);     
    });
});


