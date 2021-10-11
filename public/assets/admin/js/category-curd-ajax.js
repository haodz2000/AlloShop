// {{-- AJAX ADD --}}  

    function addCategory() {
        var category_name = $('#add_name_category').val();
        var description = $('#add_description_category').val();
        let _url     = "/admin/category";
        let _token   = $('meta[name="csrf-token"]').attr('content');
       
        $.ajax({
            url: _url,
            type: "POST",
            data: {
              category_name: category_name,
              description: description,
              _token: _token
            },
            success: function(data) {
                $("#data_category").load(" #data_category");
                alert('Add category is success!');
                $('#add_name_category').val('');
                $('#add_description_category').val('');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Requires input of 2 fields!');
            }
        });
    }


// {{-- AJAX DELETE  --}}


  $(document).ready(function() {
      $(document).on('click','.deleteCategory',function(e) {
          e.preventDefault();
          let id = $(this).data('id');
          let token   = $('meta[name="csrf-token"]').attr('content');
              
        if(confirm('Are you sure you want to delete this category?')) {
          $.ajax({
                  type: "GET",
                  url: "/admin/category/delete/" + id,
                  data: {
                      "id": id,
                      "_token": token,
                  },
                  success: function(response) {
                    alert('Delete Category is Successfully!');
                    $("#data_category").load(" #data_category");
                  }
          });
        }  
      });
  });


// {{-- EDIT AJAX --}}

  $(document).ready(function() {
      var status = 0; // 0 la chua edit , 1 la trang thai edit
      $(document).on('click','.editCategory',function() {
          status = 1;
          let id = $(this).data('id');
          let nameInit = $(this).data('name');
          let descriptionInit = $(this).data('description');

          $('.card .card-header h6').html('Edit Product Category');
          $('.edit_name_category').val(nameInit);
          $('.edit_description_category').val(descriptionInit);
          $('.card .card-body form button').removeAttr('onclick');
          
      });
      $('.card .card-body form button').click(function() {    
        let id = $('.editCategory').data('id');          
        let name = $('.edit_name_category').val();
        let description = $('.edit_description_category').val();
        let _url     = `/admin/category/${id}`;
        let _token   = $('meta[name="csrf-token"]').attr('content');
        
        if (status === 1) {
             $.ajax({
                 url: _url,
                 type: "PATCH",
                 data: {
                   category_name: name,
                   description: description,
                   _token: _token,
                   id: id
                 },
                 success: function(data) {
                     status = 0;                  
                     $("#data_category").load(" #data_category");  
                     alert('Edit category is successfully!');  
                     $('.edit_name_category').val('');
                     $('.edit_description_category').val('');
                     $('.card .card-header h6').html('Add Product Category');
                     $('.card .card-body form button').attr('onclick','addCategory()');
                 },
                 error: function(jqXHR, textStatus, errorThrown) {
                     alert('Requires input of 2 fields!');
                 }
             });

        }
      });
  });
