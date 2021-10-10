@extends('admin.index')
@section('title','Category')

@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3" id="category_index">
      <div class="breadcrumb-title pe-3">eCommerce</div>
      <div class="ps-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 p-0">
            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Categories</li>
          </ol>
        </nav>
      </div>
      <div class="ms-auto">
        <div class="btn-group">
          <button type="button" class="btn btn-primary">Settings</button>
          <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
            <a class="dropdown-item" href="javascript:;">Another action</a>
            <a class="dropdown-item" href="javascript:;">Something else here</a>
            <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
          </div>
        </div>
      </div>
    </div>
    <!--end breadcrumb-->

      <div class="card">
        <div class="card-header py-3">
          <h6 class="mb-0">Add Product Category</h6>
        </div>
        <div class="card-body">
           <div class="row">
             <div class="col-12 col-lg-4 d-flex">
               <div class="card border shadow-none w-100">
                 <div class="card-body">
                   <form action="" id="add_category" class="row g-3">
                     <div class="col-12">
                       <label class="form-label">Name</label>
                       <input type="text" id="add_name_category" name="add_name_category edit_name_category" class="edit_name_category form-control" placeholder="Category name">
                     </div>
                      @error('category_name')
                        <div class='alert alert-danger' role='alert'>
                          {{ $message }}
                        </div>
                      @enderror
                      <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea name="add_description_category edit_description_category" id="add_description_category" class="edit_description_category form-control" rows="3" cols="3" placeholder="Product Description"></textarea>
                      </div>
                      <div class="col-12">
                        <div class="d-grid">
                          <button onclick="addCategory()" type="button" class="btn btn-primary">Save</button>
                        </div>
                      </div>
                      @error('description')
                        <div class='alert alert-danger' role='alert'>
                          {{ $message }}
                        </div>
                      @enderror
                   </form>
                 </div>
               </div>
             </div>
             <div class="col-12 col-lg-8 d-flex">
              <div class="card border shadow-none w-100">
                <div class="card-body">
                  <div class="table-responsive-md" >
                     <table class="table align-middle" id="data_category" >
                       <thead class="table-light">
                         <tr>
                           <th><input class="form-check-input" type="checkbox"></th>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Description</th>
                           <th>Action</th>
                         </tr>
                       </thead>
                       <tbody>
                         @foreach($listCategory as $category)
                         <tr id="category_{{$category->category_id}}">
                           <td><input class="form-check-input" type="checkbox"></td>
                           <td>{{$category->category_id}}</td>
                           <td>{{$category->category_name}}</td>
                           <td>{{$category->description}}</td>
                           <td>
                            <div class="d-flex align-items-center gap-3 fs-6">
                              <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                              <a href="javascript:;" data-id="{{$category->category_id}}" data-name="{{$category->category_name}}" data-description="{{$category->description}}" data-id="{{$category->category_id}}" class="editCategory text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" data-id="{{$category->category_id}}" class="deleteCategory text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></a>
                            </div>
                           </td>
                         </tr>
                         @endforeach
                       </tbody>
                     </table>
                  </div>
                  <nav class="float-end mt-0" aria-label="Page navigation">
                    {{$listCategory->links()}}
                  </nav>
                </div>
              </div>
            </div>
           </div><!--end row-->
        </div>
      </div>


      
  {{-- AJAX --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  {{-- AJAX ADD --}}  
    <script type="text/javascript">
        function addCategory() {
            var category_name = $('#add_name_category').val();
            var description = $('#add_description_category').val();
            let _url     = "{{route('category.store')}}";
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
                    alert('Lỗi');
                }
            });
        }
    </script>

  {{-- AJAX DELETE  --}}

    <script type="text/javascript">
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
    </script>

  {{-- EDIT AJAX --}}
    <script>
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
                         alert('Xảy ra Lỗi !');
                     }
                 });

            }
          });
      });
    </script>
  
      
@endsection