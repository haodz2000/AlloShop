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
                $("#myTable").load(" #myTable");
                $("#alert-success-category").removeClass('d-none');
                $("#alert-success-category strong").html('Add category is successfully!');
                setTimeout(function() { 
                  $("#alert-success-category").addClass('d-none');
                }, 3000);
                $("#alert-success-category")
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
                    $("#alert-success-category").removeClass('d-none');
                    $("#alert-success-category strong").html('Delete category is successfully!');
                    setTimeout(function() { 
                      $("#alert-success-category").addClass('d-none');
                    }, 3000);
                    $("#myTable").load(" #myTable");
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

          $('.card .card-header h5').html('Edit Product Category');
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
                     $("#myTable").load(" #myTable");  
                     $("#alert-success-category").removeClass('d-none');
                     $("#alert-success-category strong").html('Edit category is successfully!');
                     setTimeout(function() { 
                       $("#alert-success-category").addClass('d-none');
                     }, 3000); 
                     $('.edit_name_category').val('');
                     $('.edit_description_category').val('');
                     $('.card .card-header h5').html('Add Product Category');
                     $('.card .card-body form button').attr('onclick','addCategory()');
                 },
                 error: function(jqXHR, textStatus, errorThrown) {
                     alert('Requires input of 2 fields!');
                 }
             });

        }
      });
  });
